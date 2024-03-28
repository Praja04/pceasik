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

!--Temperatur-->
<script src="/assets/js/myChart.js"></script>
<script src="/assets/js/myChart2.js"></script>

<!--Lid Holder-->
<script src="/assets/js/myChart3.js"></script>
<script src="/assets/js/myChart4.js"></script>
<!--Box Lifter-->
<script src="/assets/js/myChart5.js"></script>
<script src="/assets/js/myChart6.js"></script>

<!--Mirror-->
<script src="/assets/js/myChart7.js"></script>
<script src="/assets/js/myChart8.js"></script>



<?= $this->endSection() ?>
