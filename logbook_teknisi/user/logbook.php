<?php
session_start();
if (!isset($_SESSION['users'])) {
    echo "<script>alert('Harap Login Sebagai User');</script>";
    echo "<script>window.location='../auth/login.php'</script>";
    exit;
}
require_once '../koneksi.php';
$query = mysqli_query($cons, "SELECT * FROM report ORDER BY dates ASC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Logbook Teknisi | User</title>

    <link rel="icon" href="../assets/dist/img/logo.png">
    <link rel="stylesheet" href="../assets/plugins/bootstrap4/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #F4F6F8;
        }

        /* NAVBAR */
        .navbar-user {
            background: linear-gradient(90deg,#0D47A1,#1976D2);
        }
        .navbar-brand {
            font-weight: 700;
            color: #FFD54F !important;
        }

        /* CARD */
        .card {
            border-radius: 12px;
            box-shadow: 0 6px 18px rgba(0,0,0,.08);
        }

        /* TABLE */
        .table thead {
            background: #1976D2;
            color: #fff;
        }

        .badge-normal { background:#2E7D32; }
        .badge-off { background:#C62828; }
        .badge-perbaikan { background:#EF6C00; }

        footer {
            margin-top: 40px;
            padding: 20px 0;
            background: #0D47A1;
            color: #fff;
            text-align: center;
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
            <a href="form-logbook.php" class="btn btn-light btn-sm mr-2">
                <i class="fas fa-edit"></i> Isi Logbook
            </a>
            <a href="../auth/logout.php" class="btn btn-danger btn-sm">
                <i class="fas fa-sign-out-alt"></i> Logout
            </a>
        </div>
    </div>
</nav>

<!-- CONTENT -->
<div class="container mt-4">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">
                <i class="fas fa-table"></i> Rekap Laporan Pengecekan Alat
            </h5>
        </div>

        <div class="card-body table-responsive">
            <table class="table table-bordered table-hover text-center">
                <thead>
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
$no = 1;
while ($row = mysqli_fetch_assoc($query)) {

    $Normal = 0;
    $Off = 0;
    $Perbaikan = 0;

    $statusFields = [
        'panci_status','sangkar_status','arws_status','hvs_status','penakar_status',
        'pyranometer_status','baro_status','awos_status','aws_status',
        'lightning_detec_status','radar_status','pm10_status','pm25_status',
        'synergie_status','aerometweb_status','wrs_status','radios_status',
        'd_bandara_status','d_bpbd_status','d_gubernur_status','campble_status',
        'internet_status','vpn_status','soft_status','aftn_status','debu_status'
    ];

    foreach ($statusFields as $s) {
        if ($row[$s] == "Normal") $Normal++;
        elseif ($row[$s] == "Off") $Off++;
        elseif ($row[$s] == "Perbaikan") $Perbaikan++;
    }
?>

<tr>
    <td><?= $no++ ?></td>
    <td><?= $row['dates'] ?></td>
    <td><span class="badge badge-normal"><?= $Normal ?> Alat</span></td>
    <td><span class="badge badge-off"><?= $Off ?> Alat</span></td>
    <td><span class="badge badge-perbaikan"><?= $Perbaikan ?> Alat</span></td>
    <td><?= $row['coment'] ?: '-' ?></td>
    <td>
        <a href="detail.php?tanggal=<?= $row['dates'] ?>" class="btn btn-sm btn-primary">
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

<footer>
    © 2023 Logbook Teknisi – Stamet SSK II Pekanbaru
</footer>

<script src="../assets/plugins/jquery/jquery.min.js"></script>
<script src="../assets/plugins/bootstrap4/js/bootstrap.bundle.min.js"></script>

</body>
</html>
