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


Route::get('admin/resetpasword', function () {

    return view('admin/resetpasword');

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/users', 'UserController@index')->name('users');

Route::get('/admin/posts', 'PostController@index')->name('index');