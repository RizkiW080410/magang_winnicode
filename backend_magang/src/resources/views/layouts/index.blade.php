<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
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
  <link rel="stylesheet" href="{{ asset('front/style/style.css') }}">
  <link rel="stylesheet" href="{{ asset('front/style/detail.css') }}">
  <link rel="stylesheet" href="{{ asset('front/style/infopangan.css') }}">
  <link rel="stylesheet" href="{{ asset('front/style/save.css') }}">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark-custom py-3">
  <div class="container">
    <a class="navbar-brand" href="/">
      <img src="{{ asset('front/assets/icon.png') }}" alt="Portal Berita Logo" height="50">
    </a>

    <!-- Search -->
    <form class="d-flex position-relative mx-auto w-50 dropdown" autocomplete="off">
      <input id="searchInput" class="form-control rounded-pill ps-5 dropdown-toggle" type="search"
             placeholder="Cari berita..." data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="bi bi-search position-absolute top-50 start-0 translate-middle-y ms-3"></i>
      <ul id="searchResults" class="dropdown-menu w-100 mt-1"></ul>
    </form>

    <!-- Sidebar Toggle -->
    <div class="d-flex align-items-center">
      @auth
        @if(Auth::user()->hasRole('Pengunjung'))
          <button class="btn btn-outline-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#userSidebar">
            <i class="bi bi-list"></i>
          </button>
        @endif
      @else
        <a href="#" class="btn btn-pink me-2" data-bs-toggle="modal" data-bs-target="#registerModal">Daftar</a>
        <a href="#" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#loginModal">Masuk</a>
      @endauth
    </div>
  </div>
</nav>

<!-- Offcanvas Sidebar -->
@auth
  @if(Auth::user()->hasRole('Pengunjung'))
    <div class="offcanvas offcanvas-end" tabindex="-1" id="userSidebar">
      <div class="offcanvas-header bg-primary text-white">
        <div class="d-flex align-items-center">
          <img src="{{ Auth::user()->getFilamentAvatarUrl() }}" alt="Avatar" class="rounded-circle me-2" width="50" height="50">
          <div>
            <h6 class="mb-0">{{ Auth::user()->name }}</h6>
            <small>{{ Auth::user()->email }}</small>
          </div>
        </div>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
      </div>
      <div class="offcanvas-body p-0">
        <ul class="list-group list-group-flush">
          <li class="list-group-item">
            <a href="#" class="d-flex align-items-center text-decoration-none text-dark"
               data-bs-toggle="modal" data-bs-target="#profileModal" data-bs-dismiss="offcanvas">
              <i class="bi bi-person-circle me-2 fs-4"></i>
              <span>Profil Saya</span>
            </a>
          </li>
          <li class="list-group-item">
            <a href="{{ route('berita.saved') }}" class="d-flex align-items-center text-decoration-none text-dark">
              <i class="bi bi-bookmark-fill me-2 fs-4"></i>
              <span>Berita Tersimpan</span>
              <span class="badge bg-secondary ms-auto">{{ Auth::user()->savedBeritas()->count() }}</span>
            </a>
          </li>
          <li class="list-group-item">
            <form action="{{ route('logout') }}" method="POST" class="m-0 p-0">
              @csrf
              <button type="submit" class="btn btn-link text-start w-100 text-dark">
                <i class="bi bi-box-arrow-right me-2 fs-4"></i>
                Logout
              </button>
            </form>
          </li>
        </ul>
      </div>
    </div>
  @endif
@endauth

<!-- Menu -->
<div class="bg-white shadow-sm">
  <div class="container">
    <ul class="nav nav-pills justify-content-center py-2" id="kategoriFilter">
      <li class="nav-item">
        <a href="#" class="nav-link kategori-btn" data-filter="all">Semua</a>
      </li>
      @foreach ($categories as $category)
        <li class="nav-item">
          <a href="#" class="nav-link kategori-btn" data-filter="{{ strtolower($category->name) }}">
            {{ $category->name }}
          </a>
        </li>
      @endforeach
    </ul>
  </div>
</div>

@yield('content')

<!-- Profil Modal -->
<div class="modal fade" id="profileModal" tabindex="-1">
  @if(session('success'))
    <div class="position-fixed top-0 end-0 p-3" style="z-index: 1050;">
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
      </div>
    </div>
  @endif
  @auth
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Profil</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="modal-body">
          <div class="text-center mb-3">
            <img src="{{ Auth::user()->getFilamentAvatarUrl() }}" class="rounded-circle" width="100" height="100" alt="Avatar">
          </div>
          <div class="mb-3">
            <label class="form-label">Avatar</label>
            <input type="file" name="avatar_url" class="form-control">
          </div>
          <div class="mb-3">
            <label class="form-label">Nama Lengkap</label>
            <input type="text" name="name" class="form-control" value="{{ Auth::user()->name }}" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="{{ Auth::user()->email }}" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
  @endauth
