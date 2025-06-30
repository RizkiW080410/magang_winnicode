@extends('layouts.index')

@section('content')
<div class="container mt-4 mb-5">
  <div class="row">
    <!-- KONTEN UTAMA -->
    <div class="col-lg-8">
      <h4 class="fw-bold text-black">Info Pangan</h4>
      <p class="mb-1">
        <strong>Last Update:</strong>
        {{ \Carbon\Carbon::parse($lastUpdate)->translatedFormat('l, d F Y') }}
      </p>
      <p class="mb-2"><strong>Sumber:</strong> {{ $sumber }}</p>
      <p class="text-muted" style="font-size: 0.85rem;">*Data diperbarui setiap hari pukul 10:00 WIB</p>

      <!-- Filter Wilayah (bisa dikembangkan nanti) -->
      <div class="mb-4">
        <button class="btn badge-wilayah">Nasional</button>
        <button class="btn badge-wilayah active">Jakarta</button>
      </div>

      <!-- Grid Pangan -->
      <div class="row g-3">
        @forelse($pangans as $item)
          <div class="col-md-4">
            <div
              class="p-3 bg-white card-pangan position-relative h-100"
              style="cursor:pointer"
              data-bs-toggle="modal"
              data-bs-target="#panganModal-{{ $item->id }}"
            >
              @if($item->harga_perhari ?? false)
                {{-- contoh penggunaan icon tren --}}
                <span class="trend-icon position-absolute top-0 end-0 m-2">
                  @if($item->harga_perhari > 0)
                    <i class="bi bi-graph-up-arrow text-success"></i>
                  @else
                    <i class="bi bi-graph-down-arrow text-danger"></i>
                  @endif
                </span>
              @endif
              <p class="mb-1 text-muted">{{ $item->name }}</p>
              @if($item->image)
                <img
                  src="{{ asset('storage/' . $item->image) }}"
                  class="mx-auto d-block mb-2"
                  style="height:110px; object-fit:contain;"
                  alt="{{ $item->name }}"
                >
              @endif
              <p class="mb-1 fw-semibold small">{{ $item->description }}</p>
              <p class="fw-bold text-dark mb-0">
                Rp {{ number_format($item->harga, 0, ',', '.') }}/kg
              </p>
            </div>
          </div>
        @empty
          <div class="col-12">
            <p class="text-muted">Belum ada data pangan.</p>
          </div>
        @endforelse
      </div>

      {{-- Modal Detail Pangan --}}
      @foreach($pangans as $item)
      <div
        class="modal fade"
        id="panganModal-{{ $item->id }}"
        tabindex="-1"
        aria-labelledby="panganModalLabel-{{ $item->id }}"
        aria-hidden="true"
      >
        <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="panganModalLabel-{{ $item->id }}">
                {{ ucfirst($item->name) }}
              </h5>
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>

            <div class="modal-body">
              <div class="row g-4">
                {{-- Kolom Gambar --}}
                <div class="col-md-5">
                  @if($item->image)
                    <img
                      src="{{ asset('storage/' . $item->image) }}"
                      class="img-fluid rounded"
                      alt="{{ $item->name }}"
                      style="object-fit: cover; height: 100%; width:100%;"
                    >
                  @endif
                </div>
                {{-- Kolom Detail --}}
                <div class="col-md-7">
                  <p class="mb-2 text-uppercase text-muted small fw-bold">
                    Last Update:
                    <span class="text-dark">
                      {{ \Carbon\Carbon::parse($item->last_update)
                          ->translatedFormat('l, d F Y – H:i') }}
                    </span>
                  </p>
                  <p class="mb-4 text-muted">
                    <strong>Sumber:</strong> {{ $item->sumber }}
                  </p>

                  <h6 class="fw-semibold">Deskripsi</h6>
                  <p class="mb-4">{{ $item->description }}</p>

                  <h6 class="fw-semibold">Harga</h6>
                  <p class="fs-3 text-success mb-0">
                    Rp {{ number_format($item->harga, 0, ',', '.') }}/kg
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>

    <!-- SIDEBAR -->
    <div class="col-lg-4 mt-4 mt-lg-0">
      <h5 class="fw-bold text-primary mb-3">Berita Pangan</h5>
      @foreach(\App\Models\Berita::where('category_berita_id', 1)->latest()->take(6)->get() as $news)
        <a href="{{ route('detail.berita', $news->id) }}" class="text-decoration-none text-dark">
          <div class="sidebar-news-item d-flex mb-3">
            @if($news->image)
              <img
                src="{{ asset('storage/' . $news->image) }}"
                alt="{{ $news->title }}"
                class="me-2"
                style="width: 60px; height: 60px; object-fit: cover; border-radius: 6px;"
              >
            @endif
            <div>
              <h6 class="mb-1">{{ Str::limit($news->title, 50) }}</h6>
              <small class="text-muted">
                {{ \Carbon\Carbon::parse($news->tanggal_terbit)->translatedFormat('D, d M Y H:i') }} WIB
              </small>
            </div>
          </div>
        </a>
      @endforeach
    </div>
  </div>
</div>
@endsection
