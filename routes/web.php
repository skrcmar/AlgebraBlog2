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

/***************** POSTS *******************/
Route::get('/posts', 'PostController@index');

Route::get('/posts/{id}', 'PostController@show');

/***************** USERS *******************/
Route::get('/users', function () {
    return view('users.show');
});