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
	<title>Update Data Transaksi</title>
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
			<?php
			$id = $_GET['id'];
			$link = koneksi_db();
			$sql = "SELECT * FROM transaksi WHERE id='$id'";
			$res = mysqli_query($link,$sql);

			if (mysqli_num_rows($res)==1) {
				$data = mysqli_fetch_array($res);
			?>
			<form action="proses_update_transaksi.php?id=<?=$data['id']; ?>" method="POST">
				<h1><font size="5">Edit Transaksi : </font></h1><br>
				<table width="430px">
					<tr>
						<td>Id Buku</td><td>:</td>
						<td>
							<input type="text" name="id_buku" value="<?=$data['id_buku'];?>" maxlength="6" autocomplete required>
						</td>
					</tr>
					<tr>
						<td>Id Anggota</td><td>:</td>
						<td>
							<input type="text" name="id_anggota" value="<?=$data['id_anggota'];?>"  maxlength="6" autocomplete required>
						</td>
					</tr>
					<tr>
						<td>Tanggal Pinjaman</td><td>:</td>
						<td>
							<input type="date" name="tgl_pinjaman" value="<?=$data['tgl_pinjaman'];?>">
						</td>
					</tr>
					<tr>
						<td>Tanggal Kembali</td><td>:</td>
						<td>
							<input type="date" name="tgl_kembali" value="<?=$data['tgl_kembali'];?>">
						</td>
					</tr>
					<tr>
						<td>Statistik</td><td>:</td>
						<td>
							<input type="text" name="stat" value="<?=$data['stat'];?>" maxlength="50" autocomplete required>
						</td>
					</tr>
					<tr>
						<td>Telat</td><td>:</td>
						<td>
							<input type="date" name="telat" value="<?=$data['telat'];?>" maxlength="50" autocomplete required>
						</td>
					</tr>
					<tr>
						<td>Denda</td><td>:</td>
						<td>
							<input type="number" min="1" max="100" step="1" name="tgl_daftar" value="<?=$data['denda'];?>">
						</td>
				
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