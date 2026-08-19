<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Galeri Visual - SMKN 4 Kota Bogor</title>
<script src="https://cdn.tailwindcss.com"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Playfair+Display:ital,wght@0,600;1,600&display=swap" rel="stylesheet">
<style>
  body { font-family: 'Inter', sans-serif; }
  .font-serif { font-family: 'Playfair Display', serif; }
</style>
</head>
<body class="text-slate-800 antialiased bg-slate-50">

  {{-- Header (sama seperti homepage) --}}
  <header class="border-b border-slate-100 bg-white">
    <nav class="max-w-7xl mx-auto flex items-center justify-between px-6 py-4">
      <div class="flex items-center gap-3">
        <div class="h-9 w-9 rounded bg-slate-900 flex items-center justify-center text-white text-xs font-bold">S4</div>
        <span class="font-semibold tracking-wide text-slate-900">SMKN 4 KOTA BOGOR</span>
      </div>
      <a href="{{ url('/') }}" class="text-sm text-slate-700 hover:text-slate-950">&larr; Kembali ke Beranda</a>
    </nav>
  </header>

  {{-- Konten --}}
  <section class="max-w-7xl mx-auto px-6 py-16">
    <div class="mb-10">
      <h1 class="font-serif text-3xl md:text-4xl font-semibold text-slate-900">Galeri Visual</h1>
      <p class="text-slate-500 mt-2">Dokumentasi kegiatan dan fasilitas SMKN 4 Kota Bogor.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      @forelse ($daftarGaleri as $galeri)
        <article class="bg-white rounded-2xl border border-slate-200 overflow-hidden">
          <div class="h-56 bg-slate-200 overflow-hidden">
            @if ($galeri->gambar)
              <img src="{{ Storage::url($galeri->gambar) }}" alt="{{ $galeri->judul }}" class="w-full h-full object-cover">
            @endif
          </div>
          <div class="p-6">
            <h3 class="text-xl font-bold text-slate-900 mb-2">{{ $galeri->judul }}</h3>
            <p class="text-slate-500 text-sm leading-relaxed mb-5">{{ $galeri->deskripsi }}</p>
            <div class="flex items-center justify-between">
              <span class="text-sm text-slate-500">{{ $galeri->created_at->translatedFormat('d M Y') }}</span>
              @if ($galeri->kategori)
                <span class="text-sm font-medium text-blue-700 bg-blue-50 px-4 py-1.5 rounded-full">{{ $galeri->kategori }}</span>
              @endif
            </div>
          </div>
        </article>
      @empty
        <p class="text-slate-400 text-sm col-span-3">Belum ada galeri yang ditambahkan.</p>
      @endforelse
    </div>

    <div class="mt-10">
      {{ $daftarGaleri->links() }}
    </div>
  </section>

</body>
</html>
