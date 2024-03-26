<?= $this->extend('admin/template') ?>

<?= $this->section('aside-dashboard-active') ?>
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
                    <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">query_stats</i>
                    </div>
                    <div class="text-end pt-1">
                        <p class="text-sm mb-0 text-capitalize">Data Yang </p>
                        <p class="text-sm mb-0 text-capitalize">Sering Muncul</p>
                        <h4 class="mb-0" id="modeleft">°C</h4>
                    </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">
                    <p class="mb-0"><span class="text-success text-sm font-weight-bolder">Data </span>TEMPERATUR LEFT</p>
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
                        <h4 class="mb-0" id="datatoday"></h4>
                    </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">
                    <p class="mb-0"><span class="text-danger text-sm font-weight-bolder">Data </span>Per Hari Ini</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-header p-3 pt-2">
                    <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">query_stats</i>
                    </div>
                    <div class="text-end pt-1">
                        <p class="text-sm mb-0 text-capitalize">Data Yang </p>
                        <p class="text-sm mb-0 text-capitalize">Sering Muncul</p>
                        <h4 class="mb-0" id="moderight">°C</h4>
                    </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">
                    <p class="mb-0"><span class="text-success text-sm font-weight-bolder">Data </span>TEMPERATUR RIGHT</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Grafik-->
<br>
<div id="searchTarget" class="text-center">
    <h3>Grafik Temperatur</h3>
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
                <h6 class="mb-0 ">TEMPERATUR HSM 1</h6>
                <p class="text-sm ">Parameter HSM Line 6 Head 1</p>
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
                <h6 class="mb-0 ">TEMPERATUR HSM 2</h6>
                <p class="text-sm ">Parameter HSM Line 6 Head 2</p>
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

<!-- lid HOLDER POSITION LINE 6-->
<br>
<div class="text-center" id="lid">
    <h3>Grafik Lid Holder Position</h3>
</div><br>
<div class="row mt-2">
    <div class="col-lg-4 col-md-6 mt-4 mb-4">
        <div class="card z-index-2 ">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1">
                    <div class="chart">
                        <canvas id="ChartMeltingH1" class="chart-canvas" height="300"></canvas>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <h6 class="mb-0 ">Melting Position (Lid Holder H1)</h6>
                <p class="text-sm ">Parameter HSM Line 6 Head 1</p>
                <hr class="dark horizontal">
                <div><label class="form-label" for="tanggal">Pilih Tanggal:</label>
                <input type="date" id="tanggal" name="tanggal" width="40px">
                <button class="btn btn-primary" onclick="fetchData3()">Tampilkan Data</button>
                </div>
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
                        <canvas id="ChartMeltingH2" class="chart-canvas" height="300"></canvas>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <h6 class="mb-0 ">Melting Position (Lid Holder H2)</h6>
                <p class="text-sm ">Parameter HSM Line 6 Head 2</p>
                <hr class="dark horizontal">
                <div><label class="form-label" for="tanggal">Pilih Tanggal:</label>
                <input type="date" id="tanggal" name="tanggal" width="40px">
                <button class="btn btn-primary" onclick="fetchData4()">Tampilkan Data</button>
                </div>
                <div class="d-flex ">
                    <i class="material-icons text-sm my-auto me-1">schedule</i>
                    <p class="mb-0 text-sm">per hari ini</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- bOX lIFTER LINE 6 -->
<br>
<div class="text-center">
    <h3>Grafik Box Lifter Position</h3>
