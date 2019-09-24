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

Auth::routes();

//トップページ
Route::get('/', function () {return view('welcome');});

//場所から探す
Route::group(['prefix' => 'prefecture'], function (){
Route::get('/', 'PrefectureController@index')->name('pref.index');
Route::get('/{id}', 'PrefectureController@show')->name('pref.show');
Route::get('/{id}/{shop_id}', 'PrefectureController@shop')->name('pref.shop');
Route::get('/{id}/{shop_id}/{review_id}', 'PrefectureController@review')->name('pref.review');
});

Route::resource('review', 'ReviewController');

//誰でもみれるユーザー画面
Route::get('users/{id}', 'UsersController@index')->name('users.index');

//ログインユーザー画面
Route::group(['prefix' => 'users', 'middleware' => 'auth'], function () {
    Route::get('show/{id}', 'UsersController@show')->name('users.show');
    Route::get('edit/{id}', 'UsersController@edit')->name('users.edit');
    Route::post('update/{id}', 'UsersController@update')->name('users.update');
});

//管理人ユーザー機能
Route::group(['middleware' => 'auth:user'], function() {
    Route::get('/home', 'HomeController@index')->name('home');
});
Route::group(['prefix' => 'admin'], function() {
    Route::get('/',         function () { return redirect('/admin/home'); });
    Route::get('login',     'Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('login',    'Admin\LoginController@login');
});
Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function() {
    Route::post('logout',   'Admin\LoginController@logout')->name('admin.logout');
    Route::get('home',      'Admin\HomeController@index')->name('admin.home');
});