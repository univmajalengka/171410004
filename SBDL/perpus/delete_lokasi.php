<?php
include 'koneksi.php';
$id = $_GET['id_lokasi'];
$link = koneksi_db();
$sql = "DELETE FROM lokasi WHERE id_lokasi='$id'";
$res = mysqli_query($link,$sql);
if ($res) {
	?>
	<script type="text/javascript">
		alert("Data kategori dengan ID <?=$id?> berhasil dihapus");
		window.location.href="lokasi.php";
	</script>
	<?php
} else{
	?>
	<script type="text/javascript">
		alert("Data gagal dihapus");
		window.location.href="lokasi.php";
	</script>
	<?php
}
?>