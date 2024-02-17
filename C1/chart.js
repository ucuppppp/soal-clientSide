
    const canvas = document.getElementById('chart');
    const ctx = canvas.getContext('2d');
    
    const jumlah = ['70', '55', '41', '27', '13'];
    const tanggal = ['1', '2', '3', '4', '5', '6', '7', '8'];
    
    function drawChart()  {
        ctx.beginPath()
        ctx.moveTo(50, 35)
        ctx.lineTo(50, chart.height - 50)
        ctx.lineTo(chart.width - 110, chart.height - 50)
        ctx.stroke()

        for(let i = 0; i < tanggal.length; i++){
            ctx.fillText(tanggal[i], 55 + (i * 60), chart.height - 30)
            ctx.fillRect(57 + (i * 60), chart.height - 50, 2, 4)
        }
        
        for(let i = 0; i < jumlah.length; i++){
            ctx.fillText(jumlah[i], 30, 55 + (i * 70))
            ctx.fillRect(46, 50 + (i * 70), 4, 2)
        }

        ctx.beginPath()
        ctx.moveTo(55, chart.height - 68)
        ctx.lineTo(120, 300)
        ctx.lineTo(170, 60)
        ctx.lineTo(240, 200)
        ctx.lineTo(300, 100)
        ctx.lineTo(360, 290)
        ctx.lineTo(415, 140)
        ctx.lineTo(475, 240)
        ctx.strokeStyle = 'red'
        ctx.lineWidth =2
        ctx.stroke()

        ctx.font = '12px Monospace'
        ctx.fillText('Jumlah', 30, 30)
        ctx.fillText('Tanggal', canvas.width - 110, canvas.height - 45)

    }


    
    drawChart()
