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
     <!-- jquery -->
  <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
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
                  <li style="margin-left: 250px; margin-top: 2px;"><a href="logout.php"> <i class="fa fa-power-off fa-2x" aria-hidden="true"></i>  Logout</a></li>
                  </ul>
                </div>
               </div>
            </nav>
        </div>
       

        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                        <li class="nav-divider">
                            <a href="halaman_admin.php"> <i class="fa fa-plus" aria-hidden="true"></i> SETOR</a>
                        </li>
                        <li class="nav-divider">
                            <a href="tables.php"> <i class="fas fa-list    "></i> TABLE DATA</a>
                        </li>
                            <!-- <li class="nav-item ">
                                <a class="nav-link" href="DI/form.php" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fab fa-fw fa-wpforms"></i>Forms</a>  
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="tables.php" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fas fa-fw fa-table"></i>Tables</a>
                              
                            </li> -->
                    </div>
            </div>   
        </div>

        <!-- Konten -->
        <div class="wrapper" style="margin-top: 0.5%;margin-left: 250px; margin-right: 250px;">
            <section class="content">
                <div class="inner">
                    <form action="proses_insert.php" method="post" enctype="multipart/form-data" style="margin-left: 80px; margin-right: 250px;">
			        <br><br><br><br><br><br><br><br><br>
                    <b><h3><p style="text-align: center; font-style: segoeUI;  color: black; margin-top: -110px; margin-left: 200px;">FORM SETOR <i class="fa fa-user-plus" aria-hidden="true"></i></p></h3></b> 
			            <table border="2" cellpadding="1" cellspacing="1" height="150%" width="150%" style="  background-color: #E6E6FA; text-align: center; width: 150%">
			            <tr>
				            <td>Nama</td>
                            <td>
                                <input type="text" style="display: inline-block" name="txt_nama" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>Link QR Code</td>
                            <td><input type="text" name="txt_qrcode" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>No Telp</td>
                            <td>
                                <input type="text" name="txt_notelp" class="form-control">
                            </td>
                        </tr>
                        <tr>
        <!-- <div class="form-group row">   -->
                            <td>
                                <label for="jenis">Jenis Sampah</label>&emsp;
                            </td>
                            <td><br>
                            <select class="custom-select custom-select-lg mb-3" id="jenis" name="jenis">
                                <div class="col-sm-8"> 
                            <option selected >Plastik</option>
                            <option value="kertas">Kertas</option>
                            <option value="daun">Daun Kering</option>
                            </select>
                            <!-- </div> -->
                            </td>
                        </tr>
                        <tr>
                            <td>Berat</td>
                            <td>
                                <input type="text" name="txt_berat" id="berat" class="form-control">
                            </td>
                        </tr>
      
                        <script>
                            $("#jenis").change(function (e) { 
                                    if ($("#jenis").val() == "Plastik") {
                                        $("#berat").keyup(function (e) { 
                                        var harga = 2500 * $("#berat").val();
                                        $("#harga").val(harga);            
                                    });
                                    }else if($("#jenis").val() == "kertas"){
                                        $("#berat").keyup(function (e) { 
                                        var harga = 1000 * $("#berat").val();
                                        $("#harga").val(harga);            
                                    });
                                    }else if($("#jenis").val() == "daun"){
                                        $("#berat").keyup(function (e) { 
                                        var harga = 750 * $("#berat").val();
                                        $("#harga").val(harga);            
                                    });
                                }
                            });
                        </script>
                        <tr>
                            <td>Total Harga</td>
                            <td>
                                <input type="text" name="txt_total" id="harga" class="form-control">
                            </td>
                        </tr>
		            </table>
		        <br>
		        <tr>
				    <td>
					    <input type="submit" name="Insert" value="Insert"  style="margin-left:800px; background-color: black;border: none;
                        color: white;
                        padding: 10px 25px;
                        text-align: center;
                        text-decoration: none;
                        display: inline-block;
                        font-size: 16px; ">
                    </td>
    			</tr>
	            </form>
            </div>
        </section>
    </div>
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
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
</body>
 
</html>