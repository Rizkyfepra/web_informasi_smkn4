<?php

namespace App\Http\Controllers;

use App\Models\Artikel;

class ArtikelPublicController extends Controller
{
    public function index()
    {
        $daftarArtikel = Artikel::latest()->paginate(9);
        return view('artikel-public', compact('daftarArtikel'));
    }

    public function show(Artikel $artikel)
    {
        return view('artikel-show', compact('artikel'));
    }
}
