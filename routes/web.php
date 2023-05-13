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

Route::get('/pramuka', function () {
    return view('user.ekstra.pramuka');
});

Route::get('/sepakbola', function () {
    return view('user.ekstra.sepakbola');
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
