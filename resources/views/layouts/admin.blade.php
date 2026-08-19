<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Dashboard') - Admin SMKN 4 Bogor</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <style>
    body { font-family: 'Inter', system-ui, sans-serif; }
  </style>
</head>
<body class="bg-slate-100 text-slate-800" x-data="{ sidebarOpen: false }">

  <div class="min-h-screen flex">

    {{-- ===== SIDEBAR ===== --}}
    <aside
      class="fixed inset-y-0 left-0 z-30 w-64 bg-slate-900 text-slate-300 flex flex-col transition-transform -translate-x-full md:translate-x-0"
      :class="sidebarOpen && '!translate-x-0'">

      {{-- Brand --}}
      <div class="h-16 flex items-center gap-3 px-5 border-b border-slate-800">
        <div class="h-9 w-9 rounded bg-blue-600 flex items-center justify-center text-white text-xs font-bold">S4</div>
        <span class="text-white font-semibold text-sm leading-tight">SMKN 4 Bogor<br><span class="text-slate-400 font-normal text-xs">Admin Panel</span></span>
      </div>

      {{-- Menu --}}
      <nav class="flex-1 overflow-y-auto py-4 px-3 space-y-1">
        <p class="px-3 text-[11px] uppercase tracking-wider text-slate-500 mb-2">Menu Utama</p>

        <a href="{{ route('admin.galeri.index') }}"
           class="flex items-center gap-3 px-3 py-2.5 rounded-md text-sm transition
                  {{ request()->routeIs('admin.galeri.*') ? 'bg-blue-600 text-white' : 'hover:bg-slate-800 hover:text-white' }}">
          <i class="fa-solid fa-images w-4 text-center"></i>
          Galeri Visual
        </a>

        <a href="{{ url('/') }}" target="_blank"
           class="flex items-center gap-3 px-3 py-2.5 rounded-md text-sm hover:bg-slate-800 hover:text-white transition">
          <i class="fa-solid fa-globe w-4 text-center"></i>
          Lihat Website
        </a>
      </nav>

      {{-- Footer sidebar --}}
      <div class="border-t border-slate-800 px-5 py-4 text-xs text-slate-500">
        &copy; {{ date('Y') }} SMKN 4 Kota Bogor
      </div>
    </aside>

    {{-- Overlay mobile --}}
    <div x-show="sidebarOpen" @click="sidebarOpen = false"
         class="fixed inset-0 bg-black/40 z-20 md:hidden" style="display:none"></div>

    {{-- ===== MAIN AREA ===== --}}
    <div class="flex-1 md:ml-64 min-h-screen flex flex-col">

      {{-- Topbar --}}
      <header class="h-16 bg-white border-b border-slate-200 flex items-center justify-between px-6 sticky top-0 z-10">
        <div class="flex items-center gap-4">
          <button @click="sidebarOpen = !sidebarOpen" class="md:hidden text-slate-500">
            <i class="fa-solid fa-bars text-lg"></i>
          </button>
          <h1 class="text-lg font-semibold text-slate-800">@yield('title', 'Dashboard')</h1>
        </div>
        <div class="flex items-center gap-3 text-sm text-slate-500">
          <i class="fa-solid fa-circle-user text-xl"></i>
          <span>Admin</span>
        </div>
      </header>

      {{-- Breadcrumb --}}
      <div class="px-6 py-3 text-xs text-slate-500 border-b border-slate-200 bg-white">
        <a href="{{ route('admin.galeri.index') }}" class="hover:text-slate-700">Admin</a>
        <span class="mx-1">/</span>
        <span class="text-slate-700 font-medium">@yield('title', 'Dashboard')</span>
      </div>

      {{-- Konten --}}
      <main class="flex-1 p-6">
        @if (session('success'))
          <div class="bg-green-100 text-green-700 text-sm px-4 py-3 rounded-md mb-6 flex items-center gap-2">
            <i class="fa-solid fa-circle-check"></i>
            {{ session('success') }}
          </div>
        @endif

        @yield('content')
      </main>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</body>
</html>
