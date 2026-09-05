<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logbook Teknisi</title>
    <!-- icon bmkg -->
    <link rel="icon" href="assets/dist/img/logo.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap4/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">

<style>
/* =========================
   USER THEME - PROFESSIONAL
========================= */

body {
    background: #F5F7FA;
    color: #212121;
    font-family: 'Segoe UI', sans-serif;
}

/* ===== NAVBAR USER THEME ===== */
/* ===== NAVBAR PROFESSIONAL THEME ===== */

.navbar {
    background: #5F9EA0!important;   /* Navy gelap */
}

.navbar img.logo {
    height: 55px;
    width: auto;
}


.navbar .navbar-brand {
    color: #F8FAFC !important;        /* Putih lembut */
    font-weight: 700;
    font-size: 20px;
}

.navbar .nav-link {
    color: #CBD5E1 !important;        /* Abu terang */
    font-weight: 500;
    margin-right: 12px;
    transition: 0.2s ease-in-out;
}

.navbar .nav-link:hover {
    color: #FFFFFF !important;
}

/* Tombol Logout */
.navbar .btn {
    background: #2563EB !important;
    border: none;
    color: #FFFFFF !important;
}

.navbar .btn:hover {
    background: #1D4ED8 !important;
}


/* Logout Button */
.login-button {
    background: #E53935 !important;
    border: none;
    font-weight: 600;
}

.login-button:hover {
    background: #C62828 !important;
}


/* Logout Button */
.login-button {
    background: #E53935 !important;
    border: none;
    font-weight: 600;
}

.login-button:hover {
    background: #C62828 !important;
}



/* Title */
.page-title {
    font-size: 32px;
    font-weight: bold;
    color: #0D47A1;
}

.subtitle {
    color: #555;
}

/* Card Box */
.card-box {
    background: #ffffff;
    padding: 25px;
    border-radius: 10px;
    box-shadow: 0px 2px 10px rgba(0,0,0,0.08);
    margin-top: 20px;
}

.card-title {
    font-weight: 600;
    margin-bottom: 10px;
}

/* Button */
.btn-primary {
    background: #1976D2 !important;
    border: none;
}

.btn-primary:hover {
    background: #1565C0 !important;
}

.btn-success {
    background: #2E7D32 !important;
    border: none;
}

.btn-success:hover {
    background: #1B5E20 !important;
}

/* Input */
.form-control {
    border-radius: 6px;
}



</style>


  </head>
<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <img class="logo" src="assets/dist/img/logo.png">
      <a class="navbar-brand" href="index_user.php">Logbook Teknisi</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
		  <li class="nav-item ">
            <a class="nav-link" href="user/form-logbook.php">Isi Logbook <span class="sr-only"></a>
          
		  <li class="nav-item ">
            <a class="nav-link" href="user/logbook.php">Logbook <span class="sr-only"></a>
			
		  <li class="nav-item ">
            <a class="nav-link" href="user/report.php">Report <span class="sr-only"></a>
  
          <li class="nav-item">
            <a class="btn btn-primary login-button" href="auth/logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- end navbar -->
  <!-- header -->
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <img src="assets/img/homepage.svg">
      

