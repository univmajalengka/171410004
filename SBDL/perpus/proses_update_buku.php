<?php
include 'koneksi.php';
 $id = $_GET['id_buku'];
  $id_kelas  = $_POST['id_kelas'];
  $id_jenis = $_POST['id_jenis'];
  $judul  = $_POST['judul'];
  $pengarang  = $_POST['pengarang'];
  $penerbit  = $_POST['penerbit'];
  $th_terbit  = $_POST['th_terbit'];
  $isbn  = $_POST['isbn'];
  $jml_hal  = $_POST['jml_hal'];
  $harga  = $_POST['harga'];
  $id_lokasi  = $_POST['id_lokasi'];
  $tgl_input= $_POST['tgl_input'];

$link = koneksi_db();
$sql = "UPDATE transaksi SET id_kelas='$id_kelas', id_jenis='$id_jenis', judul='$judul', pengarang='$pengarang', penerbit='$penerbit', th_terbit='$th_terbit', isbn='$isbn', jml_hal='$jml_hal', harga='$harga', id_lokasi='$id_lokasi', tgl_input='$tgl_input' WHERE id_buku='$id'";
$res = mysqli_query($link,$sql);
if ($res) {
	?>
	<script type="text/javascript">
		alert("Data kategori dengan ID <?=$id?> berhasil di update");
		window.location.href="buku.php";
	</script>
	<?php
} else{
	?>
	<script type="text/javascript">
		alert("Data gagal diupdate");
		window.location.href="buku.php";
	</script>
	<?php
}
?>