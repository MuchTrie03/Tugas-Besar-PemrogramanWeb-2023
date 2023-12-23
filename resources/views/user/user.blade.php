<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Halaman User - Aplikasi Laundry</title>
    <style>
        /* CSS untuk tampilan */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
            color: #333;
        }
        header {
            background-color: #3498db;
            padding: 20px 0;
            text-align: center;
            color: white;
        }
        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
        }
        nav ul li {
            margin-right: 20px;
        }
        nav ul li a {
            text-decoration: none;
            color: white;
            transition: color 0.3s ease;
        }
        nav ul li a:hover {
            color: #f1c40f;
        }
        main {
            padding: 20px;
            text-align: center;
        }
        h2 {
            color: #3498db;
        }
        .order-list {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }
        .order-list th, .order-list td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        .order-list th {
            background-color: #3498db;
            color: white;
        }
        .order-list tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        footer {
            background-color: #3498db;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Selamat Datang di MaLaundry</h1>
        <nav>
            <ul>
                <li><a href="halaman_user.php">Beranda</a></li>
                <li><a href="pesanan.php">Pesanan Saya</a></li>
                <li><a href="logout.php">Keluar</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h2>Menu Utama Pengguna</h2>
        <p>Selamat datang, <strong>nama_pengguna</strong>!</p>
        <h3>Daftar Pesanan</h3>
        <table class="order-list">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal Pesanan</th>
                    <th>Total</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <!-- Isi dengan data pesanan dari PHP atau database -->
                <tr>
                    <td>1</td>
                    <td>2023-12-25</td>
                    <td>Rp 150,000</td>
                    <td>Selesai</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>2023-12-26</td>
                    <td>Rp 200,000</td>
                    <td>Menunggu</td>
                </tr>
                <!-- Contoh data, gunakan data sesuai dengan aplikasi yang sebenarnya -->
            </tbody>
        </table>
    </main>

    <footer>
        <p>Hak Cipta © 2023 Malaundry</p>
    </footer>
</body>
</html>
