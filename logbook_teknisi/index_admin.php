<?php
include 'template/header_admin.php';
session_start();
if(isset($_SESSION['admins']) != true){
		echo "<script>alert('Harap Login Sebagai Admin');</script>";
		echo '<script> window.location="auth/login.php"</script>';
	}
?>      
  <h1 class="display-5"> Laporan pengecekan alat Teknisi</h1>
  <p class="lead">Selamat Datang ADMIN:v!</p>
  
  <div class="jumbotron-search">
    <form action="admin/detail.php" method="POST">
      <p class="lead" style="margin-bottom: -1px;">Cek laporan yang anda inginkan!</p>
    <input type="text" name="tanggal" id="keyword" placeholder="YYYY-MM-DD">
    <button type="submit" class="btn btn-primary search-button" value="cari"><span class="fas fa-search mr-2"></span>Cek</button>
    </form>
  </div>
<?php
include 'template/footer.php';
?> 

<!-- Inside the <head> section of header_admin.php -->
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
