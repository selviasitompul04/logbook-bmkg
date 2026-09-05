<?php
include 'template/header.php';
$_SESSION['admins'] = false;
$_SESSION['users'] = false;
session_start();

?>      
  <h1 class="display-5">Laporan pengecekan alat</h1>
  <p class="lead">Jangan lupa isi logbook hari ini ya!</p>
  <style>
  .jumbotron-search {
    background-color: aqua;
  }
</style>

  <div class="jumbotron-search">
    <form action="auth/login.php" method="POST">
      <p class="lead" style="margin-bottom: -1px;">Cek laporan yang anda inginkan!</p>
    <input type="text" name="keyword" id="keyword" placeholder="YYYY-MM-DD">
    <button type="submit" class="btn btn-primary search-button" value="cari"><span class="fas fa-search mr-2"></span>Cek</button>
    </form>
    <p class="lead mt-2">Login untuk mengisi Logbook yaa</p>
    <a href="auth/login.php" class="btn btn-primary sub-button"><span class="fas fa-chevron-right mr-2"></span>Disini</a>
  </div>
<?php
include 'template/footer.php';
?>
 <style>
  .jumbotron-search {
    background-color: white;
  }

/* ===== INDEX PAGE THEME ===== */

body {
    background: #F4F6F9;
    font-family: 'Segoe UI', sans-serif;
}

/* Navbar */
.navbar {
    background: #0D47A1 !important;
}

.navbar a {
    color: #E3F2FD !important;
    font-weight: 500;
}

.navbar a:hover {
    color: #FFFFFF !important;
}

/* Hero / Header */
.jumbotron {
    background: linear-gradient(135deg, #E3F2FD, #BBDEFB);
    border-radius: 0;
}

.jumbotron h1 {
    color: #0D47A1;
    font-weight: 700;
}

.jumbotron p {
    color: #444;
}

/* Button */
.btn-primary {
    background: #1976D2 !important;
    border: none;
}

.btn-primary:hover {
    background: #1565C0 !important;
}


</style>


<style>
  /* Style for the jumbotron-search */
  .jumbotron-search {
    background-color: #ffe4c4; /* ALICE BLUE */
    padding: 20px;
    border-radius: 10px;
  }

  /* Style for the search button */
  .search-button {
    background-color: #00FF00; /* Green */
    color: #FFFFFF; /* White */
  }

  /* Style for the logbook button */
  .sub-button {
    background-color: #0000FF; /* Blue */
    color: #FFFFFF; /* White */
  }
</style>

