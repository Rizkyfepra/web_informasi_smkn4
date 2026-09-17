<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Artikel - SMKN 4 Kota Bogor</title>
<script src="https://cdn.tailwindcss.com"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Playfair+Display:ital,wght@0,600;1,600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<style>
  body { font-family: 'Inter', sans-serif; }
  .font-serif { font-family: 'Playfair Display', serif; }
</style>
</head>
<body class="text-slate-800 antialiased bg-white">

  @include('partials.navbar')

  <div class="max-w-7xl mx-auto px-6 py-16">
    <h1 class="font-serif text-3xl md:text-4xl font-semibold text-slate-900 mb-10">Artikel & Pengumuman</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      @forelse ($daftarArtikel as $artikel)
        <article class="bg-white rounded-2xl border border-slate-200 overflow-hidden">
          <div class="h-48 bg-slate-200 overflow-hidden relative">
            @if ($artikel->gambar)
              <img src="{{ Storage::url($artikel->gambar) }}" class="w-full h-full object-cover">
            @endif
            @if ($artikel->kategori)
              <span class="absolute top-3 left-3 text-xs font-medium text-white bg-blue-700 px-3 py-1 rounded-full">{{ $artikel->kategori }}</span>
            @endif
          </div>
          <div class="p-6">
            <p class="text-xs text-slate-400 mb-2">{{ $artikel->created_at->translatedFormat('d M Y') }}</p>
            <h3 class="text-lg font-bold text-slate-900 mb-2">{{ $artikel->judul }}</h3>
            <p class="text-slate-500 text-sm leading-relaxed mb-4">{{ Str::limit($artikel->ringkasan, 100) }}</p>
            <a href="{{ route('artikel.show', $artikel) }}" class="text-sm font-medium text-blue-700 hover:text-blue-800">Baca Selengkapnya &rarr;</a>
          </div>
        </article>
      @empty
        <p class="text-slate-400 text-sm">Belum ada artikel.</p>
      @endforelse
    </div>

    <div class="mt-10">{{ $daftarArtikel->links() }}</div>
  </div>

</body>
</html>
