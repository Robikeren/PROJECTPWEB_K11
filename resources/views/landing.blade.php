<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BrownyGift</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Tema putih & pink */
        body {
            font-family: Arial, sans-serif;
            background-color: #fff;
            color: #333;
        }
        .navbar {
            background-color: #ffc0cb; /* pink */
        }
        .navbar-brand, .nav-link {
            color: #fff !important;
        }
        .btn-login {
            background-color: #fff;
            color: #ffc0cb;
            border: 2px solid #fff;
        }
        .btn-login:hover {
            background-color: #ffc0cb;
            color: #fff;
        }
        header {
            background-color: #fff0f5; /* pink muda */
            padding: 100px 0;
            text-align: center;
        }
        header h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            color: #ff69b4;
        }
        header p {
            font-size: 1.2rem;
            color: #555;
        }
        section {
            padding: 60px 0;
        }
        section h2 {
            text-align: center;
            margin-bottom: 40px;
            color: #ff69b4;
        }
        footer {
            background-color: #ffc0cb;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="#">BrownyGift</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#about">Tentang Kami</a></li>
                <li class="nav-item"><a class="nav-link" href="#services">Layanan</a></li>
                <li class="nav-item"><a class="nav-link" href="#products">Produk</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Hubungi Kami</a></li>
                <li class="nav-item"><a class="btn btn-login ms-3" href="{{ url('/login') }}">Login</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Header -->
<header>
    <div class="container">
        <h1>BrownyGift</h1>
        <p>Solusi Kado Cantik & Manis untuk Orang Terdekat</p>
        <a href="{{ url('/login') }}" class="btn btn-success mt-3">Masuk Sekarang</a>
    </div>
</header>

<!-- Tentang Kami -->
<section id="about">
    <div class="container">
        <h2>Tentang Kami</h2>
        <p class="text-center">BrownyGift hadir untuk memberikan pengalaman hadiah terbaik. Kami menyediakan berbagai produk cantik dan manis untuk momen spesial Anda.</p>
    </div>
</section>

<!-- Layanan -->
<section id="services" style="background-color:#fff0f5;">
    <div class="container">
        <h2>Layanan</h2>
        <div class="row text-center">
            <div class="col-md-4">
                <h4>Pengiriman Cepat</h4>
                <p>Kami menjamin kado sampai tepat waktu dan aman.</p>
            </div>
            <div class="col-md-4">
                <h4>Custom Kado</h4>
                <p>Bisa menyesuaikan kado sesuai keinginan Anda.</p>
            </div>
            <div class="col-md-4">
                <h4>Pembayaran Aman</h4>
                <p>Transaksi mudah dan aman dengan berbagai metode.</p>
            </div>
        </div>
    </div>
</section>

<!-- Produk -->
<section id="products">
    <div class="container">
        <h2>Produk Kami</h2>
        <div class="row text-center">
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/250x150" class="card-img-top" alt="Produk 1">
                    <div class="card-body">
                        <h5 class="card-title">Browny Box</h5>
                        <p class="card-text">Kado brownies cantik dikemas elegan.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/250x150" class="card-img-top" alt="Produk 2">
                    <div class="card-body">
                        <h5 class="card-title">Cupcake Gift</h5>
                        <p class="card-text">Cupcake manis dikemas eksklusif untuk hadiah.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/250x150" class="card-img-top" alt="Produk 3">
                    <div class="card-body">
                        <h5 class="card-title">Chocolate Set</h5>
                        <p class="card-text">Cokelat berkualitas dalam kotak elegan.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/250x150" class="card-img-top" alt="Produk 4">
                    <div class="card-body">
                        <h5 class="card-title">Gift Hamper</h5>
                        <p class="card-text">Paket lengkap kado manis untuk orang tersayang.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Hubungi Kami -->
<section id="contact" style="background-color:#fff0f5;">
    <div class="container">
        <h2>Hubungi Kami</h2>
        <p class="text-center">Email: info@brownygift.com | Telp: 08123456789</p>
        <p class="text-center">Alamat: Jl. Cokelat No.1, Kota Manis, Indonesia</p>
    </div>
</section>

<!-- Footer -->
<footer>
    <div class="container">
        <p>&copy; 2025 BrownyGift. All Rights Reserved.</p>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
