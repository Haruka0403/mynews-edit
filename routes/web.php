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

//php9 テキスト php12テキスト（middleware) php13テキスト(post)
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
  Route::get('news/create', 'Admin\NewsController@add');
  Route::post('news/create', 'Admin\NewsController@create'); 
});

//php9課題 php12課題（middleware) php13課題(post)
Route::group(['prefix' => 'admin/profile', 'middleware' => 'auth'], function(){
  Route::get('create', 'Admin\ProfileController@add');
  Route::get('edit' , 'Admin\ProfileController@edit');
  Route::post('create', 'Admin\ProfileController@create');
  Route::post('edit', 'Admin\ProfileController@update');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
