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
	<title>Tambah Config</title>
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
				<h1><font size="5" style="text-align: left;">Tambah Pengurus : </font></h1><br>
				<table width="150px" border="0">
				
					<tr>
						<td>Nama</td><td>:</td>
						<td>
							<input type="text" name="nama"  maxlength="50" autocomplete required>
						</td>
					</tr>
					<tr>
						<td>Alamat</td><td>:</td>
						<td>
							<input type="text" name="alamat" maxlength="150" autocomplete required>
						</td>
					</tr>
					<tr>
						<td>Pimpinan</td><td>:</td>
						<td>
							<input type="text" name="pimpinan" maxlength="150" autocomplete required>
						</td>
					</tr>
					<tr>
						<td>NIP Pimpinan</td><td>:</td>
						<td>
							<input type="text" name="pimpinan_nip"  maxlength="50" autocomplete required>
						</td>
					</tr>
					<tr>
						<td>Petugas </td><td>:</td>
						<td>
							<input type="text" name="petugas"  maxlength="50" autocomplete required>
						</td>
					</tr>
					<tr>
						<td>NIP Petugas</td><td>:</td>
						<td>
							<input type="text" name="petugas_nip"  maxlength="150" autocomplete required>
						</td>
					</tr>
					<tr>
						<td>Tahun</td><td>:</td>
						<td>
							<input type="text" name="tahun"  maxlength="150" autocomplete required>
						</td>
					</tr>
					
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
  $alamat = $_POST['alamat'];
  $pimpinan  = $_POST['pimpinan'];
  $pimpinan_nip  = $_POST['pimpinan_nip'];
  $petugas = $_POST['petugas'];
  $petugas_nip= $_POST['petugas_nip'];
  $tahun = $_POST['tahun'];
			$sql = "INSERT INTO config (nama,alamat,pimpinan,pimpinan_nip,petugas,petugas_nip,tahun) VALUES ($nama', '$alamat', '$logo', '$pimpinan', '$pimpinan_nip', '$petugas', '$petugas_nip', '$tahun', '$profil')";
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