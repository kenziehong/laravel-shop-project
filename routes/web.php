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
Route::get('loai_sp/{loai_sp_id}','LoaiSanPhamController@TheoID')->name('loai_sp');
Route::get('thuong_hieu/{thuong_hieu_id}','ThuongHieuController@SanPhamCungThuongHieu')->name('thuong_hieu');
Route::put('them-gio-hang/{ma_sp}','CartController@Add');
Route::get('gio_hang', function () {
    return view('pages.gio_hang');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
