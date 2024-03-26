<?= $this->extend('admin/template') ?>

<?= $this->section('aside-alt-active') ?>
active bg-gradient-primary
<?= $this->endSection() ?>


<?= $this->section('pages-dashboard') ?>
Dashboard HSM 
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-header p-3 pt-2">
                    <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">storage</i>
                    </div>
                    <div class="text-end pt-1">
                        <p class="text-sm mb-0 text-capitalize">Total Data Keseluruhan</p>
                        <h4 id="total"></h4>
                    </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">
                    <p class="mb-0"> <span class="text-success text-sm font-weight-bolder">Data </span>Per Hari Ini</p>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-header p-3 pt-2">
                    <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">source</i>
                    </div>
                    <div class="text-end pt-1">
                        <p class="text-sm mb-0 text-capitalize">Data yang Masuk</p>
                        <h4 id="datatoday"></h4>
                    </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">
                    <p class="mb-0"> <span class="text-success text-sm font-weight-bolder">Data </span>Per Hari Ini</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="text-center" style="display : flex; flex-wrap: wrap;">
<div >Nilai ALT Result Cell 2<canvas id="pieChart" style="width: 250px; margin-top:10px"></canvas></div>
<div >Nilai ALT Result Cell 4<canvas id="pieChart5" style="width: 250px; margin-top:10px"></canvas></div>
<div >Nilai ALT Result Cell 6<canvas id="pieChart6" style="width: 250px; margin-top:10px"></canvas></div>
<div >Nilai ALT Result Cell 1<canvas id="pieChart2" style="width: 250px; margin-top:10px"></canvas></div>
<div >Nilai ALT Result Cell 3<canvas id="pieChart3" style="width: 250px; margin-top:10px"></canvas></div><br>
<div >Nilai ALT Result Cell 5<canvas id="pieChart4" style="width: 250px; margin-top:10px"></canvas></div>
</div>
<!-- Grafik Result-->
<br>
<div id="searchTarget" class="text-center">
    <h3>Grafik Result ALT </h3>
</div><br>      

<div class="row mt-2">
    <div class="col-lg-4 col-md-6 mt-4 mb-4">
        <div class="card z-index-2 ">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1">
                    <div class="chart">
                        <canvas id="myChart" class="chart-canvas" height="300"></canvas>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <h6 class="mb-0 ">RESULT ALT 1</h6>
                <p class="text-sm ">Parameter ALT Line 6 Head 1</p>
                <hr class="dark horizontal">
                <div>
                <label class="form-label" for="tanggal">Pilih Tanggal:</label>
                <input type="date" id="tanggal" name="tanggal" width="40px">
                <button class="btn btn-primary" onclick="fetchData()">Tampilkan Data</button></div>
                <div class="d-flex ">
                    <i class="material-icons text-sm my-auto me-1">schedule</i>
                    <p class="mb-0 text-sm"> Per hari ini </p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 mt-4 mb-3">
        <div class="card z-index-2 ">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1">
                    <div class="chart">
                        <canvas id="myChart2" class="chart-canvas" height="300"></canvas>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <h6 class="mb-0 ">RESULT ALT 2</h6>
                <p class="text-sm ">Parameter ALT Line 6 Head 2</p>
                <hr class="dark horizontal">
                <div><label class="form-label" for="tanggal2">Pilih Tanggal:</label>
                <input type="date" id="tanggal2" name="tanggal2" width="40px">
                <button class="btn btn-primary" onclick="fetchData2()">Tampilkan Data</button>
                </div>
                <div class="d-flex ">
                    <i class="material-icons text-sm my-auto me-1">schedule</i>
                    <p class="mb-0 text-sm">per hari ini</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Grafik Actual-->
<br>
<div id="searchTarget" class="text-center">
    <h3>Grafik Actual ALT </h3>
</div><br>  

