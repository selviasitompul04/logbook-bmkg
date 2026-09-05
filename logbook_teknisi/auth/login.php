<?php
session_start();
if(isset($_SESSION['users']) == true){
    echo "<script>alert('Telah login sebagai user');</script>";
    echo '<script> window.location="index_user.php"</script>';
} else if(isset($_SESSION['admins']) == true){
    echo "<script>alert('Telah login sebagai admin');</script>";
    echo '<script> window.location="index_user.php"</script>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Login | Logbook Teknisi</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="icon" href="../assets/dist/img/logo.png">
<link rel="stylesheet" href="../assets/plugins/bootstrap4/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">

<style>
/* ===== LOGIN THEME ===== */

body {
    background: #F4F6F9;
    font-family: 'Segoe UI', sans-serif;
}

/* Center Box */
.login-wrapper {
    min-height: 100vh;
    display: flex;
    align-items: center;
}

/* Card */
.login-card {
    background: #FFFFFF;
    border-radius: 12px;
    padding: 40px;
    box-shadow: 0px 8px 25px rgba(0,0,0,0.08);
}

.login-logo {
    width: 80px;
}

.login-title {
    font-size: 26px;
    font-weight: 700;
    color: #0D47A1;
}

.login-subtitle {
    color: #555;
    margin-bottom: 25px;
}

/* Input */
.form-control {
    border-radius: 6px;
    height: 45px;
}

/* Button */
.btn-login {
    background: #1976D2;
    color: #fff;
    font-weight: 600;
    border-radius: 6px;
}

.btn-login:hover {
    background: #1565C0;
    color: #fff;
}

.btn-home {
    border: 1px solid #1976D2;
    color: #1976D2;
    font-weight: 600;
}

.btn-home:hover {
    background: #1976D2;
    color: #fff;
}

/* Footer */
.footer-copy {
    text-align: center;
    font-size: 13px;
    color: #777;
    margin-top: 15px;
}
</style>

</head>
<body>

<div class="login-wrapper">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-5">

                <div class="login-card text-center">

                    <img src="../assets/dist/img/logo.png" class="login-logo mb-3">
                    <h3 class="login-title">Logbook Teknisi</h3>
                    <p class="login-subtitle">BMKG Provinsi Riau</p>

                    <form action="login_process.php" method="post">

                        <div class="form-group text-left">
                            <label>Username</label>
                            <input type="text" class="form-control" name="username" placeholder="Masukkan username" required>
                        </div>

                        <div class="form-group text-left">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Masukkan password" required>
                        </div>

                        <button type="submit" class="btn btn-login btn-block mt-3" name="login">
                            <i class="fas fa-sign-in-alt mr-1"></i> Login
                        </button>

                        <a href="../index.php" class="btn btn-home btn-block mt-2">
                            <i class="fas fa-home mr-1"></i> Home
                        </a>

                    </form>

                </div>

                <div class="footer-copy">
                    © 2023 Logbook Teknisi by Stamet SSK II Pekanbaru
                </div>

            </div>

        </div>
    </div>
</div>

<script src="../assets/plugins/jquery/jquery.min.js"></script>
<script src="../assets/plugins/bootstrap4/js/bootstrap.min.js"></script>

</body>
</html>
