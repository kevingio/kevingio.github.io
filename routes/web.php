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

Route::get('instagram-get-auth', 'InstagramAuthController@show');
Route::get('instagram-auth-response', 'InstagramAuthController@complete');
Route::get('instagram-feed', 'InstagramAuthController@showFeed');

Route::get('/', 'HomeController@index')->name('index');
Route::any('{query}',
  function() {
      return redirect('/');
  })->where('query', '.*');
