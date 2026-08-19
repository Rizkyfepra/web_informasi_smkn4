<x-app-layout>
  <div class="max-w-2xl mx-auto px-6 py-10">
    <h1 class="text-2xl font-bold text-slate-900 mb-6">Tambah Galeri</h1>

    <form action="{{ route('admin.galleries.store') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
      @csrf

      <div>
        <label class="block text-sm font-medium text-slate-700 mb-1">Judul</label>
        <input type="text" name="judul" value="{{ old('judul') }}"
               class="w-full border border-slate-300 rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-slate-900">
        @error('judul') <p class="text-red-600 text-xs mt-1">{{ $message }}</p> @enderror
      </div>

      <div>
        <label class="block text-sm font-medium text-slate-700 mb-1">Deskripsi</label>
        <textarea name="deskripsi" rows="4"
                  class="w-full border border-slate-300 rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-slate-900">{{ old('deskripsi') }}</textarea>
        @error('deskripsi') <p class="text-red-600 text-xs mt-1">{{ $message }}</p> @enderror
      </div>

      <div>
        <label class="block text-sm font-medium text-slate-700 mb-1">Kategori</label>
        <input type="text" name="kategori" value="{{ old('kategori') }}" placeholder="Olahraga, Akademik, Fasilitas..."
               class="w-full border border-slate-300 rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-slate-900">
        @error('kategori') <p class="text-red-600 text-xs mt-1">{{ $message }}</p> @enderror
      </div>

      <div>
        <label class="block text-sm font-medium text-slate-700 mb-1">Gambar</label>
        <input type="file" name="gambar" accept="image/*"
               class="w-full border border-slate-300 rounded-md px-3 py-2 text-sm">
        @error('gambar') <p class="text-red-600 text-xs mt-1">{{ $message }}</p> @enderror
      </div>

      <div class="flex gap-3">
        <button type="submit" class="bg-slate-900 text-white px-5 py-2.5 rounded-md text-sm hover:bg-slate-800">Simpan</button>
        <a href="{{ route('admin.galleries.index') }}" class="px-5 py-2.5 rounded-md text-sm border border-slate-300 hover:bg-slate-50">Batal</a>
      </div>
    </form>
  </div>
</x-app-layout>