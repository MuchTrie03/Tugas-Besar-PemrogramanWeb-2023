<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Malaundry - Halaman Utama</title>
    <!-- Tautan CSS untuk gaya halaman -->
    <link rel="stylesheet" href="{{ asset('css/user.css') }}">

</head>
<body>
    <header>
        <!-- Header dengan navigasi -->
        <nav>
            <ul>
                <li style="float:left;"><a href="pricing.php">Beranda</a></li>
                <li><a href="about.php">Tentang Kami</a></li>
                <li><a href="contact.php">Kontak</a></li>
                <li><a href="contact.php">Pesanan</a></li>
                <li style="float:right;"><a href="#">Keluar</a></li>
            </ul>
        </nav>
    </header>
    
    <main>
        <!-- Banner -->
        <section class="banner" style="position: relative; background-image: url('img/user/user_header.jpg'); background-size: cover; background-position: center;">
    <div class="overlay"></div>
    <div class="banner-content">
        <h1>Selamat Datang di Malaundry</h1>
        <p>Kami Menawarkan Layanan Laundry Terbaik</p>
        <!-- Tombol Pemesanan Cepat -->
        <a href="{{ route('chekout/user') }}" class="btn-order">Pesan Sekarang</a>
    </div>
</section>

        <section class="prices">
    <h2>Harga Kami</h2>
    <div class="price-container">
        <div class="price-item">
            <div class="price-info">
                <img src="img/user/Kiloan.jpeg" alt="Harga 1">
                <h3>Rp.7000</h3>
                <p>Londri Kiloan</p>
            </div>
        </div>
        <div class="price-item">
            <div class="price-info">
                <img src="img/user/setrika.jpg" alt="Harga 2">
                <h3>Rp.4000</h3>
                <p>Setrika Rapih</p>
            </div>
        </div>
        <div class="price-item">
            <div class="price-info">
                <img src="img/user/dry.jpg" alt="Harga 3">
                <h3>Rp.3000</h3>
                <p>Mengeringkan Saja</p>
            </div>
        </div>
    </div>
</section>

</main>
    </main>

    <footer>
        <!-- Footer dengan informasi kontak atau tautan lainnya -->
        <p>&copy; 2023 Malaundry. All rights reserved.</p>
    </footer>
</body>
</html>
