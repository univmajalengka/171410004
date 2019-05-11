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
	<title>Update Data Anggota</title>
</head>
<body>
	<nav>
		<ul class="kiri">
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
			<?php
			$id = $_GET['id_anggota'];
			$link = koneksi_db();
			$sql = "SELECT * FROM anggota WHERE id_anggota='$id'";
			$res = mysqli_query($link,$sql);

			if (mysqli_num_rows($res)==1) {
				$data = mysqli_fetch_array($res);
			?>
			<form action="proses_update_anggota.php?id_anggota=<?=$data['id_anggota']; ?>" method="POST">
				<h1><font size="5">Edit Anggota : </font></h1><br>
				<table width="430px">
					<tr>
						<td>Nama</td><td>:</td>
						<td>
							<input type="text" name="nama" value="<?=$data['nama'];?>" required>
						</td>
					</tr>
					<tr>
						<td>Alamat</td><td>:</td>
						<td>
							<input type="text" name="alamat" value="<?=$data['alamat'];?>" maxlength="150" autocomplete required>
						</td>
					</tr>
					<tr>
						<td>Jenis Kelamin</td><td>:</td>
						<td>
							<input type="text" name="jk" value="<?=$data['jk'];?>" maxlength="50" autocomplete required>
						</td>
					</tr>
					<tr>
						<td>Agama</td><td>:</td>
						<td>
							<input type="text" name="agama" value="<?=$data['agama'];?>" maxlength="50" autocomplete required>
						</td>
					</tr>
					<tr>
						<td>Tempat Lahir</td><td>:</td>
						<td>
							<input type="text" name="tmp_lahir" value="<?=$data['tmp_lahir'];?>" maxlength="50" autocomplete required>
						</td>
					</tr>
					<tr>
						<td>Tanggal Lahir</td><td>:</td>
						<td>
							<input type="date" name="tgl_lahir" value="<?=$data['tgl_lahir'];?>" maxlength="50" autocomplete required>
						</td>
					</tr>
					<tr>
						<td>Tanggal Daftar</td><td>:</td>
						<td>
							<input type="date" name="tgl_daftar" value="<?=$data['tgl_daftar'];?>" maxlength="50" autocomplete required>
						</td>
					</tr>
					<tr>
						<td colspan="3" style="padding-top: 15px;text-align: center;"><input type="submit" value="Simpan" name="save"></td>
					</tr>
				</table>
			</form>
			<?php } ?>
		</div>
	</div>
</body>
</html>