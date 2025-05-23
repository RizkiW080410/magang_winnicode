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
  <link rel="stylesheet" href="front/style/detail.css">
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
      <li class="nav-item"><a class="nav-link" href="#">Ekonomi Bisnis</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Pasar Saham</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Crypto</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Industri</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Infrastruktur</a></li>
    </ul>
  </div>
</div>

<!-- conten detail berita --><!-- Konten Berita -->
<div class="container mt-4">
    <div class="row">
      <!-- Konten Berita -->
      <div class="col-lg-8">
        <div class="content-wrapper">
  
          <!-- JUDUL & INFO -->
          <div class="text-center my-4">
            <h4 class="fw-bold text-uppercase mb-2">
              NET SELL RP 13,9 T MEMBAYANGI IHSG DI AWAL PEKAN,<br>
              SIMAK REKOMENDASI SAHAM HARI INI
            </h4>
            <div class="d-flex justify-content-center align-items-center gap-2 mb-2">
              <span class="badge bg-dark text-white px-3 py-2">category</span>
              <span class="text-secondary small">Penulis : Amira Kaleela Saputra</span>
            </div>
            <p class="text-muted small">Jumat, 14 Maret 2025 – 23:12</p>
          </div>
  
          <img src="front/assets/index.png" alt="Tips Puasa" class="img-fluid mb-4 rounded">
  
          <p style="text-align: justify; text-indent: 2em;">
            Puasa merupakan salah satu ibadah yang sangat penting bagi umat Muslim, di mana tubuh harus menahan lapar dan dahaga dari fajar hingga maghrib. Meskipun berpuasa, menjaga tubuh tetap terhidrasi sangatlah penting agar tetap bugar dan terhindar dari dehidrasi yang bisa menyebabkan rasa lelah, pusing, dan gangguan kesehatan lainnya.
          </p>
  
          <p style="text-align: justify; text-indent: 2em;">
            Kebiasaan saat ini adalah orang-orang menganggap bahwa definisi terhidrasi selama berpuasa adalah dengan minum air sebanyak-banyaknya pada saat sahur. Faktanya banyak teori memberikan beberapa tips penting lainnya dalam menjaga tubuh tetap terhidrasi selama berpuasa.
          </p>
  
          <div style="margin-left: 1rem;">
            <p><strong>1.</strong> <span style="font-style: italic;">Konsumsi Air yang Cukup Diantara Waktu Berbuka dan Sahur</span></p>
            <p style="text-align: justify; margin-left: 1rem;">
              Salah satu cara paling efektif untuk menjaga tubuh tetap terhidrasi adalah dengan mengonsumsi air yang cukup di antara waktu berbuka dan sahur. Usahakan untuk meminum air minimal 8 gelas dalam periode waktu tersebut. Hindari minuman berkafein atau yang mengandung gula berlebih, karena dapat menyebabkan tubuh kehilangan cairan lebih cepat.
            </p>
  
            <p><strong>2.</strong> <span style="font-style: italic;">Memilih Makanan yang Mengandung Kadar Air yang Tinggi</span></p>
            <p style="text-align: justify; margin-left: 1rem;">
              Selain mengonsumsi air, makanan yang kaya akan kandungan air juga dapat membantu menjaga hidrasi tubuh. Pilihlah makanan seperti buah-buahan (semangka, timun, jeruk) dan sayuran (selada, tomat) yang mengandung kadar air tinggi.
            </p>
  
            <p><strong>3.</strong> <span style="font-style: italic;">Batasi Makanan dan Minuman yang Mengandung Garam Tinggi</span></p>
            <p style="text-align: justify; margin-left: 1rem;">
              Terdapat beberapa makanan mengandung garam tinggi yang harus dibatasi jumlah konsumsinya atau sebaiknya dihilangkan, seperti keripik atau makanan olahan. Garam menarik cairan keluar dari sel tubuh, yang dapat membuat tubuh menjadi dehidrasi lebih cepat.
            </p>
  
            <p><strong>4.</strong> <span style="font-style: italic;">Perhatikan Aktivitas Fisik Selama Berpuasa</span></p>
            <p style="text-align: justify; margin-left: 1rem;">
              Saat berpuasa, sebaiknya hindari aktivitas fisik yang berat di siang hari. Jika ingin olahraga, lakukan setelah sahur atau menjelang berbuka.
            </p>
          </div>
        </div>
  
