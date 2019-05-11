<!DOCTYPE html>
<html>
  <head>
    <title>Home</title>
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
      <li><a href="home.php"></a></li>
    </ul>
  </nav>
            <div class="sidebar">
               
                <ul class="nav side-menu">
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
  </div>

             <div class="right">
    <div class="isimain">
     <a href="tambah_anggota.php" class="tdata">Tambah Data</a>
      <?php
    $link = koneksi_db(); 
        $sql = "SELECT * FROM anggota"; 
        $res = mysqli_query($link,$sql);
        $banyakrecord = mysqli_num_rows($res); 
        if($banyakrecord > 0){
          ?>
            <table class="tb1">
              <tr>
                <td colspan="15">
                  DAFTAR ANGGOTA
                </td>
              </tr> 
              <tr>
                <td>Id</td>
                <td>Nama</td>
                <td>Alamat</td>
                <td>Jenis Kelamin</td>
                <td>Agama</td>
                <td>Tempat Lahir</td>
                <td>Tanggal Lahir</td>
                <td>Tanggal Daftar</td>
                <td colspan="7">Action</td>
              </tr>
              </tr>
              <?php
              $i=0;
              while($data=mysqli_fetch_array($res)){ 
              $i++;
              ?>
              <tr>
                <td>
                  <?php echo $data['id_anggota'];?>
                </td>
                <td>
                  <?php echo $data['nama'];?>
                </td>
                <td>
                  <?php echo $data['alamat'];?>
                </td>
                <td>
                  <?php echo $data['jk'];?>
                </td>
                <td>
                  <?php echo $data['agama'];?>
                </td>
                <td>
                  <?php echo $data['tmp_lahir'];?>
                </td>
                <td>
                  <?php echo $data['tgl_lahir'];?>
                </td>
                <td>
                  <?php echo $data['tgl_daftar'];?>
                </td>

                <td width="70px">
                  <a href="detail_anggota.php?id_anggota=<?=$data["id_anggota"]?>" class="myButton">Detail</a>
                </td>
                <td width="70px">
                   <a href="update_anggota.php?id_anggota=<?=$data["id_anggota"]?>" class="update">Update</a>
                </td>
                <td width="70px">
                    <a href="delete_anggota.php?id_anggota=<?=$data["id_anggota"]?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" class="delete">Delete</a>
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
