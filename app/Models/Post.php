<?php

namespace App\Models;

use App\Observers\SlugObserver;
use Encore\Admin\Traits\AdminBuilder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;

class Post extends Model {
	use SoftDeletes, AdminBuilder, SlugObserver;

	protected $appends = [
		'cover_url'
	];

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
	 */
	public function tags() {
		return $this->morphToMany( Tag::class, 'taggable', 'taggables' )
		            ->withTimestamps();
	}

	/**
	 * @return mixed|string
	 */
	public function getCoverUrlAttribute() {
		$path = $this->cover;

		if ( ! $path ) {
			return config( 'app.url' ) . config( 'post_default_cover' );
		}
		if ( url()->isValidUrl( $path ) ) {
			$src = $path;
		} else {
			$src = \Storage::disk( config( 'admin.upload.disk' ) )->url( $path );
		}

		return $src;
	}

	public function category() {
		return $this->belongsTo( Category::class );
	}

	/**
	 * @return string
	 */
	public function getPostUrlAttribute() {
		$year = $this->created_at->year;

		return route( 'home.posts.show', [ $year, $this ] );
	}
}
