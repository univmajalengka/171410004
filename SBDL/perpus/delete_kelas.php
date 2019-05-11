<?php
include 'koneksi.php';
$id = $_GET['id_kelas'];
$link = koneksi_db();
$sql = "DELETE FROM kelas WHERE id_kelas='$id'";
$res = mysqli_query($link,$sql);
if ($res) {
	?>
	<script type="text/javascript">
		alert("Data kategori dengan ID <?=$id?> berhasil dihapus");
		window.location.href="kelas.php";
	</script>
	<?php
} else{
	?>
	<script type="text/javascript">
		alert("Data gagal dihapus");
		window.location.href="kelas.php";
	</script>
	<?php
}
?>