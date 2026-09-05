<?php
session_start();
if (!isset($_SESSION['users'])) {
    echo "<script>alert('Harap Login Sebagai User');</script>";
    echo "<script>window.location='../auth/login.php'</script>";
    exit;
}

require_once '../koneksi.php';

$tanggal = $_GET['tanggal'] ?? '';
$query = mysqli_query($cons, "SELECT * FROM report WHERE dates='$tanggal'");
$data = mysqli_fetch_assoc($query);

if (!$data) {
    die("Data tidak ditemukan");
}

/* LIST ALAT (STATUS + KETERANGAN) */
$alat = [
    "Panci Penguapan" => ["panci_status", "panci_keterangan"],
    "Sangkar Meteo" => ["sangkar_status", "sangkar_keterangan"],
    "ARWS" => ["arws_status", "arws_keterangan"],
    "HVS" => ["hvs_status", "hvs_keterangan"],
    "AWS" => ["aws_status", "aws_keterangan"],
    "AWOS" => ["awos_status", "awos_keterangan"],
    "Radar Cuaca" => ["radar_status", "radar_keterangan"],
    "PM 10" => ["pm10_status", "pm10_keterangan"],
    "PM 2.5" => ["pm25_status", "pm25_keterangan"],
    "Internet" => ["internet_status", "internet_keterangan"],
    "VPN BMKG" => ["vpn_status", "vpn_keterangan"],
    "AFTN" => ["aftn_status", "aftn_keterangan"],
    "Sample Debu" => ["debu_status", "debu_keterangan"]
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Detail Laporan</title>
<link rel="stylesheet" href="../assets/plugins/bootstrap4/css/bootstrap.min.css">

<style>
body { background:#f4f6f9; }
.card { border-radius:10px; }
.badge-normal { background:#28a745; }
.badge-off { background:#dc3545; }
.badge-perbaikan { background:#ffc107; color:#000; }
</style>
</head>

<body>

<div class="container mt-4">
<div class="card">
<div class="card-header bg-primary text-white">
    <h4 class="mb-0">Detail Laporan Teknisi</h4>
    <small>Tanggal: <?= htmlspecialchars($tanggal) ?></small>
</div>

<div class="card-body">
<table class="table table-bordered">
<thead class="thead-light text-center">
<tr>
    <th>Nama Alat</th>
    <th>Status</th>
    <th>Keterangan Teknisi</th>
</tr>
</thead>

<tbody>
<?php foreach ($alat as $nama => [$status, $ket]): ?>
<tr>
    <td><?= $nama ?></td>

    <td class="text-center">
        <?php
        $s = $data[$status] ?? '-';
        if ($s == 'Normal') echo "<span class='badge badge-normal'>Normal</span>";
        elseif ($s == 'Off') echo "<span class='badge badge-off'>Off</span>";
        elseif ($s == 'Perbaikan') echo "<span class='badge badge-perbaikan'>Perbaikan</span>";
        else echo "-";
        ?>
    </td>

    <td>
        <?= !empty($data[$ket]) ? nl2br(htmlspecialchars($data[$ket])) : "<i>- Tidak ada keterangan -</i>"; ?>
    </td>
</tr>
<?php endforeach; ?>
</tbody>
</table>

<hr>

<h6>Catatan Umum Teknisi</h6>
<p><?= nl2br(htmlspecialchars($data['coment'])) ?></p>

<a href="report.php" class="btn btn-secondary mt-3">← Kembali</a>

</div>
</div>
</div>

</body>
</html>
