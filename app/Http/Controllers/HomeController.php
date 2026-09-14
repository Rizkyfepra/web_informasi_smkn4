<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Models\Produk;
use App\Models\Artikel;

class HomeController extends Controller
{
    public function index()
    {
        $daftarGaleri  = Galeri::latest()->get();
        $daftarProduk  = Produk::latest()->get();
        $daftarArtikel = Artikel::latest()->take(3)->get();

        return view('home', compact('daftarGaleri', 'daftarProduk', 'daftarArtikel'));
    }
}
