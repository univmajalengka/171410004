<?php
include 'koneksi.php';
$id = $_GET['id_anggota'];
$link = koneksi_db();
$sql = "DELETE FROM anggota WHERE id_anggota='$id'";
$res = mysqli_query($link,$sql);
if ($res) {
	?>
	<script type="text/javascript">
		alert("Data kategori dengan ID <?=$id?> berhasil dihapus");
		window.location.href="anggota.php";
	</script>
	<?php
} else{
	?>
	<script type="text/javascript">
		alert("Data gagal dihapus");
		window.location.href="anggota.php";
	</script>
	<?php
}
?>