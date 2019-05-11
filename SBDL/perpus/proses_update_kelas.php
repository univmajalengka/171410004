<?php
include 'koneksi.php';
  $id_kelas = $_POST['id_kelas']; 
  $nama  = $_POST['nama'];

$link = koneksi_db();
$sql = "UPDATE kelas SET nama='$nama'WHERE id_kelas='$id'";
$res = mysqli_query($link,$sql);
if ($res) {
	?>
	<script type="text/javascript">
		alert("Data kategori dengan ID <?=$id?> berhasil di update");
		window.location.href="kelas.php";
	</script>
	<?php
} else{
	?>
	<script type="text/javascript">
		alert("Data gagal diupdate");
		window.location.href="kelas.php";
	</script>
	<?php
}
?>