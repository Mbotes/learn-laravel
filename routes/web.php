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


//homepage route
 Route::get('/', 'PagesController@index');

//test route
Route::get('test', 'TestController@index');
Route::post('test', 'TestController@store');


Auth::routes();

Route::get('/home', 'HomeController@index');
