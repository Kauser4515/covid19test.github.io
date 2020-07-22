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

Route::group(['prefix' => '/'], function () {
	Route::get('/', ['as' => 'smokey', 'uses' => 'SmokeyConroller@index']);
	Route::get('/location/{id}', ['as' => 'location', 'uses' => 'SmokeyConroller@location']);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
        Route::resource('shop', 'ShopController');
        Route::resource('location', 'LocationController');
    });
