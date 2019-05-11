<!DOCTYPE html>
<html>
<head>
	<?php
		error_reporting(E_ERROR | E_WARNING | E_PARSE);
		include "koneksi.php"; 
 // mengaktifkan session
session_start();
 
// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if($_SESSION['status'] !="login"){
  header("location:login.php");
}
	?>
	<link rel="stylesheet" type="text/css" href="style2.css">
	<title>Detail Buku</title>
</head>
<body>
	<nav>
		<ul class="kiri">
		</ul>
	</nav>
	<div class="sidebar">
		<ul>
		<li><a href="index.php">Home</a></li>
      <li><a href="anggota.php">Anggota</a></li>
      <li><a href="Transaksi.php">Transaksi</a></li>
      <li><a href="Libur.php">Libur</a></li>
      <li><a href="buku.php">Buku</a></li>
      <li><a href="config.php">Config</a></li>
      <li><a href="jenis.php">Jenis</a></li>
      <li><a href="lokasi.php">Lokasi</a></li>
      <li><a href="pengunjung.php">Pengunjung</a></li>
      <li><a href="kelas.php">Kelas</a></li>
      <li><a href="logout.php">LOGOUT</a></li>
		</ul>
	</div>
	 </div>

             <div class="right">
    <div class="isimain">
      <?php
    $link = koneksi_db(); 
    $id = $_GET['id_buku'];
        $sql = "SELECT * FROM buku WHERE id_buku='$id'"; 
        $res = mysqli_query($link,$sql);
        $banyakrecord = mysqli_num_rows($res); 
        $i=0;
              while($data=mysqli_fetch_array($res)){ 
              $i++;
              ?>
           <h3>Detail Buku</h3>
     <div class="content">
        <table class="table-form" border="0" width="100%" cellpadding="10" cellspacing="10">
              <tr>
                <tr>
                <td width="20%">Id Buku</td>
                <td width="1%">:</td>
                <td><?php echo $data['id_buku']; ?></td>
            </tr>
            <tr>
                <td>Id Kelas</td>
                <td width="1%">:</td>
                <td><?php echo $data['id_kelas']; ?></td>
            </tr>
            <tr>
                <td>Id Jenis</td>
                <td width="1%">:</td>
                <td><?php echo $data['id_jenis']; ?></td>
            </tr>
            <tr>
                <td>Judul</td>
                <td width="1%">:</td>
                <td><?php echo $data['judul']; ?></td>
            </tr>
            <tr>
                <td>Pengarang</td>
                <td width="1%">:</td>
                <td><?php echo $data['pengarang']; ?></td>
            </tr>
            <tr>
                <td>Penerbit</td>
                <td width="1%">:</td>
                <td><?php echo $data['penerbit']; ?></td>
            </tr>
            <tr>
                <td>Tahun Terbit</td>
                <td width="1%">:</td>
                <td><?php echo $data['th_terbit']; ?></td>
            </tr>
             <tr>
                <td>Isbn</td>
                <td width="1%">:</td>
                <td><?php echo $data['isbn']; ?></td>
            </tr>
             <tr>
                <td>Jumlah Halaman</td>
                <td width="1%">:</td>
                <td><?php echo $data['jml_hal']; ?></td>
            </tr>
             <tr>
                <td>Harga</td>
                <td width="1%">:</td>
                <td><?php echo $data['harga']; ?></td>
            </tr>
             <tr>
                <td>Id Lokasi</td>
                <td width="1%">:</td>
                <td><?php echo $data['id_lokasi']; ?></td>
            </tr>
             <tr>
                <td>Tanggal Input</td>
                <td width="1%">:</td>
                <td><?php echo $data['tgl_input']; ?></td>
            </tr>
          </table>
          
          <?php
        }
          ?>
      </div>
       <a href="buku.php"><input type="submit" value="Kembali"></a>
    </div>



           
  </body>
</html>
