<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

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

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/storelogin', [AuthController::class, 'login']);
Route::get('/', [HomeController::class, 'index'])->name('home');
//profile page
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/konsorsium_ibc',[ProfileController::class, 'konsorsium_ibc'])->name('ibc');
Route::get('/medialink',[ProfileController::class, 'media_link'])->name('medialink');
//Berita
Route::get('/kegiatan',[BeritaController::class, 'kegiatan']);
//Tentang
Route::get('/team',[TentangController::class, 'team']);

Route::get('/admin',[AdminController::class, 'index']);
Route::get('/usertable',[AdminController::class, 'usertable'])->name('usertable');
Route::get('/articletable',[AdminController::class, 'articletable'])->name('articletable');
Route::get('/categorytable',[AdminController::class, 'categorytable'])->name('categorytable');

