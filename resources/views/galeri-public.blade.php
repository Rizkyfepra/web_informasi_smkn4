<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Galeri Visual - SMKN 4 Kota Bogor</title>
<script src="https://cdn.tailwindcss.com"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Playfair+Display:ital,wght@0,600;1,600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<style>
  body { font-family: 'Inter', sans-serif; }
  .font-serif { font-family: 'Playfair Display', serif; }
</style>
</head>
<body class="text-slate-800 antialiased bg-slate-50">

  @include('partials.navbar')

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
              <img src="{{ Storage::url($galeri->gambar) }}" class="w-full h-full object-cover cursor-pointer hover:opacity-80 transition"
                   onclick="openLightbox('{{ Storage::url($galeri->gambar) }}')">
            @endif
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

  @include('partials.lightbox')

</body>
</html>
