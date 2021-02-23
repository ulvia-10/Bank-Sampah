<?php include "koneksi.php";?>
<!DOCTYPE html>
<html>
<head>
	<title>Registrasi</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="kotak_login">
		<p class="tulisan_login"> REGISTER <i class="fas fa-user-lock    "></i> </p>
		<form action="cek_regist.php" method="post">
			<label> <i class="fa fa-user-circle" aria-hidden="true"></i> username</label>
			<input type="text" name="username" class="form_login" required="required" placeholder="username ...">
			<label> <i class="fa fa-key" aria-hidden="true"></i> password</label>
			<input type="password"  name="password" class="form_login" required="required" placeholder="password ...">
			<input type="submit" class="tombol_log_reg" value="REGISTER" ><br><br>
		</form>
		<form action="login.php" method="post">
			<input type="submit" class="tombol_log_reg" value="BACK TO LOGIN ">
		</form>
</div>