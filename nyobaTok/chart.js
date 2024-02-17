document.addEventListener("DOMContentLoaded", function () {
    const canvas = document.getElementById('myChart');
    const ctx = canvas.getContext('2d');
  
    // Data untuk grafik (ganti sesuai kebutuhan Anda)
    const labels = [1, 2, 3, 4, 5, 6, 7, 8];
    const data = [13, 27, 41, 55, 70];
  
    // Ukuran canvas dan grafik
    const canvasWidth = canvas.width;
    const canvasHeight = canvas.height;
    const chartWidth = canvasWidth - 40; // Lebar grafik
    const chartHeight = canvasHeight - 40; // Tinggi grafik
    const step = (chartWidth - 20) / labels.length; // Jarak antar titik
  
    // Skala untuk data
    const maxValue = Math.max(...data);
    const scale = chartHeight / maxValue;
  
    // Fungsi untuk menggambar grafik garis
    function drawChart() {
      // Menggambar sumbu X dan Y
      ctx.beginPath();
      ctx.moveTo(30, 30);
      ctx.lineTo(30, chartHeight + 20);
      ctx.lineTo(chartWidth - 40, chartHeight + 20);
      ctx.stroke();
  
      // Menambahkan indikator pada sumbu Y
      ctx.font = "12px Monospace";
      ctx.textAlign = "right";
      ctx.textBaseline = "middle";

      // Menambahkan indikator pada sumbu X
      for (let i = 0; i < labels.length; i++) {
        const x = i * step + 40;
        ctx.fillText(labels[i], x, chartHeight + 35);
        ctx.fillRect(x - 4, chartHeight + 20, 2, 5);
      }
  
      // Menggambar garis grafik
      ctx.beginPath();
      ctx.strokeStyle = 'red';
      ctx.lineWidth = 2;
  
      // Pindahkan moveTo ke posisi awal grafik
      const xStart = 35;
      const yStart = chartHeight + 60 - data[0] * scale;
      ctx.moveTo(xStart, yStart);
      ctx.fillText('Jumlah', 50, 23, 50, 10)
      ctx.fillText('Tanggal', canvasWidth - 33, canvasHeight - 19, 50, 10)
      ctx.lineTo(100, 320);
      ctx.lineTo(165, 70);
      ctx.lineTo(240, 225);
      ctx.lineTo(305, 110);
      ctx.lineTo(375, 315);
      ctx.lineTo(440, 175);
      ctx.lineTo(505, 265);
  
      for (let i = 0; i < data.length; i++) {
        const x = 20;
        const y = chartHeight + 60 - data[i] * scale;
        ctx.fillText(data[i], x ,y ,30,30)
        ctx.fillRect(x + 5, y -2 , 4 , 2)
      }
      ctx.stroke();


    }
  

    drawChart();
  });
  