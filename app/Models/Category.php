<?php

namespace App\Models;

use Encore\Admin\Traits\AdminBuilder;
use Encore\Admin\Traits\ModelTree;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Category
 *
 * @package App\Models
 */
class Category extends Model {
	use SoftDeletes, ModelTree, AdminBuilder;

	/**
	 * @return string
	 */
	public function getRouteKeyName() {
		return 'uri';
	}

	public function getCategoryUrlAttribute() {
		return route( 'home.posts.index', $this );
	}

	public function posts() {
		return $this->hasMany( Post::class );
	}

	/**
	 * @return mixed|string
	 */
	public function getCoverUrlAttribute() {
		$path = $this->cover;

		if ( ! $path ) {
			return config( 'app.url' ) . config( 'category_default_cover' );
		}
		if ( url()->isValidUrl( $path ) ) {
			$src = $path;
		} else {
			$src = \Storage::disk( config( 'admin.upload.disk' ) )->url( $path );
		}

		return $src;
	}
}
