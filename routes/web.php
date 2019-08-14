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

Route::group(['prefix'=>'khoa-hoc'],function(){
    Route::get('/index','KhoaHocController@indexAction');
    Route::get('/php','KhoaHocController@phpAction');
    Route::get('/mobile','KhoaHocController@mobileAction');
});
//Route::get('hcminh',['as'=>'hcm',function(){
//    return 'o o o';
//}]);