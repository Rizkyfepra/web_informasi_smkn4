<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SMKN 4 Kota Bogor</title>
<script src="https://cdn.tailwindcss.com"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Playfair+Display:ital,wght@0,600;1,600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<style>
  body { font-family: 'Inter', sans-serif; }
  .font-serif { font-family: 'Playfair Display', serif; }
</style>
</head>
<body class="text-slate-800 antialiased">

  <header class="border-b border-slate-100 relative">
    <nav class="max-w-7xl mx-auto flex items-center justify-between px-6 py-4">
      <div class="flex items-center gap-3">
        <img src="{{ asset('images/SMKN4.png') }}" alt="Logo SMKN 4 Kota Bogor" class="h-9 w-9">
        <span class="font-semibold tracking-wide text-slate-900">SMKN 4 KOTA BOGOR</span>
      </div>

      {{-- Menu buat layar besar (desktop) -- tersembunyi di HP --}}
     
      <div class="hidden md:flex items-center gap-8 text-sm text-slate-600">
        <a href="{{ route('home') }}" class="hover:text-blue-700">Beranda</a>
        <a href="#profil" class="hover:text-blue-700">Profil</a>
        <a href="#artikel" class="hover:text-blue-700">Artikel</a>
        <a href="#galeri-produk" class="hover:text-blue-700">Galeri & Produk</a>
        <a href="#kontak" class="hover:text-blue-700">Kontak</a>
      </div>

      {{-- Tombol hamburger -- cuma keliatan di HP --}}
      <button id="menu-toggle" class="md:hidden text-slate-700" aria-label="Buka menu">
        <i class="fa-solid fa-bars text-xl"></i>
      </button>
    </nav>

    {{-- Menu versi HP -- default tersembunyi (hidden), muncul kalau tombol diklik --}}
    
    <div id="mobile-menu" class="hidden md:hidden border-t border-slate-100 px-6 py-4 space-y-3 text-sm text-slate-600 bg-white">
      <a href="{{ route('home') }}" class="block hover:text-blue-700">Beranda</a>
      <a href="#profil" class="block hover:text-blue-700">Profil</a>
      <a href="#artikel" class="block hover:text-blue-700">Artikel</a>
      <a href="#galeri-produk" class="block hover:text-blue-700">Galeri & Produk</a>
      <a href="#kontak" class="block hover:text-blue-700">Kontak</a>
    </div>
  </header>

  <script>
    // Toggle sederhana: klik tombol -> tambah/hapus class 'hidden' di menu HP
    document.getElementById('menu-toggle').addEventListener('click', function () {
      document.getElementById('mobile-menu').classList.toggle('hidden');
    });
  </script>

  {{-- Hero --}}
  <section class="relative h-[640px] flex items-end">
    <img src="images/lapangan.jpg" alt="Lapangan sekolah" class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/15 to-transparent"></div>

    <div class="relative max-w-7xl mx-auto px-6 pb-16 w-full">
      <h1 class="font-serif text-white text-4xl md:text-5xl leading-tight max-w-2xl">
        Selamat Datang di Website Resmi
      </h1>
      <h1 class="font-serif text-white text-5xl md:text-6xl leading-tight max-w-2xl">
        SMKN 4 Kota Bogor
      </h1>
      <p class="text-white/90 mt-6 max-w-xl leading-relaxed">
        Mewujudkan generasi unggul, berkarakter, dan kompeten di bidang teknologi dan kejuruan. Siap kerja, santun, mandiri, dan kreatif.
      </p>
      <div class="mt-8 flex gap-4">
        <a href="#" class="bg-slate-900 text-white px-6 py-3 rounded-md text-sm font-medium hover:bg-slate-800 transition">Jelajahi Program &rarr;</a>
        <a href="#" class="bg-white/10 backdrop-blur text-white border border-white/40 px-6 py-3 rounded-md text-sm font-medium hover:bg-white/20 transition">Tentang Kami</a>
      </div>
    </div>
  </section>

  {{-- Profil Sekolah --}}
  <section id="profil" class="bg-white">
    <div class="max-w-7xl mx-auto px-6 py-20 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
      <div>
        <h2 class="text-2xl md:text-3xl font-bold text-blue-700 mb-4">Profil Sekolah</h2>
        <p class="text-slate-600 leading-relaxed">
          Kami berdedikasi untuk menciptakan lingkungan belajar yang inklusif, inovatif, dan berpusat
          pada siswa. Dengan tenaga pengajar profesional, kami siap membimbing setiap langkah siswa
          menuju kesuksesan akademis dan karakter yang kuat.
        </p>
      </div>
      <div>
        <img src="{{ asset('images/upacara.JPG') }}" alt="Profil SMKN 4 Kota Bogor"
             class="w-full h-64 md:h-80 object-cover rounded-2xl shadow-md">
      </div>
    </div>
  </section>

  {{-- Program Keahlian --}}
  <section class="bg-slate-50">
    <div class="max-w-7xl mx-auto px-6 py-20">
      <div class="border-slate-900 pl-6 mb-10">
        <h2 class="font-serif text-3xl font-semibold text-slate-900">Program Keahlian</h2>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition duration-300">
          <img class="w-full h-48 object-cover" src="{{ asset('images/TJKT.jpg') }}" alt="Teknik Jaringan Komputer dan Telekomunikasi">
          <div class="p-5">
            <h3 class="font-bold text-lg text-gray-800 mb-2">Teknik Jaringan Komputer dan Telekomunikasi</h3>
          </div>
        </div>

        <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition duration-300">
          <img class="w-full h-48 object-cover" src="{{ asset('images/PPLG.webp') }}" alt="Pengembangan Perangkat Lunak dan Gim">
          <div class="p-5">
            <h3 class="font-bold text-lg text-gray-800 mb-2">Pengembangan Perangkat Lunak dan Gim</h3>
          </div>
        </div>

        <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition duration-300">
          <img class="w-full h-48 object-cover" src="{{ asset('images/TPFL.webp') }}" alt="Teknik Pengelasan dan Fabrikasi Logam">
          <div class="p-5">
            <h3 class="font-bold text-lg text-gray-800 mb-2">Teknik Pengelasan dan Fabrikasi Logam</h3>
          </div>
        </div>

        <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition duration-300">
          <img class="w-full h-48 object-cover" src="{{ asset('images/TO.webp') }}" alt="Teknik Otomotif">
          <div class="p-5">
            <h3 class="font-bold text-lg text-gray-800 mb-2">Teknik Otomotif</h3>
          </div>
        </div>
      </div>
    </div>
  </section>

