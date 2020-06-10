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



Route::get('/categories',function (){
    $post = \App\Post::find(2);
    return $post->comments;
});

Route::get('/post',function (){
    $post = \App\Post::find(200);
    return $post->comments;
});

Route::get('/users',function () {
    return \App\User::all();
});

Route::get('/comment',function (){
    return \App\Comment::all();
});
//
//Route::get('/post',function (){
//    $post =\App\Post::find(334);
//    return $post->comment;
//});

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
