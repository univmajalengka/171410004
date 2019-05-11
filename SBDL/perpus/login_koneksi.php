<?php
include 'konek.php';
$username = $_POST['username'];
$password = $_POST['password'];

$login = mysql_query("select * from user where username='$username' and password='$password'");
$cek = mysql_num_rows($login);

if($cek > 0){
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	
	echo "<script>

			alert('Login Berhasil');
			document.location.href='index.php';

	</script>";	
		
}else {
	echo "<script>

			alert('Login Gagal!');
			document.location.href='login.php';

	</script>";	

}
?>