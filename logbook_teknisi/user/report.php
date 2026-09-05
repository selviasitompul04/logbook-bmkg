<?php
session_start();
if (!isset($_SESSION['users'])) {
    header("Location: ../auth/login.php");
    exit;
}
include '../koneksi.php';

$query = mysqli_query($cons, "SELECT * FROM report ORDER BY dates DESC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Report Logbook | User</title>

    <link rel="icon" href="../assets/dist/img/logo.png">
    <link rel="stylesheet" href="../assets/plugins/bootstrap4/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
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
        .badge-Normal { background:#2E7D32; }
        .badge-Off { background:#C62828; }
        .badge-Perbaikan { background:#EF6C00; }
    </style>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-user">
    <div class="container">
        <img src="../assets/dist/img/logo.png" height="40">
        <a class="navbar-brand ml-2" href="../index_user.php">Logbook Teknisi</a>
        <div class="ml-auto">
            <a href="form-logbook.php" class="btn btn-light btn-sm">Isi Logbook</a>
            <a href="../auth/logout.php" class="btn btn-danger btn-sm">Logout</a>
        </div>
    </div>
</nav>

<div class="container mt-4">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Rekap Laporan Teknisi</h5>
        </div>

        <div class="card-body table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="thead-dark text-center">
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Normal</th>
                        <th>Off</th>
                        <th>Perbaikan</th>
                        <th>Catatan Teknisi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>

<?php
$alat = [
    "panci_status","sangkar_status","arws_status","hvs_status","penakar_status",
    "pyranometer_status","baro_status","awos_status","aws_status","lightning_detec_status",
    "radar_status","pm10_status","pm25_status","synergie_status","aerometweb_status",
    "wrs_status","radios_status","d_bandara_status","d_bpbd_status","d_gubernur_status",
    "campble_status","internet_status","vpn_status","soft_status","aftn_status","debu_status"
];

$no = 1;
while ($row = mysqli_fetch_assoc($query)) {

    $normal = $off = $perbaikan = 0;

    foreach ($alat as $field) {
        if ($row[$field] == "Normal") $normal++;
        elseif ($row[$field] == "Off") $off++;
        elseif ($row[$field] == "Perbaikan") $perbaikan++;
    }
?>

<tr>
    <td class="text-center"><?= $no++ ?></td>
    <td class="text-center"><?= $row['dates'] ?></td>
    <td class="text-center"><?= $normal ?> Alat</td>
    <td class="text-center"><?= $off ?> Alat</td>
    <td class="text-center"><?= $perbaikan ?> Alat</td>
    <td><?= $row['coment'] ?: '-' ?></td>
    <td class="text-center">
        <a href="detail.php?tanggal=<?= $row['dates'] ?>" class="btn btn-info btn-sm">
            <i class="fas fa-eye"></i> Detail
        </a>
    </td>
</tr>

<?php } ?>

                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>
