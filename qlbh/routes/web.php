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
// route Hiển thị màn hình hello
Route::get('/xinchao', 'ViduController@xinchao')->name('example.xinchao');
Route::get('/gioithieu', 'GioithieuController@gioithieu')->name('example.gioithieuphp');
