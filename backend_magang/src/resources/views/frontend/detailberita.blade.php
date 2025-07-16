@extends('layouts.index')

@section('content')
<div class="container mt-4">
  <div class="row">
    <!-- Konten Berita -->
    <div class="col-lg-8">
      <div class="content-wrapper">

        <!-- JUDUL & INFO -->
        <div class="text-center my-4">
          <h4 class="fw-bold text-uppercase mb-2">{{ $berita->title }}</h4>
          <div class="d-flex justify-content-center align-items-center gap-2 mb-2">
            <span class="badge bg-dark text-white px-3 py-2">{{ $berita->categoryBerita->name }}</span>
            <span class="text-secondary small">Penulis: {{ $berita->user->name }}</span>
            @auth
              <form action="{{ 
                    Auth::user()->savedBeritas->contains($berita) 
                      ? route('berita.unsave',   $berita)
                      : route('berita.save',     $berita)
                  }}" method="POST" class="d-inline">
                @csrf
                <button class="btn btn-sm {{ Auth::user()->savedBeritas->contains($berita) ? 'btn-danger' : 'btn-outline-primary' }}">
                  {{ Auth::user()->savedBeritas->contains($berita) ? 'Hapus Simpanan' : 'Simpan untuk Nanti' }}
                </button>
              </form>
            @endauth
          </div>
          <p class="text-muted small">
            {{ \Carbon\Carbon::parse($berita->tanggal_terbit)->translatedFormat('l, d F Y – H:i') }}
          </p>
        </div>

        <!-- Gambar Utama -->
        @if($berita->image)
          <img src="{{ asset('storage/' . $berita->image) }}" alt="{{ $berita->title }}" class="img-fluid mb-4 rounded">
        @endif

        <!-- Isi Berita -->
        <div class="berita-content" style="text-align: justify; text-indent: 2em;">
          {!! $berita->isi_berita !!}
        </div>
      </div>

      <!-- Komentar Section -->
      <div class="comment-section p-4 rounded mb-5 mt-5" style="background-color: #f7f7f7;">
        <h5 class="fw-bold mb-3">Komentar</h5>

        {{-- Form Komentar --}}
        @auth
        <form action="{{ route('komentar.store', $berita->id) }}" method="POST" class="mb-4">
            @csrf
            <textarea name="comment" class="form-control mb-2" rows="3" placeholder="Tulis komentar..." required></textarea>
            <button type="submit" class="btn btn-primary btn-sm">Kirim Komentar</button>
        </form>
        @else
        <p class="text-muted">Silakan <a href="#" data-bs-toggle="modal" data-bs-target="#loginModal">login</a> untuk menulis komentar.</p>
        @endauth

        {{-- List Komentar --}}
        @forelse($komentarList as $komentar)
          <div class="mb-4 border-bottom pb-3">
            <div class="d-flex align-items-center mb-2">
              <img src="{{ $komentar->user->getFilamentAvatarUrl() }}" width="40" class="rounded-circle me-2" alt="avatar">
              <div>
                <strong>{{ $komentar->user->name }}</strong><br>
                <small class="text-muted">{{ $komentar->created_at->diffForHumans() }}</small>
              </div>
            </div>
            <p>{{ $komentar->comment }}</p>

            {{-- Like tanpa database --}}
            <div class="d-flex align-items-center gap-3 small mb-2">
              <button 
                class="btn btn-sm p-0 like-btn border-0 bg-transparent" 
                data-id="{{ $komentar->id }}"
              >
                <i class="bi bi-hand-thumbs-up" id="icon-{{ $komentar->id }}"></i>
              </button>
              <span id="like-count-{{ $komentar->id }}" class="text-muted">0</span>
              <a href="javascript:void(0)" class="text-muted" onclick="toggleReplyForm({{ $komentar->id }})">Balas</a>
            </div>

            {{-- List Balasan --}}
            @foreach($komentar->replies as $balasan)
              <div class="ms-5 mb-2">
                <div class="d-flex align-items-center mb-1">
                  <img src="{{ $balasan->user->getFilamentAvatarUrl() }}" width="32" class="rounded-circle me-2" alt="avatar">
                  <div>
                    <strong>{{ $balasan->user->name }}</strong>
                    <small class="text-muted ms-2">{{ $balasan->created_at->diffForHumans() }}</small>
                  </div>
                </div>
                <p class="ms-5">{{ $balasan->reply }}</p>
              </div>
            @endforeach

            {{-- Form Balas Komentar (toggle) --}}
            @auth
            <div id="reply-form-{{ $komentar->id }}" class="ms-5 mt-2 d-none">
              <form action="{{ route('balasan.store', $komentar->id) }}" method="POST">
                @csrf
                <textarea name="reply" rows="2" class="form-control mb-2" placeholder="Balas komentar..." required></textarea>
                <button type="submit" class="btn btn-outline-secondary btn-sm">Balas</button>
              </form>
            </div>
            @endauth
          </div>
        @empty
          <p class="text-muted">Belum ada komentar.</p>
        @endforelse
      </div>
    </div>

    <!-- Sidebar -->
    <div class="col-lg-4">
      <div class="sidebar-wrapper">
        <h5 class="fw-bold mb-4">Berita Terkait</h5>
        @php
          $relatedNews = \App\Models\Berita::where('category_berita_id', $berita->category_berita_id)
                          ->where('id', '!=', $berita->id)
                          ->latest()
                          ->take(4)
                          ->get();
        @endphp
        @foreach ($relatedNews as $item)
          <div class="related-post d-flex mb-4 border-bottom pb-3">
            <img src="{{ asset('storage/' . $item->image) }}" alt="Thumbnail" class="me-3" style="width: 100px; height: 100px; object-fit: cover; border-radius: 12px;">
            <div>
              <h6 class="fw-bold mb-1">{{ Str::limit($item->title, 60) }}</h6>
              <span class="badge bg-primary text-white mb-1">{{ $item->categoryBerita->name }}</span>
              <span class="text-muted small d-block mb-1">{{ \Carbon\Carbon::parse($item->tanggal_terbit)->diffForHumans() }}</span>
              <a href="{{ route('detail.berita', $item->id) }}" class="small text-primary fw-semibold">Baca Selengkapnya</a>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
@endsection

