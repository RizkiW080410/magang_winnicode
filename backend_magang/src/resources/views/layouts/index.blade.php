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
  <link rel="stylesheet" href="{{ asset('front/style/infosaham.css') }}">
  <link rel="stylesheet" href="{{ asset('front/style/infopangan.css') }}">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark-custom py-3">
  <div class="container">
    <a class="navbar-brand" href="/">
      <img src="{{ asset('front/assets/icon.png') }}" alt="Portal Berita Logo" height="70">
    </a>
    <form class="d-flex position-relative mx-auto w-50 dropdown" autocomplete="off">
      <input
        id="searchInput"
        class="form-control rounded-pill ps-5 dropdown-toggle"
        type="search"
        placeholder="Cari berita..."
        data-bs-toggle="dropdown"
        aria-haspopup="true"
        aria-expanded="false"
      >
      <i class="bi bi-search position-absolute top-50 start-0 translate-middle-y ms-3"></i>

      <ul id="searchResults" class="dropdown-menu w-100 mt-1"></ul>
    </form>
    <div class="d-flex">
      @auth
        @if (Auth::user()->hasRole('Pengunjung'))
          <div class="d-flex align-items-center text-white me-3">
            Hai, {{ Auth::user()->name }} |
            <form action="{{ route('logout') }}" method="POST" class="d-inline ms-2">
              @csrf
              <button type="submit" class="btn btn-sm btn-light">Logout</button>
            </form>
          </div>
        @endif
      @else
        <a href="#" class="btn btn-pink me-2" data-bs-toggle="modal" data-bs-target="#registerModal">Daftar</a>
        <a href="#" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#loginModal">Masuk</a>
      @endauth
    </div>
  </div>
</nav>

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
          <img src="{{ asset('front/assets/footer.png') }}" alt="Winnicode Logo" style="height: 45px; margin-right: 10px;">
          <img src="{{ asset('front/assets/merdeka.png') }}" alt="Kampus Merdeka Logo" style="height: 45px;">
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
{{-- <script src="front/js/script.js"></script> --}}
<script>
  document.addEventListener('DOMContentLoaded', function () {
  const filterButtons = document.querySelectorAll('.kategori-btn');
  const beritaItems = document.querySelectorAll('.berita-item');
  const beritaTerkiniItems = document.querySelectorAll('.berita-terkini-item');

  filterButtons.forEach(button => {
    button.addEventListener('click', function (e) {
      e.preventDefault();

      // Highlight tombol aktif
      filterButtons.forEach(btn => btn.classList.remove('active'));
      this.classList.add('active');

      const kategori = this.dataset.filter.toLowerCase();

      // ✨ Fungsi untuk filter berita
      function filterElements(items, isFlex = false) {
        items.forEach(item => {
          const itemKategori = item.dataset.category.toLowerCase();
          const shouldShow = kategori === 'all' || itemKategori === kategori;

          if (shouldShow) {
            item.style.display = isFlex ? 'flex' : 'block';
            item.style.visibility = 'hidden';
            item.style.opacity = 0;
            setTimeout(() => {
              item.style.visibility = 'visible';
              item.style.opacity = 1;
            }, 10);
          } else {
            item.style.opacity = 0;
            setTimeout(() => {
              item.style.display = 'none';
            }, 200);
          }
        });
      }

      filterElements(beritaItems); // untuk grid berita utama
      filterElements(beritaTerkiniItems, true); // untuk sidebar (flex)
    });
  });
});
</script>
<script>
document.addEventListener("DOMContentLoaded", function () {
  const buttons = document.querySelectorAll(".like-btn");

  buttons.forEach(button => {
    const id = button.getAttribute("data-id");
    const icon = document.getElementById("icon-" + id);
    const count = document.getElementById("like-count-" + id);

    // Inisialisasi status dari localStorage
    if (localStorage.getItem("liked-" + id) === "true") {
      icon.classList.remove("bi-hand-thumbs-up");
      icon.classList.add("bi-hand-thumbs-up-fill");
      count.innerText = "1";
    }

    button.addEventListener("click", function () {
      const liked = localStorage.getItem("liked-" + id) === "true";

      if (liked) {
        icon.classList.remove("bi-hand-thumbs-up-fill");
        icon.classList.add("bi-hand-thumbs-up");
        localStorage.setItem("liked-" + id, "false");
        count.innerText = "0";
      } else {
        icon.classList.remove("bi-hand-thumbs-up");
        icon.classList.add("bi-hand-thumbs-up-fill");
        localStorage.setItem("liked-" + id, "true");
        count.innerText = "1";
      }
    });
  });
});

function toggleReplyForm(id) {
  const form = document.getElementById("reply-form-" + id);
  form.classList.toggle("d-none");
}
</script>
<script>
  // Variabel global berisi daftar berita: [{id,title},...]
  window.beritaList = @json($beritaList);
</script>
<script>
document.addEventListener('DOMContentLoaded', function(){
  const input = document.getElementById('searchInput');
  const menu  = document.getElementById('searchResults');
  let timeout;

  input.addEventListener('input', () => {
    clearTimeout(timeout);
    const q = input.value.trim().toLowerCase();
    if (q.length < 2) return menu.innerHTML = '';

    timeout = setTimeout(() => {
      const matches = window.beritaList
        .filter(b => b.title.toLowerCase().includes(q))
        .slice(0,5);

      if (matches.length === 0) {
        menu.innerHTML = '<li class="px-3 py-2 text-muted">Tidak ada hasil.</li>';
      } else {
        menu.innerHTML = matches.map(b => `
          <li>
            <a class="dropdown-item d-flex align-items-center" href="/detailberita/${b.id}">
              <img src="${b.img}" alt="" class="me-2 rounded" style="width:40px; height:40px; object-fit:cover;">
              <span class="flex-grow-1 text-truncate">${b.title}</span>
            </a>
          </li>
        `).join('');
      }

      new bootstrap.Dropdown(input).show();
    }, 200);
  });

  document.addEventListener('click', e => {
    if (!input.contains(e.target)) menu.innerHTML = '';
  });
});
</script>
</body>
</html>