</div><br>
<div class="row mt-2">
    <div class="col-lg-4 col-md-6 mt-4 mb-4">
        <div class="card z-index-2 ">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1">
                    <div class="chart">
                        <canvas id="BoxLifterMeltingH1" class="chart-canvas" height="300"></canvas>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <h6 class="mb-0 ">Melting Position (Box Lifter H1)</h6>
                <p class="text-sm ">Parameter HSM Line 6 Head 1</p>
                <hr class="dark horizontal">
                <div><label class="form-label" for="tanggal">Pilih Tanggal:</label>
                <input type="date" id="tanggal" name="tanggal" width="40px">
                <button class="btn btn-primary" onclick="fetchData5()">Tampilkan Data</button>
                </div>
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
                        <canvas id="BoxLifterMeltingH2" class="chart-canvas" height="300"></canvas>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <h6 class="mb-0 ">Melting Position (Box Lifter H2)</h6>
                <p class="text-sm ">Parameter HSM Line 6 Head 2</p>
                <hr class="dark horizontal">
                <div><label class="form-label" for="tanggal">Pilih Tanggal:</label>
                <input type="date" id="tanggal" name="tanggal" width="40px">
                <button class="btn btn-primary" onclick="fetchData6()">Tampilkan Data</button>
                </div>
                <div class="d-flex ">
                    <i class="material-icons text-sm my-auto me-1">schedule</i>
                    <p class="mb-0 text-sm">per hari ini</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Mirror Position LINE 6 -->
<br>
<div class="text-center">
    <h3>Grafik Mirror Position</h3>
</div><br>
<div class="row mt-2">
    <div class="col-lg-4 col-md-6 mt-4 mb-4">
        <div class="card z-index-2 ">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1">
                    <div class="chart">
                        <canvas id="MirrorH1" class="chart-canvas" height="300"></canvas>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <h6 class="mb-0 ">Melting Position (Mirror H1)</h6>
                <p class="text-sm ">Parameter HSM Line 6 Head 1</p>
                <hr class="dark horizontal">
                <div><label class="form-label" for="tanggal">Pilih Tanggal:</label>
                <input type="date" id="tanggal" name="tanggal" width="40px">
                <button class="btn btn-primary" onclick="fetchData7()">Tampilkan Data</button>
                </div>
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
                        <canvas id="MirrorH2" class="chart-canvas" height="300"></canvas>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <h6 class="mb-0 ">Melting Position (Mirrorr H2)</h6>
                <p class="text-sm ">Parameter HSM Line 6 Head 2</p>
                <hr class="dark horizontal">
                <div><label class="form-label" for="tanggal">Pilih Tanggal:</label>
                <input type="date" id="tanggal" name="tanggal" width="40px">
                <button class="btn btn-primary" onclick="fetchData8()">Tampilkan Data</button>
                </div>
                <div class="d-flex ">
                    <i class="material-icons text-sm my-auto me-1">schedule</i>
                    <p class="mb-0 text-sm">per hari ini</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end of grafik -->
<div class="row mb-4">
    <div class="col-lg-4 col-md-6 col-md-6 mt-4 mb-4">
        <div class="card h-100">
            <div class="card-header pb-0">
                <h6>Data overview</h6>
                <p class="text-sm">
                    <i class="fa fa-arrow-down text-danger" aria-hidden="true"></i>
                    <span class="font-weight-bold">Data Temp-Left</span> dibawah atau diatas ambang batas
                </p>
            </div>
            <div class="card-body p-3">
                <div class="timeline timeline-one-side" style="overflow-y: scroll; max-height: 300px;" id="damang">

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
                <div class="timeline timeline-one-side" style="overflow-y: scroll; max-height: 300px;" id="damang2">

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Tautan untuk mengunduh file CSV -->
<div class="text-center">
    <a href="<?= base_url('user/downloadCSV') ?>" class="btn btn-success">Unduh CSV HSM Head 1</a>
    <a href="<?= base_url('user/downloadCSV2') ?>" class="btn btn-success">Unduh CSV HSM Head 2</a>
</div>



<script src="/assets/js/plugins/chartjs.min.js"></script>


