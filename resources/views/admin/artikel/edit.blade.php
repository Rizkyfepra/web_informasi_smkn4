@extends('layouts.admin')

@section('title', 'Edit Artikel')

@section('content')
<h1 class="text-2xl font-bold text-slate-900 mb-6">Edit Artikel</h1>

<form action="{{ route('admin.artikel.update', $artikel) }}" method="POST" enctype="multipart/form-data"
      class="bg-white rounded-xl border border-slate-200 p-6 max-w-2xl space-y-5">
    @csrf
    @method('PUT')

    <div>
        <label class="block text-sm font-medium text-slate-700 mb-1">Judul</label>
        <input type="text" name="judul" value="{{ old('judul', $artikel->judul) }}"
               class="w-full border border-slate-300 rounded-md px-3 py-2 text-sm">
        @error('judul') <p class="text-red-600 text-xs mt-1">{{ $message }}</p> @enderror
    </div>

    <div>
        <label class="block text-sm font-medium text-slate-700 mb-1">Kategori</label>
        <input type="text" name="kategori" value="{{ old('kategori', $artikel->kategori) }}"
               class="w-full border border-slate-300 rounded-md px-3 py-2 text-sm">
    </div>

    <div>
        <label class="block text-sm font-medium text-slate-700 mb-1">Ringkasan (tampil di card)</label>
        <textarea name="ringkasan" rows="2"
                  class="w-full border border-slate-300 rounded-md px-3 py-2 text-sm">{{ old('ringkasan', $artikel->ringkasan) }}</textarea>
    </div>

    <div>
        <label class="block text-sm font-medium text-slate-700 mb-1">Isi Lengkap</label>
        <textarea name="isi" rows="8"
                  class="w-full border border-slate-300 rounded-md px-3 py-2 text-sm">{{ old('isi', $artikel->isi) }}</textarea>
    </div>

    <div>
        <label class="block text-sm font-medium text-slate-700 mb-1">Gambar</label>
        @if ($artikel->gambar)
            <img src="{{ Storage::url($artikel->gambar) }}" class="w-24 h-24 object-cover rounded-md mb-2">
        @endif
        <input type="file" name="gambar" accept="image/*" class="text-sm">
        <p class="text-xs text-slate-400 mt-1">Kosongkan kalau tidak mau ganti gambar.</p>
    </div>

    <div class="flex gap-3 pt-2">
        <button type="submit" class="bg-blue-600 text-white px-5 py-2 rounded-md text-sm font-medium hover:bg-blue-700">Simpan Perubahan</button>
        <a href="{{ route('admin.artikel.index') }}" class="px-5 py-2 rounded-md text-sm text-slate-600 hover:bg-slate-100">Batal</a>
    </div>
</form>
@endsection
