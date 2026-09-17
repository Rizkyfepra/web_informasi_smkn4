<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{{ $artikel->judul }} - SMKN 4 Kota Bogor</title>
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

  <div class="max-w-3xl mx-auto px-6 py-16">
    <a href="{{ route('artikel.index') }}" class="text-sm text-slate-500 hover:text-slate-900">&larr; Kembali ke Artikel</a>

    @if ($artikel->kategori)
      <span class="inline-block mt-6 text-xs font-medium text-blue-700 bg-blue-50 px-3 py-1 rounded-full">{{ $artikel->kategori }}</span>
    @endif

    <h1 class="font-serif text-3xl font-bold text-slate-900 mt-4 mb-2">{{ $artikel->judul }}</h1>
    <p class="text-sm text-slate-400 mb-8">{{ $artikel->created_at->translatedFormat('d M Y') }}</p>

    @if ($artikel->gambar)
      <img src="{{ Storage::url($artikel->gambar) }}" class="w-full h-80 object-cover rounded-2xl mb-8">
    @endif

    <div class="prose max-w-none text-slate-700 leading-relaxed whitespace-pre-line">
      {{ $artikel->isi }}
    </div>
  </div>

</body>
</html>
