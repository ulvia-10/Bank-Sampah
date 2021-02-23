<?php include "koneksi.php";?>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Read Data</title>
	<link rel="stylesheet" href="styleadmin.css">
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
          <?php
			$cari = $_POST['search_text'];
			$q = "select * from produk where nama_produk like '%$cari%'";
			$proses = mysqli_query($koneksi,$q);
			$row = mysqli_num_rows($proses);
	if ($row > 0){
		echo "<table align='center' border='2' cellpadding='1' cellspacing='3' width='240%' style='background-color: #E6E6FA'";
		echo "<tr>
				<th>Kode Produk</th>
				<th>Nama Produk</th>
				<th>Kategori</th>
				<th>Ukuran</th>
				<th>Warna</th>
				<th>Jumlah</th>
				<th>Foto</th>
				<th>Harga</th>
				<th>Opsi</th>
			</tr>";
		$kode=1;
		while ($data=mysqli_fetch_array($proses)){			
			echo "<tr>";
				echo "<td>".$kode['kode_produk']."</td>";
				echo "<td>".$data['nama_produk']."</td>";
				echo "<td>".$data['kategori']."</td>";
				echo "<td>".$data['ukuran']."</td>";
				echo "<td>".$data['warna']."</td>";
				echo "<td>".$data['jumlah']."</td>";
				echo "<td><img src='image/".$data['foto']."' width='120' height='100'></td>";
				echo "<td>".$data['harga']."</td>";
				echo "<td>
						<a href='update.php?id=$kode'>UPDATE</a>
						<a href='delete.php?id=$kode'>DELETE</a>
					  </td>";
			echo "</tr>";
			$kode++;
		}
	}else{
		echo "<script>alert('Maaf, hasil pencarioan tidak ditemukan')
		location.replace('view.php')</script>";
	}
?>
        </div>
      </section>
      <br>
      <form action="view.php" method="post">
		<input type="submit" class="tombol_log_reg" value="Kembali">
	</form>

    </div>

</body>
</html>