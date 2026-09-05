<?php
session_start();

require_once'../koneksi.php';

	if(isset($_POST["input"])){
		
		$dates = mysqli_real_escape_string($cons, $_SESSION['date']);

		$query = "SELECT * FROM report WHERE dates = '".$dates."'";
		$results = mysqli_query($cons, $query);
		
		$date=$_SESSION['date'];
		
		$panci_status=$_POST["panci_status"];
		$sangkar_status=$_POST["sangkar_status"];
		$arws_status=$_POST["arws_status"];
		$hvs_status=$_POST["hvs_status"];
		$penakar_status=$_POST["penakar_status"];
		$pyranometer_status=$_POST["pyranometer_status"];
		$baro_status=$_POST["baro_status"];
		$awos_status=$_POST["awos_status"];
		$aws_status=$_POST["aws_status"];
		$lightning_detec_status=$_POST["lightning_detec_status"];
		$radar_status=$_POST["radar_status"];
		$pm10_status=$_POST["pm10_status"];
		$pm25_status=$_POST["pm25_status"];
		$synergie_status=$_POST["synergie_status"];
		$aerometweb_status=$_POST["aerometweb_status"];
		$wrs_status=$_POST["wrs_status"];
		$radios_status=$_POST["radios_status"];
		$d_bandara_status=$_POST["d_bandara_status"];
		$d_bpbd_status=$_POST["d_bpbd_status"];
		$d_gubernur_status=$_POST["d_gubernur_status"];
		$campble_status=$_POST["campble_status"];
		$internet_status=$_POST["internet_status"];
		$vpn_status=$_POST["vpn_status"];
		$soft_status=$_POST["soft_status"];
		$aftn_status=$_POST["aftn_status"];
		$debu_status=$_POST["debu_status"];
		$comment=$_POST["comment"];
		
		$panci = $_FILES["panci_file"]["name"];
		$panci_name = $_FILES["panci_file"]["tmp_name"];
		
		$sangkar = $_FILES["sangkar_file"]["name"];
		$sangkar_name = $_FILES["sangkar_file"]["tmp_name"];
		
		$arws = $_FILES["arws_file"]["name"];
		$arws_name = $_FILES["arws_file"]["tmp_name"];
		
		$hvs = $_FILES["hvs_file"]["name"];
		$hvs_name = $_FILES["hvs_file"]["tmp_name"];
		
		$penakar = $_FILES["penakar_file"]["name"];
		$penakar_name = $_FILES["penakar_file"]["tmp_name"];
		
		$pyranometer = $_FILES["pyranometer_file"]["name"];
		$pyranometer_name = $_FILES["pyranometer_file"]["tmp_name"];
		
		$baro = $_FILES["baro_file"]["name"];
		$baro_name = $_FILES["baro_file"]["tmp_name"];
		
		$awos = $_FILES["awos_file"]["name"];
		$awos_name = $_FILES["awos_file"]["tmp_name"];
		
		$aws = $_FILES["aws_file"]["name"];
		$aws_name = $_FILES["aws_file"]["tmp_name"];
		
		$lightning_detec = $_FILES["lightning_detec_file"]["name"];
		$lightning_detec_name = $_FILES["lightning_detec_file"]["tmp_name"];
		
		$radar = $_FILES["radar_file"]["name"];
		$radar_name = $_FILES["radar_file"]["tmp_name"];
		
		$pm10 = $_FILES["pm10_file"]["name"];
		$pm10_name = $_FILES["pm10_file"]["tmp_name"];
		
		$pm25 = $_FILES["pm25_file"]["name"];
		$pm25_name = $_FILES["pm25_file"]["tmp_name"];
		
		$synergie = $_FILES["synergie_file"]["name"];
		$synergie_name = $_FILES["synergie_file"]["tmp_name"];
		
		$aerometweb = $_FILES["aerometweb_file"]["name"];
		$aerometweb_name = $_FILES["aerometweb_file"]["tmp_name"];
		
		$wrs = $_FILES["wrs_file"]["name"];
		$wrs_name = $_FILES["wrs_file"]["tmp_name"];
		
		$radios = $_FILES["radios_file"]["name"];
		$radios_name = $_FILES["radios_file"]["tmp_name"];
		
		$d_bandara = $_FILES["d_bandara_file"]["name"];
		$d_bandara_name = $_FILES["d_bandara_file"]["tmp_name"];
		
		$d_bpbd = $_FILES["d_bpbd_file"]["name"];
		$d_bpbd_name = $_FILES["d_bpbd_file"]["tmp_name"];
		
		$d_gubernur = $_FILES["d_gubernur_file"]["name"];
		$d_gubernur_name = $_FILES["d_gubernur_file"]["tmp_name"];
		
		$campble = $_FILES["campble_file"]["name"];
		$campble_name = $_FILES["campble_file"]["tmp_name"];
		
		$internet = $_FILES["internet_file"]["name"];
		$internet_name = $_FILES["internet_file"]["tmp_name"];
		
		$vpn = $_FILES["vpn_file"]["name"];
		$vpn_name = $_FILES["vpn_file"]["tmp_name"];
		
		$soft = $_FILES["soft_file"]["name"];
		$soft_name = $_FILES["soft_file"]["tmp_name"];
		
		$aftn = $_FILES["aftn_file"]["name"];
		$aftn_name = $_FILES["aftn_file"]["tmp_name"];
		
		$debu = $_FILES["debu_file"]["name"];
		$debu_name = $_FILES["debu_file"]["tmp_name"];
		
		$direct = "../assets/file/report/"; 
		
		/* 1 */
		if($hvs_status !=""){
			move_uploaded_file($hvs_name,$direct.$hvs);
			$query = mysqli_query($cons,"update report set hvs_status='".$hvs_status."',hvs_file='".$hvs."' where dates='".$date."'")or die(mysqli_connect_error() );
		}
		/* 2 */
		if($baro_status !=""){
			move_uploaded_file($baro_name,$direct.$baro);
			$query = mysqli_query($cons,"update report set baro_status='".$baro_status."',baro_file='".$baro."' where dates='".$date."'")or die(mysqli_connect_error() );
		}
		/* 3 */
		if($aws_status !=""){
			move_uploaded_file($aws_name,$direct.$aws);
			$query = mysqli_query($cons,"update report set aws_status='".$aws_status."',aws_file='".$aws."' where dates='".$date."'")or die(mysqli_connect_error() );
		}
		/* 4 */
		if($radar_status !=""){
			move_uploaded_file($radar_name,$direct.$radar);
			$query = mysqli_query($cons,"update report set radar_status='".$radar_status."',radar_file='".$radar."' where dates='".$date."'")or die(mysqli_connect_error() );
		}
		/* 5 */
		if($wrs_status !=""){
			move_uploaded_file($wrs_name,$direct.$wrs);
			$query = mysqli_query($cons,"update report set wrs_status='".$wrs_status."',wrs_file='".$wrs."' where dates='".$date."'")or die(mysqli_connect_error() );
		}
		/* 6 */
		if($campble_status!=""){
			move_uploaded_file($campble_name,$direct.$campble);
			$query = mysqli_query($cons,"update report set campble_status='".$campble_status."',campble_file='".$campble."' where dates='".$date."'")or die(mysqli_connect_error() );
		}
		/* 7 */
		if($arws_status!=""){
			move_uploaded_file($arws_name,$direct.$arws);
			$query = mysqli_query($cons,"update report set arws_status='".$arws_status."',arws_file='".$arws."' where dates='".$date."'")or die(mysqli_connect_error() );
		}
		/* 8 */
		if($pyranometer_status!=""){
			move_uploaded_file($pyranometer_name,$direct.$pyranometer);
			$query = mysqli_query($cons,"update report set pyranometer_status='".$pyranometer_status."',pyranometer_file='".$pyranometer."' where dates='".$date."'")or die(mysqli_connect_error() );
		}
		
		/* ----------------------------------------------------------------------------------------------------------------------------------------------------------------- */
		
		/* 9 */
		if($lightning_detec_status !=""){
			move_uploaded_file($lightning_detec_name,$direct.$lightning_detec);
			$query = mysqli_query($cons,"update report set lightning_detec_status='".$lightning_detec_status."',lightning_detec_file='".$lightning_detec."' where dates='".$date."'")or die(mysqli_connect_error() );
		}
		/* 10 */
		if($awos_status !=""){
			move_uploaded_file($awos_name,$direct.$awos);
			$query = mysqli_query($cons,"update report set awos_status='".$awos_status."',awos_file='".$awos."' where dates='".$date."'")or die(mysqli_connect_error() );
		}
		/* 11 */
		if($pm10_status !=""){
			move_uploaded_file($pm10_name,$direct.$pm10);
			$query = mysqli_query($cons,"update report set pm10_status='".$pm10_status."',pm10_file='".$pm10."' where dates='".$date."'")or die(mysqli_connect_error() );
		}
		/* 12 */
		if($pm25_status !=""){
			move_uploaded_file($pm25_name,$direct.$pm25);
			$query = mysqli_query($cons,"update report set pm25_status='".$pm25_status."',pm25_file='".$pm25."' where dates='".$date."'")or die(mysqli_connect_error() );
		}
		/* 13 */
		if($radios_status !=""){
			move_uploaded_file($radios_name,$direct.$radios);
			$query = mysqli_query($cons,"update report set radios_status='".$radios_status."',radios_file='".$radios."' where dates='".$date."'")or die(mysqli_connect_error() );
		}
		/* 14 */
		if($d_bandara_status !=""){
			move_uploaded_file($d_bandara_name,$direct.$d_bandara);
			$query = mysqli_query($cons,"update report set d_bandara_status='".$d_bandara_status."',d_bandara_file='".$d_bandara."' where dates='".$date."'")or die(mysqli_connect_error() );
		}
		/* 15 */
		if($d_gubernur_status !=""){
			move_uploaded_file($d_gubernur_name,$direct.$d_gubernur);
			$query = mysqli_query($cons,"update report set d_gubernur_status='".$d_gubernur_status."',d_gubernur_file='".$d_gubernur."' where dates='".$date."'")or die(mysqli_connect_error() );
		}
		/* 16 */
		if($d_bpbd_status!=""){
			move_uploaded_file($d_bpbd_name,$direct.$d_bpbd);
			$query = mysqli_query($cons,"update report set d_bpbd_status='".$d_bpbd_status."',d_bpbd_file='".$d_bpbd."' where dates='".$date."'")or die(mysqli_connect_error() );
		}
		/* ----------------------------------------------------------------------------------------------------------------------------------------------------------------- */
		/* 17 */
		if($panci_status!=""){
			move_uploaded_file($panci_name,$direct.$panci);
			$query = mysqli_query($cons,"update report set panci_status='".$panci_status."',panci_file='".$panci."' where dates='".$date."'")or die(mysqli_connect_error() );
		}
		/* 18 */
		if($sangkar_status!=""){
			move_uploaded_file($sangkar_name,$direct.$sangkar);
			$query = mysqli_query($cons,"update report set sangkar_status='".$sangkar_status."',sangkar_file='".$sangkar."' where dates='".$date."'")or die(mysqli_connect_error() );
		}
		/* 19 */
		if($penakar_status!=""){
			move_uploaded_file($penakar_name,$direct.$penakar);
			$query = mysqli_query($cons,"update report set penakar_status='".$penakar_status."',penakar_file='".$penakar."' where dates='".$date."'")or die(mysqli_connect_error() );
		}
		/* 20 */
		if($synergie_status!=""){
			move_uploaded_file($synergie_name,$direct.$synergie);
			$query = mysqli_query($cons,"update report set synergie_status='".$synergie_status."',synergie_file='".$synergie."' where dates='".$date."'")or die(mysqli_connect_error() );
		}
		/* 21 */
		if($aerometweb_status!=""){
			move_uploaded_file($aerometweb_name,$direct.$aerometweb);
			$query = mysqli_query($cons,"update report set aerometweb_status='".$aerometweb_status."',aerometweb_file='".$aerometweb."' where dates='".$date."'")or die(mysqli_connect_error() );
		}
		/* 22 */
		if($internet_status!=""){
			move_uploaded_file($internet_name,$direct.$internet);
			$query = mysqli_query($cons,"update report set internet_status='".$internet_status."',internet_file='".$internet."' where dates='".$date."'")or die(mysqli_connect_error() );
		}
		/* 23 */
		if($vpn_status!=""){
			move_uploaded_file($vpn_name,$direct.$vpn);
			$query = mysqli_query($cons,"update report set vpn_status='".$vpn_status."',vpn_file='".$vpn."' where dates='".$date."'")or die(mysqli_connect_error() );
		}
		/* 24 */
		if($soft_status!=""){
			move_uploaded_file($soft_name,$direct.$soft);
			$query = mysqli_query($cons,"update report set soft_status='".$soft_status."',soft_file='".$soft."' where dates='".$date."'")or die(mysqli_connect_error() );
		}
		/* 25 */
		if($aftn_status!=""){
			move_uploaded_file($aftn_name,$direct.$aftn);
			$query = mysqli_query($cons,"update report set aftn_status='".$aftn_status."',aftn_file='".$aftn."' where dates='".$date."'")or die(mysqli_connect_error() );
		}
		/* 26 */
		if($debu_status!=""){
			move_uploaded_file($debu_name,$direct.$debu);
			$query = mysqli_query($cons,"update report set debu_status='".$debu_status."',debu_file='".$debu."' where dates='".$date."'")or die(mysqli_connect_error() );
		}
			
		/* 27 */
		if($comment!=""){
			$query = mysqli_query($cons,"update report set coment='".$comment."' where dates='".$date."'") or die(mysqli_connect_error() );
		}
		
		header('Location: logbook.php');
		
	}else{
	header('Location: form-logbook.php');
	}
	

?>