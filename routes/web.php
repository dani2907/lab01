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

Auth::routes();

Route::get('home', 'HomeController@index');
Route::resource('kkp', 'KkpController');
Route::resource('berita', 'BeritaController');
Route::resource('penguman', 'PengumanController');
Route::resource('agenda', 'AgendaController');
Route::resource('skripsi', 'SkripsiController');
Route::resource('registrasikkp', 'RegistrasiKkpController');
Route::resource('kegiatankkp', 'KegiatanKkpController');
Route::resource('registrasiskripsi', 'RegistrasiSkripsiController');
Route::resource('detailskripsi', 'DetailSkripsiController');
Route::resource('pembimbingskripsi', 'PembimbingSkripsiController');
Route::resource('pengujiskripsi', 'PengujiSkripsiController');
Route::resource('pengujikkp', 'PengujiKkpController');
Route::resource('pembimbingkkp', 'PembimbingKkpController');
Route::resource('homeadmin', 'HomeAdminController');
Route::resource('data-berita', 'AksesBeritaController');
Route::resource('data-penguman', 'AksesPengumanController');
Route::resource('data-agenda', 'AksesAgendaController');
Route::resource('data-kkp', 'AksesKkpController');
Route::get('konfirmasijudul', 'HomeAdminController@viewadd');
Route::resource('registrasimember', 'RegistrasiMemberController');
