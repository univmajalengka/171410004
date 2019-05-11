<?php
include 'koneksi.php';
	 	$id = $_GET['id'];
 	 	$id_buku  = $_POST['id_buku'];
  		$id_anggota = $_POST['id_anggota'];
  		$tgl_pinjaman= $_POST['tgl_pinjaman'];
  		$tgl_kembali= $_POST['tgl_kembali'];
  		$stat  = $_POST['stat'];
  		$telat = $_POST['telat'];
  		$denda= $_POST['denda'];
$link = koneksi_db();
$sql = "UPDATE transaksi SET id_buku='$id_buku', id_anggota='$id_anggota', tgl_pinjaman='$tgl_pinjaman', tgl_kembali='$tgl_kembali', stat='$stat', telat='$telat', denda='$denda' WHERE id='$id'";
$res = mysqli_query($link,$sql);
if ($res) {
	?>
	<script type="text/javascript">
		alert("Data kategori dengan ID <?=$id?> berhasil di update");
		window.location.href="transaksi.php";
	</script>
	<?php
} else{
	?>
	<script type="text/javascript">
		alert("Data gagal diupdate");
		window.location.href="transaksi.php";
	</script>
	<?php
}
?>