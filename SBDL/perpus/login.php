<?php 
session_start();
if(isset($_SESSION['status'])){
  header("location:index.php");
}

include 'konek.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>َLOGIN</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

<form class="box" action="login_koneksi.php" method="post">
  <width="130" height="100" alt=""/>
<h1> LOGIN FORM</h1>
	<hr>
 <h3>Silahkan Isi Nama dan Password Anda:</h3>
  <input type="text" placeholder="Username" name="username">
	<input type="password" placeholder="Password" name="password">
  <input type="submit" name="" value="Login">
</form>


  </body>
</html>
