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

Route::get('/', 'SanPhamController@Moi')->name('/');
Route::get('chi_tiet/{ma_sp}','SanPhamController@ChiTietSP')->name('chi_tiet');