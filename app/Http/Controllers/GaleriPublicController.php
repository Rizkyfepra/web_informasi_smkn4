<?php

namespace App\Http\Controllers;

use App\Models\Galeri;

class GaleriPublicController extends Controller
{
    // Halaman publik: tampilkan SEMUA galeri, dengan pagination
    public function index()
    {
        $daftarGaleri = Galeri::latest()->paginate(9);
        return view('galeri-public', compact('daftarGaleri'));
    }
}
