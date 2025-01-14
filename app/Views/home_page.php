<?= $this->extend('laiout/tamplate') ?>

<?= $this->section('content') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <style>
        /* Reset CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }

        /* Hero Section */
        .hero {
            background: url('https://tse2.mm.bing.net/th?id=OIF.ah34SPLW8CR8QXUpizWhMA&pid=Api&P=0&h=180') no-repeat center center/cover;
            color: #fff;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .hero h1 {
            font-size: 3rem;
        }

        .hero p {
            margin: 1rem 0;
            font-size: 1.2rem;
        }

        .hero .cta {
            background: #ff5722;
            color: #fff;
            padding: 0.8rem 1.5rem;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s;
        }

        .hero .cta:hover {
            background: #e64a19;
        }

        /* About Section */
        .about {
            padding: 2rem 1rem;
            text-align: center;
        }

        .about img {
            max-width: 100%;
            height: auto;
            margin-top: 1rem;
        }

        /* Services Section */
        .services {
            padding: 2rem 1rem;
            background: #f9f9f9;
        }

        .services .grid {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
            justify-content: center;
        }

        .services .card {
            background: #fff;
            padding: 1rem;
            border: 1px solid #ddd;
            border-radius: 8px;
            text-align: center;
            width: 300px;
        }

        .services .card h3 {
            margin-bottom: 0.5rem;
        }

        .services .btn {
            display: inline-block;
            margin-top: 1rem;
            background: #007bff;
            color: #fff;
            padding: 0.5rem 1rem;
            text-decoration: none;
            border-radius: 5px;
        }

        .services .btn:hover {
            background: #0056b3;
        }

        /* Testimonials Section */
        .testimonials {
            padding: 2rem 1rem;
            background: #fff;
        }

        .testimonials .testimonial {
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .testimonials h4 {
            margin-top: 0.5rem;
            font-weight: normal;
            color: #555;
        }

        /* Footer */
        .footer {
            background: #333;
            color: #fff;
            padding: 1rem 0;
            text-align: center;
        }

        .footer .social-media a {
            color: #fff;
            margin: 0 0.5rem;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer .social-media a:hover {
            color: #ff5722;
        }
    </style>
</head>

<body>
    <!-- Hero Section -->
<header class="hero">
    <div class="hero-content">
        <h1>Ubah Ide Anda Menjadi Kenyataan</h1>
        <p>Kami membantu Anda menciptakan solusi inovatif untuk masa depan.</p>
        <a href="#about" class="cta">Pelajari Lebih Lanjut</a>
    </div>
</header>

<!-- About Section -->
<section id="about" class="about">
    <div class="container">
        <h2>Tentang Kami</h2>
        <p>Kami adalah tim inovator yang berkomitmen untuk menciptakan solusi teknologi terbaik untuk membantu bisnis Anda tumbuh.</p>
        <img src="https://tse2.mm.bing.net/th?id=OIF.ah34SPLW8CR8QXUpizWhMA&pid=Api&P=0&h=180" alt="Tentang Kami">
    </div>
</section>

<!-- Produk/Layanan -->
<section id="services" class="services">
    <div class="container">
        <h2>Produk dan Layanan</h2>
        <div class="grid">
            <div class="card">
                <h3>Produk 1</h3>
                <p>Deskripsi singkat produk 1.</p>
                <a href="#" class="btn">Lihat Detail</a>
            </div>
            <div class="card">
                <h3>Produk 2</h3>
                <p>Deskripsi singkat produk 2.</p>
                <a href="#" class="btn">Lihat Detail</a>
            </div>
            <div class="card">
                <h3>Produk 3</h3>
                <p>Deskripsi singkat produk 3.</p>
                <a href="#" class="btn">Lihat Detail</a>
            </div>
        </div>
    </div>
</section>

<!-- Testimoni -->
<section id="testimonials" class="testimonials">
    <div class="container">
        <h2>Testimoni Pelanggan</h2>
        <div class="testimonial">
            <p>"Layanan ini luar biasa! Sangat membantu bisnis saya."</p>
            <h4>- Nama Pelanggan</h4>
        </div>
        <div class="testimonial">
            <p>"Hasil yang luar biasa, sangat profesional!"</p>
            <h4>- Nama Pelanggan</h4>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <p>&copy; 2024 Nama Perusahaan. Semua Hak Dilindungi.</p>
        <div class="social-media">
            <a href="#">Instagram</a>
            <a href="#">Facebook</a>
            <a href="#">LinkedIn</a>
            <a href="#">Twitter</a>
        </div>
    </div>
</footer>
</body>

</html>


<?= $this->endSection() ?>