<div class="row mt-2">
    <div class="col-lg-4 col-md-6 mt-4 mb-4">
        <div class="card z-index-2 ">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1">
                    <div class="chart">
                        <canvas id="myChart3" class="chart-canvas" height="300"></canvas>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <h6 class="mb-0 ">Actual ALT 1</h6>
                <p class="text-sm ">Parameter ALT Line 6 Head 1</p>
                <hr class="dark horizontal">
                <div>
                <label class="form-label" for="tanggal3">Pilih Tanggal:</label>
                <input type="date" id="tanggal3" name="tanggal3" width="40px">
                <button class="btn btn-primary" onclick="fetchData3()">Tampilkan Data</button></div>
                <div class="d-flex ">
                    <i class="material-icons text-sm my-auto me-1">schedule</i>
                    <p class="mb-0 text-sm"> Per hari ini </p>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-6 mt-4 mb-4">
        <div class="card z-index-2 ">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1">
                    <div class="chart">
                        <canvas id="myChart4" class="chart-canvas" height="300"></canvas>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <h6 class="mb-0 ">Actual ALT 2</h6>
                <p class="text-sm ">Parameter ALT Line 6 Head 1</p>
                <hr class="dark horizontal">
                <div>
                <label class="form-label" for="tanggal4">Pilih Tanggal:</label>
                <input type="date" id="tanggal4" name="tanggal4" width="40px">
                <button class="btn btn-primary" onclick="fetchData4()">Tampilkan Data</button></div>
                <div class="d-flex ">
                    <i class="material-icons text-sm my-auto me-1">schedule</i>
                    <p class="mb-0 text-sm"> Per hari ini </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- overview ambang batas-->
<div class="row mb-4">
    <div class="col-lg-4 col-md-6 col-md-6 mt-4 mb-4">
        <div class="card h-100">
            <div class="card-header pb-0">
                <h6>Data overview</h6>
                <p class="text-sm">
                    <i class="fa fa-arrow-down text-danger" aria-hidden="true"></i>
                    <span class="font-weight-bold">Data Result ALT 1</span> dibawah atau diatas ambang batas
                </p>
            </div>
            <div class="card-body p-3">
                <div class="timeline timeline-one-side" style="overflow-y: scroll; max-height: 300px;" id="checklimit1">

                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="col-lg-4 col-md-6 mt-4 mb-4">
        <div class="card h-100">
            <div class="card-header pb-0">
                <h6>Data overview</h6>
                <p class="text-sm">
                    <i class="fa fa-arrow-down text-danger" aria-hidden="true"></i>
                    <span class="font-weight-bold">Data Temp-Right</span> dibawah atau diatas ambang batas
                </p>
            </div>
            <div class="card-body p-3">
                <div class="timeline timeline-one-side" style="overflow-y: scroll; max-height: 300px;" id="checklimit2">

                </div>
            </div>
        </div>
    </div>
</div>

<script src="/assets/js/plugins/chartjs.min.js"></script>

<script>
   $(document).ready(function() {
        const getData = () => {
            $.ajax({
                url: "<?= base_url('alt/getDataALT1') ?>",
                type: "GET",
                success: function(response) {
                    let totaldata1 = response.total
                    document.getElementById('total').innerHTML = response.total     
                    document.getElementById('datatoday').innerHTML = response.datatoday    
                    
                    function filterData(data) {
                        return data.filter(function(row) {
                             // Periksa apakah nilai dari setiap kolom melebihi batas 3
                        return parseInt(row.limit_Cell1) > 3 || parseInt(row.limit_Cell2) > 3 || parseInt(row.limit_Cell3) > 3;
                       });
                    }
                    const temperatureContent = document.getElementById('checklimit1')
                        let content = ''

                        // Memanggil fungsi filterData untuk memfilter data
                            var filteredData = filterData(response.limit);

                            filteredData.map((item) => {
                             content += `
                           <div class="timeline-block mb-3">
                                <span class="timeline-step">
                                     <i class="material-icons text-danger text-gradient">notifications</i>
                                </span>
                                <div class="timeline-content">
                                   <div class="timeline-item-body">
                                      <h6 class="timeline-item-title">${item.waktu}</h6>
                                      <p class="timeline-item-text">Cell 1 : ${item.limit_Cell1}mbar, Cell 2 : ${item.limit_Cell2}mbar, Cell 3 : ${item.limit_Cell3}mbar</p>
                                     </div>
                                      </div>
                            </div>
                                      `
                              });
                            temperatureContent.innerHTML = content;
                    
              },
                error: function(response) {               
                console.log("error")
                }
            })
        }
        getData()
        setInterval(function() {
            getData();
        }, 15000); // 10 detik dalam milidetik
    })
</script>