{{-- ===== Artikel & Pengumuman ===== --}}
    <section id="artikel" class="max-w-7xl mx-auto px-6 py-20">
    <div class="flex items-start justify-between mb-10 flex-wrap gap-4">
      <div>
        <h2 class="font-serif text-3xl font-semibold text-slate-900 mb-2">Artikel & Pengumuman Sekolah</h2>
        <p class="text-slate-500">Temukan warta terbaru, capaian prestasi, agenda akademik, dan informasi sekolah.</p>
      </div>
      <a href="{{ route('artikel.index') }}"
         class="border border-blue-600 text-blue-600 text-sm font-medium px-4 py-2 rounded-md hover:bg-blue-50 transition whitespace-nowrap">
        Lihat Semua Artikel &rarr;
      </a>
    </div>

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
            <p class="text-slate-500 text-sm leading-relaxed mb-4">{{ Str::limit($artikel->ringkasan, 90) }}</p>
            <a href="{{ route('artikel.show', $artikel) }}" class="text-sm font-medium text-blue-700 hover:text-blue-800">Baca Selengkapnya &rarr;</a>
          </div>
        </article>
      @empty
        <p class="text-slate-400 text-sm">Belum ada artikel yang ditambahkan.</p>
      @endforelse
    </div>
  </section>

  {{-- ===== Galeri Kampus & Produk Kreatif Siswa (2 kolom) ===== --}}
    <section id="galeri-produk" class="max-w-7xl mx-auto px-6 pb-20">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

      {{-- Kolom kiri: Galeri --}}
      <div class="border border-slate-200 rounded-2xl p-6">
        <div class="flex items-start justify-between mb-6 flex-wrap gap-3">
          <div>
            <h2 class="font-serif text-2xl font-semibold text-slate-900 mb-1">Galeri Visual</h2>
            <p class="text-slate-500 text-sm">Koleksi rekaman aktivitas siswa, fasilitas belajar, dan agenda sekolah.</p>
          </div>
          <a href="{{ route('galeri.index') }}"
             class="border border-blue-600 text-blue-600 text-xs font-medium px-3 py-1.5 rounded-md hover:bg-blue-50 transition whitespace-nowrap">
            Lihat Semua Foto &rarr;
          </a>
        </div>

        <div class="grid grid-cols-2 gap-4">
          @forelse ($daftarGaleri->take(4) as $galeri)
            <article class="bg-white rounded-xl border border-slate-200 overflow-hidden">
              <div class="h-28 bg-slate-200 overflow-hidden">
                @if ($galeri->gambar)
                  <img src="{{ Storage::url($galeri->gambar) }}" class="w-full h-full object-cover">
                @endif
              </div>
              <div class="p-3">
                <h4 class="text-sm font-bold text-slate-900 mb-1">{{ $galeri->judul }}</h4>
                <div class="flex items-center justify-between text-xs text-slate-400">
                  <span>{{ $galeri->created_at->translatedFormat('d M Y') }}</span>
                  @if ($galeri->kategori)
                    <span class="font-medium text-blue-700 bg-blue-50 px-2 py-0.5 rounded-full">{{ $galeri->kategori }}</span>
                  @endif
                </div>
              </div>
            </article>
          @empty
            <p class="text-slate-400 text-sm col-span-2">Belum ada galeri.</p>
          @endforelse
        </div>
      </div>

      {{-- Kolom kanan: Produk --}}
      <div class="border border-slate-200 rounded-2xl p-6">
        <div class="flex items-start justify-between mb-6 flex-wrap gap-3">
          <div>
            <h2 class="font-serif text-2xl font-semibold text-slate-900 mb-1">Produk Kreatif Siswa</h2>
            <p class="text-slate-500 text-sm">Inovasi perangkat lunak, produk kreatif, dan jasa digital siap pakai.</p>
          </div>
          <a href="{{ route('produk.index') }}"
             class="border border-blue-600 text-blue-600 text-xs font-medium px-3 py-1.5 rounded-md hover:bg-blue-50 transition whitespace-nowrap">
            Katalog Lengkap &rarr;
          </a>
        </div>

        <div class="space-y-4">
          @forelse ($daftarProduk->take(3) as $produk)
            <article class="flex gap-4 border border-slate-200 rounded-xl p-3">
              <div class="w-20 h-20 shrink-0 bg-slate-200 rounded-lg overflow-hidden">
                @if ($produk->gambar)
                  <img src="{{ Storage::url($produk->gambar) }}" class="w-full h-full object-cover">
                @endif
              </div>
                  <div class="flex-1 min-w-0">
                <h4 class="text-sm font-bold text-slate-900 mb-1">{{ $produk->nama }}</h4>
                <p class="text-xs text-slate-500 mb-2 line-clamp-2">{{ Str::limit($produk->deskripsi, 70) }}</p>
                <div class="flex items-center justify-between">
                  @if ($produk->harga)
                    <span class="text-sm font-semibold text-slate-900">Rp {{ number_format($produk->harga, 0, ',', '.') }}</span>
                  @else
                    <span></span>
                  @endif
                  <a href="{{ route('produk.index') }}" class="text-xs font-medium text-blue-700 border border-blue-200 px-2.5 py-1 rounded-md hover:bg-blue-50">Detail</a>
                </div>
              </div>


            </article>
          @empty
            <p class="text-slate-400 text-sm">Belum ada produk.</p>
          @endforelse
        </div>
      </div>

    </div>
  </section>

  {{-- Footer --}}
   <footer id="kontak" class="bg-slate-800 text-white">

    <div class="max-w-7xl mx-auto px-6 py-16 grid grid-cols-1 md:grid-cols-2 gap-12">

      <div>
        <h3 class="text-lg font-semibold mb-6">Kontak Kami</h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-10 gap-y-4 text-sm text-slate-300">

          <ul class="space-y-4">
            <li class="flex items-center gap-3 border-l-2 border-blue-500 pl-3">
              <i class="fa-brands fa-whatsapp text-base"></i>
              <span>{{ $noWhatsapp ?? '+62 821 226 2442' }}</span>
            </li>
            <li class="flex items-center gap-3 border-l-2 border-blue-500 pl-3">
              <i class="fa-brands fa-instagram text-base"></i>
              <span>{{ $instagram ?? '@smkn4kotabogor' }}</span>
            </li>
            <li class="flex items-center gap-3 border-l-2 border-blue-500 pl-3">
              <i class="fa-brands fa-facebook text-base"></i>
              <span>{{ $facebook ?? 'SMKN 4 KOTA BOGOR' }}</span>
            </li>
            <li class="flex items-start gap-3 border-l-2 border-blue-500 pl-3">
              <i class="fa-solid fa-location-dot text-base mt-1"></i>
              <span>{{ $alamat ?? 'Jalan Raya Tajur Kp. Buntar RT02/RW08 Kel. Muarasari Kec. Bogor Selatan Kota Bogor - Jawa Barat 16137' }}</span>
            </li>
          </ul>

          <ul class="space-y-4">
            <li class="flex items-center gap-3 border-l-2 border-blue-500 pl-3">
              <i class="fa-solid fa-envelope text-base"></i>
              <span>{{ $email ?? 'info@smkn4bogor.sch.id' }}</span>
            </li>
            <li class="flex items-center gap-3 border-l-2 border-blue-500 pl-3">
              <i class="fa-brands fa-youtube text-base"></i>
              <span>{{ $youtube ?? '@smknegeri4bogor905' }}</span>
            </li>
          </ul>

        </div>
      </div>

      <div>
        <h3 class="text-lg font-semibold mb-6">Lokasi Kami</h3>
        <div class="relative rounded-lg overflow-hidden h-64 md:h-72">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.049839558919!2d106.8246939!3d-6.640733399999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c8b16ee07ef5%3A0x14ab253dd267de49!2sSMKN%204%20Bogor!5e0!3m2!1sen!2sid!4v1786414560356!5m2!1sen!2sid"
            class="w-full h-full border-0"
            allowfullscreen
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
          <a href="https://maps.google.com/?q=SMKN+4+Bogor"
             target="_blank"
             class="absolute top-3 left-3 bg-white text-slate-900 text-sm font-medium px-3 py-2 rounded-md shadow hover:bg-slate-100 transition flex items-center gap-2">
            Buka di Maps <i class="fa-solid fa-arrow-up-right-from-square text-xs"></i>
          </a>
        </div>
      </div>
    </div>

    <div class="border-t border-slate-700">
      <div class="max-w-7xl mx-auto px-6 py-5 text-center text-xs text-slate-400">
        Copyright &copy; 2025 - {{ date('Y') }} SMKN 4 Bogor.
      </div>
    </div>
  </footer>

</body>
</html>