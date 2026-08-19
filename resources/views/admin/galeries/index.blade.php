<x-app-layout> {{-- sesuaikan dengan layout admin kamu --}}
  <div class="max-w-5xl mx-auto px-6 py-10">

    <div class="flex items-center justify-between mb-6">
      <h1 class="text-2xl font-bold text-slate-900">Kelola Galeri Visual</h1>
      <a href="{{ route('admin.galleries.create') }}"
         class="bg-slate-900 text-white px-4 py-2 rounded-md text-sm hover:bg-slate-800">
        + Tambah Galeri
      </a>
    </div>

    @if (session('success'))
      <div class="bg-green-100 text-green-700 text-sm px-4 py-3 rounded-md mb-4">
        {{ session('success') }}
      </div>
    @endif

    <table class="w-full text-sm border border-slate-200 rounded-lg overflow-hidden">
      <thead class="bg-slate-100 text-left text-slate-600">
        <tr>
          <th class="px-4 py-3">Judul</th>
          <th class="px-4 py-3">Deskripsi</th>
          <th class="px-4 py-3 w-32">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($galleries as $Galery)
          <tr class="border-t border-slate-100">
            <td class="px-4 py-3 font-medium text-slate-800">{{ $Galery->judul }}</td>
            <td class="px-4 py-3 text-slate-500">{{ Str::limit($Galery->deskripsi, 60) }}</td>
            <td class="px-4 py-3 flex gap-3">
              <a href="{{ route('admin.galleries.edit', $Galery) }}" class="text-blue-600 hover:underline">Edit</a>
              <form action="{{ route('admin.galleries.destroy', $Galery) }}" method="POST"
                    onsubmit="return confirm('Yakin mau hapus?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-red-600 hover:underline">Hapus</button>
              </form>
            </td>
          </tr>
        @empty
          <tr>
            <td colspan="3" class="px-4 py-6 text-center text-slate-400">Belum ada data galeri.</td>
          </tr>
        @endforelse
      </tbody>
    </table>

    <div class="mt-6">{{ $galleries->links() }}</div>
  </div>
</x-app-layout>