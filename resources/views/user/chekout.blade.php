<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pesanan - Aplikasi Laundry</title>
    <link rel="stylesheet" href="{{ asset('css/chekout.css') }}">
</head>
<body>
    <main class="container">
        <form action="{{ route('pesanan.store') }}" method="post">
            <section class="order-form mb-4">
                <h2>Detail Pesanan</h2>
                <div class="form-group">
                    <label for="name">Nama Pemesan:</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="service-type">Tipe Layanan:</label>
                    <select class="form-control" id="service-type" name="service-type" onchange="calculatePrice()" required>
                        <option value="cuci-kiloan">Cuci Kiloan</option>
                        <option value="setrika">Setrika</option>
                        <option value="dry-cleaning">Dry Cleaning</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="weight">Berat (kg):</label>
                    <select class="form-control" id="weight" name="weight" onchange="calculatePrice()" required>
                        <!-- Pilihan berat dari 1 kg hingga 10 kg -->
                        <option value="1">1 kg</option>
                        <option value="2">2 kg</option>
                        <option value="3">3 kg</option>
                        <option value="4">4 kg</option>
                        <option value="5">5 kg</option>
                        <option value="6">6 kg</option>
                        <option value="7">7 kg</option>
                        <option value="8">8 kg</option>
                        <option value="9">9 kg</option>
                        <option value="10">10 kg</option>
                        <!-- Pengguna dapat memasukkan nilai berat yang lebih besar jika diperlukan -->
                    </select>
                </div>
                <div class="form-group">
                    <label for="pickup-address">Alamat Jemput:</label>
                    <textarea class="form-control" id="pickup-address" name="pickup-address" required></textarea>
                </div>
                <div class="form-group">
                    <label for="total-price">Total Harga:</label>
                    <input type="text" class="form-control" id="total-price" name="total-price" readonly>
                </div>
            </section>
            @csrf
            <button type="submit" class="btn btn-primary btn-block">Pesan Sekarang</button>
        </form>
    </main>

    <!-- <footer>
        <p>&copy; 2023 Aplikasi Laundry. All rights reserved.</p>
    </footer> -->

    <script>
        function calculatePrice() {
            const serviceType = document.getElementById("service-type").value;
            const weight = document.getElementById("weight").value;
            let price = 0;

            if (serviceType === "cuci-kiloan") {
                price = weight * 7000;
            } else if (serviceType === "setrika") {
                price = weight * 5000;
            } else if (serviceType === "dry-cleaning") {
                price = weight * 4000;
            }

            document.getElementById("total-price").value = `Rp${price}`;
        }
    </script>
</body>
</html>