<script>
   $(document).ready(function() {
        const getData = () => {
            $.ajax({
                url: "<?= base_url('alt/getDataALT2') ?>",
                type: "GET",
                success: function(response) {
                    let totaldata1 = response.total 
                    
                    function filterData(data) {
                        return data.filter(function(row) {
                             // Periksa apakah nilai dari setiap kolom melebihi batas 3
                        return parseInt(row.limit_Cell1) > 3 || parseInt(row.limit_Cell2) > 3 || parseInt(row.limit_Cell3) > 3;
                       });
                    }
                    const temperatureContent = document.getElementById('checklimit2')
                        let content = ''

                        // Memanggil fungsi filterData untuk memfilter data
                            var filteredData = filterData(response.limit);

                            filteredData.map((item) => {
                             content += `
                           <div class="timeline-block mb-3">
                                <span class="timeline-step">
                                     <i class="material-icons text-danger text-gradient">notifications</i>
                                </span>
                                <div class="timeline-content">
                                   <div class="timeline-item-body">
                                      <h6 class="timeline-item-title">${item.waktu}</h6>
                                      <p class="timeline-item-text">Cell 1 : ${item.limit_Cell1}mbar, Cell 2 : ${item.limit_Cell2}mbar, Cell 3 : ${item.limit_Cell3}mbar</p>
                                     </div>
                                      </div>
                            </div>
                                      `
                              });
                            temperatureContent.innerHTML = content;
                    
              },
                error: function(response) {               
                console.log("error")
                }
            })
        }
        getData()
        setInterval(function() {
            getData();
        }, 15000); // 10 detik dalam milidetik
    })
</script>
<!-- Grafik ALT Result-->
<script>
    var myChart;
    // Fungsi untuk membuat atau memperbarui grafik
    function createOrUpdateChart(data, canvasId) {
    var labels = data.map(entry => entry.waktu);
    // Ubah label menjadi hanya bagian waktu (tanpa tanggal)
    labels = labels.map(function(label) {
        return label.split(' ')[1]; // Mengambil bagian waktu saja
    });

    var datasetCell1 = data.map(entry => entry.L6_ALT1_RESULT_CELL1);
    var datasetCell3 = data.map(entry => entry.L6_ALT1_RESULT_CELL3);
    var datasetCell5 = data.map(entry => entry.L6_ALT1_RESULT_CELL5);
    
    
    var setval = data.map(entry => entry.L6_ALT1_LEAK_PRESSURE_TOLERANCE)
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
                label: 'Leak Pressure Tolerance',
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
                label: 'Result Cell 1',
                data: datasetCell1,
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
                label: 'Result Cell 3',
                data: datasetCell3,
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
                label: 'Result Cell 5',
                data: datasetCell5,
                tension: 0,
                tension: 0,
                borderWidth: 0,
                pointRadius: 3,
                pointBackgroundColor: "rgba(37, 235, 212, .8)",
                pointBorderColor: "transparent",
                borderColor: "rgba(37, 235, 212, .8)", // Warna biru untuk garis kanan
                borderWidth: 2,
                backgroundColor: "transparent",
                fill: true,
                maxBarThickness: 6
            }, ]
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
                   // min: 360, // Set nilai minimum sumbu y
                   // max: 440, // Set nilai maksimum sumbu y
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
        fetch('alt/getDataALT1') // Ganti '/getData2' dengan rute yang sesuai dengan controller Anda
            .then(response => response.json())
            .then(data => {
                
                // Ambil 20 data terakhir
                var lastTwentyData = data.result.slice(-20);

                // Buat grafik
                createOrUpdateChart(lastTwentyData, 'myChart');
                
            });
    }, 15000); 



    // Fungsi untuk mengambil data berdasarkan tanggal yang dipilih
    function fetchData() {
    fetch('alt/getDataALT1') // Ganti '/getData' dengan rute yang sesuai dengan controller Anda
        .then(response => response.json())
        .then(data => {
            var tanggal = document.getElementById('tanggal').value; // Mendapatkan nilai tanggal dari input
            var filteredData1 = data.result.filter(entry => entry.waktu.startsWith(tanggal)); // Melakukan 

            // Buat atau perbarui grafik dengan data yang diperoleh
            createOrUpdateChart(filteredData1, 'myChart');
        });
    }
</script>

