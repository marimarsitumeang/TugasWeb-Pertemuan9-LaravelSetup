<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Tugas Web P9</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 min-h-screen flex flex-col">
    <nav class="bg-indigo-600 text-white shadow">
        <div class="max-w-4xl mx-auto px-4 py-4 flex flex-wrap gap-6 items-center">
            <a href="/" class="font-bold text-lg">Dashboard</a>
            <a href="/about" class="hover:underline">About</a>
            <a href="/contact" class="hover:underline">Contact</a>
            <a href="/mahasiswa" class="hover:underline">Mahasiswa</a>
        </div>
    </nav>

    <main class="max-w-4xl mx-auto px-4 py-10 flex-1 w-full">
        @yield('content')
    </main>

    <footer class="text-center text-sm text-gray-500 py-6">
        &copy; {{ date('Y') }} Tugas Pemrograman Web - Pertemuan 9
    </footer>
</body>
</html>