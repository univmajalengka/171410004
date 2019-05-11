<?php
include 'koneksi.php';
$id = $_GET['id_anggota'];
  $nama  = $_POST['nama'];
  $alamat  = $_POST['alamat'];
  $jk = $_POST['jk'];
  $agama  = $_POST['agama'];
  $tmp_lahir = $_POST['tmp_lahir'];
  $tgl_lahir = $_POST['tgl_lahir'];
  $tgl_daftar  = $_POST['tgl_daftar'];
$link = koneksi_db();
$sql = "UPDATE anggota SET nama='$nama', alamat='$alamat', jk='$jk', agama='$agama', tmp_lahir='$tmp_lahir', tgl_lahir='$tgl_lahir', tgl_daftar='$tgl_daftar' WHERE id_anggota='$id'";
$res = mysqli_query($link,$sql);
if ($res) {
	?>
	<script type="text/javascript">
		alert("Data kategori dengan ID <?=$id?> berhasil di update");
		window.location.href="anggota.php";
	</script>
	<?php
} else{
	?>
	<script type="text/javascript">
		alert("Data gagal diupdate");
		window.location.href="anggota.php";
	</script>
	<?php
}
?>