<script>
    var myChart2;
    // Fungsi untuk membuat atau memperbarui grafik
    function createOrUpdateChart2(data, canvasId) {
    var labels = data.map(entry => entry.waktu);
    // Ubah label menjadi hanya bagian waktu (tanpa tanggal)
    labels = labels.map(function(label) {
        return label.split(' ')[1]; // Mengambil bagian waktu saja
    });

    var datasetCell2 = data.map(entry => entry.L6_ALT2_RESULT_CELL2);
    var datasetCell4 = data.map(entry => entry.L6_ALT2_RESULT_CELL4);
    var datasetCell6 = data.map(entry => entry.L6_ALT2_RESULT_CELL6);
    
    
    var setval = data.map(entry => entry.L6_ALT2_LEAK_PRESSURE_TOLERANCE)
    // Cek apakah objek Chart sudah ada
    if (myChart2) {
        // Hancurkan objek Chart yang sudah ada
        myChart2.destroy();
    }

    // Buat objek Chart baru
    var ctx = document.getElementById(canvasId).getContext('2d');
    myChart2 = new Chart(ctx, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [
                {
                label: 'Leak Pressure Tolerance',
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
                label: 'Result Cell 2',
                data: datasetCell2,
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
                label: 'Result Cell 4',
                data: datasetCell4,
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
                label: 'Result Cell 6',
                data: datasetCell6,
                tension: 0,
                tension: 0,
                borderWidth: 0,
                pointRadius: 3,
                pointBackgroundColor: "rgba(37, 235, 212, .8)",
                pointBorderColor: "transparent",
                borderColor: "rgba(37, 235, 212, .8)", // Warna biru untuk garis kanan
                borderWidth: 2,
                backgroundColor: "transparent",
                fill: true,
                maxBarThickness: 6
            }, ]
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
                   // min: 360, // Set nilai minimum sumbu y
                   // max: 440, // Set nilai maksimum sumbu y
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
    return myChart2;
    // Mengembalikan objek chart yang baru dibuat
    }


    setInterval(function() {
        fetch('alt/getDataALT2') // Ganti '/getData2' dengan rute yang sesuai dengan controller Anda
            .then(response => response.json())
            .then(data => {
                
                // Ambil 20 data terakhir
                var lastTwentyData = data.result.slice(-20);

                // Buat grafik
                createOrUpdateChart2(lastTwentyData, 'myChart2');
                
            });
    }, 15000); 



    // Fungsi untuk mengambil data berdasarkan tanggal yang dipilih
    function fetchData2() {
    fetch('alt/getDataALT2') // Ganti '/getData' dengan rute yang sesuai dengan controller Anda
        .then(response => response.json())
        .then(data => {
            var tanggal = document.getElementById('tanggal2').value; // Mendapatkan nilai tanggal dari input
            var filteredData2 = data.result.filter(entry => entry.waktu.startsWith(tanggal)); // Melakukan 

            // Buat atau perbarui grafik dengan data yang diperoleh
            createOrUpdateChart2(filteredData2, 'myChart2');
        });
    }
</script>

<!-- Grafik Actual -->
<script>
    var myChart3;
    // Fungsi untuk membuat atau memperbarui grafik
    function createOrUpdateChart3(data, canvasId) {
    var labels = data.map(entry => entry.waktu);
    // Ubah label menjadi hanya bagian waktu (tanpa tanggal)
    labels = labels.map(function(label) {
        return label.split(' ')[1]; // Mengambil bagian waktu saja
    });

    var datasetCell1 = data.map(entry => entry.L6_ALT1_ACTUAL_PRESSURE_CELL1);
    var datasetCell3 = data.map(entry => entry.L6_ALT1_ACTUAL_PRESSURE_CELL3);
    var datasetCell5 = data.map(entry => entry.L6_ALT1_ACTUAL_PRESSURE_CELL5);
    
    
    var setval = data.map(entry => entry.L6_ALT1_TEST_PRESSURE)
    // Cek apakah objek Chart sudah ada
    if (myChart3) {
        // Hancurkan objek Chart yang sudah ada
        myChart3.destroy();
    }

    // Buat objek Chart baru
    var ctx = document.getElementById(canvasId).getContext('2d');
    myChart3 = new Chart(ctx, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [
                {
                label: 'ALT Test Pressure',
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
                label: 'Actual Cell 1',
                data: datasetCell1,
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
                label: 'Actual Cell 3',
                data: datasetCell3,
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
                label: 'Actual Cell 5',
                data: datasetCell5,
                tension: 0,
                tension: 0,
                borderWidth: 0,
                pointRadius: 3,
                pointBackgroundColor: "rgba(37, 235, 212, .8)",
                pointBorderColor: "transparent",
                borderColor: "rgba(37, 235, 212, .8)", // Warna biru untuk garis kanan
                borderWidth: 2,
                backgroundColor: "transparent",
                fill: true,
                maxBarThickness: 6
            }, ]
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
                   // min: 360, // Set nilai minimum sumbu y
                   // max: 440, // Set nilai maksimum sumbu y
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
    return myChart3;
    // Mengembalikan objek chart yang baru dibuat
    }


    setInterval(function() {
        fetch('alt/getDataALT1') // Ganti '/getData2' dengan rute yang sesuai dengan controller Anda
            .then(response => response.json())
            .then(data => {
                
                // Ambil 20 data terakhir
                var lastTwentyData = data.result.slice(-20);

                // Buat grafik
                createOrUpdateChart3(lastTwentyData, 'myChart3');
                
            });
    }, 15000); 



    // Fungsi untuk mengambil data berdasarkan tanggal yang dipilih
    function fetchData3() {
    fetch('alt/getDataALT1') // Ganti '/getData' dengan rute yang sesuai dengan controller Anda
        .then(response => response.json())
        .then(data => {
            var tanggal = document.getElementById('tanggal3').value; // Mendapatkan nilai tanggal dari input
            var filteredData3 = data.result.filter(entry => entry.waktu.startsWith(tanggal)); // Melakukan 

            // Buat atau perbarui grafik dengan data yang diperoleh
            createOrUpdateChart3(filteredData3, 'myChart3');
        });
    }
</script>

<script>
    var myChart4;
    // Fungsi untuk membuat atau memperbarui grafik
    function createOrUpdateChart4(data, canvasId) {
    var labels = data.map(entry => entry.waktu);
    // Ubah label menjadi hanya bagian waktu (tanpa tanggal)
    labels = labels.map(function(label) {
        return label.split(' ')[1]; // Mengambil bagian waktu saja
    });

    var datasetCell2 = data.map(entry => entry.L6_ALT2_ACTUAL_PRESSURE_CELL2);
    var datasetCell4 = data.map(entry => entry.L6_ALT2_ACTUAL_PRESSURE_CELL4);
    var datasetCell6 = data.map(entry => entry.L6_ALT2_ACTUAL_PRESSURE_CELL6);
    
    
    var setval = data.map(entry => entry.L6_ALT2_TEST_PRESSURE)
    // Cek apakah objek Chart sudah ada
    if (myChart4) {
        // Hancurkan objek Chart yang sudah ada
        myChart4.destroy();
    }

    // Buat objek Chart baru
    var ctx = document.getElementById(canvasId).getContext('2d');
    myChart4 = new Chart(ctx, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [
                {
                label: 'ALT Test Pressure',
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
                label: 'Actual Cell 2',
                data: datasetCell2,
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
                label: 'Actual Cell 4',
                data: datasetCell4,
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
                label: 'Actual Cell 6',
                data: datasetCell6,
                tension: 0,
                tension: 0,
                borderWidth: 0,
                pointRadius: 3,
                pointBackgroundColor: "rgba(37, 235, 212, .8)",
                pointBorderColor: "transparent",
                borderColor: "rgba(37, 235, 212, .8)", // Warna biru untuk garis kanan
                borderWidth: 2,
                backgroundColor: "transparent",
                fill: true,
                maxBarThickness: 6
            }, ]
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
                   // min: 360, // Set nilai minimum sumbu y
                   // max: 440, // Set nilai maksimum sumbu y
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
    return myChart4;
    // Mengembalikan objek chart yang baru dibuat
    }


    setInterval(function() {
        fetch('alt/getDataALT2') // Ganti '/getData2' dengan rute yang sesuai dengan controller Anda
            .then(response => response.json())
            .then(data => {
                
                // Ambil 20 data terakhir
                var lastTwentyData = data.result.slice(-20);

                // Buat grafik
                createOrUpdateChart4(lastTwentyData, 'myChart4');
                
            });
    }, 15000); 



    // Fungsi untuk mengambil data berdasarkan tanggal yang dipilih
    function fetchData4() {
    fetch('alt/getDataALT2') // Ganti '/getData' dengan rute yang sesuai dengan controller Anda
        .then(response => response.json())
        .then(data => {
            var tanggal = document.getElementById('tanggal3').value; // Mendapatkan nilai tanggal dari input
            var filteredData4 = data.result.filter(entry => entry.waktu.startsWith(tanggal)); // Melakukan 

            // Buat atau perbarui grafik dengan data yang diperoleh
            createOrUpdateChart4(filteredData4, 'myChart4');
        });
    }
</script>

<script>
        var pieChart;

        function createChart(data, canvasId) {
            // Data untuk Chart.js
            const chartData = {
                labels: Object.keys(data),
                datasets: [{
                    label: 'Data',
                    data: Object.values(data),
                    backgroundColor: [
                        'rgba(227, 165, 98, .8)',
                        'rgba(235, 37, 37, .8)',
                        'rgba(37, 235, 212, .8)',
                        'rgba(70, 150, 255, .8)',
                        'rgba(159, 98, 65, .8)',
                        'rgba(123, 123, 123, .8)',
                        'rgba(213, 213, 213, .8)'
                    ],
                    borderColor: [
                        'rgba(227, 165, 98, .8)',
                        'rgba(235, 37, 37, .8)',
                        'rgba(37, 235, 212, .8)',
                        'rgba(70, 150, 255, .8)',
                        'rgba(159, 98, 65, .8)',
                        'rgba(123, 123, 123, .8)',
                        'rgba(213, 213, 213, .8)'
                    ],
                    borderWidth: 1
                }]
            };

            // Ambil elemen canvas
            const ctx = document.getElementById(canvasId).getContext('2d');

            // Hancurkan chart yang sudah ada jika ada
            if (pieChart) {
                pieChart.destroy();
            }

            // Buat chart baru
            pieChart = new Chart(ctx, {
                type: 'doughnut',
                data: chartData,
                options: {
                    title: {
                        display: true,
                        text: 'Pie Chart dari Data JSON'
                    }
                }
            });
        }

        function fetchDataAndCreateChart() {
            // URL API
            const apiUrl = 'alt/getDataALT2';

            // Ambil data dari API menggunakan fetch
            fetch(apiUrl)
                .then(response => response.json())
                .then(data => {
                    // Data JSON yang diambil
                    const jsonData = data.dataCell2;
                    // Panggil fungsi untuk membuat chart baru
                    createChart(jsonData, 'pieChart');
                })
                .catch(error => console.error('Error fetching data:', error));
        }

        // Pertama kali, panggil fungsi untuk mengambil data dan membuat chart
        fetchDataAndCreateChart();

        // Set interval untuk mengambil data secara berkala dan membuat chart baru
        setInterval(fetchDataAndCreateChart, 15000);
    </script>
 
 <script>
        var pieChart2;

        function createChart2(data, canvasId) {
            // Data untuk Chart.js
            const chartData = {
                labels: Object.keys(data),
                datasets: [{
                    label: 'Data',
                    data: Object.values(data),
                    backgroundColor: [
                        'rgba(227, 165, 98, .8)',
                        'rgba(235, 37, 37, .8)',
                        'rgba(37, 235, 212, .8)',
                        'rgba(70, 150, 255, .8)',
                        'rgba(159, 98, 65, .8)',
                        'rgba(123, 123, 123, .8)',
                        'rgba(213, 213, 213, .8)'
                    ],
                    borderColor: [
                        'rgba(227, 165, 98, .8)',
                        'rgba(235, 37, 37, .8)',
                        'rgba(37, 235, 212, .8)',
                        'rgba(70, 150, 255, .8)',
                        'rgba(159, 98, 65, .8)',
                        'rgba(123, 123, 123, .8)',
                        'rgba(213, 213, 213, .8)'
                    ],
                    borderWidth: 1
                }]
            };

            // Ambil elemen canvas
            const ctx = document.getElementById(canvasId).getContext('2d');

            // Hancurkan chart yang sudah ada jika ada
            if (pieChart2) {
                pieChart2.destroy();
            }

            // Buat chart baru
            pieChart2 = new Chart(ctx, {
                type: 'doughnut',
                data: chartData,
                options: {
                    title: {
                        display: true,
                        text: 'Pie Chart dari Data JSON'
                    }
                }
            });
        }

        function fetchDataAndCreateChart2() {
            // URL API
            const apiUrl = 'alt/getDataALT1';

            // Ambil data dari API menggunakan fetch
            fetch(apiUrl)
                .then(response => response.json())
                .then(data => {
                    // Data JSON yang diambil
                    const jsonData = data.dataCell1;
                    // Panggil fungsi untuk membuat chart baru
                    createChart2(jsonData, 'pieChart2');
                })
                .catch(error => console.error('Error fetching data:', error));
        }

        // Pertama kali, panggil fungsi untuk mengambil data dan membuat chart
        fetchDataAndCreateChart2();

        // Set interval untuk mengambil data secara berkala dan membuat chart baru
        setInterval(fetchDataAndCreateChart2, 15000);
    </script>
 
 <script>
        var pieChart3;

        function createChart3(data, canvasId) {
            // Data untuk Chart.js
            const chartData = {
                labels: Object.keys(data),
                datasets: [{
                    label: 'Data',
                    data: Object.values(data),
                    backgroundColor: [
                        'rgba(227, 165, 98, .8)',
                        'rgba(235, 37, 37, .8)',
                        'rgba(37, 235, 212, .8)',
                        'rgba(70, 150, 255, .8)',
                        'rgba(159, 98, 65, .8)',
                        'rgba(123, 123, 123, .8)',
                        'rgba(213, 213, 213, .8)'
                    ],
                    borderColor: [
                        'rgba(227, 165, 98, .8)',
                        'rgba(235, 37, 37, .8)',
                        'rgba(37, 235, 212, .8)',
                        'rgba(70, 150, 255, .8)',
                        'rgba(159, 98, 65, .8)',
                        'rgba(123, 123, 123, .8)',
                        'rgba(213, 213, 213, .8)'
                    ],
                    borderWidth: 1
                }]
            };

            // Ambil elemen canvas
            const ctx = document.getElementById(canvasId).getContext('2d');

            // Hancurkan chart yang sudah ada jika ada
            if (pieChart3) {
                pieChart3.destroy();
            }

            // Buat chart baru
            pieChart3 = new Chart(ctx, {
                type: 'doughnut',
                data: chartData,
                options: {
                    title: {
                        display: true,
                        text: 'Pie Chart dari Data JSON'
                    }
                }
            });
        }

        function fetchDataAndCreateChart3() {
            // URL API
            const apiUrl = 'alt/getDataALT1';

            // Ambil data dari API menggunakan fetch
            fetch(apiUrl)
                .then(response => response.json())
                .then(data => {
                    // Data JSON yang diambil
                    const jsonData = data.dataCell3;
                    // Panggil fungsi untuk membuat chart baru
                    createChart3(jsonData, 'pieChart3');
                })
                .catch(error => console.error('Error fetching data:', error));
        }

        // Pertama kali, panggil fungsi untuk mengambil data dan membuat chart
        fetchDataAndCreateChart3();

        // Set interval untuk mengambil data secara berkala dan membuat chart baru
        setInterval(fetchDataAndCreateChart3, 15000);
    </script>
 
 <script>
        var pieChart4;

        function createChart4(data, canvasId) {
            // Data untuk Chart.js
            const chartData = {
                labels: Object.keys(data),
                datasets: [{
                    label: 'Data',
                    data: Object.values(data),
                    backgroundColor: [
                        'rgba(227, 165, 98, .8)',
                        'rgba(235, 37, 37, .8)',
                        'rgba(37, 235, 212, .8)',
                        'rgba(70, 150, 255, .8)',
                        'rgba(159, 98, 65, .8)',
                        'rgba(123, 123, 123, .8)',
                        'rgba(213, 213, 213, .8)'
                    ],
                    borderColor: [
                        'rgba(227, 165, 98, .8)',
                        'rgba(235, 37, 37, .8)',
                        'rgba(37, 235, 212, .8)',
                        'rgba(70, 150, 255, .8)',
                        'rgba(159, 98, 65, .8)',
                        'rgba(123, 123, 123, .8)',
                        'rgba(213, 213, 213, .8)'
                    ],
                    borderWidth: 1
                }]
            };

            // Ambil elemen canvas
            const ctx = document.getElementById(canvasId).getContext('2d');

            // Hancurkan chart yang sudah ada jika ada
            if (pieChart4) {
                pieChart4.destroy();
            }

            // Buat chart baru
            pieChart4 = new Chart(ctx, {
                type: 'doughnut',
                data: chartData,
                options: {
                    title: {
                        display: true,
                        text: 'Pie Chart dari Data JSON'
                    }
                }
            });
        }

        function fetchDataAndCreateChart4() {
            // URL API
            const apiUrl = 'alt/getDataALT1';

            // Ambil data dari API menggunakan fetch
            fetch(apiUrl)
                .then(response => response.json())
                .then(data => {
                    // Data JSON yang diambil
                    const jsonData = data.dataCell5;
                    // Panggil fungsi untuk membuat chart baru
                    createChart4(jsonData, 'pieChart4');
                })
                .catch(error => console.error('Error fetching data:', error));
        }

        // Pertama kali, panggil fungsi untuk mengambil data dan membuat chart
        fetchDataAndCreateChart4();

        // Set interval untuk mengambil data secara berkala dan membuat chart baru
        setInterval(fetchDataAndCreateChart4, 15000);
    </script>


<script>
        var pieChart5;

        function createChart5(data, canvasId) {
            // Data untuk Chart.js
            const chartData = {
                labels: Object.keys(data),
                datasets: [{
                    label: 'Data',
                    data: Object.values(data),
                    backgroundColor: [
                        'rgba(227, 165, 98, .8)',
                        'rgba(235, 37, 37, .8)',
                        'rgba(37, 235, 212, .8)',
                        'rgba(70, 150, 255, .8)',
                        'rgba(159, 98, 65, .8)',
                        'rgba(123, 123, 123, .8)',
                        'rgba(213, 213, 213, .8)'
                    ],
                    borderColor: [
                        'rgba(227, 165, 98, .8)',
                        'rgba(235, 37, 37, .8)',
                        'rgba(37, 235, 212, .8)',
                        'rgba(70, 150, 255, .8)',
                        'rgba(159, 98, 65, .8)',
                        'rgba(123, 123, 123, .8)',
                        'rgba(213, 213, 213, .8)'
                    ],
                    borderWidth: 1
                }]
            };

            // Ambil elemen canvas
            const ctx = document.getElementById(canvasId).getContext('2d');

            // Hancurkan chart yang sudah ada jika ada
            if (pieChart5) {
                pieChart5.destroy();
            }

            // Buat chart baru
            pieChart5 = new Chart(ctx, {
                type: 'doughnut',
                data: chartData,
                options: {
                    title: {
                        display: true,
                        text: 'Pie Chart dari Data JSON'
                    }
                }
            });
        }

        function fetchDataAndCreateChart5() {
            // URL API
            const apiUrl = 'alt/getDataALT2';

            // Ambil data dari API menggunakan fetch
            fetch(apiUrl)
                .then(response => response.json())
                .then(data => {
                    // Data JSON yang diambil
                    const jsonData = data.dataCell4;
                    // Panggil fungsi untuk membuat chart baru
                    createChart5(jsonData, 'pieChart5');
                })
                .catch(error => console.error('Error fetching data:', error));
        }

        // Pertama kali, panggil fungsi untuk mengambil data dan membuat chart
        fetchDataAndCreateChart5();

        // Set interval untuk mengambil data secara berkala dan membuat chart baru
        setInterval(fetchDataAndCreateChart5, 15000);
    </script>


<script>
        var pieChart6;

        function createChart6(data, canvasId) {
            // Data untuk Chart.js
            const chartData = {
                labels: Object.keys(data),
                datasets: [{
                    label: 'Data',
                    data: Object.values(data),
                    backgroundColor: [
                        'rgba(227, 165, 98, .8)',
                        'rgba(235, 37, 37, .8)',
                        'rgba(37, 235, 212, .8)',
                        'rgba(70, 150, 255, .8)',
                        'rgba(159, 98, 65, .8)',
                        'rgba(123, 123, 123, .8)',
                        'rgba(213, 213, 213, .8)'
                    ],
                    borderColor: [
                        'rgba(227, 165, 98, .8)',
                        'rgba(235, 37, 37, .8)',
                        'rgba(37, 235, 212, .8)',
                        'rgba(70, 150, 255, .8)',
                        'rgba(159, 98, 65, .8)',
                        'rgba(123, 123, 123, .8)',
                        'rgba(213, 213, 213, .8)'
                    ],
                    borderWidth: 1
                }]
            };

            // Ambil elemen canvas
            const ctx = document.getElementById(canvasId).getContext('2d');

            // Hancurkan chart yang sudah ada jika ada
            if (pieChart6) {
                pieChart6.destroy();
            }

            // Buat chart baru
            pieChart6 = new Chart(ctx, {
                type: 'doughnut',
                data: chartData,
                options: {
                    title: {
                        display: true,
                        text: 'Pie Chart dari Data JSON'
                    }
                }
            });
        }

        function fetchDataAndCreateChart6() {
            // URL API
            const apiUrl = 'alt/getDataALT2';

            // Ambil data dari API menggunakan fetch
            fetch(apiUrl)
                .then(response => response.json())
                .then(data => {
                    // Data JSON yang diambil
                    const jsonData = data.dataCell6;
                    // Panggil fungsi untuk membuat chart baru
                    createChart6(jsonData, 'pieChart6');
                })
                .catch(error => console.error('Error fetching data:', error));
        }

        // Pertama kali, panggil fungsi untuk mengambil data dan membuat chart
        fetchDataAndCreateChart6();

        // Set interval untuk mengambil data secara berkala dan membuat chart baru
        setInterval(fetchDataAndCreateChart6, 15000);
    </script>


<?= $this->endSection() ?>