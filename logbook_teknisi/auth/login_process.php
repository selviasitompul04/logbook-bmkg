<?php
session_start();
require_once '../koneksi.php';

$username = mysqli_real_escape_string($cons, $_POST['username']);
$password = mysqli_real_escape_string($cons, $_POST['password']);

$query = "SELECT * FROM user WHERE user_name = '".$username."'";
$result = mysqli_query($cons, $query);

if ($result->num_rows > 0) {
    $row = mysqli_fetch_assoc($result); 

    if ($password == $row['password']) {
        if($row['role']=='admin'){
			$_SESSION['admins'] = true;
			header('Location: ../index_admin.php');
		}else if ($row['role']=='user'){
			$_SESSION['users'] = true;
			header('Location: ../index_user.php');
		} else {
			echo 'Account Type not Found';
			session_destroy();
			echo '<script> window.location="login.php"</script>';
    } 
	}
	else {
        echo "<script>alert('Password yang Anda masukkan salah!');</script>";
		session_destroy();
		echo '<script> window.location="login.php"</script>';
		
    }
} else {
    echo "<script>alert('Username yang Anda masukkan salah!');</script>";
	session_destroy();
	echo '<script> window.location="login.php"</script>';
}


?>