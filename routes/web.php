<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PpidController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\BeritaController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('page.frontend.profiledesa.index');
});

Route::get('/profil', function () {
    return view('page.frontend.profiledesa.profil');
});

Route::get('/galery', function () {
    return view('page.frontend.galery.galeryindex');
});

Route::get('/berita', function () {
    return view('page.frontend.berita.beritadesa');
});

Route::get('/produk', function () {
    return view('page.frontend.produk.produkdesa');
});

Route::get('/ppid', function () {
    return view('page.frontend.ppid.ppiddesa');
});



// Backend //

Route::get('/index', function () {
    return view('page.backend.admin.index');
});

// Halaman daftar berita
Route::get('/beritaback', [BeritaController::class, 'index'])->name('berita.index');

// Form tambah berita
Route::get('/beritaback/create', [BeritaController::class, 'create'])->name('berita.create');

// Proses simpan
Route::post('/beritaback', [BeritaController::class, 'store'])->name('berita.store');

// Detail berita
Route::get('/beritaback/{id}', [BeritaController::class, 'show'])->name('berita.show');

// Form edit
Route::get('/beritaback/{id}/edit', [BeritaController::class, 'edit'])->name('berita.edit');

// Proses update
Route::put('/beritaback/{id}', [BeritaController::class, 'update'])->name('berita.update');

// Hapus
Route::delete('/beritaback/{id}', [BeritaController::class, 'destroy'])->name('berita.destroy');


// Halaman ppid

Route::get('/ppidback', [PpidController::class, 'index'])->name('ppid.ppidback');

Route::get('/ppidback/create', [PpidController::class, 'create'])->name('ppid.create');

Route::post('/ppidback', [PpidController::class, 'store'])->name('ppid.store');

Route::get('/ppidback/{id}', [PpidController::class, 'show'])->name('ppid.show');

Route::get('/ppidback/{id}/edit', [PpidController::class, 'edit'])->name('ppid.edit');

Route::put('/ppidback/{id}', [PpidController::class, 'update'])->name('ppid.update');

Route::delete('/ppidback/{id}', [PpidController::class, 'destroy'])->name('ppid.destroy');





