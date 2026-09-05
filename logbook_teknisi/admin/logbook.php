<?php
session_start();
if (!isset($_SESSION['admins'])) {
    echo "<script>alert('Harap Login Sebagai Admin');</script>";
    echo '<script>window.location="../auth/login.php"</script>';
}
require_once '../koneksi.php';
$query = mysqli_query($cons, "SELECT * FROM report ORDER BY dates ASC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Logbook Teknisi</title>

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="../assets/plugins/bootstrap4/css/bootstrap.min.css">

    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <!-- ADMIN CSS (WAJIB TERAKHIR) -->
    <link rel="stylesheet" href="../assets/css/admin.css">
</head>

<body>

<!-- ===== NAVBAR ADMIN ===== -->
<nav class="navbar navbar-admin">
    <div class="container d-flex align-items-center">
        <img src="../assets/dist/img/logo.png" width="80" class="me-2">
        <span class="navbar-brand">Logbook Teknisi</span>

        <div class="ms-auto">
            <a href="../index_admin.php">Home</a>
            <a href="report.php">Report</a>
            <a href="../auth/logout.php" class="btn btn-light btn-sm ms-3">Logout</a>
        </div>
    </div>
</nav>

<!-- ===== ADMIN PAGE (INI YANG PENTING) ===== -->
<div class="admin-page">

    <div class="container mt-5">
        <div class="card">

            <h3 class="page-title text-center">Tabel Pelaporan Pengecekan Alat</h3>
            <p class="page-subtitle text-center">Ringkasan dari laporan teknisi</p>

            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Normal</th>
                            <th>Off</th>
                            <th>Perbaikan</th>
                            <th>Catatan</th>
                            <th>Teknisi</th>
                            <th>Detail</th>
                            <th>Hapus</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php
                    $no = 1;
                    while ($row = mysqli_fetch_array($query)) {

                        $Normal = $Off = $Perbaikan = 0;
                        $fields = [
                            'hvs_status','baro_status','aws_status','radar_status','wrs_status',
                            'campble_status','arws_status','pyranometer_status','awos_status',
                            'lightning_detec_status','pm10_status','pm25_status','radios_status',
                            'd_bandara_status','d_gubernur_status','d_bpbd_status','panci_status',
                            'sangkar_status','penakar_status','synergie_status','aerometweb_status',
                            'internet_status','vpn_status','soft_status','aftn_status','debu_status'
                        ];

                        foreach ($fields as $f) {
                            if ($row[$f] == "Normal") $Normal++;
                            elseif ($row[$f] == "Off") $Off++;
                            elseif ($row[$f] == "Perbaikan") $Perbaikan++;
                        }
                    ?>

                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $row['dates'] ?></td>
                            <td><?= $Normal ?> Alat</td>
                            <td><?= $Off ?> Alat</td>
                            <td><?= $Perbaikan ?> Alat</td>
                            <td><?= $row['coment'] ?></td>
                            <td><?= $row['nama_teknisi'] ?></td>
                            <td>
                                <a href="detail.php?tanggal=<?= $row['dates'] ?>" class="btn btn-detail btn-sm">
                                    Detail
                                </a>
                            </td>
                            <td>
                                <a href="delete.php?tanggal=<?= $row['dates'] ?>"
                                   class="btn btn-hapus btn-sm"
                                   onclick="return confirm('Hapus logbook?')">
                                    Hapus
                                </a>
                            </td>
                        </tr>

                    <?php } ?>

                    </tbody>
