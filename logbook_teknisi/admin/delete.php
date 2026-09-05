<?php
session_start();
require_once '../koneksi.php';
if(isset($_SESSION['admins']) != true){
		echo "<script>alert('Harap Login Sebagai Admin');</script>";
		echo '<script> window.location="../auth/login.php"</script>';
	}

$date = $_GET['tanggal'];
$query = mysqli_query($cons, "delete FROM report where dates = '".$date."'");
 if (isset($query)) {
	header('Location: logbook.php');
 }else{
	header('Location: ../index_admin.php');
 }
?>