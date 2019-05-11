<?php
include 'koneksi.php';
 $id = $_GET['id'];
  $nama  = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $pimpinan  = $_POST['pimpinan'];
  $pimpinan_nip  = $_POST['pimpinan_nip'];
  $petugas = $_POST['petugas'];
  $petugas_nip= $_POST['petugas_nip'];
  $tahun = $_POST['tahun'];

$link = koneksi_db();
$sql = "UPDATE config SET nama='$nama', alamat='$alamat', pimpinan='$pimpinan', pimpinan_nip='$pimpinan_nip', petugas='$petugas', petugas_nip='$petugas_nip', tahun='$tahun' WHERE id='$id'";
$res = mysqli_query($link,$sql);
if ($res) {
	?>
	<script type="text/javascript">
		alert("Data kategori dengan ID <?=$id?> berhasil di update");
		window.location.href="config.php";
	</script>
	<?php
} else{
	?>
	<script type="text/javascript">
		alert("Data gagal diupdate");
		window.location.href="config.php";
	</script>
	<?php
}
?>