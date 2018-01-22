<?php

use Illuminate\Routing\Router;

Route::group([
    'namespace' => 'Home',
    'middleware' => ['web'],
], function (Router $router) {

    $router->get('/', 'HomeController@index');
});
