<?php

namespace App\Http\Controllers;

use App\Models\Galeri;

class HomeController extends Controller
{
    public function index()
    {
        $daftarGaleri = Galeri::latest()->take(3)->get();

        return view('home', compact('daftarGaleri'));
    }
}