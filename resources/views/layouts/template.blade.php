<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Link ke Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.0/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* CSS untuk membuat layout sticky footer */
        html, body {
            height: 100%;
            margin: 0;
        }
        body {
            display: flex;
            flex-direction: column;
        }
        main {
            flex: 1; /* Mengisi sisa ruang di antara header dan footer */
        }
        .wave-top {
            position: relative;
            width: 100%;
            height: 100px;
            background: #00a8cc;
            clip-path: polygon(100% 0%, 0% 0%, 0% 100%, 50% 85%, 100% 100%);
        }
        .wave-bottom {
            position: relative;
            width: 100%;
            height: 100px;
            background: #00a8cc;
            clip-path: polygon(100% 100%, 50% 15%, 0% 100%, 0% 0%, 100% 0%);
        }
        /* Tambahkan margin-top pada teks di footer */
        .footer-text {
            margin-top: 20px; /* Atur jarak sesuai keinginan */
        }
    </style>
</head>
<body>
    <!-- Header dengan tema laut -->
    <header class="bg-green-500 text-white p-4">
        {{-- <h1 class="text-center text-3xl font-bold">List Kontak</h1> --}}
        <a href="/login" class="text-white-300 hover:bg-blue-500 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Login page</a>
        <a href="/register" class="text-white-300 hover:bg-blue-500 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Register page</a>
        <a href="/contact" class="text-white-300 hover:bg-blue-500 hover:text-white px-3 py-2 rounded-md text-sm font-medium">contact page</a>
    </header>

    <!-- Konten utama menggunakan main -->
    <main class="container mx-auto mt-5 p-6 bg-white rounded-lg">
        @yield('content')
    </main>

    <!-- Footer dengan tema laut -->
    <footer class=" text-white text-center p-3">
        <p class="footer-text">&copy; 2024 Apikasi Kontak</p>
    </footer>
</body>
</html>
