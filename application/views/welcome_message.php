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
                        <a  href="?page=Pembayaran"><i class="fa fa-dashboard fa-3x"></i> Pembayaran </a>
                    </li>
                    <li>
                        <a  href="?page=Petugas"><i class="fa fa-dashboard fa-3x"></i> Petugas </a>
                    </li>
                    <li>
                        <a  href="?page=Rawat Inap"><i class="fa fa-dashboard fa-3x"></i> Rawat Inap </a>
                    </li>
                    <li>
                        <a  href="?page=Ruangan"><i class="fa fa-dashboard fa-3x"></i> Ruangan </a>
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

<html>
<head>
<title>Rumah Sakit</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  </head>
  <body>
    <table width="100" border="1">
      <tr>
        <td colspan="2" align="center"><h2>Sistem informasi rumah sakit</h2></td>
      </tr>
      <tr>
        <td width ="200">
          <ul>
        <li><a href="login.php">login</a></li>
        <li><a href="dokter.php">dokter</a></li>
        <li><a href="pasien.php">pasien</a></li>
        <li><a href="pembayaran.php">pembayaran</a></li>
        <li><a href="petugas.php">petugas</a></li>
        <li><a href="rawat_inap.php">rawat_inap</a></li>
        <li><a href="ruang.php">ruang</a></li></td>
            <ul>

            </td>
            <td width="500">
              <a href="input_dokter.php">input dokter</a>
              <table border="1">
                
                  <tr>
                    <th>No</th>
                    <th>kd_dokter</th>
                    <th>Nama_dokter</th>
                    <th>Alamat</th>
                    <th>Spesialis_dokter</th>
                    <th>Aksi</th>
                  </tr>
                  
              </body>
<?php
include "koneksi.php";
$query ="SELECT * FROM dokter ORDER BY kd_dokter";
$sql = mysqli_query($conn,$query);
$no=1;
while($data=mysqli_fetch_array($sql)){
  ?>
  <tr class="odd gradeX">
    <td><?php echo $no?></td>
    <td><?php echo 
    $data['kd_dokter'];?></td>
    <td><?php echo 
    $data['Nama_dokter'];?></td>
    <td><?php echo
    $data['Alamat'];?></td>
    <td><?php echo
    $data['Spesialis_dokter'];?></td>
    <td class ="center"><a href ="edit_dokter.php?kd_dokter=<?php echo
     $data['kd_dokter'];?>">Edit</a>|<a href="hapus_dokter.php?kd_dokter=<?php echo $data['kd_dokter']?>"
     onClick ="return confirm(Apakah anda ingin menghapus <?php echo $data['Nama_dokter'];?>?')">hapus</a></td>
    </tr>
<?php $no++;}?>
</body>
</table>
</td>
</tr>
<tr>
  <td colspan ="2" align="center"><br>
  </td>
</tr>
</table>
<button type="button" class="btn btn-primary">Primary</button>
</body>
</html>


<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  </head>
  <body>
    <table width="700" border="1">
      <tr>
        <td colspan="2" align="center"><h2>Selamat Datang Di Sistem Informasi Rumah Sakit</h2></td>
      </tr>
      <tr>
        <td width ="200">
  <ul>
  <li><a href="login.php">login</a></li>
  <li><a href="dokter.php">dokter</a></li>
  <li><a href="pasien.php">pasien</a></li>
  <li><a href="pembayaran.php">pembayaran</a></li>
  <li><a href="petugas.php">petugas</a></li>
  <li><a href="rawat_inap.php">rawat_inap</a></li>
  <li><a href="ruang.php">ruang</a></li></td>
  <ul>

  </td>
  <td width="500">
    <form method="post" action="proses.php">
      <table border="0">
      <tr>
      <td>Nama_dokter</td>
      <td>:</td>
      <td><div class="input-group mb-3">
  <div class="input-group-prepend">
   
  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
</div></td>
  </tr>
  <tr>
    <td>Alamat</td>
      <td>:</td>
        <td><textarea name="alamat" placeholder="Alamat"></textarea></td>
    </tr>
  <tr>
      <td>Spesialis</td>
      <td>:</td>
        <td><textarea name="Spesialis_dokter" placeholder="Spesialis_dokter"></textarea></td>
  </tr>
  <tr>
      <td></td>
      <td></td>
      <td><input type="submit"name="simpan" value="simpan"></td>
  </tr>
</table>
</form>
</td>
</tr>
<tr>
  <td colspan ="2"align="center"><br></script></td>
</tr>
</table>
</body>
</html>


