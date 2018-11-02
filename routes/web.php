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
Route::get('/index', function () {
    return view('index');
});
Route::get('/halamandua', function () {
    return view('halamandua');
});
Route::get('/halamantiga', function () {
    return view('halamantiga');
});
Route::get('/mhs', function () {
    return view('mhs');
});
Route::get('/usr', function () {
    return view('usr');
});
Route::get('/adm', function () {
    return view('adm');
});

Route::get('/septiya/tambah', 'Septiya@tambah');
Route::resource('halaman','Septiya');
Route::resource('mahasiswa','Mahasiswa');
Route::resource('user','User');
Route::resource('admin','Admin');
?>