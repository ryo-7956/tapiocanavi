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

Route::group(['prefix' => 'prefecture'], function (){
Route::get('/', 'PrefectureController@index');
Route::get('/{id}', 'PrefectureController@show')->name('pref.show');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
