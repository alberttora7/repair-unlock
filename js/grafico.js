// Gráfico Circular
    const pieCtx = document.getElementById('pieChart').getContext('2d');
    new Chart(pieCtx, {
      type: 'doughnut',
      data: {
        labels: ['Reparaciones', 'Desbloqueos', 'Mantenimiento'],
        datasets: [{
          data: [45, 25, 30],
          backgroundColor: ['#42a5f5', '#80deea', '#26c6da'],
        }]
      },
      options: {
        responsive: true,
        plugins: { legend: { position: 'bottom' } }
      }
    });

    // Gráfico de Barras
    const barCtx = document.getElementById('barChart').getContext('2d');
    new Chart(barCtx, {
      type: 'bar',
      data: {
        labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
        datasets: [{
          label: 'Servicios',
          data: [5, 12, 9, 11, 15],
          backgroundColor: '#42a5f5',
          borderRadius: 5
        }]
      },
      options: {
        responsive: true,
        scales: {
          y: { beginAtZero: true }
        }
      }
    });