@extends('layouts.index')

@section('content')
  <div class="container py-5">
    <h2 class="mb-4">Berita Tersimpan</h2>

    @if($beritas->isEmpty())
      <div class="alert alert-info">
        Kamu belum menyimpan berita apapun.
      </div>
    @else
      <div class="row gx-4 gy-5">
        @foreach($beritas as $berita)
          <div class="col-12 col-md-6 col-lg-4">
            <div class="card custom-card h-100">
              <!-- Gambar -->
              <img src="{{ asset('storage/'.$berita->image) }}"
                   class="card-img-top"
                   style="height:180px; object-fit:cover;"
                   alt="Gambar Berita">
              <div class="card-body d-flex flex-column">
                <!-- Judul -->
                <h5 class="card-title">{{ Str::limit($berita->title, 60) }}</h5>
                <!-- Badge Kategori -->
                <span class="badge bg-danger small-badge mb-2">
                  {{ $berita->categoryBerita->name }}
                </span>
                <!-- Cuplikan isi -->
                <p class="card-text text-truncate mb-4">
                  {{ Str::limit(strip_tags($berita->isi_berita), 100) }}
                </p>
                <!-- Tombol aksi -->
                <div class="mt-auto d-flex justify-content-between align-items-center">
                  <a href="{{ route('detail.berita', $berita->id) }}"
                     class="btn btn-baca btn-kecil">
                    Baca
                  </a>
                  <form action="{{ route('berita.unsave', $berita->id) }}"
                        method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-hapus btn-kecil">
                      Hapus
                    </button>
                  </form>
                </div>
              </div>
              <!-- Footer kartu -->
              <div class="card-footer text-muted small d-flex justify-content-between">
                <span>{{ $berita->user->name }}</span>
                <span>{{ $berita->created_at->diffForHumans() }}</span>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    @endif
  </div>
@endsection
