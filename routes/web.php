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

Route::get('Order/{id}','Order\Order@order');//（'文件名','文件夹\控制器名@方法名'）

Route::get('Admin','admin@add');