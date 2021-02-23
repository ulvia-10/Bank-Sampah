<?php include "koneksi.php";?>
<?php
	$username = $_POST['username'];
	$password = $_POST['password'];
	$q = "insert into user (username,password) values ('$username','$password')";
	$proses = mysqli_query($koneksi,$q);
	if ($proses) {
		$errType = "SUCCESS";
		$errMSG = "REGISTER SUKSES, SILAHKAN LOG IN";
		header("location: login.php");
	} else{
		$errType = "FAILED";
		$errMSG = "REGISTER GAGAL, SILAHKAN COBA LAGI";
	}
?>