<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    // Wajib manual, karena "Galeri" auto-pluralize Laravel jadi "galeris" bukan "galeri"
    protected $table = 'galeri';

    protected $fillable = ['judul', 'deskripsi', 'gambar', 'kategori'];
}