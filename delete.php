<?php
include "koneksi.php";
$id = $_GET['id'];
$q = "SELECT * FROM setor WHERE id_setor = $id ";
$proses = mysqli_query($koneksi, $q);
$data = mysqli_fetch_array($proses);

$q2 = "DELETE FROM setor WHERE id_setor= $id";
$proses2 = mysqli_query($koneksi, $q2);
if($proses2){
  		header("location: tables.php");
	}else{
  		echo "Data gagal dihapus. <a href='tables.php'>Kembali</a>";
	}
?>