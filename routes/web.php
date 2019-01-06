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

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.home');
    });
    Route::get('/{slug}', function ($slug) {
        $request_view = 'admin.'. $slug .'';
        if (view()->exists($request_view)) {
          return view($request_view);
        }
        return abort(404);
    });
});

Route::get('/', function () {
    return view('welcome');
});
