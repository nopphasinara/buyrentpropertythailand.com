<?php

use App\Http\Controllers\TestController;

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

// $route = Route::current();
// $name = Route::currentRouteName();
// $action = Route::currentRouteAction();

Route::group([
    'prefix' => 'demo',
    'as' => 'demo.',
], function () {
    Route::get('/{name?}', 'TestController@getPage')->where([
        'name' => '[a-zA-Z0-9\_\-\.]+',
    ]);
});

Route::group([
    'prefix' => 'template',
    'name' => 'template',
    'as' => 'template.',
    'middleware' => ['dashboard'],
], function () {
    Route::get('/{name?}', 'TestController@getTemplate')->where([
        'name' => '[a-zA-Z0-9\_\-\.]+',
    ])->name('aaa');
});

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// Route::group([
//     'prefix' => '/',
//     'as' => 'dashboard.',
//     'middleware' => [
//         'web',
//         'auth',
//     ],
// ], function () {
//     Route::get('/', 'DashboardController@index')->name('index');
//     // Route::get('/login', 'DashboardController@showLoginForm')->name('login');
// });
