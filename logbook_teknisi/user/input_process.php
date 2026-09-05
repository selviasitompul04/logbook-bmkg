<?php
session_start();
require_once '../koneksi.php';

if (!isset($_POST['input'])) {
    header("Location: form-logbook.php");
    exit;
}

$date = mysqli_real_escape_string($cons, $_POST['date']);
$nama_teknisi = mysqli_real_escape_string($cons, $_POST['nama_teknisi']);
$comment = mysqli_real_escape_string($cons, $_POST['comment']);

// ================== CEK TANGGAL ==================
$cek = mysqli_query($cons, "SELECT * FROM report WHERE dates='$date'");
$isExist = mysqli_num_rows($cek) > 0;

// ================== DAFTAR ALAT ==================
$alat = [
    'panci','sangkar','arws','hvs','penakar','pyranometer','baro',
    'awos','aws','lightning_detec','radar','pm10','pm25','synergie',
    'aerometweb','wrs','radios','d_bandara','d_bpbd','d_gubernur',
    'campble','internet','vpn','soft','aftn','debu'
];

// ================== SIAPKAN QUERY ==================
$fieldSQL = [];
$valueSQL = [];

foreach ($alat as $a) {
    $status = mysqli_real_escape_string($cons, $_POST[$a.'_status'] ?? '');
    $ket    = mysqli_real_escape_string($cons, $_POST[$a.'_keterangan'] ?? '');

    $fieldSQL[] = "{$a}_status='$status'";
    $fieldSQL[] = "{$a}_keterangan='$ket'";
}

// ================== INSERT / UPDATE ==================
if (!$isExist) {

    $sql = "
        INSERT INTO report SET
        dates='$date',
        nama_teknisi='$nama_teknisi',
        ".implode(',', $fieldSQL).",
        coment='$comment'
    ";

} else {

    $sql = "
        UPDATE report SET
        nama_teknisi='$nama_teknisi',
        ".implode(',', $fieldSQL).",
        coment='$comment'
        WHERE dates='$date'
    ";
}

// ================== EKSEKUSI ==================
mysqli_query($cons, $sql) or die(mysqli_error($cons));

// ================== REDIRECT ==================
header("Location: logbook.php");
exit;
?>
