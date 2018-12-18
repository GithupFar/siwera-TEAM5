<?php
  session_start();
    if (!isset($_SESSION['sudahLogin'])) {
        header("location:../registrasi.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>SIWERA - SI Website Asrama</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/ionicons.min.css">
    <link rel="stylesheet" href="../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../css/jquery.timepicker.css">
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/icomoon.css">
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.php">
      <img class="pull-left" style="max-width:100px; margin-top: -7px;" src="../img-its/logo-its.png">SIWERA</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="gedung.php" class="nav-link">Gedung</a></li>
          <li class="nav-item active"><a href="pembayaran.php" class="nav-link">Cek Pembayaran</a></li>
          <li class="nav-item"><a href="pendaftaran.php" class="nav-link">Pesan Kamar</a></li>
          <li class="nav-item"><a href="contact.php" class="nav-link">Kontak</a></li>
        </ul>

        <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" style="background-color: #495057b3;"><span class="icon icon-user"></span>
                <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <a href="index.php" class="dropdown-item"><span class="icon icon-home"></span><span class="text">   Beranda </span></a>
                  <a href="logout.php" class="dropdown-item"><span class="icon icon-remove"></span><span class="text">   Keluar </span></a>
                </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- END nav -->

<div class="block-30 ">
      <div class="d-flex align-items-center flex-column justify-content-center h-100">  
        <form action="" method="post">
          <div class="card" style="width: 800px">
              <div class="card border-info rounded-7">
                <div class="card-header p-0">
                  <div class="bg-info text-white text-center py-2">
                    <h3 style="color:white;">Cek Pembayaran</h3>
                  </div>
                </div>
                <div class="card-body p-3">
                  <div class="form-group">
                      <label for="kbooking">Kode Booking</label>
                      <div class="input-group mb-2">
                        <input type="text" class="form-control" id="kbooking" placeholder="xxx-xxx-xxx" name="kbooking" required>
                      </div>
                  </div>
                </div>

                <div class="card-footer text-center">
                  <button type="reset" class="btn btn-secondary" style="color:black">Cancel</button>
                  <button type="submit" class="btn btn-info" data-toggle="modal" data-target=".bs-example-modal-lg" style="color:black">Submit</button>
                </div>

                <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="container">
                          <div class="table-wrapper">
                            
                              <h2 style="text-align: center;"><b>Tagihan </b></h2>
                            
                              <table class="table table-striped table-hover">
                                  <thead>
                                      <tr>
                                          <th>No</th>
                                          <th>Nominal Tagihan</th>
                                          <th></th>
                                          <th></th>
                                          <th>Dekripsi</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                  <tr>
                                    <td>1</td>
                                    <td>Rp 2050.000</td>
                                    <td></td>
                                    <td></td>
                                    <td>Tagihan pelunasan biaya operasional kamar</td>
                                  </tr>
                                  </tbody>
                              </table>

                              <h2 style="text-align: center;">Riwayat <b>Pembayaran</b></h2>
                              <table class="table table-striped table-hover">
                                  <thead>
                                      <tr>
                                          <th></th>
                                          <th>No</th>
                                          <th>Nominal Bayar</th>
                                          <th>Tanggal Pelunasan</th>
                                          <th>Deskripsi</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                  <tr>
                                    <td></td>
                                    <td>1</td>
                                    <td>Rp 3000.000</td>
                                    <td>10/12/2017</td>
                                    <td>Pelunasan biaya operasional kamar</td>
                                  </tr>
                                  <tr>
                                    <td></td>
                                    <td>2</td>
                                    <td>Rp 950.000</td>
                                    <td>10/12/2018</td>
                                    <td>Cicilan Ke-1(Rp.950.000)</td>
                                  </tr>
                                  </tbody>
                              </table>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </form>

        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
                                    crossorigin="anonymous"></script>
    </div>
  </div>

  <footer class="footer">
    <div class="container" style="bottom:0;">
          <p>
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved by TEAM5
          </p>
    </div>
  </footer>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="../js/jquery.min.js"></script>
  <script src="../js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/jquery.easing.1.3.js"></script>
  <script src="../js/jquery.waypoints.min.js"></script>
  <script src="../js/jquery.stellar.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.magnific-popup.min.js"></script>
  <script src="../js/bootstrap-datepicker.js"></script>
  
  <script src="../js/aos.js"></script>
  <script src="../js/jquery.animateNumber.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="../js/google-map.js"></script>
  <script src="../js/main.js"></script>
    
  </body>
</html>