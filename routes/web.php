<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\GaleriController;
use App\Http\Controllers\HomeController;

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('galeri', GaleriController::class);
});

Route::get('/', [HomeController::class, 'index']);
