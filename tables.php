<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">

    <title>Bank Sampah | Official</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
            <img src="img/logo.jpg" style=" width: 90px; height: 50px; display: flex; margin-top:10px; margin-left: 80px;">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
              <h2  class="judul" style="margin-left: 400px; margin-top: 15px; ">WELCOME TO ADMIN PAGE !</h2>
              <div class="navbar-collapse collapse">
                  <ul class="nav navbar-nav" data-0="margin-top:20px;" data-300="margin-top:5px;">
                  <li style="margin-left: 250px; margin-top: 2px; font-size: 15px"><a href="logout.php"> <i class="fa fa-power-off fa-2x" aria-hidden="true"></i> Logout</a></li>
                  </ul>
                </div>
               </div>
<br> <br> <br>
           <!-- konten  -->
           <div class="container" style="margin-left: 300px; margin-right: 900px; margin-right: 350px; border: 1px solid;   ">      
  <table class="table table-bordered" >
    <thead>
      <tr>
        <th>Nama</th>
        <th>No Telp</th>
        <th>QR Code</th>
        <th>Berat</th>
        <th>Total</th>        
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
        include 'koneksi.php';
        $sql = "SELECT * FROM setor";
        $q = mysqli_query($koneksi, $sql);
        while ($row = mysqli_fetch_assoc($q)) { ?>
        <tr>
          <td><?= $row['nama']?></td>
          <td><?= $row['notelp']?></td>
          <td><?= $row['qrcode']?></td>
          <td><?= $row['jenis']?></td>
          <td><?= $row['berat']?></td>
          <td><a href="delete.php?id=<?= $row['id_setor'] ?>">Delete</a></td>
        </tr>   
       <?php 
       }
      ?>
    </tbody>
  </table>
</div>
               <!-- Side bar  -->
               <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">View</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                        <li class="nav-divider">
                            <a href="halaman_admin.php"> <i class="fa fa-plus" aria-hidden="true"></i> SETOR</a>
                        </li>
                        <li class="nav-divider">
                            <a href="tables.php"> <i class="fa fa-list" aria-hidden="true"></i> TABLE DATA</a>
                        </li>
                              <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="assets/libs/js/dashboard-ecommerce.js"></script>