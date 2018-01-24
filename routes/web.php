<?php

use Illuminate\Routing\Router;

Route::group([
    'namespace' => 'Home',
    'middleware' => ['web'],
    'as' => 'home.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('index');
    $router->get('/news-{category}', 'PostsController@index')->name('posts.index')->where('category', '\d+');
    $router->get('news-{year}-{post}', 'PostsController@show')->name('posts.show');
});
