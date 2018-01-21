<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix' => config('admin.route.prefix'),
    'namespace' => config('admin.route.namespace'),
    'middleware' => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');

    $router->resources([

        'links' => LinksController::class, // 文字链管理
        'ads' => AdsController::class, // 广告管理
        'tags' => TagsController::class, // 标签管理
        'posts'=>PostsController::class, // 文章管理
    ]);

    $router->post('posts/restore', 'PostsController@restore'); // 恢复回收站中的文章
});

