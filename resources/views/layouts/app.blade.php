<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'MI Maarif Mambaul Huda')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>

    <!-- Navbar -->
    <header id="navbar" class="navbar">
        <div class="container">
            <div class="logo-container">
                <img src="{{ asset('assets/icons/MI.ico') }}" alt="Logo" class="logo">
            </div>
            <nav class="nav-container">
                <ul class="nav-menu">
                    <li><a href="/">Beranda</a></li>
                    <li><a href="#">Profil</a></li>
                    <li><a href="#">Absen</a></li>
                    <li><a href="#">Perpustakaan</a></li>
                    <li><a href="#">Kontak</a></li>
                </ul>
            </nav>
            <a href="{{ route('pilihan.login') }}" class="register-btn">Login</a>
        </div>
    </header>

    <!-- Background Gambar -->
    @if(Request::is('/'))
    <section class="hero">
        <div class="full-bg">
            <h1 class="fade-in">Selamat Datang <br> Di MI Maarif Mambaul Huda</h1>            
        </div>
    </section>
    @endif

    <!-- Konten Halaman -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <p>&copy; 2025 MI Maarif Mambaul Huda. Semua Hak Cipta Dilindungi.</p>
            <ul class="footer-links">
                <li><a href="#">Beranda</a></li>
                <li><a href="#">Profil</a></li>
                <li><a href="#">Absen</a></li>
                <li><a href="#">Perpustakaan</a></li>
                <li><a href="#">Kontak</a></li>
            </ul>
        </div>
    </footer>

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
