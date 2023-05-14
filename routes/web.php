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
    return view('user.index');
});

Route::get('/ekstrakulikuler', function () {
    return view('user.ekstrakulikuler');
});

Route::get('/visimisi', function () {
    return view('user.visimisi');
});

Route::get('/karate', function () {
    return view('user.ekstra.karate');
});

Route::get('/menari', function () {
    return view('user.ekstra.menari');
});

Route::get('/inggris', function () {
    return view('user.ekstra.inggris');
});

Route::get('/tik', function () {
    return view('user.ekstra.tik');
});

Route::get('/twisada', function () {
    return view('user.ekstra.twisada');
});


Route::get('/artikel', function () {
    return view('user.artikel');
});

Route::get('/perArtikel', function () {
    return view('user.perArtikel');
});

Route::get('/galeri', function () {
    return view('user.galeri');
});
Route::get('/perGaleri', function () {
    return view('user.perGaleri');
});
Route::get('/kontak', function () {
    return view('user.kontak');
});
