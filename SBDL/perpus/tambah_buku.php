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
	<title>Tambah Buku</title>
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
				<h1><font size="5" style="text-align: left;">Tambah Buku : </font></h1><br>
				<table width="150px" border="0">
						<tr>
						<td>Id Kelas</td><td>:</td>
						<td>
							<input type="text" name="id_kelas" maxlength="6" autocomplete required>
						</td>
					</tr>
					<tr>
						<td>Id Jenis</td><td>:</td>
						<td>
							<input type="text" name="id_jenis" maxlength="5" autocomplete required>
						</td>
					</tr>
					<tr>
						<td>Judul</td><td>:</td>
						<td>
							<input type="text" name="judul" maxlength="150"  autocomplete required>
						</td>
					</tr>
					<tr>
						<td>Pengarang</td><td>:</td>
						<td>
							<input type="text" name="pengarang" maxlength="150" autocomplete required>
						</td>
					</tr>
					<tr>
						<td>Penerbit</td><td>:</td>
						<td>
							<input type="text" name="penerbit"   maxlength="50" autocomplete required>
						</td>
					</tr>
					<tr>
						<td>Tahun Terbit</td><td>:</td>
						<td>
							<input type="text" name="th_terbit"  maxlength="50" autocomplete required>
						</td>
					</tr>
					<tr>
						<td>Isbn</td><td>:</td>
						<td>
							<input type="text" name="isbn" maxlength="150" autocomplete required>
						</td>
					</tr>
					<tr>
						<td>Jumlah Halaman</td><td>:</td>
						<td>
							<input type="text" name="jml_hal" maxlength="150" autocomplete required>
						</td>
					</tr>
					<tr>
						<td>Harga</td><td>:</td>
						<td>
							<input type="number" min="1" max="100000000" step="1" name="harga"  maxlength="50" autocomplete required>
						</td>
					</tr>
					<tr>
						<td>Id Lokasi</td><td>:</td>
						<td>
							<input type="text" name="id_lokasi"  maxlength="50" autocomplete required>
						</td>
					</tr>
					<tr>
						<td>Tanggal Input</td><td>:</td>
						<td>
							<input type="date" name="tgl_input"  maxlength="50" autocomplete required>
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
		//AmbildatadariForm 

		 // susunSQL
		 // EksekusiSQL

  if (isset($_POST['save'])) {
  $id_buku  = $_POST['id_buku']; 
  $id_kelas  = $_POST['id_kelas'];
  $id_jenis = $_POST['id_jenis'];
  $judul  = $_POST['judul'];
  $pengarang  = $_POST['pengarang'];
  $penerbit  = $_POST['penerbit'];
  $th_terbit  = $_POST['th_terbit'];
  $isbn  = $_POST['isbn'];
  $jml_hal  = $_POST['jml_hal'];
  $harga  = $_POST['harga'];
  $id_lokasi  = $_POST['id_lokasi'];
  $tgl_input= $_POST['tgl_input'];
			$sql = "INSERT INTO buku (id_buku,id_kelas,id_jenis,judul,pengarang,penerbit,th_terbit,isbn,jml_hal,harga,id_lokasi,tgl_input) VALUES ('$id_buku', '$id_kelas', '$id_jenis', '$judul', '$pengarang', '$penerbit', '$th_terbit', '$isbn', '$jml_hal', '$harga', '$id_lokasi', '$tgl_input')";
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