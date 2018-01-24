<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Http\ViewComposers\AdsComposer;
use App\Http\ViewComposers\PostsComposer;

class HomeController extends Controller
{
    /**
     * 网站首页
     */
    public function index()
    {
        view()->composer(['home.index'], AdsComposer::class); // 页面图片
        view()->composer(['home.index'], PostsComposer::class); // 页面文章列表

        return view('home.index');
    }
}
