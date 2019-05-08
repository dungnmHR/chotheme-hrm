<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::middleware(['auth'])->prefix('admin')->group(function () {
    // Route for dashboard
    Route::get('/', function () {
        return view('admin.layouts.default',['flag' => 'dashboard']);
    })->name('dashboard');

    // Route for gallery
    Route::get('/gallery', function () {
        return view('admin.gallery',['flag' => 'gallery']);
    })->name('gallery');

    // START Route for user
    Route::prefix('user')->group(function () {
    	Route::get('/list', '\App\Http\Controllers\Admin\UserController@index')->name('list-user');
        Route::get('/create', '\App\Http\Controllers\Admin\UserController@create')->name('create-user');
        Route::get('/{id}/show', '\App\Http\Controllers\Admin\UserController@show')->name('show-user');
    });
    // END Route for user

    // START Route for product
    Route::prefix('product')->group(function () {
        Route::get('/list', '\App\Http\Controllers\Admin\ProductController@index')->name('list-product');
        Route::get('/create', '\App\Http\Controllers\Admin\ProductController@create')->name('create-product');
        Route::get('/{id}/show', '\App\Http\Controllers\Admin\ProductController@show')->name('show-product');
    });
    // END Route for product

    // START Route for themes
    Route::prefix('item')->group(function () {
        Route::get('/list', '\App\Http\Controllers\Admin\ItemController@index')->name('list-item');
        Route::get('/create', '\App\Http\Controllers\Admin\ItemController@create')->name('create-item');
        Route::post('/create', '\App\Http\Controllers\Admin\ItemController@store')->name('create-item');
        Route::get('/{id}/show', '\App\Http\Controllers\Admin\ItemController@show')->name('show-item');
    });
    // END Route for themes

    // START Route for transactions
    Route::prefix('giao-dich')->group(function () {
        Route::get('/danh-sach', '\App\Http\Controllers\Admin\TransController@index')->name('list-trans');
        Route::get('/tao-moi', '\App\Http\Controllers\Admin\TransController@create')->name('create-trans');
        Route::get('/{id}/chi-tiet', '\App\Http\Controllers\Admin\TransController@show')->name('show-trans');
    });
    // END Route for transactions

    // START Route for menu
    Route::prefix('menu')->group(function () {
        Route::get('/', '\App\Http\Controllers\Admin\MenuController@index')->name('list-menu');
        Route::get('/test', '\App\Http\Controllers\Admin\MenuController@test')->name('list-menu');
    });
    // END Route for transactions

    // START Route for menu
    Route::prefix('banner')->group(function () {
        Route::get('/list', '\App\Http\Controllers\Admin\BannerController@index')->name('list-banner');
        Route::get('/create', '\App\Http\Controllers\Admin\BannerController@create')->name('create-banner');
        Route::post('/create', '\App\Http\Controllers\Admin\BannerController@store')->name('create-banner');
    });
    // END Route for transactions
   
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/404', function () {
        return view('errors.404',['flag' => '']);
})->name('error-404');
