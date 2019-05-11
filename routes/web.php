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
Route::get('/','StaticPagesController@home');//第一个参数指明了 URL，第二个参数指明了处理该 URL 的控制器动作。
Route::get('/help','StaticPagesController@help');
Route::get('/about','StaticPagesController@about');
