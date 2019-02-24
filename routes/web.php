<?php

use Corcel\Model\Post;

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
    // $properties = \Corcel\Model\Property::newest()->get();
    // if (!blank($properties)) {
    //     $meta = get_meta_keys($properties);
    //     echo '<pre>'; print_r($meta); echo '</pre>';
    // }

    // $validate = Auth::validate([
    //     'email' => 'admin@buyrentpropertythailand.com',
    //     'username' => 'buyrentp',
    //     'password' => 'asdfg54321!@#$%',
    // ]);

    // $postTypes = Post::select('post_type')->distinct()->get()->pluck('post_type');
    // if ($postTypes && count($postTypes)) {
    //     echo '<pre>'; print_r($postTypes); echo '</pre>';
    // }

    // return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
