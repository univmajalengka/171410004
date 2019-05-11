<?php
include 'koneksi.php';
  $id_lokasi = $_POST['id_lokasi']; 
  $nama  = $_POST['nama'];

$link = koneksi_db();
$sql = "UPDATE lokasi SET nama='$nama'WHERE id_lokasi='$id'";
$res = mysqli_query($link,$sql);
if ($res) {
	?>
	<script type="text/javascript">
		alert("Data kategori dengan ID <?=$id?> berhasil di update");
		window.location.href="lokasi.php";
	</script>
	<?php
} else{
	?>
	<script type="text/javascript">
		alert("Data gagal diupdate");
		window.location.href="lokasi.php";
	</script>
	<?php
}
?>