@extends('layouts.index')

@section('content')
    <!-- Content -->
<div class="container my-4">
  <div class="row g-4">
    <!-- Berita Utama + Info Pangan -->
    <div class="col-lg-8 d-flex flex-column">
      <!-- Berita Utama Carousel (Swipe Only, No Button) -->
      <div id="headlineCarousel" class="carousel slide carousel-fade mb-4" data-bs-ride="carousel" data-bs-interval="3000" data-bs-touch="true">
        <div class="carousel-inner rounded overflow-hidden">
          @foreach ($headlineNews as $index => $berita)
            <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
              <div class="position-relative">
                <img src="{{ asset('storage/' . $berita->image) }}" class="d-block w-100" style="height: 350px; object-fit: cover;" alt="{{ $berita->title }}">
                <div class="main-news-overlay p-3 position-absolute bottom-0 start-0 text-white w-100">
                  <span class="badge bg-danger mb-2">{{ $berita->categoryBerita->name }}</span>
                  <h3 class="fw-bold">{{ Str::limit($berita->title, 80) }}</h3>
                  <p class="mb-1">{{ Str::limit(strip_tags($berita->isi_berita), 100) }}</p>
                  <small>{{ $berita->user->name }} • {{ \Carbon\Carbon::parse($berita->tanggal_terbit)->diffForHumans() }}</small><br>
                  <a href="{{ route('detail.berita', $berita->id) }}" class="text-warning text-decoration-none"><small>Baca Selengkapnya</small></a>
                </div>
              </div>
            </div>
          @endforeach
        </div>

        <!-- Indikator slide -->
        <div class="carousel-indicators">
          @foreach ($headlineNews as $index => $berita)
            <button type="button" data-bs-target="#headlineCarousel" data-bs-slide-to="{{ $index }}"
              class="{{ $index === 0 ? 'active' : '' }}" aria-label="Slide {{ $index + 1 }}"></button>
          @endforeach
        </div>
      </div>

          <!-- Wrapper Info Pangan -->
    <div class="container my-5  py-5 " style="border-top: 2px solid #a9acb0; border-bottom: 2px solid #a9acb0 ; ">
      <div class="row align-items-start">
        <!-- Kiri: Judul + Deskripsi -->
        <div class="col-md-4 mb-3">
          <h5 class="fw-bold mb-2">Info Pangan</h5>

          @if($pangans->isNotEmpty())
            <p class="text-muted mb-1">
              <strong>Last Update:</strong>
              {{ \Carbon\Carbon::parse($lastUpdate)
                    ->translatedFormat('l, d F Y') }}
            </p>
            <p class="text-muted mb-3">
              <strong>Sumber:</strong> {{ $sumber }}
            </p>
          @else
            <p class="text-muted mb-3"><em>Data tidak tersedia.</em></p>
          @endif

          <a href="{{ url('/infopangan') }}"
            class="btn btn-danger fw-bold d-none d-md-inline-block">
            Baca Selengkapnya
          </a>
        </div>
            <!-- Kanan: Scrollable Cards -->
            <div class="col-md-8">
              <div class="d-flex overflow-auto gap-3 pb-2">
                @forelse($pangans as $pangan)
                  <div class="card p-3 text-center flex-shrink-0" style="width:160px;">
                    <img src="{{ asset('storage/' . $pangan->image) }}"
                        alt="{{ $pangan->name }}"
                        class="mx-auto mb-2"
                        style="width:80px; height:80px; object-fit:contain;">

                    <p class="fw-bold mb-1">{{ $pangan->name }}</p>
                    <p class="text-muted mb-1 small">{{ $pangan->description }}</p>
                    <p class="fw-bold text-success small">
                      Rp {{ number_format($pangan->harga, 0, ',', '.') }}/kg
                    </p>
                  </div>
                @empty
                  <p class="text-muted">Belum ada data pangan.</p>
                @endforelse
              </div>

              <div class="mt-3 d-flex d-md-none">
                <a href="{{ url('/infopangan') }}" class="btn btn-danger px-4 py-2 rounded-pill">
                  Baca Selengkapnya
                </a>
              </div>
            </div>
         </div>
        </div>
    </div>

    <!-- Sidebar berita terkini -->
    <div class="col-lg-4 mb-4 d-flex flex-column sidebar-wrapper">
      <div class="card gyaaat  p-5 flex-grow-1 mb-3">
        <h5 class="fw-bold mb-3">Berita Terkini</h5>
        <div class="latest-news overflow-auto" style="max-height: 740px;">
          <!-- Berita Item -->
          @foreach ($latestNews as $berita)
            <div class="news-item d-flex mb-3 berita-terkini-item" data-category="{{ strtolower($berita->categoryBerita->name) }}">
              <img src="{{ asset('storage/' . $berita->image) }}" class="rounded" alt="{{ $berita->title }}"
                  style="width: 80px; height: 60px; object-fit: cover;">
              <div class="ms-3">
                <h6 class="fw-bold mb-1">{{ Str::limit($berita->title, 40) }}</h6>
                <div class="d-flex align-items-center mb-1">
                  <span class="badge bg-danger me-2">{{ $berita->categoryBerita->name }}</span>
                  <small class="text-muted">{{ \Carbon\Carbon::parse($berita->tanggal_terbit)->diffForHumans() }}</small>
                </div>
                <small>{{ Str::limit(strip_tags($berita->isi_berita), 50) }}</small><br>
                <a href="{{ route('detail.berita', $berita->id) }}" class="text-primary text-decoration-none">
                  <small>Baca Selengkapnya</small>
                </a>
              </div>
            </div>
          @endforeach
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
    <div class="berita-item col-12 col-sm-6 col-md-4 col-lg-3" data-category="{{ strtolower($berita->categoryBerita->name) }}">
      <div class="card h-100 custom-card">
        <img src="{{ asset('storage/' . $berita->image) }}" class="card-img-top" alt="Berita">
        <div class="card-body d-flex flex-column">
          <h6 class="fw-bold mb-2">{{ $berita->title }}</h6>
          <span class="badge bg-danger text-white fw-normal mb-2 small-badge">{{ $berita->categoryBerita->name }}</span>
          <p class="text-muted small mb-4">{{ Str::limit(strip_tags($berita->isi_berita), 100) }}</p>
          <div class="mt-auto d-flex justify-content-between align-items-center pt-2 border-top" style="font-size: 0.75rem;">
            <div class="text-muted">
              <strong>{{ $berita->user->name }}</strong><br>
              <span class="text-muted">{{ \Carbon\Carbon::parse($berita->tanggal_terbit)->diffForHumans() }}</span>
            </div>
            <a href="{{ route('detail.berita', $berita->id) }}" class="text-danger fw-semibold text-decoration-none">Baca Selengkapnya</a>
          </div>
        </div>
      </div>
    </div>
    @endforeach
    
  </div>
</div>
@endsection