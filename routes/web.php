<?php

use Corcel\Model\Property;

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
    $data = Property::orderBy('id', 'DESC')->first();
    echo '<pre>'; print_r($data); echo '</pre>';

    return view('welcome');
});
