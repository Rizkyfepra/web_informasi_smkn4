<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Produk - SMKN 4 Kota Bogor</title>
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
    <h1 class="font-serif text-3xl md:text-4xl font-semibold text-slate-900 mb-10">Produk</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      @forelse ($daftarProduk as $produk)
        <article class="bg-white rounded-2xl border border-slate-200 overflow-hidden">
          <div class="h-56 bg-slate-200 overflow-hidden">
            @if ($produk->gambar)
              <img src="{{ Storage::url($produk->gambar) }}" alt="{{ $produk->nama }}" class="w-full h-full object-cover">
            @endif
          </div>
          <div class="p-6">
            <h3 class="text-xl font-bold text-slate-900 mb-2">{{ $produk->nama }}</h3>
            <p class="text-slate-500 text-sm leading-relaxed mb-3">{{ Str::limit($produk->deskripsi, 100) }}</p>
            @if ($produk->harga)
              <span class="text-sm font-semibold text-slate-900">Rp {{ number_format($produk->harga, 0, ',', '.') }}</span>
            @endif
          </div>
        </article>
      @empty
        <p class="text-slate-400 text-sm">Belum ada produk yang ditambahkan.</p>
      @endforelse
    </div>

    <div class="mt-10">
      {{ $daftarProduk->links() }}
    </div>
  </div>

</body>
</html>
