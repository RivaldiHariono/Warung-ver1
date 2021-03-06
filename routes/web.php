<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/categories', 'CategoryController@index')->name('category');
Route::get('/users', 'UserController@index')->name('user');

Route::group([], function(){
    Route::resource('category','CategoryController');
    Route::resource('user','UserController');
    Route::resource('product','ProductController');
});