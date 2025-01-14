<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>HOME | MARCEAU TRAV</title>
    <style>
        /* Background gambar langsung di sini */
        body {
            margin: 0;
            padding: 0;
            height: 100vh; /* Mengatur tinggi body untuk seluruh layar */
            background-image: url('{{ asset('img/home.jpg') }}'); /* Menggunakan helper asset() untuk gambar */
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover; /* Menutupi seluruh layar */
            color: white; /* Menjadikan teks putih untuk kontras */
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-custom sticky-top">
        <div class="container">
            <!-- Left Side: Logo and "Home" text -->
            <a class="navbar-brand d-flex align-items-center text-white" href="/home">
                <img src="img/lg_kapal_putih.png" alt="logo" class="navbar-logo">
                <span class="ms-2 navbar-home">Home</span>
            </a>

            <!-- Right Side: 3 images and "Log out" text -->
            <div class="d-flex align-items-center ms-auto">
                <a href="/notif" class="nav-icon me-2">
                    <img src="img/notif.png" alt="image1" class="nav-icon">
                </a>
                <a href="/riwayat" class="nav-icon me-2">
                    <img src="img/riwayat.png" alt="image2" class="nav-icon">
                </a>
                <a href="/profil" class="nav-icon me-2">
                    <img src="img/profil.png" alt="image3" class="nav-icon">
                </a>
                <a href="/logout" class="text-white">Log out</a>
            </div>
            
        </div>
    </nav>
    <div class="container mt-5 p-5">
        <h1><font face="Comic Sans MS"> Nikmati Perjalanan Dengan</font></h1>
        <h1><font face="Comic Sans MS">Tenang Dan Nyaman</font></h1>
        <p><font face="Comic Sans MS">Akses Cepat, Transaksi Cepat, Perjalanan Nyaman</font></p>

        <div class="search-container mt-5">
            <form class="search-form" method="GET" action="{{ url('/mencari_tiket') }}">
                <!-- Asal -->
                <select name="lokasi_keberangkatan" id="lokasi_keberangkatan">
                    <option value="">Pilih Asal</option>
                    <option value="Tulehu">Tulehu</option>
                    <option value="Masohi">Masohi</option>
                    <option value="Amahai">Amahai</option>
                </select>
            
                <!-- Tujuan -->
                <select name="lokasi_tujuan" id="lokasi_tujuan">
                    <option value="">Pilih Tujuan</option>
                    <option value="Tulehu">Tulehu</option>
                    <option value="Masohi">Masohi</option>
                    <option value="Amahai">Amahai</option>
                </select>
            
                <!-- Tanggal -->
                <input type="date" name="waktu_keberangkatan" id="waktu_keberangkatan">
            
                <!-- Tombol Search -->
                <button type="submit">
                    <i class="bi bi-search"></i>
                </button>
            </form>
            
        </div>
    </div>

    <div class="recommendation-section ">
        <h2 >Rekomendasi Tempat Liburan</h2>
        <div class="container d-flex justify-content-center flex-wrap">
            <div class="container d-flex justify-content-between flex-wrap">
                <!-- Wisata 1 -->
                <div class="place-card" style="width: 18rem;">
                    <img src="img/pantai_liang.jpg" class="card-img-top" alt="Pantai Liang">
                    <div class="card-body">
                        <h5 class="card-title">Pantai Liang</h5>
                        <p class="card-text">Pantai Liang merupakan pantai yang terletak di Liang, Salahutu, Maluku Tengah, Provinsi Maluku. Pantai ini terletak 40 km dari pusat Kota Ambon.</p>
                    </div>
                </div>         
                <!-- Wisata 2 -->
                <div class="place-card" style="width: 18rem;">
                    <img src="img/pantai_ora.jpg" class="card-img-top" alt="Pantai Ora">
                    <div class="card-body">
                        <h5 class="card-title">Pantai Ora</h5>
                        <p class="card-text">Pantai Ora adalah pantai yang terletak di Pulau Seram, Kecamatan Seram Utara, Maluku Tengah, Maluku, Indonesia.</p>
                    </div>
                </div>
            
                <!-- Wisata 3 -->
                <div class="place-card" style="width: 18rem;">
                    <img src="img/taman_manusela.png" class="card-img-top" alt="Taman Nasional Manusela">
                    <div class="card-body">
                        <h5 class="card-title">Taman Nasional Manusela</h5>
                        <p class="card-text">Taman Nasional Manusela merupakan perwakilan tipe ekosistem pantai, hutan rawa, hutan hujan dataran rendah dan hutan hujan pegunungan di Maluku.</p>
                    </div>
                </div>
            </div>      
        </div>
    </div>
    <!-- Footer -->
    <footer class="footer bg-light ">
        <div class="container d-flex justify-content-between align-items-center py-4">
            <!-- Bagian 1: Logo -->
            <div class="footer-logo">
                <img src="img/lg_bawah.png" alt="Logo2" style="width: 300px; height: 150px;">
            </div>

            <!-- Bagian 2: Contact Information -->
            <div class="footer-contact">
                <h6>Contact Information</h6>
                <p><i class="bi bi-envelope"></i>  Marceau@gmail.com</p>
            </div>

            <!-- Bagian 3: Follow Us -->
            <div class="footer-follow">
                <h6>Follow Us</h6>
                <a href="https://www.instagram.com/yuyunabbass/profilecard/?igsh=NTNjNDY1ZW91cTI4" class="me-2"><i class="bi bi-instagram"></i></a>
            </div>
        </div>
    </footer>

    <!-- Jarak setelah Footer -->
    <div class="footer-space"></div>

    <!-- Copyright Section -->
    <div class="copyright">
        <p>Copyright @2024 Kelompok 2 Testing dan Implementasi Sistem</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
