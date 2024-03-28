var myChart8; // Variabel untuk menyimpan objek grafik
// Fungsi untuk membuat grafik
function CreateChart8(data,  canvasId) {
    var labels = data.map(entry => entry.waktu);
    // Ubah label menjadi hanya bagian waktu (tanpa tanggal)
    labels = labels.map(function(label) {
        return label.split(' ')[1]; // Mengambil bagian waktu saja
    });
    var datasetLeft = data.map(entry => entry.L6_HSM2_MIRROR_ACTUAL_POS);
    var datasetRight = data.map(entry => entry.	L6_HSM2_MIRROR_MELTING_POS);
    var type = data.map(entry => entry.L6_HSM2_TYPE_BATTERY);
    // Cek apakah objek Chart sudah ada
    if (myChart8) {
        // Hancurkan objek Chart yang sudah ada
        myChart8.destroy();
    }
    
    // Inisialisasi objek grafik jika belum ada
    var ctx = document.getElementById(canvasId).getContext('2d');
    myChart8 = new Chart(ctx, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [{
                label: 'Actual Pos',
                data: datasetLeft,
                tension: 0,
                borderWidth: 0,
                pointRadius: 3,
                pointBackgroundColor: "rgba(255, 255, 255, .8)",
                pointBorderColor: "transparent",
                borderColor: "rgba(255, 255, 255, .8)",
                borderWidth: 2,
                backgroundColor: "transparent",
                fill: true,
                maxBarThickness: 6
            }, {
                label: 'Melting Pos',
                data: datasetRight,
                tension: 0,
                borderWidth: 0,
                pointRadius: 3,
                pointBackgroundColor: "rgba(235, 37, 37, .8)",
                pointBorderColor: "transparent",
                borderColor: "rgba(235, 37, 37, .8)", // Warna biru untuk garis kanan
                borderWidth: 2,
                backgroundColor: "transparent",
                fill: true,
                maxBarThickness: 6
            }, {
            label: 'Type',
            data: type
        } ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false,
                }
            },
            interaction: {
                intersect: false,
                mode: 'index',
            },
            scales: {
                y: {
                     min: 770, // Set nilai minimum sumbu y
                     max: 772.5, // Set nilai maksimum sumbu y
                    grid: {
                        drawBorder: false,
                        display: true,
                        drawOnChartArea: true,
                        drawTicks: false,
                        borderDash: [5, 5],
                        color: 'rgba(255, 255, 255, .2)'
                    },
                    ticks: {
                        display: true,
                        color: '#f8f9fa',
                        padding: 10,
                        font: {
                            size: 14,
                            weight: 300,
                            family: "Roboto",
                            style: 'normal',
                            lineHeight: 2
                        },
                    }
                },
                x: {
                    grid: {
                        drawBorder: false,
                        display: false,
                        drawOnChartArea: false,
                        drawTicks: false,
                        borderDash: [5, 5]
                    },
                    ticks: {
                        display: true,
                        color: '#f8f9fa',
                        padding: 10,
                        font: {
                            size: 14,
                            weight: 300,
                            family: "Roboto",
                            style: 'normal',
                            lineHeight: 2
                        },
                    }
                },
            },
        }
    });
    
    return myChart8; // Mengembalikan objek chart yang baru dibuat
} 
setInterval(function() {
    fetch('user/getData2') // Ganti '/getData' dengan rute yang sesuai dengan controller Anda
        .then(response => response.json())
        .then(data => {
            // Ambil 20 data terakhir
            var lastTwentyData = data.result.slice(-20);
            // Buat grafik
            CreateChart8(lastTwentyData, 'MirrorH2');
        });
}, 15000); // Mengambil data setiap 15 detik

function fetchData8() {
fetch('user/getData2') // Ganti '/getData' dengan rute yang sesuai dengan controller Anda
    .then(response => response.json())
    .then(data => {
        var tanggal = document.getElementById('tanggal').value; // Mendapatkan nilai tanggal dari input
        var filteredData = data.result.filter(entry => entry.waktu.startsWith(tanggal)); // Melakukan filtering berdasarkan tanggal
        // Buat atau perbarui grafik dengan data yang diperoleh
        CreateChart8(filteredData , 'MirrorH2');
    });
}