// public/js/front.js

// Baca flag dari Blade untuk menampilkan modal login bila perlu
const shouldShowLoginModal = Boolean(window.showLoginModal);

// Baca daftar berita (injected oleh Blade)
const beritaList = window.beritaList || [];

document.addEventListener('DOMContentLoaded', function () {
  //
  // 1) Filter Kategori
  //
  const filterButtons       = document.querySelectorAll('.kategori-btn');
  const beritaItems         = document.querySelectorAll('.berita-item');
  const beritaTerkiniItems  = document.querySelectorAll('.berita-terkini-item');

  filterButtons.forEach(btn => {
    btn.addEventListener('click', function (e) {
      e.preventDefault();
      filterButtons.forEach(b => b.classList.remove('active'));
      this.classList.add('active');

      const kategori = this.dataset.filter.toLowerCase();

      function applyFilter(items, displayType) {
        items.forEach(item => {
          const cat = item.dataset.category.toLowerCase();
          const show = (kategori === 'all' || cat === kategori);

          if (show) {
            item.style.display    = displayType;
            item.style.visibility = 'hidden';
            item.style.opacity    = 0;
            setTimeout(() => {
              item.style.visibility = 'visible';
              item.style.opacity    = 1;
            }, 10);
          } else {
            item.style.opacity = 0;
            setTimeout(() => {
              item.style.display = 'none';
            }, 200);
          }
        });
      }

      applyFilter(beritaItems, 'block');
      applyFilter(beritaTerkiniItems, 'flex');
    });
  });

  //
  // 2) Like Button Toggle (LocalStorage)
  //
  document.querySelectorAll('.like-btn').forEach(button => {
    const id   = button.dataset.id;
    const icon = document.getElementById(`icon-${id}`);
    const cnt  = document.getElementById(`like-count-${id}`);

    if (localStorage.getItem(`liked-${id}`) === 'true') {
      icon.classList.replace('bi-hand-thumbs-up', 'bi-hand-thumbs-up-fill');
      cnt.innerText = '1';
    }

    button.addEventListener('click', () => {
      const liked = localStorage.getItem(`liked-${id}`) === 'true';
      if (liked) {
        icon.classList.replace('bi-hand-thumbs-up-fill', 'bi-hand-thumbs-up');
        localStorage.setItem(`liked-${id}`, 'false');
        cnt.innerText = '0';
      } else {
        icon.classList.replace('bi-hand-thumbs-up', 'bi-hand-thumbs-up-fill');
        localStorage.setItem(`liked-${id}`, 'true');
        cnt.innerText = '1';
      }
    });
  });

  //
  // 3) Search Autocomplete
  //
  const input = document.getElementById('searchInput');
  const menu  = document.getElementById('searchResults');
  let timer;
  if (input) {
    input.addEventListener('input', () => {
      clearTimeout(timer);
      const q = input.value.trim().toLowerCase();
      if (q.length < 2) {
        menu.innerHTML = '';
        return;
      }
      timer = setTimeout(() => {
        const matches = beritaList
          .filter(b => b.title.toLowerCase().includes(q))
          .slice(0, 5);

        if (matches.length === 0) {
          menu.innerHTML = '<li class="px-3 py-2 text-muted">Tidak ada hasil.</li>';
        } else {
          menu.innerHTML = matches.map(b => `
            <li>
              <a class="dropdown-item d-flex align-items-center" href="/detailberita/${b.id}">
                <img src="${b.img}" alt="" class="me-2 rounded" style="width:40px;height:40px;object-fit:cover;">
                <span class="flex-grow-1 text-truncate">${b.title}</span>
              </a>
            </li>
          `).join('');
        }
        new bootstrap.Dropdown(input).show();
      }, 200);
    });

    document.addEventListener('click', e => {
      if (!input.contains(e.target)) {
        menu.innerHTML = '';
      }
    });
  }

  //
  // 4) Tampilkan Login Modal jika perlu
  //
  if (shouldShowLoginModal) {
    const modal = new bootstrap.Modal(document.getElementById('loginModal'));
    modal.show();
  }
});

// Fungsi toggle balasan (dipanggil inline di Blade dengan onclick)
function toggleReplyForm(id) {
  const form = document.getElementById(`reply-form-${id}`);
  if (form) {
    form.classList.toggle('d-none');
  }
}
