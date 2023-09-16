<?php

use App\Http\Controllers\AdminBeritaController;
use App\Http\Controllers\AdminKategoriController;
use App\Http\Controllers\AdminSliderController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\BeritaController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\kategoriController;

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

Route::get('/', [BerandaController::class, 'index']);
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/berita/{beritas:slug}', [BeritaController::class, 'berita']);
Route::get('/berita', [BeritaController::class, 'index']);

Route::get('/kategori/{kategori:slug}', [kategoriController::class, 'index']);

Auth::routes();

Route::get('/dashboard', [HomeController::class, 'index'])->name('home');
Route::resource('/admin/slider', AdminSliderController::class);

Route::get('/admin/berita/slug', [AdminBeritaController::class, 'slug']);
Route::resource('/admin/berita', AdminBeritaController::class);

Route::get('/admin/kategori/slug', [AdminKategoriController::class, 'slug']);
route::resource('/admin/kategori', AdminKategoriController::class);
