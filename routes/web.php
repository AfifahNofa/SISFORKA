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
    return view('frontend.home');
});

Route::get('/ekstrakurikuler', function () {
    return view('frontend.ekstrakurikuler');
});

Route::get('/artikel', function () {
    return view('frontend.artikel');
});

Route::get('/galeri', function () {
    return view('frontend.galeri');
});
Route::get('/kontak', function () {
    return view('frontend.kontak');
});
