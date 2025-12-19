<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PpidController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KotakSaranController;
use App\Http\Controllers\LoginController;

// ==================================================
// FRONTEND
// ==================================================
Route::prefix('/')->group(function () {
    Route::get('/', fn() => view('page.frontend.profiledesa.index'));
    Route::get('/profil', fn() => view('page.frontend.profiledesa.profil'));
    Route::get('/galery', fn() => view('page.frontend.galery.galeryindex'));
    Route::get('/ppid', fn() => view('page.frontend.ppid.ppiddesa'));
    Route::get('/berkas', fn() => view('page.frontend.ppid.berkas'));
    Route::get('/dokumen', fn() => view('page.frontend.ppid.dokumen'));
    Route::get('/hukum', fn() => view('page.frontend.ppid.hukum'));
    Route::get('/kotaksaran', fn() => view('page.frontend.ppid.kotaksaran'));

    Route::post('/kotaksaran/kirim', [KotakSaranController::class, 'kirim']);

    Route::get('/berita', [BeritaController::class, 'frontend'])->name('berita.frontend');
    Route::get('/berita/{id}', [BeritaController::class, 'showDetailFE'])->name('berita.detail');

    Route::get('/produk', [ProdukController::class, 'frontend'])->name('produkdesa');
    Route::get('/produk/{id}', [ProdukController::class, 'detailFrontend'])->name('produk.detail.fe');

});

// LOGIN (TIDAK DI DALAM checkLogin) // 

    Route::get('/login', [LoginController::class, 'showLogin'])->name('login'); 
    Route::post('/login', [LoginController::class, 'loginProcess'])->name('login.process');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    // BACKEND (WAJIB LOGIN)

    Route::middleware('checkLogin')->group(function () {

    Route::get('/index', fn() => view('page.backend.admin.index'))->name('dashboard');

        Route::get('/admin/kotaksaran', [KotakSaranController::class, 'saranback']);
        Route::get('/admin/kotaksaran/dibaca/{id}', [KotakSaranController::class, 'dibaca']);
        Route::get('/admin/kotaksaran/hapus/{id}', [KotakSaranController::class, 'hapus']);


    // CRUD Berita
    Route::prefix('beritaback')->group(function () {
        Route::get('/', [BeritaController::class, 'index'])->name('berita.index');
        Route::get('/create', [BeritaController::class, 'create'])->name('berita.create');
        Route::post('/', [BeritaController::class, 'store'])->name('berita.store');
        Route::get('/{id}', [BeritaController::class, 'show'])->name('berita.show');
        Route::get('/{id}/edit', [BeritaController::class, 'edit'])->name('berita.edit');
        Route::put('/{id}', [BeritaController::class, 'update'])->name('berita.update');
        Route::delete('/{id}', [BeritaController::class, 'destroy'])->name('berita.destroy');
    });

    // CRUD PPID
    Route::prefix('ppidback')->group(function () {
        Route::get('/', [PpidController::class, 'index'])->name('ppid.ppidback');
        Route::get('/create', [PpidController::class, 'create'])->name('ppid.create');
        Route::post('/', [PpidController::class, 'store'])->name('ppid.store');
        Route::get('/{id}', [PpidController::class, 'show'])->name('ppid.show');
        Route::get('/{id}/edit', [PpidController::class, 'edit'])->name('ppid.edit');
        Route::put('/{id}', [PpidController::class, 'update'])->name('ppid.update');
        Route::delete('/{id}', [PpidController::class, 'destroy'])->name('ppid.destroy');
    });

    Route::get('/ppid/saran', [PpidController::class, 'saran'])->name('ppid.saran');
    Route::get('/ppid/pengajuan', [PpidController::class, 'pengajuan'])->name('ppid.pengajuan');

    // CRUD Produk
    Route::prefix('produkback')->group(function () {
        Route::get('/', [ProdukController::class, 'index'])->name('produkback');
        Route::get('/create', [ProdukController::class, 'create'])->name('produk.create');
        Route::post('/store', [ProdukController::class, 'store'])->name('produk.store');
        Route::get('/show/{id}', [ProdukController::class, 'show'])->name('produk.show');
        Route::get('/edit/{id}', [ProdukController::class, 'edit'])->name('produk.edit');
        Route::post('/update/{id}', [ProdukController::class, 'update'])->name('produk.update');
        Route::delete('/delete/{id}', [ProdukController::class, 'destroy'])->name('produk.delete');
    });

});