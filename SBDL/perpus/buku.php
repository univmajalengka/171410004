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
	<title>Tambah Buku</title>
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
          <a href="tambah_buku.php" class="tdata">Tambah Data</a>
      <?php
    $link = koneksi_db(); 
        $sql = "SELECT * FROM view_buku"; 
        $res = mysqli_query($link,$sql);
        $banyakrecord = mysqli_num_rows($res); 
        if($banyakrecord > 0){
          ?>
            <table class="tb1">
              <tr>
                <td colspan="15">
                  DAFTAR BUKU
                </td>
              </tr> 
              <tr>
                <td>Id Buku</td>
                <td>Judul</td>
                <td>Pengarang</td>
                <td>Penerbit</td>
                <td>Nama Kelas</td>
                <td>Nama Jenis</td>
                <td colspan="7">Action</td>
              </tr>
              <?php
              $i=0;
              while($data=mysqli_fetch_array($res)){ 
              $i++;
              ?>
              <tr>
                <td>
                  <?php echo $data['id_buku'];?>
                </td>
                <td>
                  <?php echo $data['judul'];?>
                </td>
                <td>
                  <?php echo $data['pengarang'];?>
                </td>
                <td>
                  <?php echo $data['penerbit'];?>
                </td>
                <td>
                  <?php echo $data['nama_kelas'];?>
                </td>
                <td>
                  <?php echo $data['nama_jenis'];?>
                </td>
                

                 
                <td width="70px">
                  <a href="detail_buku.php?id_buku=<?=$data["id_buku"]?>" class="myButton">Detail</a>
                </td>
                <td width="70px">
                   <a href="update_buku.php?id_buku=<?=$data["id_buku"]?>" class="update">Update</a>
                </td>
                <td width="70px">
                    <a href="delete_buku.php?id_buku=<?=$data["id_buku"]?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" class="delete">Delete</a>
                </td>
              </tr>
              <?php
            }
            ?>
          </table>
         
          <?php
        }
          ?>
      </div>
    </div>



           
  </body>
</html>
