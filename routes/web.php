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

Route::get('posts/{post}', 'PostController@show');
Route::get('posts/{post}/edit', 'PostController@edit');
Route::post('posts', 'PostController@store');
Route::patch('posts/{post}', 'PostController@update');
Route::delete('posts/{post}', 'PostController@destroy');

Route::get('users/{user}', 'UserController@show');

//Route::get('user/{id}', 'PostController@index');
