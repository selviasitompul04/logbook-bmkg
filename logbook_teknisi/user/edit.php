<?php
include '../koneksi.php';
session_start();
if(isset($_SESSION['users']) != true){
		echo "<script>alert('Harap Login Sebagai user');</script>";
		echo '<script> window.location="../auth/login.php"</script>';
	}
$tanggal = $_GET['tanggal'];
$_SESSION['date'] = $tanggal;
$query = mysqli_query($cons, "select * from report where dates = '".$tanggal."'");
$row = mysqli_fetch_array($query);
?>

<script language="javascript"> function cek(form)
{	

	/* 1 */
	
	if(form.panci_status.value !="Perbaikan" && form.panci_keterangan.value !=""){
		alert ("Harap hanya isi 'File' pada Panci Penguapan apabila status alat adalah 'Perbaikan/Perawatan'"); return false;	
	}
	
	/* 2 */
	if(form.sangkar_status.value =="Perbaikan" && form.sangkar_keterangan.value =="" || form.sangkar_status.value !="Perbaikan" && form.sangkar_keterangan.value !=""){
		alert ("Harap hanya isi 'File' pada Peralatan Sangkar Meteo apabila status alat adalah 'Perbaikan/Perawatan'"); return false;	
	}
	
	/* 3 */
	if(form.arws_status.value =="Perbaikan" && form.arws_file.value =="" || form.arws_status.value !="Perbaikan" && form.arws_file.value !=""){
		alert ("Harap hanya isi 'File' pada Peralatan ARWS apabila status alat adalah 'Perbaikan/Perawatan'"); return false;	
	}
	
	/* 4 */
	if(form.hvs_status.value =="Perbaikan" && form.hvs_file.value =="" || form.hvs_status.value !="Perbaikan" && form.hvs_file.value !=""){
		alert ("Harap hanya isi 'File' pada Peralatan High Volume Sampler apabila status alat adalah 'Perbaikan/Perawatan'"); return false;	
	}
	
	/* 5 */
	if(form.penakar_status.value =="Perbaikan" && form.penakar_file.value =="" || form.penakar_status.value !="Perbaikan" && form.penakar_file.value !=""){
		alert ("Harap hanya isi 'File' pada Peralatan Penakar Hujan OBS apabila status alat adalah 'Perbaikan/Perawatan'"); return false;	
	}
	
	/* 6 */
	if(form.pyranometer_status.value =="Perbaikan" && form.pyranometer_file.value =="" || form.pyranometer_status.value !="Perbaikan" && form.pyranometer_file.value !=""){
		alert ("Harap hanya isi 'File' pada Pyranometer Digital apabila status alat adalah 'Perbaikan/Perawatan'"); return false;	
	}
	
	/* 7 */
	if(form.baro_status.value =="Perbaikan" && form.baro_file.value =="" || form.baro_status.value !="Perbaikan" && form.baro_file.value !=""){
		alert ("Harap hanya isi 'File' pada Barometer Digital apabila status alat adalah 'Perbaikan/Perawatan'"); return false;	
	}
	
	/* 8 */
	if(form.awos_status.value =="Perbaikan" && form.awos_file.value =="" || form.awos_status.value !="Perbaikan" && form.awos_file.value !=""){
		alert ("Harap hanya isi 'File' pada AWOS apabila status alat adalah 'Perbaikan/Perawatan'"); return false;	
	}
	
	/* 9 */
	if(form.aws_status.value =="Perbaikan" && form.aws_file.value =="" || form.aws_status.value !="Perbaikan" && form.aws_file.value !=""){
		alert ("Harap hanya isi 'File' pada AWS Digitalisasi apabila status alat adalah 'Perbaikan/Perawatan'"); return false;	
	}
	
	/* 10 */
	if(form.lightning_detec_status.value =="Perbaikan" && form.lightning_detec_file.value =="" || form.lightning_detec_status.value !="Perbaikan" && form.lightning_detec_file.value !=""){
		alert ("Harap hanya isi 'File' pada Lightning Detector apabila status alat adalah 'Perbaikan/Perawatan'"); return false;	
	}
	
	/* 11 */
	if(form.radar_status.value =="Perbaikan" && form.radar_file.value =="" || form.radar_status.value !="Perbaikan" && form.radar_file.value !=""){
		alert ("Harap hanya isi 'File' pada Radar Cuaca apabila status alat adalah 'Perbaikan/Perawatan'"); return false;	
	}
	
	/* 12 */
	if(form.pm10_status.value =="Perbaikan" && form.pm10_file.value =="" || form.pm10_status.value !="Perbaikan" && form.pm10_file.value !=""){
		alert ("Harap hanya isi 'File' pada PM 10 apabila status alat adalah 'Perbaikan/Perawatan'"); return false;	
	}
	
	/* 13 */
	if(form.pm25_status.value =="Perbaikan" && form.pm25_file.value =="" || form.pm25_status.value !="Perbaikan" && form.pm25_file.value !=""){
		alert ("Harap hanya isi 'File' pada PM 2,5 apabila status alat adalah 'Perbaikan/Perawatan'"); return false;	
	}
	
	/* 14 */
	if(form.synergie_status.value =="Perbaikan" && form.synergie_file.value =="" || form.synergie_status.value !="Perbaikan" && form.synergie_file.value !=""){
		alert ("Harap hanya isi 'File' pada Synergie apabila status alat adalah 'Perbaikan/Perawatan'"); return false;	
	}
	
	/* 15 */
	if(form.aerometweb_status.value =="Perbaikan" && form.aerometweb_file.value =="" || form.aerometweb_status.value !="Perbaikan" && form.aerometweb_file.value !=""){
		alert ("Harap hanya isi 'File' pada Aerometweb apabila status alat adalah 'Perbaikan/Perawatan'"); return false;	
	}
	
	/* 16 */
	if(form.wrs_status.value =="Perbaikan" && form.wrs_file.value =="" || form.wrs_status.value !="Perbaikan" && form.wrs_file.value !=""){
		alert ("Harap hanya isi 'File' pada WRS Stamet apabila status alat adalah 'Perbaikan/Perawatan'"); return false;	
	}
	
	/* 17 */
	if(form.radios_status.value =="Perbaikan" && form.radios_file.value =="" || form.radios_status.value !="Perbaikan" && form.radios_file.value !=""){
		alert ("Harap hanya isi 'File' pada Radio Sonde apabila status alat adalah 'Perbaikan/Perawatan'"); return false;	
	}
	
	/* 18 */
	if(form.d_bandara_status.value =="Perbaikan" && form.d_bandara_file.value =="" || form.d_bandara_status.value !="Perbaikan" && form.d_bandara_file.value !=""){
		alert ("Harap hanya isi 'File' pada Display Bandara apabila status alat adalah 'Perbaikan/Perawatan'"); return false;	
	}
	
	/* 19 */
	if(form.d_bpbd_status.value =="Perbaikan" && form.d_bpbd_file.value =="" || form.d_bpbd_status.value !="Perbaikan" && form.d_bpbd_file.value !=""){
		alert ("Harap hanya isi 'File' pada Display BPBD apabila status alat adalah 'Perbaikan/Perawatan'"); return false;	
	}
	
	/* 20 */
	if(form.d_gubernur_status.value =="Perbaikan" && form.d_gubernur_file.value =="" || form.d_gubernur_status.value !="Perbaikan" && form.d_gubernur_file.value !=""){
		alert ("Harap hanya isi 'File' pada Display Gubernur apabila status alat adalah 'Perbaikan/Perawatan'"); return false;	
	}
	
	/* 21 */
	if(form.campble_status.value =="Perbaikan" && form.campble_file.value =="" || form.campble_status.value !="Perbaikan" && form.campble_file.value !=""){
		alert ("Harap hanya isi 'File' pada Campble Stokes apabila status alat adalah 'Perbaikan/Perawatan'"); return false;	
	}
	
	/* 22 */
	if(form.internet_status.value =="Perbaikan" && form.internet_file.value =="" || form.internet_status.value !="Perbaikan" && form.internet_file.value !=""){
		alert ("Harap hanya isi 'File' pada Internet apabila status alat adalah 'Perbaikan/Perawatan'"); return false;	
	}
	
	/* 23 */
	if(form.vpn_status.value =="Perbaikan" && form.vpn_file.value =="" || form.vpn_status.value !="Perbaikan" && form.vpn_file.value !=""){
		alert ("Harap hanya isi 'File' pada VPN BMKG apabila status alat adalah 'Perbaikan/Perawatan'"); return false;	
	}
	
	/* 24 */
	if(form.soft_status.value =="Perbaikan" && form.soft_file.value =="" || form.soft_status.value !="Perbaikan" && form.soft_file.value !=""){
		alert ("Harap hanya isi 'File' pada BMKG Soft apabila status alat adalah 'Perbaikan/Perawatan'"); return false;	
	}
	
	/* 25 */
	if(form.aftn_status.value =="Perbaikan" && form.aftn_file.value =="" || form.aftn_status.value !="Perbaikan" && form.aftn_file.value !=""){
		alert ("Harap hanya isi 'File' pada AFTN apabila status alat adalah 'Perbaikan/Perawatan'"); return false;	
	}
	
	/* 26 */
	if(form.debu_status.value =="Perbaikan" && form.debu_file.value =="" || form.debu_status.value !="Perbaikan" && form.debu_file.value !=""){
		alert ("Harap hanya isi 'File' pada Sample Debu apabila status alat adalah 'Perbaikan/Perawatan'"); return false;	
	}
	
	var option = confirm ("Input/Update Logbook ??");
	if(option == true){
		form.submit(); return true;
	}else{
		return false;
	}
	
	
}
</script>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Logbook Teknisi</title>
		<!-- icon bmkg -->
		<link rel="icon" href="../assets/dist/img/logo.png">
		<!-- WEB FONTS -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:100,300,100italic,400,300italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
		<!-- BOOTSTRAP -->
		<link rel="stylesheet" href="../assets/plugins/bootstrap4/css/bootstrap.min.css">
		<link href="../assets/plugins/apelfa/css/bootstrap.min.css" rel="stylesheet">
		<!-- FONT AWESOME -->
		<link rel="stylesheet" href="../assets/plugins/apelfa/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet"> 
		<link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
		<!-- CUSTOM STYLING -->
		<link href="../assets/plugins/apelfa/css/styles.css" rel="stylesheet">
		<link href="../assets/plugins/apelfa/css/style.css" rel="stylesheet">
			
	</head>
	
	<body>
	
	<section id="contact">
			<table>
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
				  <img class="logo" src="../assets/dist/img/logo.png">
				  <a class="navbar-brand" href="../index_user.php">Logbook Teknisi</a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				  </button>
				  <div class="navbar-brand col-md-4">
				  </div>
				  <div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav ml-auto">
					  <li class="nav-item active">
						<a class="nav-link text-left" href="../index_user.php">Home </a>
					  <li class="nav-item active">
						<a class="nav-link text-left" href="logbook.php">Logbook </a>
					  <li class="nav-item active">
						<a class="nav-link text-left" href="logbook.php">Report </a>
					  <li class="nav-item text-left">
						<a class="btn btn-primary login-button" href="../auth/logout.php">Logout</a>
					  </li>
					</ul>
				  </div>
				</div>
			  </nav>
			</table>
			<div class="container">
				<div class="row text-center">
					<div class="col-md-8 col-md-offset-2">
						<!-- CONTACT FORM -->
						<form method="POST" action="edit_process.php" name="update" enctype="multipart/form-data"> 
							<h2 data-sr="enter top over 1s, wait 0.3s, move 24px" class="contact-info text-center"><b>Form Update Logbook Teknisi</b></h2><br>
							
						<div data-sr="enter left over 1s, wait 0.3s, move 24px" class="form-group col-md-12">
							
							<table rules="row" border="1" class="form-group col-md-12">
							
							<!-- 1-->
							<tr>
							<td>
							<div data-sr="enter left over 1s, wait 0.3s, move 24px" class="form-group col-md-5">
								<br><br><br><p data-sr="enter top over 1s, wait 0.3s, move 24px" class="contact-info text-left"><b>Panci Penguapan</b></p><br>
							</div>
							<div data-sr="enter right over 1s, wait 0.3s, move 24px" class="form-group col-md-6">
								<br>
								<div class="form-group col-md-5 col-md-offset-4">
									<select name="panci_status">
										<option value=" " selected="selected">Status Alat</option>
										<option value="Normal" <?= $row['panci_status'] == 'Normal' ? 'selected' : '' ?>>Normal</option>
										<option value="Off" <?= $row['panci_status'] == 'Off' ? 'selected' : '' ?>>Off</option>
										<option value="Perbaikan" <?= $row['panci_status'] == 'Perbaikan' ? 'selected' : '' ?>>Perbaikan/Perawatan</option>
									</select>
									<div class="select-dropdown "></div>
								</div>
							<div data-sr="enter left over 1s, wait 0.3s, move 24px, reset" class="form-group col-md-8 col-md-offset-4"> 
								<input type="keterangan" class="form-control" name="panci_keterangan"/>
							</div>	
							</div>
							</td>
							</tr>
							
							<!-- 2 -->
							<tr>
							<td>
							<div data-sr="enter left over 1s, wait 0.3s, move 24px" class="form-group col-md-5">
								<br><br><br><p data-sr="enter top over 1s, wait 0.3s, move 24px" class="contact-info text-left"><b>Peralatan Sangkar Meteo</b></p><br>
							</div>
							<div data-sr="enter right over 1s, wait 0.3s, move 24px" class="form-group col-md-6">
								<br>
								<div class="form-group col-md-5 col-md-offset-4">
									<select name="sangkar_status">
										<option value=" " selected="selected">Status Alat</option>
										<option value="Normal" <?= $row['sangkar_status'] == 'Normal' ? 'selected' : '' ?>>Normal</option>
										<option value="Off" <?= $row['sangkar_status'] == 'Off' ? 'selected' : '' ?>>Off</option>
										<option value="Perbaikan" <?= $row['sangkar_status'] == 'Perbaikan' ? 'selected' : '' ?>>Perbaikan/Perawatan</option>
									</select>
									<div class="select-dropdown "></div>
								</div>
							<div data-sr="enter left over 1s, wait 0.3s, move 24px, reset" class="form-group col-md-8 col-md-offset-4"> 
								<input type="keterangan" class="form-control" name="sangkar_keterangan" />
							</div>	
							</div>
							</td>
							</tr>
							
							<!-- 3 -->
							<tr>
							<td>
							<div data-sr="enter left over 1s, wait 0.3s, move 24px" class="form-group col-md-5">
								<br><br><br><p data-sr="enter top over 1s, wait 0.3s, move 24px" class="contact-info text-left"><b>ARWS</b></p><br>
							</div>
							<div data-sr="enter right over 1s, wait 0.3s, move 24px" class="form-group col-md-6">
								<br>
								<div class="form-group col-md-5 col-md-offset-4">
									<select name="arws_status">
										<option value=" " selected="selected">Status Alat</option>
										<option value="Normal" <?= $row['arws_status'] == 'Normal' ? 'selected' : '' ?>>Normal</option>
										<option value="Off" <?= $row['arws_status'] == 'Off' ? 'selected' : '' ?>>Off</option>
										<option value="Perbaikan" <?= $row['arws_status'] == 'Perbaikan' ? 'selected' : '' ?>>Perbaikan/Perawatan</option>
									</select>
									<div class="select-dropdown "></div>
								</div>
							<div data-sr="enter left over 1s, wait 0.3s, move 24px, reset" class="form-group col-md-8 col-md-offset-4"> 
								<input type="keterangan" class="form-control" name="arws_keterangan"/>
							</div>	
							</div>
							</td>
							</tr>
							
							<!-- 4 -->
							<tr>
							<td>
							<div data-sr="enter left over 1s, wait 0.3s, move 24px" class="form-group col-md-5">
								<br><br><br><p data-sr="enter top over 1s, wait 0.3s, move 24px" class="contact-info text-left"><b>High Volume Sampler</b></p>
							</div>
							<div data-sr="enter right over 1s, wait 0.3s, move 24px" class="form-group col-md-6">
								<br>
								<div class="form-group col-md-5 col-md-offset-4">
									<select name="hvs_status">
										<option value=" " selected="selected">Status Alat</option>
										<option value="Normal" <?= $row['hvs_status'] == 'Normal' ? 'selected' : '' ?>>Normal</option>
										<option value="Off" <?= $row['hvs_status'] == 'Off' ? 'selected' : '' ?>>Off</option>
										<option value="Perbaikan" <?= $row['hvs_status'] == 'Perbaikan' ? 'selected' : '' ?>>Perbaikan/Perawatan</option>
									</select>
									<div class="select-dropdown "></div>
								</div>
							<div data-sr="enter left over 1s, wait 0.3s, move 24px, reset" class="form-group col-md-8 col-md-offset-4"> 
								<input type="keterangan" class="form-control" name="hvs_keterangan"/>
							</div>	
							</div>
							</td>
							</tr>
							
							<!-- 5 -->
							<tr>
							<td>
							<div data-sr="enter left over 1s, wait 0.3s, move 24px" class="form-group col-md-5">
								<br><br><br><p data-sr="enter top over 1s, wait 0.3s, move 24px" class="contact-info text-left"><b>Penakar Hujan OBS</b></p><br>
							</div>
							<div data-sr="enter right over 1s, wait 0.3s, move 24px" class="form-group col-md-6">
								<br>
								<div class="form-group col-md-5 col-md-offset-4">
									<select name="penakar_status">
										<option value=" " selected="selected">Status Alat</option>
										<option value="Normal" <?= $row['penakar_status'] == 'Normal' ? 'selected' : '' ?>>Normal</option>
										<option value="Off" <?= $row['penakar_status'] == 'Off' ? 'selected' : '' ?>>Off</option>
										<option value="Perbaikan" <?= $row['penakar_status'] == 'Perbaikan' ? 'selected' : '' ?>>Perbaikan/Perawatan</option>
									</select>
									<div class="select-dropdown "></div>
								</div>
							<div data-sr="enter left over 1s, wait 0.3s, move 24px, reset" class="form-group col-md-8 col-md-offset-4"> 
								<input type="keterangan" class="form-control" name="penakar_keterangan" />
							</div>	
							</div>
							</td>
							</tr>

							<!-- 6 -->
							<tr>
							<td>
							<div data-sr="enter left over 1s, wait 0.3s, move 24px" class="form-group col-md-5">
								<br><br><br><p data-sr="enter top over 1s, wait 0.3s, move 24px" class="contact-info text-left"><b>Pyranometer Digital</b></p><br>
							</div>
							<div data-sr="enter right over 1s, wait 0.3s, move 24px" class="form-group col-md-6">
								<br>
								<div class="form-group col-md-5 col-md-offset-4">
									<select name="pyranometer_status">
										<option value=" " selected="selected">Status Alat</option>
										<option value="Normal" <?= $row['pyranometer_status'] == 'Normal' ? 'selected' : '' ?>>Normal</option>
										<option value="Off" <?= $row['pyranometer_status'] == 'Off' ? 'selected' : '' ?>>Off</option>
										<option value="Perbaikan" <?= $row['pyranometer_status'] == 'Perbaikan' ? 'selected' : '' ?>>Perbaikan/Perawatan</option>
									</select>
									<div class="select-dropdown "></div>
								</div>
							<div data-sr="enter left over 1s, wait 0.3s, move 24px, reset" class="form-group col-md-8 col-md-offset-4"> 
								<input type="keterangan" class="form-control" name="pyranometer_keterangan"/>
							</div>	
							</div>
							</td>
							</tr>
							
							<!-- 7 -->
							<tr>
							<td>
							<div data-sr="enter left over 1s, wait 0.3s, move 24px" class="form-group col-md-5">
								<br><br><br><p data-sr="enter top over 1s, wait 0.3s, move 24px" class="contact-info text-left"><b>Barometer Digital</b></p><br>
							</div>
							<div data-sr="enter right over 1s, wait 0.3s, move 24px" class="form-group col-md-6">
								<br>
								<div class="form-group col-md-5 col-md-offset-4">
									<select name="baro_status">
										<option value=" " selected="selected">Status Alat</option>
										<option value="Normal" <?= $row['baro_status'] == 'Normal' ? 'selected' : '' ?>>Normal</option>
										<option value="Off" <?= $row['baro_status'] == 'Off' ? 'selected' : '' ?>>Off</option>
										<option value="Perbaikan" <?= $row['baro_status'] == 'Perbaikan' ? 'selected' : '' ?>>Perbaikan/Perawatan</option>
									</select>
									<div class="select-dropdown "></div>
								</div>
							<div data-sr="enter left over 1s, wait 0.3s, move 24px, reset" class="form-group col-md-8 col-md-offset-4"> 
								<input type="keterangan" class="form-control" name="baro_keterangan" />
							</div>	
							</div>
							</td>
							</tr>
							
							<!-- 8 -->
							<tr>
							<td>
							<div data-sr="enter left over 1s, wait 0.3s, move 24px" class="form-group col-md-5">
								<br><br><br><p data-sr="enter top over 1s, wait 0.3s, move 24px" class="contact-info text-left"><b>AWOS</b></p><br>
							</div>
							<div data-sr="enter right over 1s, wait 0.3s, move 24px" class="form-group col-md-6">
								<br>
								<div class="form-group col-md-5 col-md-offset-4">
									<select name="awos_status">
										<option value=" " selected="selected">Status Alat</option>
										<option value="Normal" <?= $row['awos_status'] == 'Normal' ? 'selected' : '' ?>>Normal</option>
										<option value="Off" <?= $row['awos_status'] == 'Off' ? 'selected' : '' ?>>Off</option>
										<option value="Perbaikan" <?= $row['awos_status'] == 'Perbaikan' ? 'selected' : '' ?>>Perbaikan/Perawatan</option>
									</select>
									<div class="select-dropdown "></div>
								</div>
							<div data-sr="enter left over 1s, wait 0.3s, move 24px, reset" class="form-group col-md-8 col-md-offset-4"> 
								<input type="keterangan" class="form-control" name="awos_keterangan" />
							</div>	
							</div>
							</td>
							</tr>
							
							<!-- 9 -->
							<tr>
							<td>
							<div data-sr="enter left over 1s, wait 0.3s, move 24px" class="form-group col-md-5">
								<br><br><br><p data-sr="enter top over 1s, wait 0.3s, move 24px" class="contact-info text-left"><b>AWS Digitalisasi</b></p><br>
							</div>
							<div data-sr="enter right over 1s, wait 0.3s, move 24px" class="form-group col-md-6">
								<br>
								<div class="form-group col-md-5 col-md-offset-4">
									<select name="aws_status">
										<option value=" " selected="selected">Status Alat</option>
										<option value="Normal" <?= $row['aws_status'] == 'Normal' ? 'selected' : '' ?>>Normal</option>
										<option value="Off" <?= $row['aws_status'] == 'Off' ? 'selected' : '' ?>>Off</option>
										<option value="Perbaikan" <?= $row['aws_status'] == 'Perbaikan' ? 'selected' : '' ?>>Perbaikan/Perawatan</option>
									</select>
									<div class="select-dropdown "></div>
								</div>
							<div data-sr="enter left over 1s, wait 0.3s, move 24px, reset" class="form-group col-md-8 col-md-offset-4"> 
								<input type="keterangan" class="form-control" name="aws_keterangan" />
							</div>	
							</div>
							</td>
							</tr>
							
							<!-- 10 -->
							<tr>
							<td>
							<div data-sr="enter left over 1s, wait 0.3s, move 24px" class="form-group col-md-5">
								<br><br><br><p data-sr="enter top over 1s, wait 0.3s, move 24px" class="contact-info text-left"><b>Lightning Detector</b></p><br>
							</div>
							<div data-sr="enter right over 1s, wait 0.3s, move 24px" class="form-group col-md-6">
								<br>
								<div class="form-group col-md-5 col-md-offset-4">
									<select name="lightning_detec_status">
										<option value=" " selected="selected">Status Alat</option>
										<option value="Normal" <?= $row['lightning_detec_status'] == 'Normal' ? 'selected' : '' ?>>Normal</option>
										<option value="Off" <?= $row['lightning_detec_status'] == 'Off' ? 'selected' : '' ?>>Off</option>
										<option value="Perbaikan" <?= $row['lightning_detec_status'] == 'Perbaikan' ? 'selected' : '' ?>>Perbaikan/Perawatan</option>
									</select>
									<div class="select-dropdown "></div>
								</div>
							<div data-sr="enter left over 1s, wait 0.3s, move 24px, reset" class="form-group col-md-8 col-md-offset-4"> 
								<input type="keterangan" class="form-control" name="lightning_detec_keterangan" />
							</div>	
							</div>
							</td>
							</tr>
							
							<!-- 11 -->
							<tr>
							<td>
							<div data-sr="enter left over 1s, wait 0.3s, move 24px" class="form-group col-md-5">
								<br><br><br><p data-sr="enter top over 1s, wait 0.3s, move 24px" class="contact-info text-left"><b>Radar Cuaca</b></p><br>
							</div>
							<div data-sr="enter right over 1s, wait 0.3s, move 24px" class="form-group col-md-6">
								<br>
								<div class="form-group col-md-5 col-md-offset-4">
									<select name="radar_status">
										<option value=" " selected="selected">Status Alat</option>
										<option value="Normal" <?= $row['radar_status'] == 'Normal' ? 'selected' : '' ?>>Normal</option>
										<option value="Off" <?= $row['radar_status'] == 'Off' ? 'selected' : '' ?>>Off</option>
										<option value="Perbaikan" <?= $row['radar_status'] == 'Perbaikan' ? 'selected' : '' ?>>Perbaikan/Perawatan</option>
									</select>
									<div class="select-dropdown "></div>
								</div>
							<div data-sr="enter left over 1s, wait 0.3s, move 24px, reset" class="form-group col-md-8 col-md-offset-4"> 
								<input type="keterangan" class="form-control" name="radar_keterangan" />
							</div>	
							</div>
							</td>
							</tr>
							
							<!-- 12 -->
							<tr>
							<td>
							<div data-sr="enter left over 1s, wait 0.3s, move 24px" class="form-group col-md-5">
								<br><br><br><p data-sr="enter top over 1s, wait 0.3s, move 24px" class="contact-info text-left"><b>PM 10</b></p><br>
							</div>
							<div data-sr="enter right over 1s, wait 0.3s, move 24px" class="form-group col-md-6">
								<br>
								<div class="form-group col-md-5 col-md-offset-4">
									<select name="pm10_status">
										<option value=" " selected="selected">Status Alat</option>
										<option value="Normal" <?= $row['pm10_status'] == 'Normal' ? 'selected' : '' ?>>Normal</option>
										<option value="Off" <?= $row['pm10_status'] == 'Off' ? 'selected' : '' ?>>Off</option>
										<option value="Perbaikan" <?= $row['pm10_status'] == 'Perbaikan' ? 'selected' : '' ?>>Perbaikan/Perawatan</option>
									</select>
									<div class="select-dropdown "></div>
								</div>
							<div data-sr="enter left over 1s, wait 0.3s, move 24px, reset" class="form-group col-md-8 col-md-offset-4"> 
								<input type="keterangan" class="form-control" name="pm10_keterangan" />
							</div>	
							</div>
							</td>
							</tr>
							
							<!-- 13 -->
							<tr>
							<td>
							<div data-sr="enter left over 1s, wait 0.3s, move 24px" class="form-group col-md-5">
								<br><br><br><p data-sr="enter top over 1s, wait 0.3s, move 24px" class="contact-info text-left"><b>PM 2,5</b></p><br>
							</div>
							<div data-sr="enter right over 1s, wait 0.3s, move 24px" class="form-group col-md-6">
								<br>
								<div class="form-group col-md-5 col-md-offset-4">
									<select name="pm25_status">
										<option value=" " selected="selected">Status Alat</option>
										<option value="Normal" <?= $row['pm25_status'] == 'Normal' ? 'selected' : '' ?>>Normal</option>
										<option value="Off" <?= $row['pm25_status'] == 'Off' ? 'selected' : '' ?>>Off</option>
										<option value="Perbaikan" <?= $row['pm25_status'] == 'Perbaikan' ? 'selected' : '' ?>>Perbaikan/Perawatan</option>
									</select>
									<div class="select-dropdown "></div>
								</div>
							<div data-sr="enter left over 1s, wait 0.3s, move 24px, reset" class="form-group col-md-8 col-md-offset-4"> 
								<input type="keterangan" class="form-control" name="pm25_file" />
							</div>	
							</div>
							</td>
							</tr>
							
							<!-- 14 -->
							<tr>
							<td>
							<div data-sr="enter left over 1s, wait 0.3s, move 24px" class="form-group col-md-5">
								<br><br><br><p data-sr="enter top over 1s, wait 0.3s, move 24px" class="contact-info text-left"><b>Synergie</b></p><br>
							</div>
							<div data-sr="enter right over 1s, wait 0.3s, move 24px" class="form-group col-md-6">
								<br>
								<div class="form-group col-md-5 col-md-offset-4">
									<select name="synergie_status">
										<option value=" " selected="selected">Status Alat</option>
										<option value="Normal" <?= $row['synergie_status'] == 'Normal' ? 'selected' : '' ?>>Normal</option>
										<option value="Off" <?= $row['synergie_status'] == 'Off' ? 'selected' : '' ?>>Off</option>
										<option value="Perbaikan" <?= $row['synergie_status'] == 'Perbaikan' ? 'selected' : '' ?>>Perbaikan/Perawatan</option>
									</select>
									<div class="select-dropdown "></div>
								</div>
							<div data-sr="enter left over 1s, wait 0.3s, move 24px, reset" class="form-group col-md-8 col-md-offset-4"> 
								<input type="keterangan" class="form-control" name="synergie_keterangan" />
							</div>	
							</div>
							</td>
							</tr>
							
							<!-- 15 --> 
							<tr>
							<td>
							<div data-sr="enter left over 1s, wait 0.3s, move 24px" class="form-group col-md-5">
								<br><br><br><p data-sr="enter top over 1s, wait 0.3s, move 24px" class="contact-info text-left"><b>Aerometweb</b></p><br>
							</div>
							<div data-sr="enter right over 1s, wait 0.3s, move 24px" class="form-group col-md-6">
								<br>
								<div class="form-group col-md-5 col-md-offset-4">
									<select name="aerometweb_status">
										<option value=" " selected="selected">Status Alat</option>
										<option value="Normal" <?= $row['aerometweb_status'] == 'Normal' ? 'selected' : '' ?>>Normal</option>
										<option value="Off" <?= $row['aerometweb_status'] == 'Off' ? 'selected' : '' ?>>Off</option>
										<option value="Perbaikan" <?= $row['aerometweb_status'] == 'Perbaikan' ? 'selected' : '' ?>>Perbaikan/Perawatan</option>
									</select>
									<div class="select-dropdown "></div>
								</div>
							<div data-sr="enter left over 1s, wait 0.3s, move 24px, reset" class="form-group col-md-8 col-md-offset-4"> 
								<input type="keterangan" class="form-control" name="aerometweb_keterangan" />
							</div>	
							</div>
							</td>
							</tr>
							
							<!-- 16 -->
							<tr>
							<td>
							<div data-sr="enter left over 1s, wait 0.3s, move 24px" class="form-group col-md-5">
								<br><br><br><p data-sr="enter top over 1s, wait 0.3s, move 24px" class="contact-info text-left"><b>WRS Stamet</b></p><br>
							</div>
							<div data-sr="enter right over 1s, wait 0.3s, move 24px" class="form-group col-md-6">
								<br>
								<div class="form-group col-md-5 col-md-offset-4">
									<select name="wrs_status">
										<option value=" " selected="selected">Status Alat</option>
										<option value="Normal" <?= $row['wrs_status'] == 'Normal' ? 'selected' : '' ?>>Normal</option>
										<option value="Off" <?= $row['wrs_status'] == 'Off' ? 'selected' : '' ?>>Off</option>
										<option value="Perbaikan" <?= $row['wrs_status'] == 'Perbaikan' ? 'selected' : '' ?>>Perbaikan/Perawatan</option>
									</select>
									<div class="select-dropdown "></div>
								</div>
							<div data-sr="enter left over 1s, wait 0.3s, move 24px, reset" class="form-group col-md-8 col-md-offset-4"> 
								<input type="keterangan" class="form-control" name="wrs_keterangan" />
							</div>	
							</div>
							</td>
							</tr>
							
							<!-- 17 -->
							<tr>
							<td>
							<div data-sr="enter left over 1s, wait 0.3s, move 24px" class="form-group col-md-5">
								<br><br><br><p data-sr="enter top over 1s, wait 0.3s, move 24px" class="contact-info text-left"><b>Radio Sonde</b></p><br>
							</div>
							<div data-sr="enter right over 1s, wait 0.3s, move 24px" class="form-group col-md-6">
								<br>
								<div class="form-group col-md-5 col-md-offset-4">
									<select name="radios_status">
										<option value=" " selected="selected">Status Alat</option>
										<option value="Normal" <?= $row['radios_status'] == 'Normal' ? 'selected' : '' ?>>Normal</option>
										<option value="Off" <?= $row['radios_status'] == 'Off' ? 'selected' : '' ?>>Off</option>
										<option value="Perbaikan" <?= $row['radios_status'] == 'Perbaikan' ? 'selected' : '' ?>>Perbaikan/Perawatan</option>
									</select>
									<div class="select-dropdown "></div>
								</div>
							<div data-sr="enter left over 1s, wait 0.3s, move 24px, reset" class="form-group col-md-8 col-md-offset-4"> 
								<input type="keterangan" class="form-control" name="radios_keterangan" />
							</div>	
							</div>
							</td>
							</tr>
							
							<!-- 18 -->
							<tr>
							<td>
							<div data-sr="enter left over 1s, wait 0.3s, move 24px" class="form-group col-md-5">
								<br><br><br><p data-sr="enter top over 1s, wait 0.3s, move 24px" class="contact-info text-left"><b>Display Bandara</b></p><br>
							</div>
							<div data-sr="enter right over 1s, wait 0.3s, move 24px" class="form-group col-md-6">
								<br>
								<div class="form-group col-md-5 col-md-offset-4">
									<select name="d_bandara_status">
										<option value=" " selected="selected">Status Alat</option>
										<option value="Normal" <?= $row['d_bandara_status'] == 'Normal' ? 'selected' : '' ?>>Normal</option>
										<option value="Off" <?= $row['d_bandara_status'] == 'Off' ? 'selected' : '' ?>>Off</option>
										<option value="Perbaikan" <?= $row['d_bandara_status'] == 'Perbaikan' ? 'selected' : '' ?>>Perbaikan/Perawatan</option>
									</select>
									<div class="select-dropdown "></div>
								</div>
							<div data-sr="enter left over 1s, wait 0.3s, move 24px, reset" class="form-group col-md-8 col-md-offset-4"> 
								<input type="keterangan" class="form-control" name="d_bandara_keterangan" />
							</div>	
							</div>
							</td>
							</tr>
							
							<!-- 19 -->
							<tr>
							<td>
							<div data-sr="enter left over 1s, wait 0.3s, move 24px" class="form-group col-md-5">
								<br><br><br><p data-sr="enter top over 1s, wait 0.3s, move 24px" class="contact-info text-left"><b>Display BPBD</b></p><br>
							</div>
							<div data-sr="enter right over 1s, wait 0.3s, move 24px" class="form-group col-md-6">
								<br>
								<div class="form-group col-md-5 col-md-offset-4">
									<select name="d_bpbd_status">
										<option value=" " selected="selected">Status Alat</option>
										<option value="Normal" <?= $row['d_bpbd_status'] == 'Normal' ? 'selected' : '' ?>>Normal</option>
										<option value="Off" <?= $row['d_bpbd_status'] == 'Off' ? 'selected' : '' ?>>Off</option>
										<option value="Perbaikan" <?= $row['d_bpbd_status'] == 'Perbaikan' ? 'selected' : '' ?>>Perbaikan/Perawatan</option>
									</select>
									<div class="select-dropdown "></div>
								</div>
							<div data-sr="enter left over 1s, wait 0.3s, move 24px, reset" class="form-group col-md-8 col-md-offset-4"> 
								<input type="keterangan" class="form-control" name="d_bpbd_keterangan" />
							</div>	
							</div>
							</td>
							</tr>
							
							<!-- 20 -->
							<tr>
							<td>
							<div data-sr="enter left over 1s, wait 0.3s, move 24px" class="form-group col-md-5">
								<br><br><br><p data-sr="enter top over 1s, wait 0.3s, move 24px" class="contact-info text-left"><b>Display Gubernur</b></p><br>
							</div>
							<div data-sr="enter right over 1s, wait 0.3s, move 24px" class="form-group col-md-6">
								<br>
								<div class="form-group col-md-5 col-md-offset-4">
									<select name="d_gubernur_status">
										<option value=" " selected="selected">Status Alat</option>
										<option value="Normal" <?= $row['d_gubernur_status'] == 'Normal' ? 'selected' : '' ?>>Normal</option>
										<option value="Off" <?= $row['d_gubernur_status'] == 'Off' ? 'selected' : '' ?>>Off</option>
										<option value="Perbaikan" <?= $row['d_gubernur_status'] == 'Perbaikan' ? 'selected' : '' ?>>Perbaikan/Perawatan</option>
									</select>
									<div class="select-dropdown "></div>
								</div>
							<div data-sr="enter left over 1s, wait 0.3s, move 24px, reset" class="form-group col-md-8 col-md-offset-4"> 
								<input type="keterangan" class="form-control" name="d_gubernur_keterangan" />
							</div>	
							</div>
							</td>
							</tr>
							
							<!-- 21 -->
							<tr>
							<td>
							<div data-sr="enter left over 1s, wait 0.3s, move 24px" class="form-group col-md-5">
								<br><br><br><p data-sr="enter top over 1s, wait 0.3s, move 24px" class="contact-info text-left"><b>Campble Stokes</b></p><br>
							</div>
							<div data-sr="enter right over 1s, wait 0.3s, move 24px" class="form-group col-md-6">
								<br>
								<div class="form-group col-md-5 col-md-offset-4">
									<select name="campble_status">
										<option value=" " selected="selected">Status Alat</option>
										<option value="Normal" <?= $row['campble_status'] == 'Normal' ? 'selected' : '' ?>>Normal</option>
										<option value="Off" <?= $row['campble_status'] == 'Off' ? 'selected' : '' ?>>Off</option>
										<option value="Perbaikan" <?= $row['campble_status'] == 'Perbaikan' ? 'selected' : '' ?>>Perbaikan/Perawatan</option>
									</select>
									<div class="select-dropdown "></div>
								</div>
							<div data-sr="enter left over 1s, wait 0.3s, move 24px, reset" class="form-group col-md-8 col-md-offset-4"> 
								<input type="keterangan" class="form-control" name="campble_keterangan" />
							</div>	
							</div>
							</td>
							</tr>
							
							<!-- 22 -->
							<tr>
							<td>
							<div data-sr="enter left over 1s, wait 0.3s, move 24px" class="form-group col-md-5">
								<br><br><br><p data-sr="enter top over 1s, wait 0.3s, move 24px" class="contact-info text-left"><b>Internet</b></p><br>
							</div>
							<div data-sr="enter right over 1s, wait 0.3s, move 24px" class="form-group col-md-6">
								<br>
								<div class="form-group col-md-5 col-md-offset-4">
									<select name="internet_status">
										<option value=" " selected="selected">Status Alat</option>
										<option value="Normal" <?= $row['internet_status'] == 'Normal' ? 'selected' : '' ?>>Normal</option>
										<option value="Off" <?= $row['internet_status'] == 'Off' ? 'selected' : '' ?>>Off</option>
										<option value="Perbaikan" <?= $row['internet_status'] == 'Perbaikan' ? 'selected' : '' ?>>Perbaikan/Perawatan</option>
									</select>
									<div class="select-dropdown "></div>
								</div>
							<div data-sr="enter left over 1s, wait 0.3s, move 24px, reset" class="form-group col-md-8 col-md-offset-4"> 
								<input type="keterangan" class="form-control" name="internet_keterangan"  />
							</div>	
							</div>
							</td>
							</tr>
							
							<!-- 23 -->
							<tr>
							<td>
							<div data-sr="enter left over 1s, wait 0.3s, move 24px" class="form-group col-md-5">
								<br><br><br><p data-sr="enter top over 1s, wait 0.3s, move 24px" class="contact-info text-left"><b>VPN BMKG</b></p><br>
							</div>
							<div data-sr="enter right over 1s, wait 0.3s, move 24px" class="form-group col-md-6">
								<br>
								<div class="form-group col-md-5 col-md-offset-4">
									<select name="vpn_status">
										<option value=" " selected="selected">Status Alat</option>
										<option value="Normal" <?= $row['vpn_status'] == 'Normal' ? 'selected' : '' ?>>Normal</option>
										<option value="Off" <?= $row['vpn_status'] == 'Off' ? 'selected' : '' ?>>Off</option>
										<option value="Perbaikan" <?= $row['vpn_status'] == 'Perbaikan' ? 'selected' : '' ?>>Perbaikan/Perawatan</option>
									</select>
									<div class="select-dropdown "></div>
								</div>
							<div data-sr="enter left over 1s, wait 0.3s, move 24px, reset" class="form-group col-md-8 col-md-offset-4"> 
								<input type="keterangan" class="form-control" name="vpn_keterangan"  />
							</div>	
							</div>
							</td>
							</tr>
							
							<!-- 24 -->
							<tr>
							<td>
							<div data-sr="enter left over 1s, wait 0.3s, move 24px" class="form-group col-md-5">
								<br><br><br><p data-sr="enter top over 1s, wait 0.3s, move 24px" class="contact-info text-left"><b>BMKG Soft</b></p><br>
							</div>
							<div data-sr="enter right over 1s, wait 0.3s, move 24px" class="form-group col-md-6">
								<br>
								<div class="form-group col-md-5 col-md-offset-4">
									<select name="soft_status">
										<option value=" " selected="selected">Status Alat</option>
										<option value="Normal" <?= $row['soft_status'] == 'Normal' ? 'selected' : '' ?>>Normal</option>
										<option value="Off" <?= $row['soft_status'] == 'Off' ? 'selected' : '' ?>>Off</option>
										<option value="Perbaikan" <?= $row['soft_status'] == 'Perbaikan' ? 'selected' : '' ?>>Perbaikan/Perawatan</option>
									</select>
									<div class="select-dropdown "></div>
								</div>
							<div data-sr="enter left over 1s, wait 0.3s, move 24px, reset" class="form-group col-md-8 col-md-offset-4"> 
								<input type="keterangan" class="form-control" name="soft_keterangan"  />
							</div>	
							</div>
							</td>
							</tr>
							
							<!-- 25 -->
							<tr>
							<td>
							<div data-sr="enter left over 1s, wait 0.3s, move 24px" class="form-group col-md-5">
								<br><br><br><p data-sr="enter top over 1s, wait 0.3s, move 24px" class="contact-info text-left"><b>AFTN</b></p><br>
							</div>
							<div data-sr="enter right over 1s, wait 0.3s, move 24px" class="form-group col-md-6">
								<br>
								<div class="form-group col-md-5 col-md-offset-4">
									<select name="aftn_status">
										<option value=" " selected="selected">Status Alat</option>
										<option value="Normal" <?= $row['aftn_status'] == 'Normal' ? 'selected' : '' ?>>Normal</option>
										<option value="Off" <?= $row['aftn_status'] == 'Off' ? 'selected' : '' ?>>Off</option>
										<option value="Perbaikan" <?= $row['aftn_status'] == 'Perbaikan' ? 'selected' : '' ?>>Perbaikan/Perawatan</option>
									</select>
									<div class="select-dropdown "></div>
								</div>
							<div data-sr="enter left over 1s, wait 0.3s, move 24px, reset" class="form-group col-md-8 col-md-offset-4"> 
								<input type="keterangan" class="form-control" name="aftn_keterangan" />
							</div>	
							</div>
							</td>
							</tr>
							
							<!-- 26 -->
							<tr>
							<td>
							<div data-sr="enter left over 1s, wait 0.3s, move 24px" class="form-group col-md-5">
								<br><br><br><p data-sr="enter top over 1s, wait 0.3s, move 24px" class="contact-info text-left"><b>Sample Debu</b></p><br>
							</div>
							<div data-sr="enter right over 1s, wait 0.3s, move 24px" class="form-group col-md-6">
								<br>
								<div class="form-group col-md-5 col-md-offset-4">
									<select name="debu_status">
										<option value=" " selected="selected">Status Alat</option>
										<option value="Normal" <?= $row['debu_status'] == 'Normal' ? 'selected' : '' ?>>Normal</option>
										<option value="Off" <?= $row['debu_status'] == 'Off' ? 'selected' : '' ?>>Off</option>
										<option value="Perbaikan" <?= $row['debu_status'] == 'Perbaikan' ? 'selected' : '' ?>>Perbaikan/Perawatan</option>
									</select>
									<div class="select-dropdown "></div>
								</div>
							<div data-sr="enter left over 1s, wait 0.3s, move 24px, reset" class="form-group col-md-8 col-md-offset-4"> 
								<input type="keterangan" class="form-control" name="debu_keterangan"  />
							</div>	
							</div>
							</td>
							</tr>
							
							<!-- 27 -->
							<tr>
							<td>
							<div data-sr="enter bottom over 1s, wait 0.3s, move 24px, reset" class="form-group col-md-12">
								<br><textarea cols="60" rows="3" id="alamat" name="comment" class="form-control" value="<?= $row['coment']?>" placeholder="required"></textarea>
							</div>
							</td>
							</tr>
							
							</table>
							</div>
							
							<button data-sr="enter bottom over 1s, wait 0.3s, move 24px, reset" type="submit" name="input" class="button-leweb col-md-12" data-dismiss="modal" onClick="return cek(update)">Submit</button>

						</form>
				</div>
			</div>
		</div>
						<!-- CONTACT FORM ENDS -->
	</body>
	<footer>
	<br>
	<div class="row">
        <div class="col-lg-12 text-center">
            <div class="footer-copy">
                © 2023 Logbook Teknisi by Stamet SSK II Pekanbaru. All Rights Reserved.
            </div>
        </div>
	</div>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="../assets/plugins/apelfa/js/bootstrap.min.js"></script>
		<!-- SMOOTH SCROLL -->
		<script src="../assets/plugins/apelfa/js/smooth-scroll.min.js"></script>
		<!-- PARALLAX IMG -->
		<script src="../assets/plugins/apelfa/js/jquery.parallax-1.1.3.js"></script>
		<!-- SCROLL REVEAL -->
		<script src="../assets/plugins/apelfa/js/scrollReveal.min.js"></script>
		<!-- FUNCTIONS -->
		<script src="../assets/plugins/apelfa/js/functions.js"></script>
	</footer>
</html>