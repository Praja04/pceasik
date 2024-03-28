var myChart;
// Fungsi untuk membuat atau memperbarui grafik
function createOrUpdateChart(data, upperLimit, lowerLimit, canvasId) {
var labels = data.map(entry => entry.waktu);
// Ubah label menjadi hanya bagian waktu (tanpa tanggal)
labels = labels.map(function(label) {
    return label.split(' ')[1]; // Mengambil bagian waktu saja
});
var datasetLeft = data.map(entry => entry.L6_HSM1_TEMP_LEFT);
var datasetRight = data.map(entry => entry.L6_HSM1_TEMP_RIGHT);
var BatteryType = data.map(entry => entry.L6_HSM1_TYPE_BATTERY);
// var typebatre = []
// var type = data.map(entry => {
// if (entry.L6_HSM1_TYPE_BATTERY = "2") {
//     typebatre.push('N70LC375,LC283,LC300');
// } else {
//     return 'Type ' + entry.L6_HSM1_TYPE_BATTERY;
// } });

var setval = data.map(entry => entry.L6_HSM1_TEMP_SET_VALUE)
// Cek apakah objek Chart sudah ada
if (myChart) {
    // Hancurkan objek Chart yang sudah ada
    myChart.destroy();
}

// Buat objek Chart baru
var ctx = document.getElementById(canvasId).getContext('2d');
myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: labels,
        datasets: [
            {
            label: 'Set Value',
            data: setval,
            tension: 0,
             borderWidth: 0,
             pointRadius: 3,
             pointBackgroundColor: "rgba(227, 165, 98, .8)",
             pointBorderColor: "transparent",
             borderColor: "rgba(227, 165, 98, .8)",
             borderWidth: 2,
             backgroundColor: "transparent",
             fill: true,
             maxBarThickness: 6
                  
         },{
            label: 'Temp Left',
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
            label: 'Temp Right',
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
            label: 'Upper Limit',
            data: new Array(labels.length).fill(upperLimit),
            borderColor: "rgba(37, 235, 212, .8)",
            borderWidth: 2,
            fill: false,
            pointRadius: 0,
            tension: 0
        }, {
            label: 'Lower Limit',
            data: new Array(labels.length).fill(lowerLimit),
            borderColor: "rgba(0, 255, 0, .8)",
            borderWidth: 2,
            fill: false,
            pointRadius: 0,
            tension: 0
        }, {
            label: "Type",
            data: BatteryType
            
        }]
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
                min: 360, // Set nilai minimum sumbu y
                max: 440, // Set nilai maksimum sumbu y
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

return myChart;
// Mengembalikan objek chart yang baru dibuat
}


setInterval(function() {
    fetch('user/getData') // Ganti '/getData2' dengan rute yang sesuai dengan controller Anda
        .then(response => response.json())
        .then(data => {
            var upperLimit = data.upperLimit;
            var lowerLimit = data.lowerLimit;

            // Ambil 20 data terakhir
            var lastTwentyData = data.result.slice(-20);

            // Buat grafik
            createOrUpdateChart(lastTwentyData, upperLimit, lowerLimit, 'myChart');
            
        });
}, 15000); 



// Fungsi untuk mengambil data berdasarkan tanggal yang dipilih
function fetchData() {
fetch('user/getData') // Ganti '/getData' dengan rute yang sesuai dengan controller Anda
    .then(response => response.json())
    .then(data => {
        var tanggal = document.getElementById('tanggal').value; // Mendapatkan nilai tanggal dari input
        var filteredData1 = data.result.filter(entry => entry.waktu.startsWith(tanggal)); // Melakukan filtering berdasarkan tanggal

        var upperLimit = data.upperLimit;
        var lowerLimit = data.lowerLimit;

        // Buat atau perbarui grafik dengan data yang diperoleh
        createOrUpdateChart(filteredData1, upperLimit, lowerLimit, 'myChart');
    });
}