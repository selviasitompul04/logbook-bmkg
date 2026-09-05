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
/* =======================
   SOFT PROFESSIONAL THEME
======================= */

body {
    background: #EEF2F7 !important;
    font-family: 'Segoe UI', sans-serif;
    color: #2C3E50;
}

/* NAVBAR */
.navbar {
    background: #4F8DF5 !important;
    padding: 12px 25px;
}

.navbar-brand {
    color: black !important;
    font-weight: 600;
    font-size: 30px;
}

.navbar-nav .nav-link {
    color: #080808ff !important;
    font-weight: 500;
    font-size: 20px;
    margin-left: 12px;
}

.navbar-nav .nav-link:hover {
    color: #2546afff !important;
}

/* BUTTON LOGOUT */
.btn-danger {
    background: #6bffa4ff !important;
    border: none;
}

.btn-danger:hover {
    background: #6bffa4ff !important;
}

/* CONTAINER */
.container, .content-wrapper {
    background: #ffffff;
    padding: 25px;
    margin-top: 25px;
    border-radius: 12px;
    box-shadow: 0px 3px 12px rgba(0,0,0,0.06);
}

/* TITLE */
h1, h2, h3 {
    color: #2C3E50;
    font-weight: 600;
}

/* TABLE */
table {
    background: #ffffff;
    border-radius: 8px;
    overflow: hidden;
}

table thead {
    background: #F3F6FB;
}

table th {
    font-weight: 600;
    color: #34495E;
}

table td {
    color: #444;
}

/* FORM */
.form-control {
    border-radius: 6px;
    border: 1px solid #38aa21ff;
}

/* BUTTON */
.btn-primary {
    background: #4F8DF5 !important;
    border: none;
}

.btn-success {
    background: #2ECC71 !important;
    border: none;
}

.btn-warning {
    background: #F5A623 !important;
    border: none;
}
</style>


  </head>
<body>

<style>
body{
background:#FFE4C4; 
}
</style>

  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
    <style type="background/css">
      div{
  background:#FFE4C4;
  }
  </style>
      <img class="logo" src="assets/dist/img/logo.png">
      <style type="background/css">
  img{
    background:#FFE4C4;
  }
  </style>
      <a class="navbar-brand" href="index_admin.php">Logbook Teknisi</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
		
		  <li class="nav-item ">
            <a class="nav-link" href="admin/logbook.php">Logbook <span class="sr-only"></a>
			
		  <li class="nav-item ">
            <a class="nav-link" href="admin/report.php">Report <span class="sr-only"></a>
  
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