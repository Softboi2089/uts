<?php
include 'koneksi.php';

// Total fakultas
$total_fakultas = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) as total FROM fakultas"))['total'];

// Total mahasiswa
$total_mahasiswa = mysqli_fetch_assoc(mysqli_query($conn, "SELECT SUM(jumlah_mahasiswa) as total FROM fakultas"))['total'];

// Rata-rata mahasiswa per fakultas
$rata_mahasiswa = $total_fakultas > 0 ? round($total_mahasiswa / $total_fakultas, 2) : 0;

// Persentase fakultas aktif
$aktif = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) as aktif FROM fakultas WHERE status='aktif'"))['aktif'];
$persen_aktif = $total_fakultas > 0 ? round(($aktif / $total_fakultas) * 100, 2) : 0;

// Data untuk grafik
$data_grafik = [];
$result = mysqli_query($conn, "SELECT nama_fakultas, jumlah_mahasiswa FROM fakultas");
while ($row = mysqli_fetch_assoc($result)) {
    $data_grafik[] = $row;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Statistik Fakultas</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <h2>Statistik Data Fakultas</h2>
    <ul>
        <li>Total Fakultas: <?php echo $total_fakultas; ?></li>
        <li>Total Mahasiswa: <?php echo $total_mahasiswa; ?></li>
        <li>Rata-rata Mahasiswa per Fakultas: <?php echo $rata_mahasiswa; ?></li>
        <li>Persentase Fakultas Aktif: <?php echo $persen_aktif; ?>%</li>
    </ul>
    <h3>Distribusi Mahasiswa per Fakultas</h3>
    <canvas id="chartFakultas" width="400" height="200"></canvas>
    <script>
        const ctx = document.getElementById('chartFakultas').getContext('2d');
        const chart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode(array_column($data_grafik, 'nama_fakultas')); ?>,
                datasets: [{
                    label: 'Jumlah Mahasiswa',
                    data: <?php echo json_encode(array_column($data_grafik, 'jumlah_mahasiswa')); ?>,
                    backgroundColor: 'rgba(54, 162, 235, 0.5)'
                }]
            },
            options: {
                scales: {
                    y: { beginAtZero: true }
                }
            }
        });
    </script>
</body>
</html>
