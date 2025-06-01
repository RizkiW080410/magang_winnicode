@extends('layouts.index')

@section('content')
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
@endsection