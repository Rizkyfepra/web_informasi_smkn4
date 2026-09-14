<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('artikel', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('kategori')->nullable();   // contoh: Prestasi Siswa, Akademik
            $table->string('penulis')->nullable();     // contoh: Humas, Guru TKJ
            $table->text('ringkasan')->nullable();      // teks pendek di card
            $table->longText('isi')->nullable();        // isi lengkap di halaman detail
            $table->string('gambar')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('artikel');
    }
};
