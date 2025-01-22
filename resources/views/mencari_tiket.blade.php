<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>CARI TIKET | MARCEAU TRAV</title>
    <style>
        /* Background gambar langsung di sini */
        body {
            margin: 0;
            padding: 0;
            height: 70vh; /* Mengatur tinggi body untuk seluruh layar */
            background-image: url('{{ asset('img/bg5.jpg') }}'); /* Menggunakan helper asset() untuk gambar */
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
    <div class="container2 mt-5 p-5">
        <h3><span  style="font-family: 'Comic Sans MS'; " >"Biarkan laut membawa kamu ke tempat yang belum pernah kamu impikan. Segera pesan tiketmu dan mulai petualangan!"</span></h3>
    </div>
    <div class="container">
        <div class="mt-5">
            @if($data->isEmpty()) <!-- Jika data kosong -->
                    <h2 style="font-family: 'Times New Roman'; font-size: 40px; color: rgb(1, 21, 74); text-align: center;">
                        TIKET BELUM TERSEDIA
                    </h2>
                @else
            <div class="col-12 col-lg-6">
                    <table class="table bordero" method="GET">
                        <tbody>
                            <tr> 
                                <td class="tdo abu"><span class="abu" style="font-family: 'Comic Sans MS'; " >Pelabuhan Asal</span></td>
                                <td class="tdo"></td>
                                <td class="tdo abu"><span class="abu" style="font-family: 'Comic Sans MS'; " >Pelabuhan Tujuan</span></td>
                            </tr>
                            @foreach($data as $dat)
                                <tr>
                                    <td class="tdo itam"><span class="itam" style=" font-family: 'Times New Roman'; font-size:50px;" >{{ $dat->lokasi_keberangkatan ?? 'Lokasi Tidak Tersedia'}}</span></td>
                                    <td rowspan="3" class="tdo itam"><i class="bi bi-arrow-right" style="font-size: 50px;"></i></td>
                                    <td class="tdo itam"><span style="font-family: 'Times New Roman'; font-size:50px;" >{{ $dat->lokasi_tujuan ?? 'Lokasi Tidak Tersedia'}}</span></td>
                                </tr>
                                <tr>
                                    <td class="tdo abu"><span class="abu" style="font-family: 'Comic Sans MS';">{{ \Carbon\Carbon::parse($dat->waktu_keberangkatan)->format('F, d-Y') }}</span></td>
                                    <td class="tdo"></td>
                                    <td class="tdo"></td> 
                                </tr>
                            @endforeach 
                        </tbody>
                    </table> 
            </div>
            <div class="container">
                <div class="mt-5">
                    <table >
                        <tr class="h pb-2 mb-2 border-bottom border-top border-black ">
                            <td class="tdo abu"><span style="font-family: 'Candara'; font-size:18px;">Kapal</span></td>
                            <td class="tdo abu"><span style="font-family: 'Candara'; font-size:18px;">Berangkat</span></td>
                            <td class="tdo"></td>
                            <td class="tdo abu"><span style="font-family: 'Candara'; font-size:18px;">Sampai</span></td>
                            <td class="tdo abu"><span style="font-family: 'Candara'; font-size:18px;">Total Harga</span></td>
                            <td class="tdo"></td>
                        </tr>
                        @foreach($data as $dat)
                        {{-- <form action="{{ url('/informasi_pesanan') }}" method="GET"> --}}
                        <form  action="{{ route('informasi_pesanan.create') }}" method="GET">
                            @csrf
                            <tr >
                                <!-- Mengatur rowspan untuk 'nama kapal' dan 'harga' -->
                                <td class="tdo abuu pt-3" ><span style="font-family: 'Times New Roman'; font-size:22px;">{{ $dat->nama_kapal ?? 'Tidak Tersedia'}}</span></td>
                                <td class="tdo abuu pt-3"><span style="font-family: 'Geneva'; font-size:22px;">{{ \Carbon\Carbon::parse($dat->waktu_keberangkatan)->format('H:i') }}</span></td>
                                <td class="tdo abuu pt-3" rowspan="3"><i class="bi bi-arrow-right" style="font-size: 35px;"></i></td>
                                <td class="tdo abuu pt-3"><span style="font-family: 'Geneva'; font-size:22px;">{{ \Carbon\Carbon::parse($dat->waktu_sampai)->format('H:i') }}</span></td>
                                <td class="tdo abuu pt-3" rowspan="2"><span style="font-family: 'Geneva'; font-size:22px;">Rp. {{ $dat->harga ?? 'Tidak Tersedia'}}</span></td> 
                                <input type="hidden" name="id_kapal" value="{{ $dat->id_kapal }}">
                                <td class="tdo" rowspan="2">
                                    <button type="submit" class="tombol">Pesan</button>
                                    </td>
                            </tr>
                            <tr>
                                <!-- Menampilkan tanggal keberangkatan -->
                                <td class="tdo"> </td>
                                <td class="tdo abu pt-1">
                                    <span style="font-family: 'Optima';">
                                        {{ \Carbon\Carbon::parse($dat->waktu_keberangkatan)->locale('id')->format('l, d') }} <br>
                                        {{ \Carbon\Carbon::parse($dat->waktu_keberangkatan)->locale('id')->format('F-Y') }}
                                    </span>
                                </td>
                                <!-- Menampilkan tanggal sampai -->
                                <td class="tdo abu pt-1">
                                    <span style="font-family: 'Optima';">
                                        {{ \Carbon\Carbon::parse($dat->waktu_sampai)->locale('id')->format('l, d') }} <br>
                                        {{ \Carbon\Carbon::parse($dat->waktu_sampai)->locale('id')->format('F-Y') }}
                                    </span>
                                </td>
                            </tr>
                        </form>
                        @endforeach 
                    </table>
                    @endif
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
        <p><span style=" font-family: 'Comic Sans MS';">Copyright @2024 Kelompok 2 Testing dan Implementasi Sistem</span></p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
