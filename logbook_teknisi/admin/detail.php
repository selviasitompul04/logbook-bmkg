<?php
session_start();
if (!isset($_SESSION['admins'])) {
    header("Location: ../auth/login.php");
    exit;
}

include '../koneksi.php';

$tanggal = $_GET['tanggal'] ?? '';
$query = mysqli_query($cons, "SELECT * FROM report WHERE dates='$tanggal'");
$row = mysqli_fetch_assoc($query);

if (!$row) {
    die("Data tidak ditemukan");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Laporan | Admin</title>

    <link rel="icon" href="../assets/dist/img/logo.png">
    <link rel="stylesheet" href="../assets/plugins/bootstrap4/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        body { font-family: 'Poppins', sans-serif; background:#F4F6F8; }
        .navbar-admin { background: linear-gradient(90deg,#0D47A1,#1976D2); }
        .navbar-brand { font-weight:700; color:#FFD54F!important; }

        .badge-Normal { background:#2E7D32; }
        .badge-Off { background:#C62828; }
        .badge-Perbaikan { background:#EF6C00; }

        .ket { text-align:left; font-size:14px; }
    </style>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-admin">
    <div class="container">
        <img src="../assets/dist/img/logo.png" height="40">
        <a class="navbar-brand ml-2" href="../index_admin.php">Logbook Teknisi</a>
        <div class="ml-auto">
            <a href="report.php" class="btn btn-light btn-sm">Kembali</a>
            <a href="../auth/logout.php" class="btn btn-danger btn-sm">Logout</a>
        </div>
    </div>
</nav>

<div class="container mt-4">
<div class="card shadow">
<div class="card-header bg-primary text-white">
    <h5 class="mb-0">Detail Laporan – <?= $tanggal ?></h5>
</div>

<div class="card-body table-responsive">
<table class="table table-bordered">
<thead class="thead-dark text-center">
<tr>
    <th>Nama Alat</th>
    <th>Kondisi</th>
    <th>Keterangan</th>
</tr>
</thead>
<tbody>

<?php
$alat = [
    "Panci Penguapan" => ["panci_status","panci_keterangan"],
    "Peralatan Sangkar Meteo" => ["sangkar_status","sangkar_keterangan"],
    "ARWS" => ["arws_status","arws_keterangan"],
    "High Volume Sampler" => ["hvs_status","hvs_keterangan"],
    "Penakar Hujan OBS" => ["penakar_status","penakar_keterangan"],
    "Pyranometer Digital" => ["pyranometer_status","pyranometer_keterangan"],
    "Barometer Digital" => ["baro_status","baro_keterangan"],
    "AWOS" => ["awos_status","awos_keterangan"],
    "AWS Digitalisasi" => ["aws_status","aws_keterangan"],
    "Lightning Detector" => ["lightning_detec_status","lightning_detec_keterangan"],
    "Radar Cuaca" => ["radar_status","radar_keterangan"],
    "PM 10" => ["pm10_status","pm10_keterangan"],
    "PM 2.5" => ["pm25_status","pm25_keterangan"],
    "Synergie" => ["synergie_status","synergie_keterangan"],
    "Aerometweb" => ["aerometweb_status","aerometweb_keterangan"],
    "WRS Stamet" => ["wrs_status","wrs_keterangan"],
    "Radio Sonde" => ["radios_status","radios_keterangan"],
    "Display Bandara" => ["d_bandara_status","d_bandara_keterangan"],
    "Display BPBD" => ["d_bpbd_status","d_bpbd_keterangan"],
    "Display Gubernur" => ["d_gubernur_status","d_gubernur_keterangan"],
    "Campble Stokes" => ["campble_status","campble_keterangan"],
    "Internet" => ["internet_status","internet_keterangan"],
    "VPN BMKG" => ["vpn_status","vpn_keterangan"],
    "BMKG Soft" => ["soft_status","soft_keterangan"],
    "AFTN" => ["aftn_status","aftn_keterangan"],
    "Sample Debu" => ["debu_status","debu_keterangan"],
];

foreach ($alat as $nama => [$statusField,$ketField]) {
    $status = $row[$statusField];
    $ket = $row[$ketField];

    if ($status == "") continue;

    echo "<tr>
        <td>$nama</td>
        <td class='text-center'>
            <span class='badge badge-$status'>$status</span>
        </td>
        <td class='ket'>".($ket ?: '-')."</td>
    </tr>";
}
?>

<tr>
    <td><b>Catatan Teknisi</b></td>
    <td colspan="2"><?= $row['coment'] ?></td>
</tr>

</tbody>
</table>

<div class="text-right mt-3">
    <a href="cetak.php?tanggal=<?= $tanggal ?>" class="btn btn-success">Print</a>
</div>

</div>
</div>
</div>

</body>
</html>
