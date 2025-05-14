document.addEventListener('DOMContentLoaded', function () {
  // Render data saham
  const stockData = [
    { name: 'LQ45', price: 722.69, change: 5.45, percent: 0.76 },
    { name: 'BBCA', price: 8500, change: 25, percent: 0.29 },
    { name: 'TLKM', price: 4300, change: -10, percent: -0.23 },
    { name: 'BBRI', price: 5000, change: 15, percent: 0.30 },
    { name: 'BMRI', price: 6100, change: -5, percent: -0.08 },
    { name: 'ASII', price: 6000, change: 20, percent: 0.34 }
  ];

  const stockCardsContainer = document.getElementById('stock-cards');
  if (stockCardsContainer) {
    stockData.forEach(stock => {
      const card = document.createElement('div');
      card.innerHTML = `
        <div class="custom-stock-card">
          <div>
            <div class="stock-title">${stock.name}</div>
            <div class="stock-price">${stock.price.toFixed(2)}</div>
          </div>
          <div class="stock-change">
            ${stock.change.toFixed(2)}<br>${stock.percent.toFixed(2)}%<br>
            ${stock.change >= 0 ? '<i class="bi bi-arrow-up text-success"></i>' : '<i class="bi bi-arrow-down text-danger"></i>'}
          </div>
        </div>
      `;
      stockCardsContainer.appendChild(card);
    });
  }

  // Logika tombol login
  const loginBtn = document.getElementById('loginBtn');
  if (loginBtn) {
    loginBtn.addEventListener('click', function () {
      const commentForm = document.getElementById('commentForm');
      const modalEl = document.getElementById('loginModal');
      const modalInstance = bootstrap.Modal.getOrCreateInstance(modalEl); // Lebih aman
      
      if (commentForm && modalInstance) {
        commentForm.classList.remove('d-none');
        modalInstance.hide();
      }
    });
  }
});