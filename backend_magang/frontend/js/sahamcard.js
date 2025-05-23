const stockData = [
    { name: 'LQ45', price: 761.52, change: 2.85, percent: 0.38 },
    { name: 'BBCA', price: 8500, change: 25, percent: 0.29 },
    { name: 'TLKM', price: 4300, change: -10, percent: -0.23 },
    { name: 'BBRI', price: 5000, change: 15, percent: 0.30 },
    { name: 'BMRI', price: 6100, change: -5, percent: -0.08 },
    { name: 'ASII', price: 6000, change: 20, percent: 0.34 },
    { name: 'UNVR', price: 4500, change: -15, percent: -0.33 },
    { name: 'ICBP', price: 11000, change: 30, percent: 0.27 },
    { name: 'INDF', price: 7000, change: 10, percent: 0.14 },
    { name: 'ANTM', price: 1600, change: -20, percent: -1.23 },
    { name: 'PGAS', price: 1300, change: 12, percent: 0.93 },
    { name: 'PTBA', price: 2900, change: -25, percent: -0.85 },
    { name: 'MDKA', price: 2700, change: 40, percent: 1.50 },
    { name: 'ADRO', price: 3100, change: 15, percent: 0.49 },
    { name: 'SMGR', price: 6400, change: -10, percent: -0.16 },
    { name: 'BRIS', price: 1800, change: 18, percent: 1.01 },
    { name: 'SIDO', price: 880, change: -5, percent: -0.56 },
    { name: 'WIIM', price: 900, change: 7, percent: 0.78 },
    { name: 'CPIN', price: 5900, change: -30, percent: -0.51 },
    { name: 'KLBF', price: 2000, change: 10, percent: 0.50 }
  ];
  

const stockCardsContainer = document.getElementById('stock-cards');

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
