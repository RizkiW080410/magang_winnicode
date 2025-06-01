@extends('layouts.index')

@section('content')
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
@endsection