<?php include "koneksi.php";
	$nama = $_POST['txt_nama'];
	$notelp = $_POST['txt_notelp'];
	$berat = $_POST['txt_berat'];
	$total = $_POST['txt_total'];
	$qrcode = $_POST['txt_qrcode'];
	$jenis = $_POST['jenis'];

	$q = "insert into setor (nama, notelp, qrcode, jenis, berat, total) values ('".$nama."', '".$notelp."', '".$qrcode."', '".$jenis."', '".$berat."',  '".$total."')";
	$proses = mysqli_query($koneksi,$q);
	if ($proses) {
		echo "<script>alert('Insert Data Berhasil')
		location.replace('halaman_admin.php')</script>";
	} else{
		echo "<script>alert('Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.') location.replace('insert.php)</script>";
	}	
?>
