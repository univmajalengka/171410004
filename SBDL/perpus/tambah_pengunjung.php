<!DOCTYPE html>
<html>
<head>
	<?php
		error_reporting(E_ERROR | E_WARNING | E_PARSE);
		include "koneksi.php";
// mengaktifkan session
session_start();
 
// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if($_SESSION['status'] !="login"){
  header("location:login.php");
} 
	?>
	<link rel="stylesheet" type="text/css" href="style2.css">
	<title>Tambah Pengunjung</title>
</head>
<body>
	<nav>
		<ul class="kiri">
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
	<div class="main">
		<div class="isimain">
			<form method="POST" enctype="multipart/form-data">
				<h1><font size="5" style="text-align: left;">Tambah Pengunjung : </font></h1><br>
				<table width="150px" border="0">
				
					<tr>
						<td>Nama</td><td>:</td>
						<td>
							<input type="text" name="nama" maxlength="150" autocomplete required>
						</td>
					</tr>
					<tr>
						<td>Jenis Kelamin</td><td>:</td>
						<td colspan="8"><select name="jk" maxlength="50" autocomplete required>
						<option value="">  </option>	
						<option value="Laki-Laki"> Laki-Laki </option>
						<option value="Perempuan"> Perempuan </option>
						</select>
						</td>
					</tr>
					<tr>
						<td>Jenis</td><td>:</td>
						<td>
							<input type="text" name="jenis" maxlength="150" autocomplete required>
						</td>
					</tr>
					<tr>
						<td>Perlu</td><td>:</td>
						<td>
							<input type="text" name="perlu"  maxlength="150" autocomplete required>
						</td>
					</tr>
					<tr>
						<td>Saran</td><td>:</td>
						<td>
							<input type="text" name="saran" maxlength="150" autocomplete required>
						</td>
					</tr>
					<tr>
						<td>Tanggal</td><td>:</td>
						<td>
							<input type="date" name="tgl" maxlength="150" autocomplete required>
						</td>
					
					<tr>
						<td colspan="5" style="padding-top: 15px;text-align: center;"><input type="submit" value="Simpan" name="save"></td>
					</tr>
				</table>
			</form>
		</div>
	</div>
	<?php

  if (isset($_POST['save'])) {
 $id = $_POST['id']; 
  $nama  = $_POST['nama'];
  $jk = $_POST['jk'];
  $jenis  = $_POST['jenis'];
  $perlu  = $_POST['perlu'];
  $saran= $_POST['saran'];
  $tgl = $_POST['tgl'];
			$sql =  "INSERT INTO pengunjung (id,nama,jk,jenis,perlu,saran,tgl) VALUES ('$id', '$nama', '$jk', '$jenis', '$perlu', '$saran', '$tgl')";
			$link = koneksi_db();
			$res = mysqli_query($link,$sql);
		if (!$res) {
			echo "<script>alert('Data gagal disimpan');history.go(-1);</script>";
			
		}else{
			echo "<script>alert('Data Berhasil disimpan');history.go(-1);</script>";
		}
	}
	?>
</body>
</html>