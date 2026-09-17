  <header class="border-b border-slate-100 relative bg-white">
    <nav class="max-w-7xl mx-auto flex items-center justify-between px-6 py-4">
      <div class="flex items-center gap-3">
        <img src="{{ asset('images/SMKN4.png') }}" alt="Logo SMKN 4 Kota Bogor" class="h-9 w-9">
        <span class="font-semibold tracking-wide text-slate-900">SMKN 4 KOTA BOGOR</span>
      </div>

      <div class="hidden md:flex items-center gap-8 text-sm text-slate-600">
        <a href="{{ route('home') }}" class="hover:text-blue-700">Beranda</a>
        <a href="{{ route('home') }}#profil" class="hover:text-blue-700">Profil</a>
        <a href="{{ route('home') }}#artikel" class="hover:text-blue-700">Artikel</a>
        <a href="{{ route('home') }}#galeri-produk" class="hover:text-blue-700">Galeri & Produk</a>
        <a href="{{ route('home') }}#kontak" class="hover:text-blue-700">Kontak</a>
      </div>

      <button id="menu-toggle" class="md:hidden text-slate-700" aria-label="Buka menu">
        <i class="fa-solid fa-bars text-xl"></i>
      </button>
    </nav>

    <div id="mobile-menu" class="hidden md:hidden border-t border-slate-100 px-6 py-4 space-y-3 text-sm text-slate-600 bg-white">
      <a href="{{ route('home') }}" class="block hover:text-blue-700">Beranda</a>
      <a href="{{ route('home') }}#profil" class="block hover:text-blue-700">Profil</a>
      <a href="{{ route('home') }}#artikel" class="block hover:text-blue-700">Artikel</a>
      <a href="{{ route('home') }}#galeri-produk" class="block hover:text-blue-700">Galeri & Produk</a>
      <a href="{{ route('home') }}#kontak" class="block hover:text-blue-700">Kontak</a>
    </div>
  </header>

  <script>
    document.getElementById('menu-toggle').addEventListener('click', function () {
      document.getElementById('mobile-menu').classList.toggle('hidden');
    });
  </script>
