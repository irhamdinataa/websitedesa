<?php

use App\Http\Controllers\AdminBeritaController;
use App\Http\Controllers\AdminKategoriController;
use App\Http\Controllers\AdminSliderController;
use App\Http\Controllers\BerandaController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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


Auth::routes();

Route::get('/dashboard', [HomeController::class, 'index'])->name('home');
Route::resource('/admin/slider', AdminSliderController::class);

Route::get('/admin/berita/slug', [AdminBeritaController::class, 'slug']);
Route::resource('/admin/berita', AdminBeritaController::class);

route::resource('/admin/kategori', AdminKategoriController::class);
