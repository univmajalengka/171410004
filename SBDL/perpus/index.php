<!DOCTYPE html>
<html>
<head>
  <title>Menu Utama</title>
  <link rel="stylesheet" type="text/css" href="style2.css">
<?php
  error_reporting(E_ERROR | E_WARNING | E_PARSE);
  include("koneksi.php"); 
  // mengaktifkan session
session_start();
 
// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if($_SESSION['status'] !="login"){
  header("location:login.php");
}
 
// menampilkan pesan selamat datang

 
?> 
</head>
<body>
  <nav>
    <ul class="kiri">
      <li><a href="index.php">Menu Utama</a></li>
    </ul>
  </nav>
  <div class="sidebar">
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="anggota.php">Anggota</a></li>
      <li><a href="Transaksi.php">Transaksi</a></li>
      <li><a href="libur.php">Libur</a></li>
      <li><a href="buku.php">Buku</a></li>
      <li><a href="config.php">Config</a></li>
      <li><a href="jenis.php">Jenis</a></li>
      <li><a href="lokasi.php">Lokasi</a></li>
      <li><a href="pengunjung.php">Pengunjung</a></li>
      <li><a href="kelas.php">Kelas</a></li>
      <li><a href="logout.php">LOGOUT</a></li>
    </ul>
  </div>
     <div class="right">
    <div class="isimain">
    <header>
            <h1>Hi, Selamat Datang <?PHP echo $_SESSION['username'];?>. 0__0</h1>
          </header>
  <div class="main">
    <div class="isimain">
      <div class="home">
      </div>
    </div>
  </div>
</body>
</html>