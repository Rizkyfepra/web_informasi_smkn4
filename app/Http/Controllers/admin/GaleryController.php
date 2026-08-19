<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Galery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleryController extends Controller
{
    public function index()
    {
        $galleries = Galery::latest()->paginate(10);
        return view('admin.galeries.index', compact('galleries'));
    }

    public function create()
    {
        return view('admin.galeries.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul'     => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'kategori'  => 'required|string|max:100',
            'gambar'    => 'required|image|mimes:jpg,jpeg,png,webp|max:2048', // max 2MB
        ]);

        // Upload gambar ke storage/app/public/Galeries
        $validated['gambar'] = $request->file('gambar')->store('Galeries', 'public');

        Galery::create($validated);

        return redirect()
            ->route('admin.galleries.index')
            ->with('success', 'Galeri berhasil ditambahkan.');
    }

    public function edit(Galery $galery)
    {
        return view('admin.galeries.edit', compact('galery'));
    }

    public function update(Request $request, Galery $galery)
    {
        $validated = $request->validate([
            'judul'     => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'kategori'  => 'required|string|max:100',
            'gambar'    => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama supaya storage tidak numpuk file tak terpakai
            if ($galery->gambar) {
                Storage::disk('public')->delete($galery->gambar);
            }
            $validated['gambar'] = $request->file('gambar')->store('Galeries', 'public');
        }

        $galery->update($validated);

        return redirect()
            ->route('admin.galleries.index')
            ->with('success', 'Galeri berhasil diperbarui.');
    }

    public function destroy(Galery $galery)
    {
        if ($galery->gambar) {
            Storage::disk('public')->delete($galery->gambar);
        }

        $galery->delete();

        return redirect()
            ->route('admin.galleries.index')
            ->with('success', 'Galeri berhasil dihapus.');
    }
}