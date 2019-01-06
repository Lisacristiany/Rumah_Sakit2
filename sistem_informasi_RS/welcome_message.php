<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sistem Informasi Rumah Sakit</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Sistem Informasi Iumah Sakit</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="login.html" class="btn btn-danger square-btn-adjust">Keluar</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
                    <li>
                        <a  href="index.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                     <li>
                        <a  href="?page=rumah sakit"><i class="fa fa-dashboard fa-3x"></i> Login </a>
                    </li>
                    <li>
                        <a  href="?page=Dokter"><i class="fa fa-dashboard fa-3x"></i>  Dokter </a>
                    </li>
                    <li>
                        <a  href="?page=Pasien"><i class="fa fa-dashboard fa-3x"></i> Pasien </a>
                    </li>
                    <li>
                        <a  href="?page=transaksi"><i class="fa fa-dashboard fa-3x"></i> Pembayaran </a>
                    </li>
                    <li>
                        <a  href="?page=transaksi"><i class="fa fa-dashboard fa-3x"></i> Petugas </a>
                    </li>
                    <li>
                        <a  href="?page=transaksi"><i class="fa fa-dashboard fa-3x"></i> Rawat Inap </a>
                    </li>
                    <li>
                        <a  href="?page=transaksi"><i class="fa fa-dashboard fa-3x"></i> Ruangan </a>
                    </li>
                </ul>

               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     
                     <?php

                     		$page = isset($_GET['page']) ? $_GET['page'] : null;
                     		$aksi = isset($_GET['aksi']) ? $_GET['aksi'] : null;
                     		if ($page =="login"){
                     			if ($aksi ==""){
                     				include "page/login/login.php";
                     			}
                     		}
                            elseif ($page =="Dokter"){
                                if ($aksi ==""){
                                    include "page/Dokter/Dokter.php";
                                
                                }
                            }
                            elseif ($page =="Pasien"){
                                if ($aksi ==""){
                                    include "page/Pasien/Pasien.php";
                                }
                            }
                            elseif ($page =="Pembayaran"){
                                if ($aksi ==""){
                                    include "page/Pembayaran/Pembayaran.php";

                                }
                            }
                            elseif ($page =="Petugas"){
                                if ($aksi ==""){
                                    include "page/Petugas/Petugas.php";

                                }
                            }
                            elseif ($page =="rawat_inap"){
                                if ($aksi ==""){
                                    include "page/rawat_inap/rawat_inap.php";

                                }
                            }
                              elseif ($page =="Ruangan"){
                                if ($aksi ==""){
                                    include "page/Ruangan/Ruangan.php";

                                }
                            }



                     ?>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
