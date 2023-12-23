<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Checkout - Aplikasi Laundry</title>
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
        .checkout-container {
            text-align: center;
            padding: 20px;
        }
        .checkout-header {
            font-size: 24px;
            margin-bottom: 20px;
            color: #3498db;
        }
        .checkout-form {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin-top: 20px;
        }
        .checkout-form input[type="text"],
        .checkout-form input[type="submit"],
        .checkout-form select,
        .checkout-form textarea {
            padding: 10px;
            margin-bottom: 10px;
            width: 300px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .checkout-form input[type="submit"] {
            background-color: #3498db;
            color: white;
            cursor: pointer;
        }
        .checkout-form input[type="submit"]:hover {
            background-color: #2980b9;
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
        <h1>Selamat Datang di Londry Malaundry!</h1>
        <nav>
            <ul>
                <li><a href="halaman_user.php">Beranda</a></li>
                <li><a href="pesanan.php">Pesanan Saya</a></li>
                <li><a href="logout.php">Keluar</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="checkout-container">
            <h2 class="checkout-header">Formulir Pesanan Laundry</h2>
            <form class="checkout-form" action="proses_pesanan.php" method="post">
                <input type="text" name="nama" placeholder="Nama Anda" required><br>
                <input type="text" name="alamat" placeholder="Alamat Pengambilan" required><br>
                <input type="text" name="nomor_hp" placeholder="Nomor Telepon" required><br>
                <select name="berat">
                    <option value="1">1 kg</option>
                    <option value="2">2 kg</option>
                    <option value="3">3 kg</option>
                    <!-- Tambahkan opsi lain sesuai kebutuhan -->
                </select><br>
                <textarea name="instruksi" placeholder="Instruksi Pengambilan"></textarea><br>
                <input type="submit" value="Proses Pesanan">
            </form>
        </div>
    </main>
</body>
</html>