<!-- Komentar Section -->
    <div class="comment-section p-4 rounded mb-5" style="background-color: #f7f7f7;">
        <h5 class="fw-bold mb-3">Komentar (3)</h5>
    
        <!-- Formulir Komentar -->
        <div class="container py-5">
          <!-- Tombol Berikan Komentar -->
          <div class="text-start mb-3">
            <button class="custom-comment-btn" data-bs-toggle="modal" data-bs-target="#loginModal">
              🗨️ Berikan Komentar
            </button>
          </div>
          
        
          <!-- Formulir Komentar (disembunyikan default) -->
          <div id="commentForm" class="bg-white p-3 rounded mb-4 d-none">
            <textarea class="form-control border-0" rows="3" placeholder="Tulis Komentar" maxlength="1000"></textarea>
            <div class="d-flex justify-content-between align-items-center mt-2">
              <small class="text-muted">1000 Karakter</small>
              <button class="btn btn-dark btn-sm">Kirim &nbsp; &gt;</button>
            </div>
          </div>
        
          <!-- Judul Komentar -->
          <h5 class="fw-bold mb-3 mt-4">Komentar (3)</h5>
          <button class="btn btn-sm btn-dark mb-3 px-3 py-1 rounded-pill">Terbaru</button>
        
          <!-- Komentar 1 -->
          <div class="comment mb-4 pb-3 border-bottom">
            <div class="d-flex">
              <img src="front/assets/user2.png" class="avatar-img me-3" alt="Avatar">
              <div>
                <h6 class="fw-bold mb-0">Meguri Fujiura</h6>
                <small class="text-muted">1 jam lalu</small>
                <p class="mb-1 mt-1">I'm lion pizza chiken yes yes</p>
                <div class="d-flex gap-3 text-muted small">
                  <span>👍 0</span>
                  <span>💬 0</span>
                  <span><a href="#" class="text-muted text-decoration-none">Balas</a></span>
                </div>
              </div>
            </div>
          </div>
        
          <!-- Komentar 2 -->
          <div class="comment mb-4 pb-3 border-bottom">
            <div class="d-flex">
              <img src="front/assets/user1.png" class="avatar-img me-3" alt="Avatar">
              <div>
                <h6 class="fw-bold mb-0">Rei Kimaki</h6>
                <small class="text-muted">1 jam lalu</small>
                <p class="mb-1 mt-1">IHSG nak meletup</p>
                <div class="d-flex gap-3 text-muted small">
                  <span>👍 0</span>
                  <span>💬 0</span>
                  <span><a href="#" class="text-muted text-decoration-none">Balas</a></span>
                </div>
              </div>
            </div>
          </div>
        
          <!-- Komentar 3 -->
          <div class="comment mb-4 pb-3 border-bottom">
            <div class="d-flex">
              <img src="front/assets/user3.png" class="avatar-img me-3" alt="Avatar">
              <div>
                <h6 class="fw-bold mb-0">Mina Kitano</h6>
                <small class="text-muted">1 jam lalu</small>
                <p class="mb-1 mt-1">Prabowo balap lari di pasuruan</p>
                <div class="d-flex gap-3 text-muted small">
                  <span>👍 0</span>
                  <span>💬 0</span>
                  <span><a href="#" class="text-muted text-decoration-none">Balas</a></span>
                </div>
              </div>
            </div>
          </div>
        
          <!-- Komentar 4 -->
          <div class="comment mb-4 pb-3 border-bottom">
            <div class="d-flex">
              <img src="front/assets/user4.png" class="avatar-img me-3" alt="Avatar">
              <div>
                <h6 class="fw-bold mb-0">Uno Kanaya</h6>
                <small class="text-muted">1 jam lalu</small>
                <p class="mb-1 mt-1">Prabowo main lompat tali</p>
                <div class="d-flex gap-3 text-muted small">
                  <span>👍 0</span>
                  <span>💬 0</span>
                  <span><a href="#" class="text-muted text-decoration-none">Balas</a></span>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Modal Login Bootstrap -->
        <!-- ... (bagian komentar tetap sama, tidak diubah) -->

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

        </div>
    </div>

        <!-- Sidebar -->
        <div class="col-lg-4">
            <div class="sidebar-wrapper">
            <h5 class="fw-bold mb-4">Berita Terkait</h5>
        
            <div class="related-post d-flex mb-4 border-bottom pb-3">
                <img src="front/assets/index.png" alt="Thumbnail" class="me-3" style="width: 140px; height: 210px; object-fit: cover; border-radius: 12px;">
                <div>
                <h6 class="fw-bold mb-1">BCA Luncurkan Layanan Digital Terbaru</h6>
                <span class="badge bg-primary text-white mb-1">Teknologi</span>
                <span class="text-muted small d-block mb-1">2 jam lalu</span>
                <p class="mb-1 small text-secondary">BCA resmi meluncurkan fitur digital banking terbaru untuk meningkatkan pengalaman pengguna...</p>
                <a href="/detailberita" class="small text-primary fw-semibold">Baca Selengkapnya</a>
                </div>
            </div>
        
      
            <div class="related-post d-flex mb-4 border-bottom pb-3">
                <img src="front/assets//mainberita.png" alt="Thumbnail" class="me-3"style="width: 140px; height: 210px; object-fit: cover; border-radius: 12px;">
                <div>
                <h6 class="fw-bold mb-1">Kinerja Saham BCA Menguat di Tengah Tekanan Pasar</h6>
                <span class="badge bg-success text-white mb-1">Saham</span>
                <span class="text-muted small d-block mb-1">5 jam lalu</span>
                <p class="mb-1 small text-secondary">Saham BCA menunjukkan penguatan stabil meskipun IHSG melemah akibat ketidakpastian global...</p>
                <a href="/detailberita" class="small text-primary fw-semibold">Baca Selengkapnya</a>
                </div>
            </div>
        
            <div class="related-post d-flex mb-4 border-bottom pb-3">
                <img src="front/assets/index2.png" alt="Thumbnail" class="me-3" style="width: 140px; height: 210px;  object-fit: cover; border-radius: 12px;">
                <div>
                <h6 class="fw-bold mb-1">Promo Ramadan: BCA Tawarkan Cashback hingga 50%</h6>
                <span class="badge bg-warning text-dark mb-1">news</span>
                <span class="text-muted small d-block mb-1">1 hari lalu</span>
                <p class="mb-1 small text-secondary">Dalam rangka Ramadan, BCA memberikan berbagai promo menarik seperti cashback dan diskon merchant...</p>
                <a href="/detailberita" class="small text-primary fw-semibold">Baca Selengkapnya</a>
                </div>
            </div>

            <div class="related-post d-flex mb-4 border-bottom pb-3">
                <img src="front/assets//mainberita.png" alt="Thumbnail" class="me-3"style="width: 140px; height: 210px; object-fit: cover; border-radius: 12px;">
                <div>
                <h6 class="fw-bold mb-1">Kinerja Saham BCA Menguat di Tengah Tekanan Pasar</h6>
                <span class="badge bg-success text-white mb-1">Saham</span>
                <span class="text-muted small d-block mb-1">5 jam lalu</span>
                <p class="mb-1 small text-secondary">Saham BCA menunjukkan penguatan stabil meskipun IHSG melemah akibat ketidakpastian global...</p>
                <a href="/detailberita" class="small text-primary fw-semibold">Baca Selengkapnya</a>
                </div>
            </div>

            
            <div class="related-post d-flex mb-4 border-bottom pb-3">
                <img src="front/assets/index.png" alt="Thumbnail" class="me-3" style="width: 140px; height: 210px; object-fit: cover; border-radius: 12px;">
                <div>
                <h6 class="fw-bold mb-1">BCA Luncurkan Layanan Digital Terbaru</h6>
                <span class="badge bg-primary text-white mb-1">Teknologi</span>
                <span class="text-muted small d-block mb-1">2 jam lalu</span>
                <p class="mb-1 small text-secondary">BCA resmi meluncurkan fitur digital banking terbaru untuk meningkatkan pengalaman pengguna...</p>
                <a href="/detailberita" class="small text-primary fw-semibold">Baca Selengkapnya</a>
                </div>
            </div>

             
            <div class="related-post d-flex mb-4 border-bottom pb-3">
                <img src="front/assets/index2.png" alt="Thumbnail" class="me-3" style="width: 140px; height: 210px;  object-fit: cover; border-radius: 12px;">
                <div>
                <h6 class="fw-bold mb-1">Promo Ramadan: BCA Tawarkan Cashback hingga 50%</h6>
                <span class="badge bg-warning text-dark mb-1">news</span>
                <span class="text-muted small d-block mb-1">1 hari lalu</span>
                <p class="mb-1 small text-secondary">Dalam rangka Ramadan, BCA memberikan berbagai promo menarik seperti cashback dan diskon merchant...</p>
                <a href="/detailberita" class="small text-primary fw-semibold">Baca Selengkapnya</a>
                </div>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script src="front/js/script.js"></script>
</body>
</html>
