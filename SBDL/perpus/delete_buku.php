<?php
include 'koneksi.php';
$id = $_GET['id_buku'];
$link = koneksi_db();
$sql = "DELETE FROM buku WHERE id_buku='$id'";
$res = mysqli_query($link,$sql);
if ($res) {
	?>
	<script type="text/javascript">
		alert("Data kategori dengan ID <?=$id?> berhasil dihapus");
		window.location.href="buku.php";
	</script>
	<?php
} else{
	?>
	<script type="text/javascript">
		alert("Data gagal dihapus");
		window.location.href="buku.php";
	</script>
	<?php
}
?>