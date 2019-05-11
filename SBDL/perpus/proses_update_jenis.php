<?php
include 'koneksi.php';
  $id_jenis = $_POST['id_jenis']; 
  $nama  = $_POST['nama'];

$link = koneksi_db();
$sql = "UPDATE jenis SET nama='$nama'WHERE id_jenis='$id'";
$res = mysqli_query($link,$sql);
if ($res) {
	?>
	<script type="text/javascript">
		alert("Data kategori dengan ID <?=$id?> berhasil di update");
		window.location.href="jenis.php";
	</script>
	<?php
} else{
	?>
	<script type="text/javascript">
		alert("Data gagal diupdate");
		window.location.href="jenis.php";
	</script>
	<?php
}
?>