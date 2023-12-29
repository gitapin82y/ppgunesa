<?php

use App\Http\Controllers\AccreditationController;
use App\Http\Controllers\CritiqueSuggestionController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\PpgDalamJabatanController;
use App\Http\Controllers\PpgPrajabatanController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
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

Route::get('/', [HomeController::class,'index']);
Route::get('/login', [LoginController::class,'index'])->name('login');
Route::post('/login', [LoginController::class,'login']);


Route::get('/berita', [HomeController::class,'allBerita']);
Route::get('/berita/{title}', [NewsController::class,'detailBerita']);

Route::get('/getDataBerita',[NewsController::class,'pagination']);

Route::get('/layanan-kami/ppg-prajabatan', [PpgPrajabatanController::class,'public']);
Route::get('/layanan-kami/ppg-dalam-jabatan', [PpgDalamJabatanController::class,'public']);
Route::get('/layanan-kami/dokumen-panduan-ppg', [DocumentController::class,'public']);


Route::get('/tentang-kami/akreditasi', [AccreditationController::class,'public']);
Route::get('/tentang-kami/struktur-pengelola', [OrganizationController::class,'public']);
Route::get('/tentang-kami/visi-misi', function () {
    return view('visi-misi');
});
Route::get('/tentang-kami/profil', function () {
    return view('profile');
});
Route::get('kontak-kami', [CritiqueSuggestionController::class,'public'])->name('kontak-kami.public');


Route::middleware(['auth'])->group(function () {
// admin
Route::get('/admin', function () {
    return view('admin.admin');
});

Route::get('/admin/ubah-akreditasi', [AccreditationController::class,'index']);
Route::post('/upload', [AccreditationController::class, 'upload'])->name('image.upload');
Route::get('/admin/ubah-struktur-organisasi', [OrganizationController::class,'index']);
Route::post('/upload/struktur', [OrganizationController::class, 'upload'])->name('image.struktur');
Route::get('/admin/kelola-berita', [NewsController::class,'index']);

Route::get('/admin/ppg-dalam-jabatan', [PpgDalamJabatanController::class,'index']);
Route::patch('/content/update', [PpgDalamJabatanController::class, 'update'])->name('content.update');
Route::get('/admin/ppg-prajabatan', [PpgPrajabatanController::class,'index']);
Route::patch('/content/ppg/update', [PpgPrajabatanController::class, 'update'])->name('content.ppg.update');

Route::get('/admin/kelola-kritik-saran', [CritiqueSuggestionController::class,'index']);

Route::resource('/admin/kontak-kami', CritiqueSuggestionController::class);
Route::resource('/admin/news', NewsController::class);
Route::get('/getnews', [NewsController::class,'datatable'])->name('getnews');
Route::resource('/admin/upload-dokumen', DocumentController::class);
Route::get('/getDokumen', [DocumentController::class,'datatable'])->name('getDokumen');

Route::get('/logout', [LoginController::class,'logout']);
});