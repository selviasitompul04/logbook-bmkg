<?php
session_start();
if (!isset($_SESSION['users'])) {
    echo "<script>alert('Harap Login Sebagai User');</script>";
    echo '<script>window.location="auth/login.php"</script>';
    exit;
}
include 'template/header_user.php';
?>

<style>
body {
    font-family: 'Cursive';
    background: #F4F6F8;
}

/* Title */
.page-title {
    font-size: 50px;
    font-weight: 700;
    color: #0D47A1;
    margin-bottom: 5px;
}

.subtitle {
    color: #546E7A;
    font-size: 35px;
    font-family: 'Fantasy';
    margin-bottom: 5px;
}

/* Card */
.card-box {
    background: #ffffff;
    border-radius: 14px;
    padding: 30px;
    margin-top: 30px;
    box-shadow: 0 8px 24px rgba(0,0,0,0.08);
}

/* Card title */
.card-title {
    font-weight: 600;
    color: #0D47A1;
    margin-bottom: 15px;
}

/* Input */
.form-control {
    border-radius: 8px;
    border: 1px solid #ccc;
}

.form-control:focus {
    border-color: #1976D2;
    box-shadow: 0 0 0 2px rgba(25,118,210,0.2);
}

/* Button */
.btn-primary {
    background: #1976D2;
    border: none;
    border-radius: 20px;
    padding: 8px 20px;
}

.btn-primary:hover {
    background: #0D47A1;
}

.btn-success {
    background: #2E7D32;
    border: none;
    border-radius: 20px;
    padding: 8px 22px;
}

.btn-success:hover {
    background: #1B5E20;
}
</style>

<div class="container mt-5">

    <h1 class="page-title">Logbook Teknisi</h1>
    <p class="subtitle">Selamat datang 👋</p>
    <p class="subtitle">Pastikan logbook hari ini sudah diisi</p>

    <div class="card-box">

        <p class="card-title">🔎 Cek laporan berdasarkan tanggal</p>

        <form action="user/detail.php" method="POST" class="form-inline mb-4">
            <input 
                type="date" 
                name="tanggal" 
                class="form-control mr-3"
                required
            >
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-search mr-1"></i> Cek Laporan
            </button>
        </form>

        <hr>

        <p class="card-title">📝 Isi logbook harian</p>
        <a href="user/form-logbook.php" class="btn btn-success">
            <i class="fas fa-edit mr-1"></i> Isi Logbook
        </a>

    </div>
</div>

<?php include 'template/footer.php'; ?>
