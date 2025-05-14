document.addEventListener('DOMContentLoaded', function () {
    const ctx = document.getElementById('lq45Chart');
    if (!ctx) {
      console.error('Canvas tidak ditemukan!');
      return;
    }

    new Chart(ctx, {
      type: 'line',
      data: {
        labels: [
          '09:00', '09:30', '10:00', '10:30', '11:00',
          '12:00', '13:00', '13:30', '14:00', '14:30', '15:00'
        ],
        datasets: [{
          label: 'LQ45',
          data: [754.5, 756.8, 758.9, 760.4, 761.2, 761.3, 762.0, 763.0, 761.0, 758.5, 761.5],
          borderColor: 'blue',
          backgroundColor: 'rgba(0, 123, 255, 0.1)',
          pointBackgroundColor: 'blue',
          tension: 0.3,
          fill: true
        }]
      },
      options: {
        responsive: true,
        interaction: {
          mode: 'index',
          intersect: false,
        },
        plugins: {
          tooltip: {
            callbacks: {
              label: (context) => `Harga: ${context.parsed.y}`
            }
          },
          legend: {
            display: false
          }
        },
        scales: {
          y: {
            title: {
              display: true,
              text: 'Harga'
            }
          },
          x: {
            title: {
              display: true,
              text: 'Waktu'
            }
          }
        }
      }
    });
  });