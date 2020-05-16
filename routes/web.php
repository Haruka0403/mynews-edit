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

//php9 テキスト
Route::group(['prefix' => 'admin'], function() {
  Route::get('news/create', 'Admin\NewsController@add');
});

//php9課題
Route::group(['prefix' => 'admin/profile'], function(){
  Route::get('create', 'Admin\ProfileController@add');
  Route::get('edit' , 'Admin\ProfileController@edit');
});

