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
Route::get('User','user@info');

Route::get('Admin','admin@add');

Route::get('find','Order\Order@order');//（'文件名','文件夹\控制器名@方法名'）
Route::get('insert','Order\Order@insert');//增
Route::get('delete/{id}','Order\Order@delete');//删
Route::get('update/{id}','Order\Order@update');//改

