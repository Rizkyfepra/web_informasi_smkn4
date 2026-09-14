<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>{{ $artikel->judul }} - SMKN 4 Kota Bogor</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white text-slate-800">

<div class="max-w-3xl mx-auto px-6 py-16">
    <a href="{{ route('artikel.index') }}" class="text-sm text-slate-500 hover:text-slate-900">&larr; Kembali ke Artikel</a>

    @if ($artikel->kategori)
        <span class="inline-block mt-6 text-xs font-medium text-blue-700 bg-blue-50 px-3 py-1 rounded-full">{{ $artikel->kategori }}</span>
    @endif

    <h1 class="text-3xl font-bold text-slate-900 mt-4 mb-2">{{ $artikel->judul }}</h1>
    <p class="text-sm text-slate-400 mb-8">{{ $artikel->created_at->translatedFormat('d M Y') }} &bull; Oleh {{ $artikel->penulis ?? '-' }}</p>

    @if ($artikel->gambar)
        <img src="{{ Storage::url($artikel->gambar) }}" class="w-full h-80 object-cover rounded-2xl mb-8">
    @endif

    <div class="prose max-w-none text-slate-700 leading-relaxed whitespace-pre-line">
        {{ $artikel->isi }}
    </div>
</div>

</body>
</html>
