<?php

namespace App\Models;

use App\Observers\LinkObserver;
use Encore\Admin\Traits\AdminBuilder;
use Encore\Admin\Traits\ModelTree;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Cache;

class Link extends Model {
	use SoftDeletes, ModelTree, AdminBuilder;

	protected $appends = [
		'logo_url'
	];

	public static function boot() {
		parent::boot();
		static::observe( new LinkObserver );
	}


	public function getLogoUrlAttribute() {
		$path = $this->logo;
		if ( url()->isValidUrl( $path ) ) {
			$src = $path;
		} else {
			$src = \Storage::disk( config( 'admin.upload.disk' ) )->url( $path );
		}

		return $src;
	}

	public static function getAllLinks() {
		return Cache::remember( 'links:list', 24 * 60, function () {
			return Link::all()->toArray();
		} );
	}
}
