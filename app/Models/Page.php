<?php

namespace App\Models;

use App\Observers\SlugObserver;
use Encore\Admin\Traits\AdminBuilder;
use Encore\Admin\Traits\ModelTree;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Page
 *
 * @package App\Models
 */
class Page extends Model {
	use SoftDeletes, ModelTree, AdminBuilder;

	/**
	 * 默认的路由标识
	 *
	 * @return string
	 */
	public function getRouteKeyName() {
		return 'slug';
	}

	/**
	 * @return mixed|string
	 */
	public function getCoverUrlAttribute() {
		$path = $this->cover;

		if ( ! $path ) {
			return config( 'app.url' ) . config( 'page_default_cover' );
		}
		if ( url()->isValidUrl( $path ) ) {
			$src = $path;
		} else {
			$src = \Storage::disk( config( 'admin.upload.disk' ) )->url( $path );
		}

		return $src;
	}

	protected static function boot() {
//        parent::boot();

		static::saving( function ( Model $model ) {
			$parentColumn = $model->getParentColumn();

			if ( request()->has( $parentColumn ) && request()->input( $parentColumn ) == $model->getKey() ) {
				throw new \Exception( trans( 'admin.parent_select_error' ) );
			}

			if ( request()->has( '_order' ) ) {
				$order = request()->input( '_order' );
				request()->offsetUnset( '_order' );

				static::tree()->saveOrder( $order );

				return false;
			}

			// 生成标签名称
			if ( ! $model->slug && $model->title ) {
				$slug = app( 'translug' )->translug( $model->title );
				if ( $count = self::where( 'slug', $slug )->count() ) {
					if ( $count ) {
						$slug = "$slug-$count";
					}
				}
				$model->slug = $slug;
				$model->save();
			}
		} );
	}

}
