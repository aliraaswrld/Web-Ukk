<?php

use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\layout;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('/layout/index');
// });


route::get('/', [layout::class, 'index'])->name('index');

route::get('/login', [LoginController::class,'showLoginForm'])->name('login');
route::post('/login', [LoginController::class,'login'])->name('login');
route::get('/register', [LoginController::class, 'register'])->name('register');
route::post('/prosesRegistrasi', [LoginController::class, 'prosesRegistrasi'])->name('prosesRegistrasi');
route::post('/logout', [LoginController::class, 'logout'])->name('logout');


route::get('/tambahGallery', [GalleryController::class, "store"])->name('tambahGallery');
route::post('/tambahGallery', [GalleryController::class, "store"])->name('SimpanGallery');
route::get('/editGallery/{id}', [GalleryController::class, "edit"])->name('edit');
route::get('/hapusGallery/{id}', [GalleryController::class, "destroy"])->name('HapusGallery');
route::post('/editGallery/{id}', [GalleryController::class, "update"])->name('update');

Route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'as' => 'admin.'], function(){
    Route::get('/tambahGallery', [layout::class, 'tambahGallery'])->name('tambahGallery');
    Route::get('/tabelGallery', [layout::class, 'tabelGallery'])->name('tabelGallery');
    Route::get('/dashboard', [layout::class, 'dashboard'])->name('dashboard');
});