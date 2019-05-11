<?php
include 'koneksi.php';
$id = $_GET['id'];
  $nama  = $_POST['nama'];
  $jk = $_POST['jk'];
  $jenis  = $_POST['jenis'];
  $perlu  = $_POST['perlu'];
  $saran= $_POST['saran'];
  $tgl = $_POST['tgl'];

$link = koneksi_db();
$sql = "UPDATE pengunjung SET nama='$nama', jk='$jk', jenis='$jenis', perlu='$perlu', saran='$saran', tgl='$tgl' WHERE id='$id'";
$res = mysqli_query($link,$sql);
if ($res) {
	?>
	<script type="text/javascript">
		alert("Data kategori dengan ID <?=$id?> berhasil di update");
		window.location.href="pengunjung.php";
	</script>
	<?php
} else{
	?>
	<script type="text/javascript">
		alert("Data gagal diupdate");
		window.location.href="pengunjung.php";
	</script>
	<?php
}
?>