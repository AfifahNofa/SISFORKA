<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EkstraController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ppdbController;
use App\Http\Controllers\PrestasiController;
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
Route::get('/visimisi', [IndexController::class, 'visimisi']);
Route::get('/karate', [IndexController::class, 'karate']);
Route::get('/menari', [IndexController::class, 'menari']);
Route::get('/drumband', [IndexController::class, 'drumband']);
Route::get('/tik', [IndexController::class, 'tik']);
Route::get('/pramuka', [IndexController::class, 'showPramuka']);
Route::get('/baca', [IndexController::class, 'showbaca']);
Route::get('/artikel', [IndexController::class, 'artikel']);
Route::get('/perArtikel', [IndexController::class, 'perArtikel']);
Route::get('/datappdb', [IndexController::class, 'showppdb']);
Route::get('/kalender', [IndexController::class, 'kalender']);
Route::get('/galeri', [IndexController::class, 'galeri']);
Route::get('/perGaleri', [IndexController::class, 'perGaleri']);
Route::get('/kontak', [IndexController::class, 'kontak']);
Route::get('/dataguru', [IndexController::class, 'showGuru']);
Route::get('/datasiswa', [IndexController::class, 'datasiswa']);
Route::get('/dataekstra', [IndexController::class, 'dataekstra']);
Route::get('/datasiswa', [IndexController::class, 'showSiswa']);
Route::get('/sarana', [IndexController::class, 'sarana']);
Route::get('/dataprestasi', [IndexController::class, 'showPrestasi']);
Route::get('/welcome', [IndexController::class, 'welcome']);

Auth::routes();
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/tes', function () {
    echo Hash::make('1') . "<br>";
    echo Hash::make('1') . "<br>";
    echo Hash::make('1') . "<br>";
});
Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('/guru', GuruController::class);
    Route::resource('/siswa', SiswaController::class);
    Route::resource('/ekstrakulikuler', EkstraController::class);
    Route::resource('/prestasi', PrestasiController::class);
    Route::resource('/ppdb', ppdbController::class);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
