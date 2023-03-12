<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('beranda.index');
// });

Route::get('/login', function () {
    return view('user.login');
})->name('login');


Route::post('/postlogin', 'LoginController@postlogin')->name('postlogin');
Route::get('/logout','LoginController@logout')->name('logout')->middleware('auth');


Route::get('/beranda', 'BerandaController@index');

//Pengaduan
Route::get('/pengaduan','PengaduanController@index')->name('pengaduan');
Route::get('/pengaduan/create', 'PengaduanController@create');
Route::post('/pengaduan/store', 'PengaduanController@store');
Route::get('/pengaduan/status/{id}', 'PengaduanController@status');
Route::get('/pengaduan/edit/{id}', 'PengaduanController@edit');
Route::put('/pengaduan/update/{id}', 'PengaduanController@update');
Route::get('/pengaduan/destroy/{id}', 'PengaduanController@destroy');

//Userprofil
Route::get('user_profile', 'UserprofilController@index')->name('user_profile');
Route::put('user_profile/{id}','UserprofilController@update')->name('user_profile.update');
Route::post('getKota', 'UserprofilController@getKota')->name('getKota');//getkota
Route::post('getKecamatan', 'UserprofilController@getKecamatan')->name('getKecamatan');//getkemacatan
Route::post('getKelurahan', 'UserprofilController@getKelurahan')->name('getKelurahan');//getkelurahan



//Tanggapan
Route::get('/tanggapan', 'TanggapanController@index')->name('tanggapan');
Route::get('/tanggapan/create', 'TanggapanController@create');
Route::post('/tanggapan/store', 'TanggapanController@store');
Route::get('/tanggapan/edit/{id}', 'TanggapanController@edit');
Route::put('/tanggapan/update/{id}', 'TanggapanController@update');
Route::get('/tanggapan/destroy/{id}', 'TanggapanController@destroy');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
