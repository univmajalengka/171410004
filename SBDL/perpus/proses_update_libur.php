<?php
include 'koneksi.php';
  $id = $_POST['id']; 
  $tanggal  = $_POST['tanggal'];
  $nama  = $_POST['nama'];

$link = koneksi_db();
$sql = "UPDATE libur SET tanggal='$tanggal', nama='$nama'WHERE id='$id'";
$res = mysqli_query($link,$sql);
if ($res) {
	?>
	<script type="text/javascript">
		alert("Data kategori dengan ID <?=$id?> berhasil di update");
		window.location.href="libur.php";
	</script>
	<?php
} else{
	?>
	<script type="text/javascript">
		alert("Data gagal diupdate");
		window.location.href="libur.php";
	</script>
	<?php
}
?>