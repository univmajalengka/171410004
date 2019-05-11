<?php
include 'koneksi.php';
$id_jenis = $_GET['id_jenis'];
$link = koneksi_db();
$sql = "DELETE FROM jenis WHERE id_jenis='$id'";
$res = mysqli_query($link,$sql);
if ($res) {
	?>
	<script type="text/javascript">
		alert("Data kategori dengan ID <?=$id?> berhasil dihapus");
		window.location.href="jenis.php";
	</script>
	<?php
} else{
	?>
	<script type="text/javascript">
		alert("Data gagal dihapus");
		window.location.href="jenis.php";
	</script>
	<?php
}
?>