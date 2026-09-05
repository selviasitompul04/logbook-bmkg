<?php
session_start();
include '../koneksi.php';

if (!isset($_SESSION['users'])) {
    header("Location: ../auth/login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Form Logbook Teknisi</title>

<link rel="icon" href="../assets/dist/img/logo.png">
<link rel="stylesheet" href="../assets/plugins/bootstrap4/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

<style>
body {
    font-family: 'Poppins', sans-serif;
    background: #F4F6F8;
}

.navbar-user {
    background: linear-gradient(90deg,#0D47A1,#1976D2);
}
.navbar-brand {
    font-weight: 700;
    color: #FFD54F !important;
}

.card {
    border-radius: 12px;
}

.table th {
    background: #1E293B;
    color: #fff;
    text-align: center;
}

textarea {
    resize: none;
}
</style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-user">
    <div class="container">
        <img src="../assets/dist/img/logo.png" height="40">
        <a class="navbar-brand ml-2" href="../index_user.php">Logbook Teknisi</a>

        <div class="ml-auto">
            <a href="../auth/logout.php" class="btn btn-danger btn-sm">Logout</a>
        </div>
    </div>
</nav>

<div class="container mt-4 mb-5">

<form action="input_process.php" method="POST" enctype="multipart/form-data">

<div class="card shadow">
<div class="card-header bg-primary text-white">
    <h5 class="mb-0">Form Logbook Teknisi</h5>
</div>

<div class="card-body">

<!-- IDENTITAS -->
<div class="row mb-3">
    <div class="col-md-6">
        <label>Nama Teknisi</label>
        <select name="nama_teknisi" class="form-control" required>
            <option value="">-- Pilih Teknisi --</option>
            <option>Roy Tulus Gultom</option>
            <option>Fuadi Halmas</option>
            <option>Riko Prayitno</option>
            <option>Tiara Aretni</option>
            <option>M. Agus Maulana</option>
            <option>M. Septian Pratama</option>
            <option>Syahrial Dwi A.S</option>
        </select>
    </div>

    <div class="col-md-6">
        <label>Tanggal Pemeriksaan</label>
        <input type="date" name="date" class="form-control" required>
    </div>
</div>

<hr>

<!-- DAFTAR ALAT -->
<div class="table-responsive">
<table class="table table-bordered table-hover">
<thead>
<tr>
    <th>Nama Alat</th>
    <th width="180">Status</th>
    <th>Keterangan Alat</th>
</tr>
</thead>
<tbody>

<?php
$alat = [
    "Panci Penguapan" => "panci",
    "Peralatan Sangkar Meteo" => "sangkar",
    "ARWS" => "arws",
    "High Volume Sampler" => "hvs",
    "Penakar Hujan OBS" => "penakar",
    "Pyranometer Digital" => "pyranometer",
    "Barometer Digital" => "baro",
    "AWOS" => "awos",
    "AWS Digitalisasi" => "aws",
    "Lightning Detector" => "lightning_detec",
    "Radar Cuaca" => "radar",
    "PM 10" => "pm10",
    "PM 2.5" => "pm25",
    "Synergie" => "synergie",
    "Aerometweb" => "aerometweb",
    "WRS Stamet" => "wrs",
    "Radio Sonde" => "radios",
    "Display Bandara" => "d_bandara",
    "Display BPBD" => "d_bpbd",
    "Display Gubernur" => "d_gubernur",
    "Campble Stokes" => "campble",
    "Internet" => "internet",
    "VPN BMKG" => "vpn",
    "BMKG Soft" => "soft",
    "AFTN" => "aftn",
    "Sample Debu" => "debu"
];

foreach ($alat as $nama => $key) {
    echo "
    <tr>
        <td>$nama</td>
        <td>
            <select name='{$key}_status' class='form-control'>
                <option value=''>-- Status --</option>
                <option value='Normal'>Normal</option>
                <option value='Off'>Off</option>
                <option value='Perbaikan'>Perbaikan / Perawatan</option>
            </select>
        </td>
        <td>
            <input type='text' name='{$key}_keterangan' class='form-control' placeholder='Keterangan alat'>
        </td>
    </tr>";
}
?>

</tbody>
</table>
</div>

<!-- CATATAN -->
<div class="form-group mt-3">
    <label><b>Catatan Teknisi</b></label>
    <textarea name="comment" rows="3" class="form-control" placeholder="Catatan umum teknisi..."></textarea>
</div>

</div>

<div class="card-footer text-right">
    <button type="submit" name="input" class="btn btn-success px-4">
        Simpan Logbook
    </button>
</div>

</div>
</form>
</div>

</body>
</html>
