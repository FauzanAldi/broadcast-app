<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');

    $router->resource('/slider', 'SliderController'); 

    $router->resource('/testimoni', 'TestimoniController'); 

    $router->resource('/product', 'ProductController'); 

    $router->resource('/user', 'UserController'); 

});
