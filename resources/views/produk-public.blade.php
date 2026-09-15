<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Produk - SMKN 4 Kota Bogor</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white text-slate-800">

<div class="max-w-7xl mx-auto px-6 py-16">
    <a href="{{ route('home') }}" class="text-sm text-slate-500 hover:text-slate-900">&larr; Kembali ke Beranda</a>

    <h1 class="text-3xl font-bold text-slate-900 mt-4 mb-10">Produk</h1>

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
