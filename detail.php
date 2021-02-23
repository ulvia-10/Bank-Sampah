<html>
<head>
	<title>Soraya Bags Store</title>
	<a href="stylesheet" type="text/css" href="slingbag.css"></a>
	<script src="js/jquery-1.11.0.min.js"></script>
	<link href="slingbag.css" rel="stylesheet" type="text/css" media="all"/></link>
</head>
<div class="header">
	<div class="container">
		<div class="header-main">
			<div class="top-nav">
				<div class="content white">
	              <nav class="navbar navbar-default" role="navigation">
			
					    <!--/.navbar-header-->
					 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					        <ul class="nav navbar-nav">
					        	<li><a href="halaman_user.php">Home</a></li>
						            <li>
						        	<a href="slingbag.php">Sling Bag <b class="caret"></b></a>
						        </li>
						        <li>
						        	<a href="handbag.php">Hand Bag <b class="caret"></b></a>
						        </li>
						        <li><a href="contact.php">Contact</a></li>
					        </ul>
					    </div>
					</nav>
				</div>
			</div>
			<div class="header-right">
				<div class="search">
					<div class="search-text">
					    <input class="serch" type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}"/>
					</div>
					<div class="cart box_1">
						<a href="checkout.html">
						<h3>
							<img src="image/cart.png" alt=""/>
							<div class="total">
							<span class="simpleCart_total"></span></div>
							</h3>
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
					</div>    
					<div class="head-signin">
						<h5><a href="login.html"><i class="hd-dign"></i>Sign in</a></h5>
					</div>              
                    <div class="clearfix"> </div>					
				</div>
			</div>
		 <div class="clearfix"> </div>
		</div>
	</div>
</div>
<body>
	<div class="product">
	<div class="container2">
			<?php
					include 'koneksi.php';
					$id=$_GET['id_produk'];
					$q = "select * from produk where id_produk=$id";
					$proses = mysqli_query($koneksi, $q);
					$data = mysqli_fetch_array($proses);
			?>
			<div class="home-product-top">
				<?php
					echo "<center><img style='width:500px; height:490px;' src='image/".$data['foto']."' '></center>"; 
				?>
			</div>
			<div class="home-product-bottom">
				<?php
					echo "<center><h2>".$data['nama_produk'];
					echo "<center><h4> Harga : Rp. ".$data['harga'];
					echo "<h4> Jenis : ".$data['kategori']."</h4>";
					echo "<h4> Size : ".$data['ukuran']."</h4>";
					echo "<h4> Warna : ".$data['warna']."</h4>";
				?> 
			</div>
		</a>
		</div>	
	</div>
</div>
<div class="footer">
	<div class="container">
		<div class="footer-main">
			<div class="ftr-grids-block">
				<div class="col-md-3 footer-grid">
					<ul>
						<li><a href="contact.php">Contact Us</a></li>
						<li><a href="slingbag.php">Slingbag Product</a></li>
						<li><a href="handbag.php">Handbag Product</a></li>
					</ul>
				</div>
				<div class="col-md-3 footer-grid-icon">
					<ul>
						<li><a href="#"><span class="instro"> </span></a></li>
						<li><a href="#"><span class="fb"> </span></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>