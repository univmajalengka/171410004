<!DOCTYPE html>
<html>
  <head>
    <title>Jenis</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
  <?php
  error_reporting(E_ERROR | E_WARNING | E_PARSE);
  include("koneksi.php");
  // mengaktifkan session
session_start();
 
// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if($_SESSION['status'] !="login"){
  header("location:login.php");
} 
?> 
  </head>
<body>
  <nav>
    <ul class="kiri">
    </ul>
  </nav>
            <div class="sidebar">
               
                <ul class="nav side-menu">
        <ul>
    <li><a href="index.php">Home</a></li>
      <li><a href="anggota.php">Anggota</a></li>
      <li><a href="Transaksi.php">Transaksi</a></li>
      <li><a href="libur.php">Libur</a></li>
      <li><a href="buku.php">Buku</a></li>
      <li><a href="config.php">Config</a></li>
      <li><a href="jenis.php">Jenis</a></li>
      <li><a href="lokasi.php">Lokasi</a></li>
      <li><a href="pengunjung.php">Pengunjung</a></li>
      <li><a href="kelas.php">Kelas</a></li>
      <li><a href="logout.php">LOGOUT</a></li>
    </ul>
    </ul>
  </div>

             <div class="right_col" role="main">
    <div class="isimain">
          <a href="tambah_jenis.php" class="tdata">Tambah Data</a>
      <?php
        $link = koneksi_db(); 
        $sql = "SELECT * FROM jenis"; 
        $res = mysqli_query($link,$sql);
        $banyakrecord = mysqli_num_rows($res); 
        if($banyakrecord > 0){
          ?>
            <table class="tb1">
              <tr>
                <td colspan="10">
                  DAFTAR JENIS BUKU
                </td>
              </tr> 
              <tr>
                <td>ID</td>
                <td>Nama</td>
                <td colspan="3">Action</td>
              </tr>
              <?php
              $i=0;
              while($data=mysqli_fetch_array($res)){ 
              $i++;
              ?>
              <tr>
                <td>
                  <?php echo $data['id_jenis'];?>
                </td>
                <td>
                  <?php echo $data['nama'];?>
                </td>

               
                <td width="70px">
                  <a href="detail_jenis.php?id_jenis=<?=$data["id_jenis"]?>" class="myButton">Detail</a>
                </td>
                <td width="70px">
                   <a href="update_jenis.php?id_jenis=<?=$data["id_jenis"]?>" class="update">Update</a>
                </td>
                <td width="70px">
                    <a href="delete_jenis.php?id_jenis=<?=$data["id_jenis"]?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" class="delete">Delete</a>
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
