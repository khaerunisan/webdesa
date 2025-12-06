<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PpidController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KotakSaranController;
use App\Http\Controllers\SuratController; // <-- Tambahan

// ==================================================
// FRONTEND (USER WEBSITE)
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
    Route::get('/berita/{id}', [BeritaController::class, 'showDetailFE'])->name('berita.detail');   // <--- DITAMBAHKAN
    Route::get('/produk', [App\Http\Controllers\ProdukController::class, 'frontend'])->name('produkdesa');
});




// ==================================================
// BACKEND LOGIN
// ==================================================

Route::get('/login', function () {
    return view('page.backend.login.login');
})->name('login');

Route::post('/login', function () {
    $email = request('email');
    $password = request('password');

    if ($email === 'admin@gmail.com' && $password === 'admin123') {
        return redirect()->route('dashboard');
    }

    return back()->with('error', 'Email atau Password salah!');
})->name('login.process');

Route::get('/index', function () {
    return view('page.backend.admin.index');
})->name('dashboard');


// ==================================================
// CRUD BERITA
// ==================================================

Route::prefix('beritaback')->group(function () {
    Route::get('/', [BeritaController::class, 'index'])->name('berita.index');
    Route::get('/create', [BeritaController::class, 'create'])->name('berita.create');
    Route::post('/', [BeritaController::class, 'store'])->name('berita.store');
    Route::get('/{id}', [BeritaController::class, 'show'])->name('berita.show');
    Route::get('/{id}/edit', [BeritaController::class, 'edit'])->name('berita.edit');
    Route::put('/{id}', [BeritaController::class, 'update'])->name('berita.update');
    Route::delete('/{id}', [BeritaController::class, 'destroy'])->name('berita.destroy');
});


// ==================================================
// CRUD PPID BACKEND
// ==================================================

Route::prefix('ppidback')->group(function () {
    Route::get('/', [PpidController::class, 'index'])->name('ppid.ppidback');
    Route::get('/create', [PpidController::class, 'create'])->name('ppid.create');
    Route::post('/', [PpidController::class, 'store'])->name('ppid.store');
    Route::get('/{id}', [PpidController::class, 'show'])->name('ppid.show');
    Route::get('/{id}/edit', [PpidController::class, 'edit'])->name('ppid.edit');
    Route::put('/{id}', [PpidController::class, 'update'])->name('ppid.update');
    Route::delete('/{id}', [PpidController::class, 'destroy'])->name('ppid.destroy');
});

// ==========================
//   ROUTE SARAN & PENGAJUAN
// ==========================
Route::get('/ppid/saran', [App\Http\Controllers\PpidController::class, 'saran'])
    ->name('ppid.saran');

Route::get('/ppid/pengajuan', [App\Http\Controllers\PpidController::class, 'pengajuan'])
    ->name('ppid.pengajuan');



// ==================================================
// CRUD PRODUK BACKEND
// ==================================================

Route::prefix('produkback')->group(function () {
    
Route::get('/produkback', [ProdukController::class, 'index'])->name('produkback');

Route::get('/produkback/create', [ProdukController::class, 'create'])->name('produk.create');

Route::post('/produkback/store', [ProdukController::class, 'store'])->name('produk.store');

Route::get('/produkback/show/{id}', [ProdukController::class, 'show'])->name('produk.show');

Route::get('/produkback/edit/{id}', [ProdukController::class, 'edit'])->name('produk.edit');

Route::post('/produkback/update/{id}', [ProdukController::class, 'update'])->name('produk.update');

Route::delete('/produkback/delete/{id}', [ProdukController::class, 'destroy'])->name('produk.delete');
});

