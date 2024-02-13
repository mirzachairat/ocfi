<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\KategoriController;

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
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/', [HomeController::class, 'index'])->name('home');


//profile page
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/konsorsium_ibc',[ProfileController::class, 'konsorsium_ibc'])->name('ibc');
Route::get('/medialink',[ProfileController::class, 'media_link'])->name('medialink');
//Berita
Route::get('/kegiatan',[BeritaController::class, 'kegiatan']);
Route::get('/detail/{id}', [BeritaController::class, 'detailkegiatan'])->name('detailkegiatan');

//Tentang
Route::get('/team',[TentangController::class, 'team']);
Route::post('/cekuser', [AuthController::class, 'login'])->name('cekuser');

//backend
Route::group(['middleware' =>'auth','auth.session'], function () {
    Route::get('/register', [AuthController::class, 'viewregister'])->name('register');
    Route::post('/adduser', [AuthController::class, 'adduser'])->name('adduser');
    Route::post('/storelogin', [AuthController::class, 'login']);
    
    Route::get('/admin',[AdminController::class, 'index'])->name('admin');
    Route::get('/usertable',[AdminController::class, 'usertable'])->name('usertable');
    Route::get('/user/{id}',[AdminController::class, 'deleteuser'])->name('deleteuser');
    
    //article
    Route::get('/articletable',[ArticleController::class, 'index'])->name('articletable');
    Route::get('/formarticle',[ArticleController::class, 'formarticle'])->name('formarticle');
    Route::post('/tambaharticle',[ArticleController::class, 'tambaharticle'])->name('tambaharticle');
    Route::get('/deleteArticle/{id}',[ArticleController::class, 'deletearticle'])->name('deletearticle');
    
    Route::get('/categorytable',[KategoriController::class, 'index'])->name('categorytable');
    Route::post('/addkategori',[KategoriController::class, 'tambahkategori'])->name('tambahkategori');
    
    //tambah subkatori
    Route::get('/subkategori',[KategoriController::class, 'indexsub'])->name('subcategorytable');
    Route::post('/addsub',[KategoriController::class, 'tambahsub'])->name('tambahSubkategori');

});




