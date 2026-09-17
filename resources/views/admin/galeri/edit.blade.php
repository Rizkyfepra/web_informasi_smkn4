@extends('layouts.admin')

@section('title', 'Edit Galeri')

@section('content')
<h1 class="text-2xl font-bold text-slate-900 mb-6">Edit Galeri</h1>

<form action="{{ route('admin.galeri.update', $galeri) }}" method="POST" enctype="multipart/form-data"
      class="bg-white rounded-xl border border-slate-200 p-6 max-w-xl space-y-5">
    @csrf
    @method('PUT')

    <div>
        <label class="block text-sm font-medium text-slate-700 mb-1">Foto</label>
        @if ($galeri->gambar)
            <img src="{{ Storage::url($galeri->gambar) }}" class="w-32 h-32 object-cover rounded-md mb-2">
        @endif
        <input type="file" name="gambar" accept="image/*" class="text-sm">
        <p class="text-xs text-slate-400 mt-1">Kosongkan kalau tidak mau ganti foto.</p>
        @error('gambar') <p class="text-red-600 text-xs mt-1">{{ $message }}</p> @enderror
    </div>

    <div class="flex gap-3 pt-2">
        <button type="submit" class="bg-blue-600 text-white px-5 py-2 rounded-md text-sm font-medium hover:bg-blue-700">Simpan Perubahan</button>
        <a href="{{ route('admin.galeri.index') }}" class="px-5 py-2 rounded-md text-sm text-slate-600 hover:bg-slate-100">Batal</a>
    </div>
</form>
@endsection
