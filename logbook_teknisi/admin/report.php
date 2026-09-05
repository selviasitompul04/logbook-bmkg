<?php
session_start();
if (!isset($_SESSION['admins'])) {
    echo "<script>alert('Harap Login Sebagai Admin');window.location='../auth/login.php';</script>";
    exit;
}

require_once '../koneksi.php';
$query = mysqli_query($cons, "SELECT * FROM report ORDER BY dates ASC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Report Admin - Logbook Teknisi</title>

<link rel="icon" href="../assets/dist/img/logo.png">
<link rel="stylesheet" href="../assets/plugins/bootstrap4/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Viga&display=swap" rel="stylesheet">

<style>
body{
    font-family:'Poppins',sans-serif;
    background:#F4F6F8;
}
.navbar{
    background:#0D47A1;
    padding:15px 30px;
}
.navbar-brand{
    font-family:'Viga',sans-serif;
    font-size:30px;
    color:#FFD54F!important;
}
.nav-link{color:#fff!important}
.card{
    border-radius:14px;
    box-shadow:0 8px 25px rgba(0,0,0,.08);
}
.table thead{
    background:#1976D2;
    color:#fff;
}
.table td,.table th{text-align:center}
.btn-detail{
    background:#42A5F5;
    color:#fff;
    border-radius:20px;
    padding:5px 15px;
}
footer{
    text-align:center;
    margin:40px 0;
    color:#555;
}
</style>
</head>

<body>

<nav class="navbar navbar-expand-lg">
<div class="container">
    <img src="../assets/dist/img/logo.png" height="80">
    <a class="navbar-brand ml-2">Logbook Teknisi</a>
    <div class="ml-auto">
        <a href="../index_admin.php" class="nav-link d-inline">Home</a>
        <a href="report.php" class="nav-link d-inline">Report</a>
        <a href="../auth/logout.php" class="btn btn-light btn-sm ml-3">Logout</a>
    </div>
</div>
</nav>

<div class="container mt-5">
<div class="card p-4">
<h3 class="text-center text-primary font-weight-bold">
    Tabel Pelaporan Pengecekan Alat
</h3>
<p class="text-center text-muted">
    Ringkasan dari seluruh laporan teknisi
</p>

<div class="table-responsive mt-4">
<table class="table table-bordered">
<thead>
<tr>
<th>No</th>
<th>Tanggal</th>
<th>Nama Alat</th>
<th>Status</th>
<th>Detail</th>
</tr>
</thead>
<tbody>

<?php
$no = 1;
while ($row = mysqli_fetch_assoc($query)) {

    $alat = [
        "Panci Penguapan" => $row['panci_status'],
        "Sangkar Meteorologi" => $row['sangkar_status'],
        "AWS" => $row['aws_status'],
        "ARWS" => $row['arws_status'],
        "Pyranometer Digital" => $row['pyranometer_status'],
        "Barometer Digital" => $row['baro_status'],
        "Radar Cuaca" => $row['radar_status'],
        "AWOS" => $row['awos_status'],
        "Lightning Detector" => $row['lightning_detec_status'],
        "PM10" => $row['pm10_status'],
        "PM2.5" => $row['pm25_status'],
        "Internet" => $row['internet_status'],
        "VPN BMKG" => $row['vpn_status'],
        "BMKG Soft" => $row['soft_status'],
        "AFTN" => $row['aftn_status'],
        "Sample Debu" => $row['debu_status']
    ];

    foreach ($alat as $nama_alat => $status) {
        if ($status != "" && $status != "-") {
?>
<tr>
<td><?= $no++; ?></td>
<td><?= $row['dates']; ?></td>
<td><?= $nama_alat; ?></td>
<td><?= $status; ?></td>
<td>
<a class="btn-detail" href="detail.php?tanggal=<?= $row['dates']; ?>">Detail</a>
</td>
</tr>
<?php
        }
    }
}
?>

</tbody>
</table>
</div>
</div>
</div>

<footer>
© 2023 Logbook Teknisi – Stamet SSK II Pekanbaru
</footer>

</body>
</html>
