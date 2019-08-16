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

Route::group(['prefix'=>'admin'],function(){
    Route::group(['prefix'=>'category'],function(){
        Route::get('/','Auth\CategoryController@indexAction');
        Route::get('/list',['as' => 'admin.category.list','uses' => 'Auth\CategoryController@indexAction']);

        Route::get('/add',['as' => 'admin.category.getAdd','uses' => 'Auth\CategoryController@addAction']);
        Route::post('/add',['as' => 'admin.category.postAdd','uses' => 'Auth\CategoryController@postAddAction']);
    });
    Route::get('/','Auth\LoginController@indexAction');
    Route::get('/index','Auth\LoginController@indexAction');

});
