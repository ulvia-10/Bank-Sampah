<?php include "koneksi.php"; ?>
<?php
	$id = $_GET['id_produk'];
	$kode = $_POST['txt_kode'];
	$nama = $_POST['txt_nama'];
	$ukuran = $_POST['txt_ukuran'];
	$warna = $_POST['txt_warna'];
	$jumlah = $_POST['txt_jumlah'];
	$harga = $_POST['txt_harga'];
	$kategori = $_POST['txt_kategori'];
	$foto = $_FILES['txt_foto']['name'];
	$tmp = $_FILES['txt_foto']['tmp_name'];

		$fotobaru = date('dmYHis').$foto;
		$path = "image/".$fotobaru;

		if (move_uploaded_file($tmp, $path)) {
			$q = "SELECT * FROM produk WHERE id_produk='".$id."'";
			$proses = mysqli_query($koneksi,$q);

			if(is_file("images/".$data['txt_foto']))
      			unlink("images/".$data['txt_foto']);

      		$q = "UPDATE produk SET kode_produk='".$kode."',nama_produk='".$nama."', kategori='".$kategori."', ukuran='".$ukuran."', warna='".$warna."', jumlah='".$jumlah."', harga='".$harga."', foto='".$fotobaru."' WHERE id_produk='".$id."'";
      		$proses = mysqli_query($koneksi, $q);

			if ($proses) {
				echo "<script>alert('Update Data Berhasil')
				location.replace('view.php')</script>";
			} else{
				echo "<script>alert('Update Data Gagal')
				location.replace('update.php)</script>";
			}
		} else{
			echo "Maaf gambar gagal untuk diupload.";
			echo "<br><a href='insert.php'>Kembali Ke Form</a>";
		}
?>