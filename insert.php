<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Insert Data</title>
	<link rel="stylesheet" href="insert.css">
</head>
<body>
	<div class="wrapper">
      <nav class="navbar navbar-default">
        <div class="navbar-header">
          <p>HALAMAN ADMIN</p>
        </div>
      </nav>
      <aside class="sidebar">
        <menu>
          <ul class="menu-content">
            <li><a href="halaman_admin.php"><i class="fa fa-home"></i> HOME</a></li>
            <li><a href="insert.php"><i class="fa fa-cube"></i> <span>INSERT DATA</span>
           	<li><a href="view.php"><i class="fa fa-cube"></i> <span>VIEW DATA</span></a></li>
           	<li><a href="logout.php"><i class="fa fa-cube"></i> <span>LOGOUT</span></a></li>
          </ul>
        </menu>
      </aside>
      <section class="content">
        <div class="inner">
          <form action="proses_insert.php" method="post" enctype="multipart/form-data">
          	<p><h3>EDIT DATA</h3></p>
		<table align="center" border="2" cellpadding="1" cellspacing="3" width="400%" style="background-color: #E6E6FA">
			<tr>
				<td>Kode Produk</td>
				<td>
					<input type="text" name="txt_kode">
				</td>
			</tr>
			<tr>
				<td>Nama Produk</td>
				<td>
					<input type="text" name="txt_nama">
				</td>
			</tr>
			<tr>
				<td>Kategori</td>
				<td>
					<br>
					<input type="radio" name="txt_kategori" value="Slingbag">Slingbag
					<input type="radio" name="txt_kategori" value="Handbag">Handbag <br><br>
				</td>
			</tr>
			<tr>
				<td>Ukuran</td>
				<td>
					<input type="text" name="txt_ukuran">
				</td>
			</tr>
			<tr>
				<td>Warna</td>
				<td>
					<input type="text" name="txt_warna">
				</td>
			</tr>
			<tr>
				<td>Jumlah</td>
				<td>
					<input type="text" name="txt_jumlah">
				</td>
			</tr>
			<tr>
				<td>Foto</td>
				<td><input type="file" name="txt_foto"></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td>
					<input type="text" name="txt_harga">
				</td>
			</tr>
			
			
		</table>
		<br>
		<tr>
				<td>
					<input type="submit" name="Insert" value="Insert">
				</td>
			</tr>
	</form>
        </div>
      </section>
    </div>
	
</html>