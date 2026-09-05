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

$nama_admin   = $_SESSION['admins']; // username admin
$nama_teknisi = $row['nama_teknisi'];
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Cetak Laporan Teknisi</title>

<link rel="stylesheet" href="../assets/plugins/bootstrap4/css/bootstrap.min.css">
<link rel="icon" href="../assets/dist/img/logo.png">

<style>
body {
    font-family: 'Times New Roman', serif;
    background: #fff;
    color: #000;
}

.header {
    text-align: center;
    margin-bottom: 20px;
}

.header img {
    height: 70px;
}

.header h4, .header h5 {
    margin: 0;
}

hr {
    border: 2px solid #000;
}

table {
    font-size: 14px;
}

th {
    background: #f0f0f0;
    text-align: center;
}

.ttd {
    margin-top: 70px;
    text-align: center;
}

.ttd p {
    margin-bottom: 80px;
}

@media print {
    body {
        margin: 0;
    }
}
</style>
</head>

<body onload="window.print()">

<div class="container">

    <!-- HEADER -->
    <div class="header">
        <img src="../assets/dist/img/logo.png"><br>
        <h4><b>LOGBOOK TEKNISI</b></h4>
        <h5>STASIUN METEOROLOGI</h5>
    </div>

    <hr>

    <!-- INFO -->
    <table class="table table-borderless">
        <tr>
            <td width="20%">Tanggal</td>
            <td width="2%">:</td>
            <td><?= $tanggal ?></td>
        </tr>
        <tr>
            <td>Nama Teknisi</td>
            <td>:</td>
            <td><?= $nama_teknisi ?></td>
        </tr>
    </table>

    <!-- TABEL LAPORAN -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Alat</th>
                <th>Kondisi</th>
                <th>Keterangan / File</th>
            </tr>
        </thead>
        <tbody>

<?php
$alat = [
    "Panci Penguapan" => ["panci_status","panci_keterangan","panci_file"],
    "Peralatan Sangkar Meteo" => ["sangkar_status","sangkar_keterangan","sangkar_file"],
    "ARWS" => ["arws_status","arws_keterangan","arws_file"],
    "High Volume Sampler" => ["hvs_status","hvs_keterangan","hvs_file"],
    "Penakar Hujan OBS" => ["penakar_status","penakar_keterangan","penakar_file"],
    "Pyranometer Digital" => ["pyranometer_status","pyranometer_keterangan","pyranometer_file"],
    "Barometer Digital" => ["baro_status","baro_keterangan","baro_file"],
    "AWOS" => ["awos_status","awos_keterangan","awos_file"],
    "AWS Digitalisasi" => ["aws_status","aws_keterangan","aws_file"],
    "Lightning Detector" => ["lightning_detec_status","lightning_detec_keterangan","lightning_detec_file"],
    "Radar Cuaca" => ["radar_status","radar_keterangan","radar_file"],
    "PM 10" => ["pm10_status","pm10_keterangan","pm10_file"],
    "PM 2.5" => ["pm25_status","pm25_keterangan","pm25_file"],
    "Synergie" => ["synergie_status","synergie_keterangan","synergie_file"],
    "Aerometweb" => ["aerometweb_status","aerometweb_keterangan","aerometweb_file"],
    "WRS Stamet" => ["wrs_status","wrs_keterangan","wrs_file"],
    "Radio Sonde" => ["radios_status","radios_keterangan","radios_file"],
    "Display Bandara" => ["d_bandara_status","d_bandara_keterangan","d_bandara_file"],
    "Display BPBD" => ["d_bpbd_status","d_bpbd_keterangan","d_bpbd_file"],
    "Display Gubernur" => ["d_gubernur_status","d_gubernur_keterangan","d_gubernur_file"],
    "Campble Stokes" => ["campble_status","campble_keterangan","campble_file"],
    "Internet" => ["internet_status","internet_keterangan","internet_file"],
    "VPN BMKG" => ["vpn_status","vpn_keterangan","vpn_file"],
    "BMKG Soft" => ["soft_status","soft_keterangan","soft_file"],
    "AFTN" => ["aftn_status","aftn_keterangan","aftn_file"],
    "Sample Debu" => ["debu_status","debu_keterangan","debu_file"]
];

foreach ($alat as $nama => [$status,$ket,$file]) {
    if ($row[$status] == "") continue;

    echo "<tr>
        <td>$nama</td>
        <td class='text-center'>{$row[$status]}</td>
        <td>".($row[$ket] ?: '-')."</td>
    </tr>";
}
?>

<tr>
    <td><b>Catatan Teknisi</b></td>
    <td colspan="2"><?= $row['coment'] ?></td>
</tr>

        </tbody>
    </table>

    <!-- TANDA TANGAN -->
    <div class="row ttd">
        <div class="col-6">
            <p>Mengetahui,<br>Admin</p>
            <b><?= $nama_admin ?></b>
        </div>

        <div class="col-6">
            <p>Teknisi</p>
            <b><?= $nama_teknisi ?></b>
        </div>
    </div>

</div>

</body>
</html>
