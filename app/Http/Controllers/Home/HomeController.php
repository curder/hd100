<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Http\ViewComposers\AdsComposer;

class HomeController extends Controller
{
    /**
     * 网站首页
     */
    public function index()
    {
        view()->composer(['home.index'], AdsComposer::class); // 页面图片

        return view('home.index');
    }
}
