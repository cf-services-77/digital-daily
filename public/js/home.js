const ctx = document.getElementById('myChart');

    new Chart(ctx, {
      type: 'pie',
      data: {
        labels: ['Rouge', 'Bleu', 'Jaune'],
        datasets: [{
          data: [30, 50, 20],
          backgroundColor: [
            'rgba(255, 99, 132, 0.7)',
            'rgba(54, 162, 235, 0.7)',
            'rgba(255, 206, 86, 0.7)'
          ],
          borderColor: [
            'rgba(255, 99, 132, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)'
          ],
          borderWidth: 1
        }]
      },
      options: {
        responsive: true,
        plugins: {
          legend: {
            display: true,      // Afficher la légende
            position: 'bottom', // top, left, right, bottom
            labels: {
              color: '#333',
              font: {
                size: 14,
                family: 'Arial'
              }
            }
          },
          title: {
            display: true,
            text: 'Répartition des couleurs'
          }
        }
      }
    });