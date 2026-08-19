<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Admin') - SMKN 4 Kota Bogor</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 text-slate-800">

  <nav class="bg-slate-900 text-white px-6 py-4 flex items-center justify-between">
    <a href="{{ route('admin.galeri.index') }}" class="font-semibold">Admin Panel - SMKN 4 Bogor</a>
    <a href="{{ url('/') }}" class="text-sm text-slate-300 hover:text-white">&larr; Kembali ke Website</a>
  </nav>

  <main>
    @yield('content')
  </main>

</body>
</html>
