<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\WilayahController;
use App\Http\Controllers\DataDesaController;
use App\Http\Controllers\kategoriController;
use App\Http\Controllers\PetaDesaController;
use App\Http\Controllers\VisiMisiController;
use App\Http\Controllers\AdminAgamaController;
use App\Http\Controllers\AdminBeritaController;
use App\Http\Controllers\AdminSliderController;
use App\Http\Controllers\AdminCommentController;
use App\Http\Controllers\AdminSejarahController;
use App\Http\Controllers\AdminWilayahController;
use App\Http\Controllers\AdminKategoriController;
use App\Http\Controllers\AdminVisiMisiController;
use App\Http\Controllers\PerangkatDesaController;
use App\Http\Controllers\AdminPekerjaanController;
use App\Http\Controllers\AdminJenisKelaminController;
use App\Http\Controllers\AdminPerangkatDesaController;
use App\Http\Controllers\AdminPetaController;

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

Route::post('/berita/{slug}', [CommentController::class, 'comment']);
Route::post('/berita/{slug}/reply', [CommentController::class, 'commentReply']);

Route::get('/kategori/{kategori:slug}', [kategoriController::class, 'index']);

Route::get('/wilayah', [WilayahController::class, 'index']);

Route::get('/sejarah', [SejarahController::class, 'index']);

Route::get('/visi-misi', [VisiMisiController::class, 'index']);

Route::get('/perangkat-desa', [PerangkatDesaController::class, 'index']);

Route::get('/data-desa', [DataDesaController::class, 'index']);

Route::get('/peta-desa', [PetaDesaController::class, 'index']);


Auth::routes();

Route::get('/dashboard', [HomeController::class, 'index'])->name('home');
Route::resource('/admin/slider', AdminSliderController::class);

Route::get('/admin/berita/slug', [AdminBeritaController::class, 'slug']);
Route::resource('/admin/berita', AdminBeritaController::class);

Route::get('/admin/komentar', [AdminCommentController::class, 'index']);
Route::delete('/admin/komentar/{id}', [AdminCommentController::class, 'destroy']);

Route::get('/admin/kategori/slug', [AdminKategoriController::class, 'slug']);
route::resource('/admin/kategori', AdminKategoriController::class);

Route::get('admin/wilayah', [AdminWilayahController::class, 'index']);
Route::get('admin/wilayah/{id}/edit', [AdminWilayahController::class, 'edit']);
Route::put('admin/wilayah/{id}', [AdminWilayahController::class, 'update']);

Route::get('admin/sejarah', [AdminSejarahController::class, 'index']);
Route::get('admin/sejarah/{id}/edit', [AdminSejarahController::class, 'edit']);
Route::put('admin/sejarah/{id}', [AdminSejarahController::class, 'update']);

Route::get('admin/visi-misi', [AdminVisiMisiController::class, 'index']);
Route::get('admin/visi-misi/{id}/edit', [AdminVisiMisiController::class, 'edit']);
Route::put('admin/visi-misi/{id}', [AdminVisiMisiController::class, 'update']);

Route::resource('admin/perangkat-desa', AdminPerangkatDesaController::class);

Route::get('/admin/peta-desa', [AdminPetaController::class, 'index']);
Route::put('/admin/peta-desa/{id}', [AdminPetaController::class, 'update']);

Route::resource('admin/agama', AdminAgamaController::class);

Route::resource('admin/jenis-kelamin', AdminJenisKelaminController::class);

ROute::resource('admin/pekerjaan', AdminPekerjaanController::class);