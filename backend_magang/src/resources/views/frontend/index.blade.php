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
  <link rel="stylesheet" href="front/style/style.css">
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

<!-- Content -->
<div class="container my-4">
  <div class="row g-4">
    <!-- Berita Utama + Info Pangan -->
    <div class="col-lg-8 d-flex flex-column">
      <!-- Berita Utama -->
      <div class="main-news position-relative mb-4">
        <img src="front/assets/mainberita.png" alt="Berita Utama" class="img-fluid rounded">
        <div class="main-news-overlay p-3 position-absolute bottom-0 start-0 text-white">
          <span class="badge bg-danger mb-2">Kategori</span>
          <h2 class="fw-bold">Judul Berita Utama</h2>
          <p>Deskripsi singkat berita utama...</p>
          <small>Penerbit • 3 jam lalu</small>
        </div>
      </div>

<!-- Wrapper Info Pangan -->
    <div class="container my-5  py-5 " style="border-top: 2px solid #a9acb0; border-bottom: 2px solid #a9acb0 ; ">
      <div class="row align-items-start">
        <!-- Kiri: Judul + Deskripsi -->
        <div class="col-md-4 mb-3">
            <h5 class="fw-bold mb-2">Info Pangan</h5>
            <p class="text-muted mb-1"><strong>Last Update:</strong> Minggu, 23 Maret 2025</p>
            <p class="text-muted mb-3"><strong>Sumber:</strong> Info Pangan Jakarta</p>
            <!-- Tombol untuk Desktop -->
            <a href="/infopangan" class="btn btn-danger fw-bold btn-baca-selengkapnya d-none d-md-inline-block">Baca Selengkapnya</a>
        </div>
            <!-- Kanan: Scrollable Cards -->
            <div class="col-md-8">
                <div class="d-flex overflow-auto gap-3 pb-2">
        
                <!-- Card Items -->
                <div class="card p-3 text-center flex-shrink-0" style="width: 160px;">
                    <img src="front/assets/cabai.png" alt="Cabai" class="mx-auto mb-2" style="width: 80px; height: 80px; object-fit: contain;">
                    <p class="fw-bold mb-1">Cabai</p>
                    <p class="text-muted mb-1 small">Deskripsi</p>
                    <p class="fw-bold text-success small">Rp 20.000/kg</p>
                </div>
        
                <div class="card p-3 text-center flex-shrink-0" style="width: 160px;">
                    <img src="front/assets/telur.png" alt="Telur" class="mx-auto mb-2" style="width: 80px; height: 80px; object-fit: contain;">
                    <p class="fw-bold mb-1">Telur</p>
                    <p class="text-muted mb-1 small">Deskripsi</p>
                    <p class="fw-bold text-success small">Rp 20.000/kg</p>
                </div>
        
                <div class="card p-3 text-center flex-shrink-0" style="width: 160px;">
                    <img src="front/assets/bawang.png" alt="Bawang" class="mx-auto mb-2" style="width: 80px; height: 80px; object-fit: contain;">
                    <p class="fw-bold mb-1">Bawang</p>
                    <p class="text-muted mb-1 small">Deskripsi</p>
                    <p class="fw-bold text-success small">Rp 20.000/kg</p>
                </div>

                <div class="card p-3 text-center flex-shrink-0" style="width: 160px;">
                    <img src="front/assets/sayur.png" alt="Bawang" class="mx-auto mb-2" style="width: 80px; height: 80px; object-fit: contain;">
                    <p class="fw-bold mb-1">Sayur</p>
                    <p class="text-muted mb-1 small">Deskripsi</p>
                    <p class="fw-bold text-success small">Rp 10.000/kg</p>
                </div>

                <div class="card p-3 text-center flex-shrink-0" style="width: 160px;">
                    <img src="front/assets/ikan.png" alt="Bawang" class="mx-auto mb-2" style="width: 80px; height: 80px; object-fit: contain;">
                    <p class="fw-bold mb-1">Ikan</p>
                    <p class="text-muted mb-1 small">Deskripsi</p>
                    <p class="fw-bold text-success small">Rp 12.000/kg</p>
                </div>
                </div>
                <!-- Tombol untuk Mobile -->
                <div class="mt-3 d-flex justify-content-start d-block d-md-none">
                    <a href="/infopangan" class="btn btn-danger d-flex align-items-center gap-2 px-4 py-2" style="border-radius: 12px;">
                    <span>Baca Selengkapnya</span>
                 
                    </a>
                </div>
            </div>
         </div>
        </div>
    </div>

    <!-- Sidebar berita terkini -->
    <div class="col-lg-4 mb-4 d-flex flex-column sidebar-wrapper" style="max-height: 500px;">
      <div class="card gyaaat  p-5 flex-grow-1 mb-3">
        <h5 class="fw-bold mb-3">Berita Terkini</h5>
        <div class="latest-news overflow-auto" style="max-height: 740px;">
          <!-- Berita Item -->
          <div class="news-item d-flex mb-3">
            <img src="front/assets/itemberita.png" class="rounded" alt="Berita Terkini" style="width: 80px; height: 60px; object-fit: cover;">
            <div class="ms-3">
              <h6 class="fw-bold mb-1">Judul Berita Singkat</h6>
              <div class="d-flex align-items-center mb-1">
                <span class="badge bg-danger me-2">Kategori</span>
                <small class="text-muted">3 jam lalu</small>
              </div>
              <small>Deskripsi singkat berita...</small><br>
              <a href="/detailberita" class="text-primary text-decoration-none">
                <small>Baca Selengkapnya</small>
              </a>
            </div>
          </div>

          <div class="news-item d-flex mb-3">
            <img src="front/assets/itemberita.png" class="rounded" alt="Berita Terkini" style="width: 80px; height: 60px; object-fit: cover;">
            <div class="ms-3">
              <h6 class="fw-bold mb-1">Judul Berita Singkat</h6>
              <div class="d-flex align-items-center mb-1">
                <span class="badge bg-danger me-2">Kategori</span>
                <small class="text-muted">3 jam lalu</small>
              </div>
              <small>Deskripsi singkat berita...</small><br>
              <a href="/detailberita" class="text-primary text-decoration-none">
                <small>Baca Selengkapnya</small>
              </a>
            </div>
          </div>

          <div class="news-item d-flex mb-3">
            <img src="front/assets/itemberita.png" class="rounded" alt="Berita Terkini" style="width: 80px; height: 60px; object-fit: cover;">
            <div class="ms-3">
              <h6 class="fw-bold mb-1">Judul Berita Singkat</h6>
              <div class="d-flex align-items-center mb-1">
                <span class="badge bg-danger me-2">Kategori</span>
                <small class="text-muted">3 jam lalu</small>
              </div>
              <small>Deskripsi singkat berita...</small><br>
              <a href="/detailberita" class="text-primary text-decoration-none">
                <small>Baca Selengkapnya</small>
              </a>
            </div>
          </div>

          <div class="news-item d-flex mb-3">
            <img src="front/assets/itemberita.png" class="rounded" alt="Berita Terkini" style="width: 80px; height: 60px; object-fit: cover;">
            <div class="ms-3">
              <h6 class="fw-bold mb-1">Judul Berita Singkat</h6>
              <div class="d-flex align-items-center mb-1">
                <span class="badge bg-danger me-2">Kategori</span>
                <small class="text-muted">3 jam lalu</small>
              </div>
              <small>Deskripsi singkat berita...</small><br>
              <a href="/detailberita" class="text-primary text-decoration-none">
                <small>Baca Selengkapnya</small>
              </a>
            </div>
          </div>

          <div class="news-item d-flex mb-3">
            <img src="front/assets/itemberita.png" class="rounded" alt="Berita Terkini" style="width: 80px; height: 60px; object-fit: cover;">
            <div class="ms-3">
              <h6 class="fw-bold mb-1">Judul Berita Singkat</h6>
              <div class="d-flex align-items-center mb-1">
                <span class="badge bg-danger me-2">Kategori</span>
                <small class="text-muted">3 jam lalu</small>
              </div>
              <small>Deskripsi singkat berita...</small><br>
              <a href="/detailberita" class="text-primary text-decoration-none">
                <small>Baca Selengkapnya</small>
              </a>
            </div>
          </div>

          <div class="news-item d-flex mb-3">
            <img src="front/assets/itemberita.png" class="rounded" alt="Berita Terkini" style="width: 80px; height: 60px; object-fit: cover;">
            <div class="ms-3">
              <h6 class="fw-bold mb-1">Judul Berita Singkat</h6>
              <div class="d-flex align-items-center mb-1">
                <span class="badge bg-danger me-2">Kategori</span>
                <small class="text-muted">3 jam lalu</small>
              </div>
              <small>Deskripsi singkat berita...</small><br>
              <a href="/detailberita" class="text-primary text-decoration-none">
                <small>Baca Selengkapnya</small>
              </a>
            </div>
          </div>

          <div class="news-item d-flex mb-3">
            <img src="front/assets/itemberita.png" class="rounded" alt="Berita Terkini" style="width: 80px; height: 60px; object-fit: cover;">
            <div class="ms-3">
              <h6 class="fw-bold mb-1">Judul Berita Singkat</h6>
              <div class="d-flex align-items-center mb-1">
                <span class="badge bg-danger me-2">Kategori</span>
                <small class="text-muted">3 jam lalu</small>
              </div>
              <small>Deskripsi singkat berita...</small><br>
              <a href="/detailberita" class="text-primary text-decoration-none">
                <small>Baca Selengkapnya</small>
              </a>
            </div>
          </div>

          <div class="news-item d-flex mb-3">
            <img src="front/assets/itemberita.png" class="rounded" alt="Berita Terkini" style="width: 80px; height: 60px; object-fit: cover;">
            <div class="ms-3">
              <h6 class="fw-bold mb-1">Judul Berita Singkat</h6>
              <div class="d-flex align-items-center mb-1">
                <span class="badge bg-danger me-2">Kategori</span>
                <small class="text-muted">3 jam lalu</small> 
              </div>
              <small>Deskripsi singkat berita...</small><br>
              <a href="/detailberita" class="text-primary text-decoration-none">
                <small>Baca Selengkapnya</small>
              </a>
            </div>
          </div>
          <!-- Tambahin kalo perlu-->
        </div>
      </div>
    </div>

  </div>
