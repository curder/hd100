<?php

use Illuminate\Routing\Router;

Route::group( [
	'namespace'  => 'Home',
	'middleware' => [ 'web' ],
	'as'         => 'home.',
], function ( Router $router ) {

	$router->get( '/', 'HomeController@index' )->name( 'index' );
	$router->get( 'channels-{category}', 'PostsController@index' )->name( 'posts.index' );
	$router->get( 'news-{post}', 'PostsController@show' )->name( 'posts.show' );
	$router->get( 'experts', 'ExpertsController@index' )->name( 'experts.index' );
	$router->get( 'experts-{expert}', 'ExpertsController@show' )->name( 'experts.show' );

	$router->get( 'pages-{page}', 'PagesController@show' )->name( 'pages.show' ); // 单页面管理
	$router->get( 'concat-{city?}', 'PagesController@concat' )->name( 'pages.concat' );


} );
