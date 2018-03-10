<?php

use Illuminate\Routing\Router;

Route::group( [
	'namespace'  => 'Home',
	'middleware' => [ 'web' ],
	'as'         => 'home.',
], function ( Router $router ) {

	$router->get( '/', 'HomeController@index' )->name( 'index' );
	$router->get( 'channels-{category}.html', 'PostsController@index' )->name( 'posts.index' );
	$router->get( 'news-{post}.html', 'PostsController@show' )->name( 'posts.show' );
	$router->get( 'experts.html', 'ExpertsController@index' )->name( 'experts.index' );
	$router->get( 'experts-{expert}.html', 'ExpertsController@show' )->name( 'experts.show' );

	$router->get( 'pages-{page}.html', 'PagesController@show' )->name( 'pages.show' ); // 单页面管理
	$router->get( 'concat-{city?}.html', 'PagesController@concat' )->name( 'pages.concat' );

} );
