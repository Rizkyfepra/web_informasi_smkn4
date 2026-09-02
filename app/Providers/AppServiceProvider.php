<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // Email admin diambil dari .env (ADMIN_EMAIL), BUKAN ditulis langsung di sini.
        // Kalau kamu belum isi ADMIN_EMAIL di .env, Gate ini akan SELALU menolak
        // semua orang (termasuk kamu sendiri) -> itu sengaja, biar aman by default.
        Gate::define('manage-gallery', function (User $user) {
            return $user->email === env('ADMIN_EMAIL');
        });
    }
}