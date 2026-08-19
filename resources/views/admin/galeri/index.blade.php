@extends('layouts.admin')

@section('title', 'Kelola Galeri Visual')

@section('content')

  {{-- Stat Box ala AdminLTE --}}
  <div class="grid grid-cols-1 sm:grid-cols-3 gap-5 mb-8">
    <div class="bg-blue-600 text-white rounded-lg p-5 flex items-center justify-between shadow-sm">
      <div>
        <p class="text-3xl font-bold">{{ $daftarGaleri->total() }}</p>
        <p class="text-sm text-blue-100">Total Galeri</p>
      </div>
      <i class="fa-solid fa-images text-4xl text-blue-300"></i>
    </div>

    <div class="bg-emerald-600 text-white rounded-lg p-5 flex items-center justify-between shadow-sm">
      <div>
        <p class="text-3xl font-bold">{{ $daftarGaleri->where('kategori', '!=', null)->pluck('kategori')->unique()->count() }}</p>
        <p class="text-sm text-emerald-100">Kategori Terpakai</p>
      </div>
      <i class="fa-solid fa-tags text-4xl text-emerald-300"></i>
    </div>

    <div class="bg-amber-500 text-white rounded-lg p-5 flex items-center justify-between shadow-sm">
      <div>
        <p class="text-3xl font-bold">{{ $daftarGaleri->where('created_at', '>=', now()->subDays(7))->count() }}</p>
        <p class="text-sm text-amber-100">Ditambahkan 7 Hari Terakhir</p>
      </div>
      <i class="fa-solid fa-clock text-4xl text-amber-200"></i>
    </div>
  </div>

  {{-- Card Tabel --}}
  <div class="bg-white rounded-lg border border-slate-200 shadow-sm">
    <div class="flex items-center justify-between px-5 py-4 border-b border-slate-200">
      <h2 class="font-semibold text-slate-800">Daftar Galeri</h2>
      <a href="{{ route('admin.galeri.create') }}"
         class="bg-blue-600 text-white px-4 py-2 rounded-md text-sm hover:bg-blue-700 transition flex items-center gap-2">
        <i class="fa-solid fa-plus text-xs"></i> Tambah Galeri
      </a>
    </div>

    <div class="overflow-x-auto">
      <table class="w-full text-sm">
        <thead class="bg-slate-50 text-left text-slate-500 uppercase text-xs tracking-wide">
          <tr>
            <th class="px-5 py-3">Gambar</th>
            <th class="px-5 py-3">Judul</th>
            <th class="px-5 py-3">Kategori</th>
            <th class="px-5 py-3">Deskripsi</th>
            <th class="px-5 py-3 w-32">Aksi</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-slate-100">
          @forelse ($daftarGaleri as $galeri)
            <tr class="hover:bg-slate-50">
              <td class="px-5 py-3">
                @if ($galeri->gambar)
                  <img src="{{ Storage::url($galeri->gambar) }}" class="w-16 h-12 object-cover rounded-md">
                @else
                  <span class="text-slate-300 text-xs">Tidak ada</span>
                @endif
              </td>
              <td class="px-5 py-3 font-medium text-slate-800">{{ $galeri->judul }}</td>
              <td class="px-5 py-3">
                @if ($galeri->kategori)
                  <span class="text-xs font-medium text-blue-700 bg-blue-50 px-3 py-1 rounded-full">{{ $galeri->kategori }}</span>
                @endif
              </td>
              <td class="px-5 py-3 text-slate-500">{{ Str::limit($galeri->deskripsi, 60) }}</td>
              <td class="px-5 py-3">
                <div class="flex gap-3">
                  <a href="{{ route('admin.galeri.edit', $galeri) }}" class="text-blue-600 hover:underline">Edit</a>
                  <form action="{{ route('admin.galeri.destroy', $galeri) }}" method="POST"
                        onsubmit="return confirm('Yakin mau hapus?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                  </form>
                </div>
              </td>
            </tr>
          @empty
            <tr>
              <td colspan="5" class="px-5 py-10 text-center text-slate-400">
                <i class="fa-solid fa-inbox text-3xl mb-2 block"></i>
                Belum ada data galeri.
              </td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>

    <div class="px-5 py-4 border-t border-slate-100">
      {{ $daftarGaleri->links() }}
    </div>
  </div>

@endsection
