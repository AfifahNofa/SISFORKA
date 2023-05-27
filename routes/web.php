<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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
Route::get('/', [IndexController::class, 'index']);
Route::get('/ekstrakulikuler', [IndexController::class, 'ekstrakulikuler']);
Route::get('/visimisi', [IndexController::class, 'visimisi']);
Route::get('/karate', [IndexController::class, 'karate']);
Route::get('/menari', [IndexController::class, 'menari']);
Route::get('/inggris', [IndexController::class, 'inggris']);
Route::get('/tik', [IndexController::class, 'tik']);
Route::get('/twisada', [IndexController::class, 'twisada']);
Route::get('/artikel', [IndexController::class, 'artikel']);
Route::get('/perArtikel', [IndexController::class, 'perArtikel']);
Route::get('/ppdb', [IndexController::class, 'ppdb']);
Route::get('/galeri', [IndexController::class, 'galeri']);
Route::get('/perGaleri', [IndexController::class, 'perGaleri']);
Route::get('/kontak', [IndexController::class, 'kontak']);
Route::get('/dataguru', [IndexController::class, 'showGuru']);
Route::get('/datasiswa', [IndexController::class, 'showSiswa']);
Route::get('/sarana', [IndexController::class, 'sarana']);
Route::get('/prestasi', [IndexController::class, 'prestasi']);
Route::get('/welcome', [IndexController::class, 'welcome']);
// Route::resource('/guru', GuruController::class);
Route::resource('/siswa', SiswaController::class);

Auth::routes();
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/tes', function () {
    echo Hash::make('1') . "<br>";
    echo Hash::make('1') . "<br>";
    echo Hash::make('1') . "<br>";
});
Route::middleware(['auth'])->group(function () {
    Route::resource('/guru', GuruController::class);
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
});


