<?php
	session_start();
	session_unset();
	include "function.php";
	
if (isset($_POST['login'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$qry = mysqli_query($koneksi, "SELECT * from tb_user where username = '$username' AND password = '$password'");
	$cek = mysqli_num_rows($qry);
	if ($cek==1){
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
		header("location:data_barang.php");
		exit;
	}
	else{
		echo "Maaf username dan password anda salah";
	}
}	
?>
