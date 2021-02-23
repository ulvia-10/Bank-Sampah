<?php 
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];
session_start();
$login = "select * from user where username='$username' and password='$password'";
$res = mysqli_query($koneksi,$login);
$row = mysqli_num_rows($res);

if($row==1){
	$c = mysqli_fetch_array($res);
	$_SESSION['username'] = $c['username'];
	$_SESSION['id'] = $c['id'];
	$_SESSION['level'] = $c['level'];

	if ($c['level']=='admin') {
		header("location: halaman_admin.php");
	}elseif ($c['level']=='user') {
		header("location: halaman_admin.php");
	}else{
		die("GAGAL LOGIN <a href=\"javascript:history.back()\")>Kembali</a>");
	}
}else{
	header("location:login.php?pesan=gagal");
}

?>