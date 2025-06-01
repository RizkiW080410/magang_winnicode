@extends('layouts.index')

@section('content')
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
              <img src="front/assets/user.png" class="avatar-img me-3" alt="Avatar">
              <div>
                <h6 class="fw-bold mb-0">User 1</h6>
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
              <img src="front/assets/user.png" class="avatar-img me-3" alt="Avatar">
              <div>
                <h6 class="fw-bold mb-0">User 2</h6>
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
              <img src="front/assets/user.png" class="avatar-img me-3" alt="Avatar">
              <div>
                <h6 class="fw-bold mb-0">User 3</h6>
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
              <img src="front/assets/user.png" class="avatar-img me-3" alt="Avatar">
              <div>
                <h6 class="fw-bold mb-0">User 4</h6>
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
@endsection