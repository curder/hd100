<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * 网站首页
     */
    public function index()
    {
        return view('home.index');
    }
}
