@extends('layouts.index')

@section('content')
    <div class="container mt-4 mb-5">
    <div class="row">
      <!-- KONTEN UTAMA -->
      <div class="col-lg-8">
        <h4 class="fw-bold text-black">Info Pangan</h4>
        <p class="mb-1"><strong>Last Update:</strong> Kamis, 1 Mei 2025</p>
        <p class="mb-2"><strong>Sumber:</strong> Info Pangan Jakarta</p>
        <p class="text-muted" style="font-size: 0.85rem;">*Data diperbarui setiap hari pukul 10:00 WIB</p>
  
        <!-- Filter Wilayah -->
        <div class="mb-4">
          <button class="btn badge-wilayah">Nasional</button>
          <button class="btn badge-wilayah active">Jakarta</button>
        </div>
  
        <!-- Grid Pangan -->
        <div class="row g-3">
          <!-- Card Item -->
          <div class="col-md-4">
            <div class="p-3 bg-white card-pangan position-relative">
              <span class="text-danger trend-icon"><i class="bi bi-graph-down-arrow"></i></span>
              <p class="mb-1 text-muted">Beras</p>
              <img src="front/assets/berass.png" class="mx-auto d-block mb-2" style="height: 110px;" alt="">
              <p class="mb-1 fw-semibold small">Beras IR. I (IR 64)</p>
              <p class="fw-bold text-dark mb-0">Rp14.682/kg</p>
            </div>
          </div>
  
          <div class="col-md-4">
            <div class="p-3 bg-white card-pangan position-relative">
              <span class="text-danger trend-icon"><i class="bi bi-graph-down-arrow"></i></span>
              <p class="mb-1 text-muted">Cabe</p>
              <img src="front/assets/cabai.png" class="mx-auto d-block mb-2" style="height: 110px;" alt="">
              <p class="mb-1 fw-semibold small">Cabe Merah Keriting</p>
              <p class="fw-bold text-dark mb-0">Rp56.786/kg</p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="p-3 bg-white card-pangan position-relative">
              <span class="text-success trend-icon"><i class="bi bi-graph-up-arrow"></i></span>
              <p class="mb-1 text-muted">Beras</p>
              <img src="front/assets/berass.png" class="mx-auto d-block mb-2" style="height: 110px;" alt="">
              <p class="mb-1 fw-semibold small">Beras IR. II (IR 64)</p>
              <p class="fw-bold text-dark mb-0">Rp13.925/kg</p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="p-3 bg-white card-pangan position-relative">
              <span class="text-danger trend-icon"><i class="bi bi-graph-down-arrow"></i></span>
              <p class="mb-1 text-muted">Beras</p>
              <img src="front/assets/berass.png" class="mx-auto d-block mb-2" style="height: 110px;" alt="">
              <p class="mb-1 fw-semibold small">Beras IR. I (IR 64)</p>
              <p class="fw-bold text-dark mb-0">Rp14.682/kg</p>
            </div>
          </div>
  
          <div class="col-md-4">
            <div class="p-3 bg-white card-pangan position-relative">
              <span class="text-danger trend-icon"><i class="bi bi-graph-down-arrow"></i></span>
              <p class="mb-1 text-muted">Cabe</p>
              <img src="front/assets/cabai.png" class="mx-auto d-block mb-2" style="height: 110px;" alt="">
              <p class="mb-1 fw-semibold small">Cabe Merah Keriting</p>
              <p class="fw-bold text-dark mb-0">Rp56.786/kg</p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="p-3 bg-white card-pangan position-relative">
              <span class="text-success trend-icon"><i class="bi bi-graph-up-arrow"></i></span>
              <p class="mb-1 text-muted">Beras</p>
              <img src="front/assets/berass.png" class="mx-auto d-block mb-2" style="height: 110px;" alt="">
              <p class="mb-1 fw-semibold small">Beras IR. II (IR 64)</p>
              <p class="fw-bold text-dark mb-0">Rp13.925/kg</p>
            </div>
          </div>
        </div>
      </div>
  
      <!-- SIDEBAR -->
      <div class="col-lg-4 mt-4 mt-lg-0">
          <h5 class="fw-bold text-primary mb-3">Berita Pangan</h5>
      
          <a href="/detailberita" class="text-decoration-none text-dark">
          <div class="sidebar-news-item d-flex mb-3">
              <img src="front/assets/andrasoni.png" alt="" class="me-2" style="width: 60px; height: 60px; object-fit: cover; border-radius: 6px;">
              <div>
              <h6 class="mb-1">Andra Soni Targetkan Panen 1,8 Juta Ton</h6>
              <small class="text-muted">Rabu, 23 Apr 2025 23:31 WIB</small>
              </div>
          </div>
          </a>
      
          <a href="/detailberita" class="text-decoration-none text-dark">
          <div class="sidebar-news-item d-flex mb-3">
              <img src="front/assets/prabowo.png" alt="" class="me-2" style="width: 60px; height: 60px; object-fit: cover; border-radius: 6px;">
              <div>
              <h6 class="mb-1"><span class="text-success">Sumatera Selatan</span> - Prabowo Sebut Pangan Aman</h6>
              <small class="text-muted">Rabu, 23 Apr 2025 16:15 WIB</small>
              </div>
          </div>
          </a>
      
          <a href="/detailberita" class="text-decoration-none text-dark">
          <div class="sidebar-news-item d-flex mb-3">
              <img src="front/assets/bni.png" alt="" class="me-2" style="width: 60px; height: 60px; object-fit: cover; border-radius: 6px;">
              <div>
              <h6 class="mb-1">BNI Salurkan Rp 14,3 Triliun ke Sektor Pangan</h6>
              <small class="text-muted">Minggu, 13 Apr 2025 13:09 WIB</small>
              </div>
          </div>
          </a>

          <a href="/detailberita" class="text-decoration-none text-dark">
              <div class="sidebar-news-item d-flex mb-3">
                  <img src="front/assets/andrasoni.png" alt="" class="me-2" style="width: 60px; height: 60px; object-fit: cover; border-radius: 6px;">
                  <div>
                  <h6 class="mb-1">Andra Soni Targetkan Panen 1,8 Juta Ton</h6>
                  <small class="text-muted">Rabu, 23 Apr 2025 23:31 WIB</small>
                  </div>
              </div>
              </a>
          
              <a href="/detailberita" class="text-decoration-none text-dark">
              <div class="sidebar-news-item d-flex mb-3">
                  <img src="front/assets/prabowo.png" alt="" class="me-2" style="width: 60px; height: 60px; object-fit: cover; border-radius: 6px;">
                  <div>
                  <h6 class="mb-1"><span class="text-success">Sumatera Selatan</span> - Prabowo Sebut Pangan Aman</h6>
                  <small class="text-muted">Rabu, 23 Apr 2025 16:15 WIB</small>
                  </div>
              </div>
              </a>
          
              <a href="/detailberita" class="text-decoration-none text-dark">
              <div class="sidebar-news-item d-flex mb-3">
                  <img src="front/assets/bni.png" alt="" class="me-2" style="width: 60px; height: 60px; object-fit: cover; border-radius: 6px;">
                  <div>
                  <h6 class="mb-1">BNI Salurkan Rp 14,3 Triliun ke Sektor Pangan</h6>
                  <small class="text-muted">Minggu, 13 Apr 2025 13:09 WIB</small>
                  </div>
              </div>
              </a>

              <a href="/detailberita" class="text-decoration-none text-dark">
                  <div class="sidebar-news-item d-flex mb-3">
                      <img src="front/assets/andrasoni.png" alt="" class="me-2" style="width: 60px; height: 60px; object-fit: cover; border-radius: 6px;">
                      <div>
                      <h6 class="mb-1">Andra Soni Targetkan Panen 1,8 Juta Ton</h6>
                      <small class="text-muted">Rabu, 23 Apr 2025 23:31 WIB</small>
                      </div>
                  </div>
                  </a>
              
                  <a href="/detailberita" class="text-decoration-none text-dark">
                  <div class="sidebar-news-item d-flex mb-3">
                      <img src="front/assets/prabowo.png" alt="" class="me-2" style="width: 60px; height: 60px; object-fit: cover; border-radius: 6px;">
                      <div>
                      <h6 class="mb-1"><span class="text-success">Sumatera Selatan</span> - Prabowo Sebut Pangan Aman</h6>
                      <small class="text-muted">Rabu, 23 Apr 2025 16:15 WIB</small>
                      </div>
                  </div>
                  </a>
              
                  <a href="/detailberita" class="text-decoration-none text-dark">
                  <div class="sidebar-news-item d-flex mb-3">
                      <img src="front/assets/bni.png" alt="" class="me-2" style="width: 60px; height: 60px; object-fit: cover; border-radius: 6px;">
                      <div>
                      <h6 class="mb-1">BNI Salurkan Rp 14,3 Triliun ke Sektor Pangan</h6>
                      <small class="text-muted">Minggu, 13 Apr 2025 13:09 WIB</small>
                      </div>
                  </div>
                  </a>
              </div>
          </div>
        </div>
@endsection