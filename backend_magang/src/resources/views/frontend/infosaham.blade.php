<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Portal Berita</title>

  <!-- Favicon -->
  <link rel="icon" href="front/assets/favicon.ico" type="image/x-icon">
  
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <!-- Poppins Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="front/style/infosaham.css">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark-custom py-3">
  <div class="container">
    <a class="navbar-brand" href="/">
      <img src="front/assets/icon.png" alt="Portal Berita Logo" height="70">
    </a>
    <form class="d-flex position-relative mx-auto w-50">
      <input class="form-control rounded-pill ps-5" type="search" placeholder="Cari berita..." aria-label="Search">
      <i class="bi bi-search position-absolute top-50 start-0 translate-middle-y ms-3"></i>
    </form>
    <div class="d-flex">
    <!-- Tombol Daftar membuka popup register -->
    <a href="#" class="btn btn-pink me-2" data-bs-toggle="modal" data-bs-target="#registerModal">Daftar</a>
      
    <!-- Tombol Masuk membuka popup login -->
    <a href="#" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#loginModal">Masuk</a>
    </div>
  </div>
</nav>

<!-- Menu -->
<div class="bg-white shadow-sm">
  <div class="container">
    <ul class="nav nav-pills justify-content-center py-2">
      <li class="nav-item"><a class="nav-link" href="/detailberita">Ekonomi Bisnis</a></li>
      <li class="nav-item"><a class="nav-link" href="/detailberita">Pasar Saham</a></li>
      <li class="nav-item"><a class="nav-link" href="/detailberita">Crypto</a></li>
      <li class="nav-item"><a class="nav-link" href="/detailberita">Industri</a></li>
      <li class="nav-item"><a class="nav-link" href="/detailberita">Infrastruktur</a></li>
    </ul>
  </div>
</div>

