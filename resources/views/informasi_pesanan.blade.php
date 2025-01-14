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

    <div class="container mt-4 pb-5 ">
        <h1><span style="font-family: 'Times New Roman';">Informasi Data Pesanan</span></h1>
        <form action="{{ url('/pembayaran') }}">
            <div class="row p-3">
                <div class="col-5 mb-3 mt-2">
                    <label for="disabledTextInput" class="form-label">Nama Penumpang</label>
                    <input type="text" id="disabledTextInput" class="form-control " placeholder="Masukkan Nama">
                </div>
                <div class="col-1 mb-3 mt-2">
                </div>
                <div class="col-5 mt-2">
                    <label for="disabledTextInput" class="form-label"><span style="font-family: 'Times New Roman';">No. Identitas </span></label>
                    <input type="text" id="disabledTextInput" class="form-control" placeholder="Masukkan No. Identitas">
                </div>
                <div class="col-5 mt-4 ">
                    <label for="disabledSelect" class="form-label">Kabin</label>
                    <select id="disabledSelect" class="form-select">
                        <option>Pilih Kabin</option>
                        <option>Ekonomi 1</option>
                        <option>Ekonomi 2</option>
                        <option>Ekonomi 3</option>
                        <option>VIP 1</option>
                        <option>VIP 2</option>
                        <option>VIP 3</option>
                    </select>
                </div>
                <div class="col-1 mb-3 mt-2">
                </div>
                <div class="col-5 mt-4 ">
                    <label for="disabledSelect" class="form-label">Gender</label>
                    <select id="disabledSelect" class="form-select">
                        <option>Pilih Gender</option>
                        <option>Laki-laki</option>
                        <option>Perempuan</option>
                    </select>
                </div>
                <div class="col-11 mt-4 d-flex justify-content-end">
                    <button class="btn bten ">Pesan</button>
                </div>      
            </div>
        </form>
    </div>

    <!-- Footer -->
    <footer class="footer bg-light">
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
