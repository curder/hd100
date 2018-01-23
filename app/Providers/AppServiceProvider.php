<?php

namespace App\Providers;

use App\Http\ViewComposers\AdsComposer;
use App\Http\ViewComposers\LinksComposer;
use Encore\Admin\Config\Config;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Config::load();
        \Carbon\Carbon::setLocale('zh');

        view()->composer('*', LinksComposer::class); // 页面链接
        view()->composer('*', AdsComposer::class); // 页面图片
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
