<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        // Pakai raw SQL (bukan ->nullable()->change()) supaya tidak perlu
        // install package tambahan (doctrine/dbal).
        DB::statement('ALTER TABLE galeri MODIFY judul VARCHAR(255) NULL');
        DB::statement('ALTER TABLE galeri MODIFY deskripsi TEXT NULL');
        DB::statement('ALTER TABLE galeri MODIFY kategori VARCHAR(255) NULL');
    }

    public function down(): void
    {
        // Tidak dibalikin ke NOT NULL, karena data lama mungkin sudah kosong.
    }
};
