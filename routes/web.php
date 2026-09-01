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

// ===== Route bawaan Breeze (biarkan, dipakai halaman dashboard & edit profil) =====
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';