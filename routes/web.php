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
Route::get('/gejala','GejalaController@index');
Route::get('/gejala/tambah','GejalaController@tambah');
Route::post('/gejala/store','GejalaController@store');
Route::get('/gejala/edit/{kd_gejala}','GejalaController@edit');
Route::post('/gejala/update','GejalaController@update');
Route::get('/gejala/hapus/{kd_gejala}','GejalaController@hapus');

Route::get('/penyakit','PenyakitController@index');
Route::get('/penyakit/tambah','PenyakitController@tambah');
Route::post('/penyakit/store','PenyakitController@store');
Route::get('/penyakit/edit/{kd_penyakit}','PenyakitController@edit');
Route::post('/penyakit/update','PenyakitController@update');
Route::get('/penyakit/hapus/{kd_penyakit}','PenyakitController@hapus');

Route::get('/relasi','RelasiController@index');
Route::get('/tanda','TandaController@index');

Route::get('/hasil','HasilController@index');
Route::get('/diagnosis','DiagnosisController@index');
Route::post('/diagnosis/store','DiagnosisController@store');


Route::get('/', 'PageController@index');
 
// Route::get('/gejala', 'PageController@gejala');
// Route::get('/penyakit', 'PageController@penyakit');
//Route::get('/konsultasi', 'PageController@konsultasi');
// Route::get('/hasil', 'PageController@hasil');

// Route::get('/', function () {
//     return view('welcome');
// });

