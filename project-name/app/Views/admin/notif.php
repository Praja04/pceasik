<?= $this->extend('admin/template') ?>

<?= $this->section('aside-dashboard-active') ?>
active bg-gradient-primary
<?= $this->endSection() ?>


<?= $this->section('pages-dashboard') ?>
Dashboard HSM 
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<script src="/assets/js/plugins/chartjs.min.js"></script>

<canvas id="myPieChart"></canvas>

<script>
        // URL API
        const apiUrl = 'alt/getDataALT2';

        // Ambil data dari API menggunakan fetch
        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                // Data JSON yang diambil
                const jsonData = data.dataCell2;

                // Menghitung total nilai
                const total = Object.values(jsonData).reduce((acc, curr) => acc + curr, 0);

                // Menghitung persentase untuk setiap nilai
                const percentages = {};
                for (const key in jsonData) {
                    percentages[key] = ((jsonData[key] / total) * 100).toFixed(2);
                }

                // Data untuk Chart.js
                const chartData = {
                    labels: Object.keys(jsonData),
                    datasets: [{
                        label: 'Data',
                        data: Object.values(jsonData),
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)'
                        ],
                        borderWidth: 1
                    }]
                };

                // Buat pie chart
                const ctx = document.getElementById('myPieChart').getContext('2d');
                new Chart(ctx, {
                    type: 'pie',
                    data: chartData,
                    options: {
                        title: {
                            display: true,
                            text: 'Pie Chart dengan Persentase dari Data JSON'
                        },
                        tooltips: {
                            callbacks: {
                                label: function(tooltipItem, data) {
                                    const label = data.labels[tooltipItem.index] || '';
                                    const value = data.datasets[0].data[tooltipItem.index] || '';
                                    const percentage = percentages[label] || '';
                                    return `${label}: ${value} (Jumlah: ${value}, Persentase: ${percentage}%)`;
                                }
                            }
                        }
                    }
                });
            })
            .catch(error => console.error('Error fetching data:', error));
    </script><?= $this->endSection() ?>