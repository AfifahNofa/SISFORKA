<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
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
Route::get('/dataguru', [IndexController::class, 'dataguru']);
Route::get('/datasiswa', [IndexController::class, 'datasiswa']);
Route::get('/sarana', [IndexController::class, 'sarana']);
Route::get('/prestasi', [IndexController::class, 'prestasi']);
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/home', [HomeController::class, 'index'])->name('home');

