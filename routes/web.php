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

Route::prefix(''. config('custom.dashboard_prefix') .'')->group(function () {
    Route::get('/', function () {
        return view(''. config('custom.dashboard_prefix') .'.home');
    });
    Route::get('/{slug}', function ($slug) {
        $request_view = ''. config('custom.dashboard_prefix') .'.'. $slug .'';
        if (view()->exists($request_view)) {
          return view($request_view);
        }
        return abort(404);
    });
});

Route::get('/', function () {
    return view('welcome');
});
