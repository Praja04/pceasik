$(document).ready(function() {
    const getTotalData = () => {
        // Mengambil total data dari API pertama
        $.ajax({
            url: "<?= base_url('user/getData') ?>",
            type: "GET",
            success: function(response1) {
                const totalData1 = response1.total;
                const dataToday1 = response1.datatoday;
                // Mengambil total data dari API kedua
                $.ajax({
                    url: "<?= base_url('user/getData2') ?>",
                    type: "GET",
                    success: function(response2) {
                        const totalData2 = response2.total;
                        const dataToday2 = response2.datatoday;
                        // Menjumlahkan total data dari kedua API
                        const totalData = totalData1 + totalData2;

                        const totalDatatoday = dataToday1 + dataToday2;
                        // Memperbarui total data di HTML
                        document.getElementById('total').innerHTML = totalData;
                        document.getElementById('datatoday').innerHTML = totalDatatoday;
                    },
                    error: function(xhr2, status2, error2) {
                        console.error(xhr2.responseText);
                    }
                });
            },
            error: function(xhr1, status1, error1) {
                console.error(xhr1.responseText);
            }
        });
    };

    // Panggil fungsi untuk mendapatkan total data saat dokumen siap
    getTotalData();

    const getData = () => {
        $.ajax({
            url: "<?= base_url('user/getData') ?>",
            type: "GET",
            success: function(response) {
                document.getElementById('modeleft').innerHTML = response.modeleft.L6_HSM1_TEMP_LEFT;
                document.getElementById('moderight').innerHTML = response.moderight.L6_HSM1_TEMP_RIGHT;
               

                const temperatureContent = document.getElementById('damang');
                let content = '';
                response.temperatureData.forEach((item) => {
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
                    `;
                });

                // Memperbarui konten suhu
                temperatureContent.innerHTML = content;
            },
            error: function(xhr, status, error) {
                console.error("Error:", error);
            }
        });
    };

    // Panggil getData pertama kali dan set interval untuk memperbarui setiap 15 detik
    getData();
    setInterval(function() {
        getData();
    }, 15000); // 15 detik dalam milidetik
});