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
    $posts = \App\Post::orderBy('updated_at', 'desc')->get();
    return view('main', compact('posts'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('posts', 'PostController');

//Route::get('user/{id}', 'PostController@index');
