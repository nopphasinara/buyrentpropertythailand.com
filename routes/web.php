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

Route::get('/home-{style}', function (Int $style = 0) {
    if (!$style) $style = 1;
    return view('home-'. $style .'');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
