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