</div>

<!-- Info Saham -->
<div class="container my-2 mt-5 mt-md-0">
  <div class="card p-4">
    <div class="row align-items-stretch">
      <!-- Kiri -->
      <div class="col-md-3 mb-4 d-flex flex-column justify-content-between">
        <div class="info-saham-wrapper">
          <h5 class="fw-bold mb-3">Info Saham</h5>
          <p class="mb-1"><strong>Last Update:</strong> Minggu, 23 Maret 2025</p>
          <p class="mb-1"><strong>Sumber:</strong> Info Pangan Jakarta</p>
          <a href="/infosaham" class="btn btn btn-danger fw-bold rounded-pill  btn-kecil mt-4 d-none d-md-inline-block" >Baca Selengkapnya</a>
        </div>
      </div>

      <!-- Kanan -->
      <div class="col-md-9 d-flex flex-column justify-content-between overflow-visible">
        <div class="d-flex stock-nav ps-md-4 ps-3">
          <a href="#" class="text-dark fw-bold text-decoration-none">MAJOR INDEXES</a> |
          <a href="#" class="text-muted fw-bold text-decoration-none">INDO-FX</a> |
          <a href="#" class="text-muted fw-bold text-decoration-none">USD-FX</a> |
          <a href="#" class="text-muted fw-bold text-decoration-none">COMMODITIES</a>
        </div>

        
        <div class="d-flex flex-md-wrap flex-nowrap overflow-auto gap-3 mt-3" id="stock-cards">
          <!-- Card Saham di js -->
        </div>
        <!-- Tombol hanya tampil di mobile -->
        <div class="mt-3 ps-3 d-block d-md-none">
          <a href="/infosaham" class="btn btn-danger fw-bold rounded-pill btn-kecil">
            Baca Selengkapnya
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
  
  
<!-- Explore Berita -->
<div class="container my-5 mt">
  <h2 class="fw-bold text-center mb-4">Explore Berita</h2>
  <div class="row g-4">
    <!-- Card Berita -->
    @foreach ($beritas as $berita)
    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
      <div class="card h-100 custom-card">
        <img src="{{ asset('storage/' . $berita->image) }}" class="card-img-top" alt="Berita">
        <div class="card-body d-flex flex-column">
          <h6 class="fw-bold mb-2">{{ $berita->title }}</h6>
          <span class="badge bg-danger text-white fw-normal mb-2 small-badge">{{ $berita->categoryBerita->name }}</span>
          <p class="text-muted small mb-4">{{ Str::limit(strip_tags($berita->isi_berita), 100) }}</p>
          <div class="mt-auto d-flex justify-content-between align-items-center pt-2 border-top" style="font-size: 0.75rem;">
            <div class="text-muted">
              <strong>{{ $berita->user->name }}</strong><br>
              <span class="text-muted">{{ $berita->tanggal_terbit }}</span>
            </div>
            <a href="/detailberita" class="text-danger fw-semibold text-decoration-none">Baca Selengkapnya</a>
          </div>
        </div>
      </div>
    </div>
    @endforeach
    
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


<!-- Footer yes yes-->
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
<script src="front/js/script.js"></script>
</body>
</html>
