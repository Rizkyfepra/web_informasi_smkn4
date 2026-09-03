<?php

namespace App\Http\Controllers;

use App\Models\Produk;

class ProdukPublicController extends Controller
{
    public function index()
    {
        $daftarProduk = Produk::latest()->paginate(9);
        return view('produk-public', compact('daftarProduk'));
    }
}