</div>


<!-- Modal Login Bootstrap -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content p-3">
      <div class="row g-0">
        <!-- Gambar kiri -->
        <div class="col-md-6 d-none d-md-block">
          <img src="{{ asset('front/assets/iconlogin.png') }}" alt="News" class="img-fluid h-100 w-100" style="object-fit: cover;">
        </div>
        <!-- Form kanan -->
        <div class="col-md-6 p-4 d-flex flex-column justify-content-center">
          <div class="text-center mb-4">
            <img src="{{ asset('front/assets/subiconlogin.png') }}" width="100" alt="Logo">
            <h5 class="fw-bold mt-3">LOG IN</h5>
          </div>
          @if(session('warning'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              {{ session('warning') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @endif
          <form method="POST" action="{{ route('login') }}">
            @csrf
            <input type="email" name="email" class="form-control mb-3" placeholder="Email Address" required>
            <input type="password" name="password" class="form-control mb-3" placeholder="Password" required>
            <button type="submit" class="btn btn-primary w-100">Let's Start!</button>
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
          <img src="{{ asset('front/assets/iconregister.png') }}" alt="Register Illustration" class="img-fluid p-4" />
        </div>

        <!-- Formulir kanan -->
        <div class="col-md-6 p-4 d-flex flex-column justify-content-center">
          <div class="text-center mb-4">
            <img src="{{ asset('front/assets/subiconlogin.png') }}" width="80" alt="Logo">
            <h5 class="fw-bold mt-2">Create Account</h5>
          </div>
          <form method="POST" action="{{ route('register') }}">
            @csrf
            <input type="text" name="name" class="form-control mb-3" placeholder="Name" required>
            <input type="email" name="email" class="form-control mb-3" placeholder="Email Address" required>
            <input type="password" name="password" class="form-control mb-3" placeholder="Password" required>
            <input type="password" name="password_confirmation" class="form-control mb-4" placeholder="Confirm Password" required>
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
          @foreach ($sosial_medias as $sosial)
              <li class="mb-2">
                <i class="{{ $sosial->icon }}"></i><a href="{{ $sosial->link }}" class="link-plain">{{ $sosial->name }}</a>
              </li>
          @endforeach
        </ul>
      </div>
      <!-- Kolom 2 -->
      <div class="col-md-3 mb-4">
        <h6 class="fw-bold mb-3">SITEMAP</h6>
        <ul class="list-unstyled small">
          <li class="mb-2"><a href="/" class="link-plain">Beranda</a></li>
        </ul>
      </div>
      <!-- Kolom 3 -->
      <div class="col-md-3 mb-4">
        <h6 class="fw-bold mb-3">KONTAK KAMI</h6>
        @foreach ($compenies as $compeni)
            <p class="small mb-1">E-Mail: {{ $compeni->email }}</p>
        @endforeach
        @foreach ($branch_companies as $branch)
            <p class="small mb-1">Alamat ({{ $branch->name }}): {{ $branch->alamat }}</p>
        @endforeach
        @foreach ($compenies as $compenie)
            <p class="small">Call Center: {{ $compenie->telepon }} (24 Jam)</p> 
        @endforeach
        
      </div>
      <!-- Kolom 4 -->
      <div class="col-md-3 mb-4">
        <div class="d-flex align-items-center justify-content-center mb-2">
          @foreach ($informasis as $info)
              <img src="{{ asset('storage/' . $info->logo) }}" alt="Winnicode Logo" style="height: 45px; margin-right: 10px;">
          @endforeach
        </div>
        <p class="small text-center">
          Jurnalistik Program winnicode adalah program pengembangan sumber daya manusia yang ditujukan bagi pemuda pemudi yang berkarir di dunia report.
        </p>
      </div>
    </div>
    <hr>
    @foreach ($copyrights as $copy)
        <div class="text-md-start text-center small text-muted">
          {{ $copy->name }}
        </div>
    @endforeach
    
  </div>
</footer>

  

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
  window.beritaList      = @json($beritaList);
  window.showLoginModal  = {{ session('warning') ? 'true' : 'false' }};
</script>
<script src="{{ asset('front/js/script.js') }}"></script>
</body>
</html>