<!-- Konten Utama Info Saham -->
<div class="container my-5">
    <div class="row">
      <!-- KONTEN UTAMA LQ45 + Card Saham -->
      <div class="col-lg-8">
        <div class="card p-4 mb-4">
          <h5 class="fw-bold text-primary mb-3">LQ45</h5>
          <h2 class="fw-bold">761.52</h2>
          <p class="mb-0"><strong>Last updated:</strong> Rabu, 30 Apr 2025 16:00 WIB</p>
          <p class="text-muted">Data is a realtime snapshot, delayed at least 10 minutes</p>
          <canvas id="lq45Chart" height="200"></canvas>
        </div>
  
        <div class="card p-4">
          <h5 class="fw-bold mb-3">Watchlist Market</h5>
          <div class="d-flex flex-md-wrap flex-nowrap overflow-auto gap-3" id="stock-cards">
            <!-- Card saham dari JS -->
          </div>
        </div>
      </div>
  
      <!-- SIDEBAR -->
      <div class="col-lg-4 mt-4 mt-lg-0">
        <h5 class="fw-bold text-primary mb-3">Berita Saham</h5>
  
        <a href="/detailberita" class="sidebar-news-item d-flex align-items-center text-decoration-none mb-3">
          <img src="front/assets/andrasoni.png" alt="" class="me-3" width="80">
          <div>
            <h6 class="mb-1 text-dark">Andra Soni Targetkan Panen 1,8 Juta Ton</h6>
            <small class="text-muted">Rabu, 23 Apr 2025 23:31 WIB</small>
          </div>
        </a>
  
        <a href="/detailberita" class="sidebar-news-item d-flex align-items-center text-decoration-none mb-3">
          <img src="front/assets/prabowo.png" alt="" class="me-3" width="80">
          <div>
            <h6 class="mb-1 text-dark"><span class="text-success">Sumatera Selatan</span> - Prabowo Sebut Pangan Aman</h6>
            <small class="text-muted">Rabu, 23 Apr 2025 16:15 WIB</small>
          </div>
        </a>
  
        <a href="/detailberita" class="sidebar-news-item d-flex align-items-center text-decoration-none">
          <img src="front/assets/bni.png" alt="" class="me-3" width="80">
          <div>
            <h6 class="mb-1 text-dark">BNI Salurkan Rp 14,3 Triliun ke Sektor Pangan</h6>
            <small class="text-muted">Minggu, 13 Apr 2025 13:09 WIB</small>
          </div>
        </a>

        <a href="/detailberita" class="sidebar-news-item d-flex align-items-center text-decoration-none mb-3">
            <img src="front/assets/andrasoni.png" alt="" class="me-3" width="80">
            <div>
              <h6 class="mb-1 text-dark">Andra Soni Targetkan Panen 1,8 Juta Ton</h6>
              <small class="text-muted">Rabu, 23 Apr 2025 23:31 WIB</small>
            </div>
          </a>
    
          <a href="/detailberita" class="sidebar-news-item d-flex align-items-center text-decoration-none mb-3">
            <img src="front/assets/prabowo.png" alt="" class="me-3" width="80">
            <div>
              <h6 class="mb-1 text-dark"><span class="text-success">Sumatera Selatan</span> - Prabowo Sebut Pangan Aman</h6>
              <small class="text-muted">Rabu, 23 Apr 2025 16:15 WIB</small>
            </div>
          </a>
    
          <a href="/detailberita" class="sidebar-news-item d-flex align-items-center text-decoration-none">
            <img src="front/assets/bni.png" alt="" class="me-3" width="80">
            <div>
              <h6 class="mb-1 text-dark">BNI Salurkan Rp 14,3 Triliun ke Sektor Pangan</h6>
              <small class="text-muted">Minggu, 13 Apr 2025 13:09 WIB</small>
            </div>
          </a>

          <a href="/detailberita" class="sidebar-news-item d-flex align-items-center text-decoration-none mb-3">
            <img src="front/assets/andrasoni.png" alt="" class="me-3" width="80">
            <div>
              <h6 class="mb-1 text-dark">Andra Soni Targetkan Panen 1,8 Juta Ton</h6>
              <small class="text-muted">Rabu, 23 Apr 2025 23:31 WIB</small>
            </div>
          </a>
    
          <a href="/detailberita" class="sidebar-news-item d-flex align-items-center text-decoration-none mb-3">
            <img src="front/assets/prabowo.png" alt="" class="me-3" width="80">
            <div>
              <h6 class="mb-1 text-dark"><span class="text-success">Sumatera Selatan</span> - Prabowo Sebut Pangan Aman</h6>
              <small class="text-muted">Rabu, 23 Apr 2025 16:15 WIB</small>
            </div>
          </a>
    
          <a href="/detailberita" class="sidebar-news-item d-flex align-items-center text-decoration-none">
            <img src="front/assets/bni.png" alt="" class="me-3" width="80">
            <div>
              <h6 class="mb-1 text-dark">BNI Salurkan Rp 14,3 Triliun ke Sektor Pangan</h6>
              <small class="text-muted">Minggu, 13 Apr 2025 13:09 WIB</small>
            </div>
          </a>

          
      </div>
    </div>
  </div>
</div>
  