<script>
   $(document).ready(function() {
        const getData = () => {
            $.ajax({
                url: "<?= base_url('user/getData') ?>",
                type: "GET",
                success: function(response) {
                    let totaldata1 = response.total
                    console.log(totaldata1);
                    document.getElementById('total').innerHTML = totaldata1
                    document.getElementById('modeleft').innerHTML = response.modeleft.L6_HSM1_TEMP_LEFT
                    document.getElementById('moderight').innerHTML = response.moderight.L6_HSM1_TEMP_RIGHT
                    document.getElementById('datatoday').innerHTML = response.datatoday
                
                    const temperatureContent = document.getElementById('damang')
                    let content = ''
                    response.temperatureData.map((item) => {
                        content += `
                    
                    <div class="timeline-block mb-3">
                            <span class="timeline-step">
                                <i class="material-icons text-danger text-gradient">notifications</i>
                            </span>
                            <div class="timeline-content">
                        <div class="timeline-item-body">
                            <h6 class="timeline-item-title">${item.waktu}</h6>
                            <p class="timeline-item-text">${item.L6_HSM1_TEMP_LEFT}°C</p>
                        </div>
                        </div>
                    </div>
                    `
                    })

                    
                    //////////////////// data2
                    const temperatureContent2 = document.getElementById('damang2')
                    let content2 = ''
                    response.temperatureData2.map((item2) => {
                        content2 += `
                    
                    <div class="timeline-block mb-3">
                            <span class="timeline-step">
                                <i class="material-icons text-danger text-gradient">notifications</i>
                            </span>
                            <div class="timeline-content">
                        <div class="timeline-item-body">
                            <h6 class="timeline-item-title">${item2.waktu}</h6>
                            <p class="timeline-item-text">${item2.L6_HSM1_TEMP_RIGHT}°C</p>
                        </div>
                        </div>
                    </div>
                    `
                    })


                    temperatureContent.innerHTML = content
                    temperatureContent2.innerHTML = content2

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

<!--Temperatur-->
<script>
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
</script>

<script>
    var myChart2; // Variabel untuk menyimpan objek grafik

    // Fungsi untuk membuat grafik
    function createChart2(data, upperLimit, lowerLimit, canvasId) {
        var labels = data.map(entry => entry.waktu);
        // Ubah label menjadi hanya bagian waktu (tanpa tanggal)
        labels = labels.map(function(label) {
            return label.split(' ')[1]; // Mengambil bagian waktu saja
        });
        var datasetLeft = data.map(entry => entry.L6_HSM2_TEMP_LEFT);
        var datasetRight = data.map(entry => entry.L6_HSM2_TEMP_RIGHT);
        var type = data.map(entry => entry.L6_HSM2_TYPE_BATTERY);
        var setval = data.map(entry => entry.L6_HSM2_TEMP_SET_VALUE);
        // Cek apakah objek Chart sudah ada
        if (myChart2) {
        // Hancurkan objek Chart yang sudah ada
        myChart2.destroy();
    }
        // Inisialisasi objek grafik jika belum ada
        
            var ctx = document.getElementById(canvasId).getContext('2d');
            myChart2 = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: labels,
                    datasets: [{
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
                    }  ,{
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
                        label: 'Type',
                        data: type
                    }  ]
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
            return myChart2; // Mengembalikan objek chart yang baru dibuat
        } 

    setInterval(function() {
        fetch('user/getData2') // Ganti '/getData2' dengan rute yang sesuai dengan controller Anda
            .then(response => response.json())
            .then(data => {
                var upperLimit = data.upperLimit;
                var lowerLimit = data.lowerLimit;

                // Ambil 20 data terakhir
                var lastTwentyData = data.result.slice(-20);

                // Buat grafik
                createChart2(lastTwentyData, upperLimit, lowerLimit, 'myChart2');
            });
    }, 15000); // Mengambil data setiap 15 detik

    function fetchData2() {
    fetch('user/getData2') // Ganti '/getData' dengan rute yang sesuai dengan controller Anda
        .then(response => response.json())
        .then(data => {
            var tanggal = document.getElementById('tanggal2').value; // Mendapatkan nilai tanggal dari input
            var filteredData2 = data.result.filter(entry => entry.waktu.startsWith(tanggal)); // Melakukan filtering berdasarkan tanggal

            var upperLimit = data.upperLimit;
            var lowerLimit = data.lowerLimit;

            // Buat atau perbarui grafik dengan data yang diperoleh
            createChart2(filteredData2, upperLimit, lowerLimit, 'myChart2');
        });
}
</script>

<!--Lid Holder-->
<script>
    var myChart3; // Variabel untuk menyimpan objek grafik

    // Fungsi untuk membuat grafik
    function Createchart3(data,  canvasId) {
        var labels = data.map(entry => entry.waktu);
        // Ubah label menjadi hanya bagian waktu (tanpa tanggal)
        labels = labels.map(function(label) {
            return label.split(' ')[1]; // Mengambil bagian waktu saja
        });
        var datasetLeft = data.map(entry => entry.L6_HSM1_LID_HOLDER_ACTUAL_POS);
        var datasetRight = data.map(entry => entry.L6_HSM1_LID_HOLDER_MELTING_POS);
        var type = data.map(entry => entry.L6_HSM1_TYPE_BATTERY);

        // Cek apakah objek Chart sudah ada
        if (myChart3) {
            // Hancurkan objek Chart yang sudah ada
            myChart3.destroy();
        }
        
        // Inisialisasi objek grafik jika belum ada
        var ctx = document.getElementById(canvasId).getContext('2d');
        myChart3 = new Chart(ctx, {
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
                        min: 40, // Set nilai minimum sumbu y
                        max: 60, // Set nilai maksimum sumbu y
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
        
        return myChart3; // Mengembalikan objek chart yang baru dibuat
    }     

    setInterval(function() {
        fetch('user/getData') // Ganti '/getData' dengan rute yang sesuai dengan controller Anda
            .then(response => response.json())
            .then(data => {
             
                // Ambil 20 data terakhir
                var lastTwentyData = data.result.slice(-20);

                // Buat grafik
                Createchart3(lastTwentyData, 'ChartMeltingH1');
            });
    }, 15000); // Mengambil data setiap 15 detik

    function fetchData3() {
    fetch('user/getData') // Ganti '/getData' dengan rute yang sesuai dengan controller Anda
        .then(response => response.json())
        .then(data => {
            var tanggal = document.getElementById('tanggal').value; // Mendapatkan nilai tanggal dari input
            var filteredData = data.result.filter(entry => entry.waktu.startsWith(tanggal)); // Melakukan filtering berdasarkan tanggal
        // Buat atau perbarui grafik dengan data yang diperoleh
            Createchart3(filteredData, 'ChartMeltingH1');
        });
    }
</script>

<script>
    var myChart4; // Variabel untuk menyimpan objek grafik

    // Fungsi untuk membuat grafik
    function CreateChart4(data,  canvasId) {
        var labels = data.map(entry => entry.waktu);
        // Ubah label menjadi hanya bagian waktu (tanpa tanggal)
        labels = labels.map(function(label) {
            return label.split(' ')[1]; // Mengambil bagian waktu saja
        });
        var datasetLeft = data.map(entry => entry.L6_HSM2_LID_HOLDER_ACTUAL_POS);
        var datasetRight = data.map(entry => entry.L6_HSM2_LID_HOLDER_MELTING_POS);
        var type = data.map(entry => entry.L6_HSM2_TYPE_BATTERY);  
        // Cek apakah objek Chart sudah ada
        if (myChart4) {
            // Hancurkan objek Chart yang sudah ada
            myChart4.destroy();
        }
        
        // Inisialisasi objek grafik jika belum ada
        var ctx = document.getElementById(canvasId).getContext('2d');
        myChart4 = new Chart(ctx, {
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
                        min: 40 , // Set nilai minimum sumbu y
                        max: 60 , // Set nilai maksimum sumbu y
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
        
        return myChart4; // Mengembalikan objek chart yang baru dibuat
    } 
    
    setInterval(function() {
        fetch('user/getData2') // Ganti '/getData' dengan rute yang sesuai dengan controller Anda
            .then(response => response.json())
            .then(data => {
             
                // Ambil 20 data terakhir
                var lastTwentyData = data.result.slice(-20);

                // Buat grafik
                CreateChart4(lastTwentyData, 'ChartMeltingH2');
            });
    }, 15000); // Mengambil data setiap 15 detik

    function fetchData4() {
    fetch('user/getData2') // Ganti '/getData' dengan rute yang sesuai dengan controller Anda
        .then(response => response.json())
        .then(data => {
            var tanggal = document.getElementById('tanggal').value; // Mendapatkan nilai tanggal dari input
            var filteredData = data.result.filter(entry => entry.waktu.startsWith(tanggal)); // Melakukan filtering berdasarkan tanggal
            // Buat atau perbarui grafik dengan data yang diperoleh
            CreateChart4(filteredData, 'ChartMeltingH2');
        });
}
</script>

<!--Box Lifter-->
<script>
    var myChart5; // Variabel untuk menyimpan objek grafik

    // Fungsi untuk membuat grafik
    function CreateChart5(data,  canvasId) {
        var labels = data.map(entry => entry.waktu);
        // Ubah label menjadi hanya bagian waktu (tanpa tanggal)
        labels = labels.map(function(label) {
            return label.split(' ')[1]; // Mengambil bagian waktu saja
        });
        var datasetLeft = data.map(entry => entry.L6_HSM1_BOX_LIFTER_ACTUAL_POS);
        var datasetRight = data.map(entry => entry.L6_HSM1_BOX_LIFTER_MELTING_POS);
        var type = data.map(entry => entry.L6_HSM1_TYPE_BATTERY);

        // Cek apakah objek Chart sudah ada
        if (myChart5) {
            // Hancurkan objek Chart yang sudah ada
            myChart5.destroy();
        }
        
        // Inisialisasi objek grafik jika belum ada
        var ctx = document.getElementById(canvasId).getContext('2d');
        myChart5 = new Chart(ctx, {
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
                         min: 120, // Set nilai minimum sumbu y
                         max: 130, // Set nilai maksimum sumbu y
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
        
        return myChart5; // Mengembalikan objek chart yang baru dibuat
    } 
       
    setInterval(function() {
        fetch('user/getData') // Ganti '/getData' dengan rute yang sesuai dengan controller Anda
            .then(response => response.json())
            .then(data => {
             
                // Ambil 20 data terakhir
                var lastTwentyData = data.result.slice(-20);

                // Buat grafik
                CreateChart5(lastTwentyData, 'BoxLifterMeltingH1');
            });
    }, 15000); // Mengambil data setiap 15 detik

    function fetchData5() {
    fetch('user/getData') // Ganti '/getData' dengan rute yang sesuai dengan controller Anda
        .then(response => response.json())
        .then(data => {
            var tanggal = document.getElementById('tanggal').value; // Mendapatkan nilai tanggal dari input
            var filteredData = data.result.filter(entry => entry.waktu.startsWith(tanggal)); // Melakukan filtering berdasarkan tanggal
            // Buat atau perbarui grafik dengan data yang diperoleh
            CreateChart5(filteredData, 'BoxLifterMeltingH1');
        });
}
</script>

<script>
    var myChart6; // Variabel untuk menyimpan objek grafik

    // Fungsi untuk membuat grafik
    function CreateChart6(data,  canvasId) {
        var labels = data.map(entry => entry.waktu);
        // Ubah label menjadi hanya bagian waktu (tanpa tanggal)
        labels = labels.map(function(label) {
            return label.split(' ')[1]; // Mengambil bagian waktu saja
        });
        var datasetLeft = data.map(entry => entry.L6_HSM2_BOX_LIFTER_ACTUAL_POS);
        var datasetRight = data.map(entry => entry.L6_HSM2_BOX_LIFTER_MELTING_POS);
        var type = data.map(entry => entry.L6_HSM2_TYPE_BATTERY);
        // Cek apakah objek Chart sudah ada
        if (myChart6) {
            // Hancurkan objek Chart yang sudah ada
            myChart6.destroy();
        }
        
        // Inisialisasi objek grafik jika belum ada
        var ctx = document.getElementById(canvasId).getContext('2d');
        myChart6 = new Chart(ctx, {
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
                         min: 5, // Set nilai minimum sumbu y
                         max: 140, // Set nilai maksimum sumbu y
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
        }) 
        return myChart6; // Mengembalikan objek chart yang baru dibuat
    } 
       
    setInterval(function() {
        fetch('user/getData2') // Ganti '/getData' dengan rute yang sesuai dengan controller Anda
            .then(response => response.json())
        .then(data => {    
                // Ambil 20 data terakhir
                var lastTwentyData = data.result.slice(-20);
                // Buat grafik
                CreateChart6(lastTwentyData, 'BoxLifterMeltingH2');
            });
    }, 15000); // Mengambil data setiap 15 detik

    function fetchData6() {
    fetch('user/getData2') // Ganti '/getData' dengan rute yang sesuai dengan controller Anda
        .then(response => response.json())
        .then(data => {
            var tanggal = document.getElementById('tanggal').value; // Mendapatkan nilai tanggal dari input
            var filteredData = data.result.filter(entry => entry.waktu.startsWith(tanggal)); // Melakukan filtering berdasarkan tanggal
            // Buat atau perbarui grafik dengan data yang diperoleh
            CreateChart6(filteredData, 'BoxLifterMeltingH2');
        });
}
</script>

<!--Mirror-->
<script>
    var myChart7; // Variabel untuk menyimpan objek grafik

    // Fungsi untuk membuat grafik
    function Createchart7(data,  canvasId) {
        var labels = data.map(entry => entry.waktu);
        // Ubah label menjadi hanya bagian waktu (tanpa tanggal)
        labels = labels.map(function(label) {
            return label.split(' ')[1]; // Mengambil bagian waktu saja
        });
        var datasetLeft = data.map(entry => entry.L6_HSM1_MIRROR_ACTUAL_POS);
        var datasetRight = data.map(entry => entry.	L6_HSM1_MIRROR_MELTING_POS);
        var type = data.map(entry => entry.L6_HSM1_TYPE_BATTERY);
        // Cek apakah objek Chart sudah ada
        if (myChart7) {
            // Hancurkan objek Chart yang sudah ada
            myChart7.destroy();
        }
        
        // Inisialisasi objek grafik jika belum ada
        var ctx = document.getElementById(canvasId).getContext('2d');
        myChart7 = new Chart(ctx, {
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
                         min: 760, // Set nilai minimum sumbu y
                         max: 780, // Set nilai maksimum sumbu y
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
        
        return myChart7; // Mengembalikan objek chart yang baru dibuat
    } 
       
    setInterval(function() {
        fetch('user/getData') // Ganti '/getData' dengan rute yang sesuai dengan controller Anda
            .then(response => response.json())
            .then(data => {             
                // Ambil 20 data terakhir
                var lastTwentyData = data.result.slice(-20);
                // Buat grafik
                Createchart7(lastTwentyData, 'MirrorH1');
            });
    }, 15000); // Mengambil data setiap 15 detik

    function fetchData7() {
    fetch('user/getData') // Ganti '/getData' dengan rute yang sesuai dengan controller Anda
        .then(response => response.json())
        .then(data => {
            var tanggal = document.getElementById('tanggal').value; // Mendapatkan nilai tanggal dari input
            var filteredData = data.result.filter(entry => entry.waktu.startsWith(tanggal)); // Melakukan filtering berdasarkan tanggal
            // Buat atau perbarui grafik dengan data yang diperoleh
            Createchart7(filteredData , 'MirrorH1');
        });
}
</script>

<script>
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
</script>


<?= $this->endSection() ?>