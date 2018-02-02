<?php

namespace App\Http\Controllers\Home;

use App\Models\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller {
	/**
	 * 练习我们
	 */
	public function concat( $city = 'beijing' ) {
		$cities = json_decode( config( 'concat_cities' ), true );
		$city   = json_decode( config( 'concat_' . $city ), true );
		if ( ! $city ) {
			redirect( route( 'home.index' ) );
		}

		return view( 'home.pages.concat', compact( 'cities', 'city' ) );
	}

	public function show( Page $page ) {

		$page->body = preg_replace( '/<p><\/p>/', '', $page->body ); // 去掉空p标签

		$view = $page->customize_template ?? 'home.pages.' . $page->slug; // 如果数据库中存在自定义的模板或者模板文件夹存在对应的模板
		if ( view()->exists( $view ) ) {
			return view( $view, compact( 'page' ) );
		}

		return view( 'home.pages.show', compact( 'page' ) );
	}
}