<!-- Modal Login Bootstrap -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content p-3">
      <div class="row g-0">
        <!-- Gambar kiri -->
        <div class="col-md-6 d-none d-md-block">
          <img src="front/assets/iconlogin.png" alt="News" class="img-fluid h-100 w-100" style="object-fit: cover;">
        </div>
        <!-- Form kanan -->
        <div class="col-md-6 p-4 d-flex flex-column justify-content-center">
          <div class="text-center mb-4">
            <img src="front/assets/subiconlogin.png" width="100" alt="Logo">
            <h5 class="fw-bold mt-3">LOG IN</h5>
          </div>
          <form>
            <input type="email" class="form-control mb-3" placeholder="Email Address">
            <input type="password" class="form-control mb-3" placeholder="Password">
            <button type="button" class="btn btn-primary w-100" id="loginBtn">Let's Start!</button>
            <p class="text-center mt-3 small">Don’t have an account? 
              <a href="#" data-bs-toggle="modal" data-bs-target="#registerModal" data-bs-dismiss="modal">Sign Up</a>
            </p>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ✅ Modal Register -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content p-3">
      <div class="row g-0">
        <!-- Ilustrasi di kiri -->
        <div class="col-md-6 d-none d-md-flex align-items-center justify-content-center bg-light">
          <img src="front/assets/iconregister.png" alt="Register Illustration" class="img-fluid p-4" />
        </div>

        <!-- Formulir kanan -->
        <div class="col-md-6 p-4 d-flex flex-column justify-content-center">
          <div class="text-center mb-4">
            <img src="front/assets/subiconlogin.png" width="80" alt="Logo">
            <h5 class="fw-bold mt-2">Create Account</h5>
          </div>
          <form>
            <input type="text" class="form-control mb-3" placeholder="Name">
            <input type="email" class="form-control mb-3" placeholder="Email Address">
            <input type="password" class="form-control mb-4" placeholder="Password">
            <button type="submit" class="btn btn-primary w-100">Create Account</button>
            <p class="text-center mt-3 small">Already have an account? 
              <a href="#" data-bs-toggle="modal" data-bs-target="#loginModal" data-bs-dismiss="modal">Login</a>
            </p>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
   
<!-- Footer yes yes -->
<footer class="pt-4 pb-3 mt-5" style="background-color: #d9d9d9;">
  <div class="container">
    <div class="row text-start">
      <!-- Kolom 1 -->
      <div class="col-md-3 mb-4">
        <h6 class="fw-bold mb-3">TAUTAN</h6>
        <ul class="list-unstyled small">
          <li class="mb-2">
            <i class="bi bi-globe2 me-2"></i>Winnicode
          </li>
          <li class="mb-2">
            <i class="bi bi-instagram me-2"></i>Instagram
          </li>
        </ul>
      </div>
      <!-- Kolom 2 -->
      <div class="col-md-3 mb-4">
        <h6 class="fw-bold mb-3">TAUTAN</h6>
        <ul class="list-unstyled small">
          <li class="mb-2">Beranda</li>
          <li class="mb-2">Ekonomi Bisnis</li>
          <li class="mb-2">Pasar Saham</li>
          <li class="mb-2">Crypto</li>
          <li class="mb-2">Industri</li>
          <li class="mb-2">Infrastruktur</li>
        </ul>
      </div>
      <!-- Kolom 3 -->
      <div class="col-md-3 mb-4">
        <h6 class="fw-bold mb-3">TAUTAN</h6>
        <p class="small mb-1">E-Mail: winnicodegarudaofficial@gmail.com</p>
        <p class="small mb-1">Alamat (Pusat): Bandung - Jl. Asia Afrika No.158,<br> Kb. Pisang, Kec. Sumur Bandung, Kota Bandung, Jawa Barat 40261</p>
        <p class="small mb-1">Alamat (Cabang): Bantul, Yogyakarta</p>
        <p class="small">Call Center: 6285159932501 (24 Jam)</p>
      </div>
      <!-- Kolom 4 -->
      <div class="col-md-3 mb-4">
        <div class="d-flex align-items-center justify-content-center mb-2">
          <img src="front/assets/footer.png" alt="Winnicode Logo" style="height: 45px; margin-right: 10px;">
          <img src="front/assets/merdeka.png" alt="Kampus Merdeka Logo" style="height: 45px;">
        </div>
        <p class="small text-center">
          Jurnalistik Program winnicode adalah program pengembangan sumber daya manusia yang ditujukan bagi pemuda pemudi yang berkarir di dunia report.
        </p>
      </div>
    </div>
    <hr>
    <div class="text-md-start text-center small text-muted">
      Copyright © 2024 PT. WINNICODE GARUDA TEKNOLOGI
    </div>
  </div>
</footer>

  

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="front/js/pathsaham.js"></script>
<script src="front/js/sahamcard.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</body>
</html>
