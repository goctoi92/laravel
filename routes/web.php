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

        Route::get('/delete/{id}',['as' => 'admin.category.getDelete','uses' => 'Auth\CategoryController@deleteAction']);
        Route::get('/edit/{id}',['as' => 'admin.category.getEdit','uses' => 'Auth\CategoryController@editAction']);
        Route::post('/edit/{id}',['as' => 'admin.category.postEdit','uses' => 'Auth\CategoryController@postEditAction']);
    });

    Route::group(['prefix'=>'user'],function(){
        Route::get('/','Auth\UserController@indexAction');
        Route::get('/list',['as' => 'admin.user.list','uses' => 'Auth\UserController@indexAction']);

        Route::get('/add',['as' => 'admin.user.getAdd','uses' => 'Auth\RegisterController@addAction']);
        Route::post('/add',['as' => 'admin.user.postAdd','uses' => 'Auth\RegisterController@postAddAction']);

        Route::get('/delete/{id}',['as' => 'admin.user.getDelete','uses' => 'Auth\UserController@deleteAction']);
        Route::get('/edit/{id}',['as' => 'admin.user.getEdit','uses' => 'Auth\UserController@editAction']);
        Route::post('/edit/{id}',['as' => 'admin.user.postEdit','uses' => 'Auth\UserController@postEditAction']);
    });

    Route::get('/',['as' => 'admin.index','uses' => 'Auth\AdminController@indexAction']);
    Route::get('/login',['as' => 'admin.login.login','uses' => 'Auth\LoginController@indexAction']);
    Route::post('/login',['as' => 'admin.login.loginPostAdd','uses' => 'Auth\LoginController@loginPostAction']);

});
