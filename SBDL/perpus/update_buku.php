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
	<title>Update Data Buku</title>
</head>
<body>
	<nav>
		<ul class="kiri">
			<li><a href="index.php">UPDATE DATA BUKU</a></li>
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
			$id = $_GET['id_buku'];
			$link = koneksi_db();
			$sql = "SELECT * FROM buku WHERE id_buku='$id'";
			$res = mysqli_query($link,$sql);

			if (mysqli_num_rows($res)==1) {
				$data = mysqli_fetch_array($res);
			?>
			<form action="proses_update_transaksi.php?id_buku=<?=$data['id_buku']; ?>" method="POST">
				<h1><font size="5">Edit Buku : </font></h1><br>
				<table width="430px">
					<tr>
						<td>Id Kelas</td><td>:</td>
						<td>
							<input type="text" name="id_kelas"  value="<?=$data['id_kelas'];?>" maxlength="6" autocomplete required>
						</td>
					</tr>
					<tr>
						<td>Id Jenis</td><td>:</td>
						<td>
							<input type="text" name="id_jenis"  value="<?=$data['id_jenis'];?>" maxlength="5" autocomplete required>
						</td>
					</tr>
					<tr>
						<td>Judul</td><td>:</td>
						<td>
							<input type="text" name="judul"  value="<?=$data['judul'];?>" maxlength="150"  autocomplete required>
						</td>
					</tr>
					<tr>
						<td>Pengarang</td><td>:</td>
						<td>
							<input type="text" name="pengarang"  value="<?=$data['Pengarang'];?>" maxlength="150" autocomplete required>
						</td>
					</tr>
					<tr>
						<td>Penerbit</td><td>:</td>
						<td>
							<input type="text" name="penerbit"  value="<?=$data['penerbit'];?>"  maxlength="50" autocomplete required>
						</td>
					</tr>
					<tr>
						<td>Tahun Terbit</td><td>:</td>
						<td>
							<input type="text" name="th_terbit"  value="<?=$data['th_terbit'];?>" maxlength="50" autocomplete required>
						</td>
					</tr>
					<tr>
						<td>Isbn</td><td>:</td>
						<td>
							<input type="text" name="isbn"  value="<?=$data['isbn'];?>" maxlength="150" autocomplete required>
						</td>
					</tr>
					<tr>
						<td>Jumlah Halaman</td><td>:</td>
						<td>
							<input type="text" name="jml_hal" value="<?=$data['jml_hal'];?>" maxlength="150" autocomplete required>
						</td>
					</tr>
					<tr>
						<td>Harga</td><td>:</td>
						<td>
							<input type="text" name="harga"  value="<?=$data['harga'];?>" maxlength="50" autocomplete required>
						</td>
					</tr>
					<tr>
						<td>Id Lokasi</td><td>:</td>
						<td>
							<input type="text" name="id_lokasi"  value="<?=$data['id_lokasi'];?>" maxlength="50" autocomplete required>
						</td>
					</tr>
					<tr>
						<td>Tanggal Input</td><td>:</td>
						<td>
							<input type="date" name="tgl_input"  value="<?=$data['tgl_input'];?>" maxlength="50" autocomplete required>
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