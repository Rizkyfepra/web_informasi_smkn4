<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\GaleriController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GaleriPublicController;
use Illuminate\Support\Facades\Route;

// ===== Route custom kita (beranda, galeri, admin) =====
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/galeri', [GaleriPublicController::class, 'index'])->name('galeri.index');

Route::prefix('admin')->name('admin.')
    ->middleware(['auth', 'can:manage-gallery'])
    ->group(function () {
        Route::resource('galeri', GaleriController::class);
    });

// ===== Route bawaan Breeze (biarkan, dipakai halaman edit profil) =====

// Alias: beberapa file Breeze (verifikasi email, konfirmasi password) masih
// manggil route('dashboard') secara internal. Daripada edit banyak file,
// cukup arahkan nama 'dashboard' ke tempat yang sama dengan admin.galeri.index.
Route::redirect('/dashboard', '/admin/galeri')->middleware('auth')->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';