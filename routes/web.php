<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BeritaController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
//profile page
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/konsorsium_ibc',[ProfileController::class, 'konsorsium_ibc'])->name('ibc');
Route::get('/medialink',[ProfileController::class, 'media_link'])->name('medialink');
//Berita
Route::get('/kegiatan',[BeritaController::class, 'kegiatan']);