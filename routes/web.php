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
Route::get('/', function () {
    return view('welcome');
});

//test route
Route::get('test', 'TestController@index');
Route::post('test', 'TestController@store');

