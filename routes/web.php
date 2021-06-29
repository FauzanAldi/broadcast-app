<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', '\App\Http\Controllers\HomeController@index');

Route::post('/contact', '\App\Http\Controllers\ContactController@store')->name('contact.store');

Route::post('/subscribe', '\App\Http\Controllers\SubscriberController@store')->name('subscribe.store');

Route::get('/products/{id}', '\App\Http\Controllers\ProductController@detail')->name('product.detail');

Route::post('/products/buy', '\App\Http\Controllers\ProductController@buy')->name('product.buy');

Route::post('/tracking/hits', '\App\Http\Controllers\TrackingController@hits')->name('tracking.hits');

// Route::get('/sitemap.xml', '\App\Http\Controllers\SitemapController@index');

Route::get('/updateapp', function()
{
    \Artisan::call('dump-autoload');
    echo 'dump-autoload complete';
});
