<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body>
	
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Maaf, username dan password tidak sesuai!</div>";
		}
	}
	?>

	<div class="kotak_login">
	<div style="display: flex;margin-left: 65px; margin-top: -5%;"><img src="img/logo.jpg" style="width:100px; height:60px;"></div>
	<p class="tulisan_login">LOGIN <i class="fas fa-lock    "></i></p>
		<form action="cek_login.php" method="post">
			<label> <i class="fa fa-user-circle" aria-hidden="true"></i>  Username</label>
			<input type="text" name="username" class="form_login" required="required" placeholder="username ..."
			<label> <i class="fa fa-key" aria-hidden="true"></i> Password</label>
			<input type="password" name="password" class="form_login" required="required" placeholder="password ...">
			<input type="submit" class="tombol_log_reg" value="LOGIN">
			<br/>
			<br>
		</form>
		<form action="registrasi.php" method="post">
		<input type="submit" class="tombol_log_reg" value="Have an account? Regist in here!">
		</form>
	</div>
</body>
</html>