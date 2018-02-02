<?php

namespace App\Http\ViewComposers;

use App\Models\Ad;
use Illuminate\View\View;

class AdsComposer {
	protected $index_banners;
	protected $case_banners;
	protected $honor_banners;


	public function __construct() {
		$this->index_banners = $this->getAds( Ad::$types[0] );
		$this->case_banners  = $this->getAds( Ad::$types[1] );
		$this->honor_banners = $this->getAds( Ad::$types[2] );
	}

	public function compose( View $view ) {
		$view->with( 'index_banners', $this->index_banners ); // 顶部大banner
		$view->with( 'case_banners', $this->case_banners ); // 成功案例
		$view->with( 'honor_banners', $this->honor_banners ); // 资质荣誉
	}

	protected function getAds( $type ) {
		$res = Ad::getAllAds()->groupBy( 'type' );

		return $res[ $type ];
	}
}
