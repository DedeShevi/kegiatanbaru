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

Route::get('/','WelcomeController@index')->name('/');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'data'], function(){
    Route::get('/siswa', 'DataSiswaController@index')->name('data.siswa');
});

Route::group(['prefix' => 'manage-kegiatan'], function(){
    Route::get('/', 'ManageKegiatanController@index')->name('manage-kegiatan');
    Route::get('/add-form', 'ManageKegiatanController@create')->name('manage-kegiatan.add');
    Route::post('/store', 'ManageKegiatanController@store')->name('manage-kegiatan.store');
    Route::delete('/delete{id}', 'ManageKegiatanController@destroy')->name('manage-kegiatan.dete');
    Route::get('/edit-kegiatan{id}', 'ManageKegiatanController@edit')->name('manage-kegiatan.edit');
    Route::patch('/update{activity}', 'ManageKegiatanController@update')->name('update.data.kegiatan');

});

Route::group(['prefix' => 'kegiatan'], function(){
    Route::get('/index', 'KegiatanController@index')->name('kegiatan.index');
    Route::get('/create/{kegiatan}', 'KegiatanController@create')->name('kegiatan.create');
    Route::get('/tampilkan', 'KegiatanController@show')->name('kegiatan.tampilkan');
    Route::post('/store', 'KegiatanController@store')->name('kegiatan.store');
});

Route::group(['prefix' => 'tambah-data'], function(){
    Route::get('/siswa', 'DataSiswaController@create')->name('tambah-data.siswa');
    Route::post('/store', 'DataSiswaController@store')->name('tambah-data.store');
});

Route::group(['prefix' => 'edit-data'], function(){
    Route::get('siswa/{user}', 'DataSiswaController@edit')->name('edit-data.siswa');
    Route::get('activity/{activity}', 'ManageKegiatanController@edit')->name('edit.data.activity');
});

Route::group(['prefix' => 'verifikasi-pendaftaran'], function(){
    Route::get('/verifikasi-pendaftaran', 'VerifikasiController@index')->name('verifikasi-pendaftaran');
    Route::get('/peserta', 'PesertaController@index')->name('verifikasi-pendaftaran.peserta');
    Route::patch('/accept/{register}', 'PesertaController@store')->name('verifikasi-pendaftaran.accept');
    Route::get('/ulang', 'DaftarUlangController@index')->name('verifikasi-pendaftaran.ulang');
});

Route::group(['prefix' => 'pendaftaran'], function(){
    Route::get('pending', 'Pendaftaran\PendingController@index')->name('pendaftaran.pending');
    Route::get('verified', 'Pendaftaran\VerifiedController@index')->name('pendaftaran.verified');
    Route::get('cetak/sertifikat/{register}', 'Pendaftaran\VerifiedController@sertifikat')->name('cetak.sertifikat');
});

Route::group(['prefix' => 'user'], function(){
    Route::get('ambil-form/{register}', 'PaymentController@create')->name('user.ambil-form');
    Route::post('verifikasi-pembayaran', 'PaymentController@store')->name('user-verifikasi.pembayaran');
});

Route::group(['prefix' => 'activity'], function(){
    Route::get('//', 'DaftarKegiatanController@index')->name('activity');
});

Route::group(['prefix' => 'cetak'], function(){
    Route::get('/activity', 'Report\ActivityController@index')->name('cetak.activity');
    Route::get('data-activity', 'Report\ActivityController@edit')->name('cetak.all-data.activity');
});

Route::group(['prefix' => 'destroy'], function(){
    Route::delete('data/siswa/{user}', 'DataSiswaController@destroy')->name('destroy.data.siswa');
    Route::delete('data/activity/{activity}', 'ManageKegiatanController@destroy')->name('destroy.data.activity');
});

Route::group(['prefix' => 'updated'], function(){
    Route::patch('data/siswa/{user}', 'DataSiswaController@updated')->name('updated.data.siswa');
});

Route::get('resoult/{register}', 'ResoultController@show')->name('resoult');
Route::get('/pendaftaran', 'DaftarKegiatanController@index')->name('daftar.index');
Route::get('/dashboard', 'HomeController@index')->name('dashboard.index');
Route::get('/laporan', 'LaporanController@index')->name('laporan.index');

