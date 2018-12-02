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
          <li class="nav-item active"><a href="index.php" class="nav-link">Beranda</a></li>
          <li class="nav-item"><a href="gedung.php" class="nav-link">Gedung</a></li>
          <!--li class="nav-item"><a href="berita.php" class="nav-link">Berita</a></li-->
          <li class="nav-item"><a href="contact.php" class="nav-link">Kontak</a></li>
          <!--li class="nav-item"><a href="peta.php" class="nav-link">Peta</a></li-->
          <li class="nav-item"><a href="pembayaran.php" class="nav-link">Cek Pembayaran</a></li>
          <li class="nav-item"><a href="pendaftaran.php" class="nav-link">Pesan Kamar</a></li>
          <li class="nav-item"><a href="logout.php" class="nav-link">Keluar</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->
  
  <div class="block-30" style="position: relative;">
    <div class="owl-carousel loop-block-31 ">
      <div class="block-30 item" style="background-image: url('../images/bg_2.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-10">
              <span class="subheading-sm">Selamat Datang</span>
              <h2 class="heading">SI Website Asrama ITS</h2>
              <p><a href="pembayaran.php" class="btn py-4 px-5 btn-primary">Cek Pembayaran</a>
              <a href="pendaftaran.php" class="btn py-4 px-5 btn-primary">Pendaftaran</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="block-30 item" style="background-image: url('../images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-10">
              <span class="subheading-sm">Selamat Datang</span>
              <h2 class="heading">SI Website Asrama ITS</h2>
              <p><a href="pembayaran.php" class="btn py-4 px-5 btn-primary">Cek Pembayaran</a>
              <a href="pendaftaran.php" class="btn py-4 px-5 btn-primary">Pendaftaran</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="block-30 item" style="background-image: url('../images/bg_3.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-10">
              <span class="subheading-sm">Selamat Datang</span>
              <h2 class="heading">SI Website Asrama ITS</h2>
              <p><a href="pembayaran.php" class="btn py-4 px-5 btn-primary">Cek Pembayaran</a>
              <a href="pendaftaran.php" class="btn py-4 px-5 btn-primary">Pendaftaran</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class=" site-section bg-light" id="blog">
    
    <div class="container">
      <div class="row">

        <div class="col-md-12 mb-4">
          <div class="block-3 d-md-flex">
            <a class="image" href="blog-single.html" style="background-image: url('../images/tsel.jpg'); "></a>
            <div class="text">
              <h2 class="heading"><a href="#">Pemenang Challenge Tsel Data Experience</a></h2>
              <p class="meta"><em>Posted on</em> <a href="">June 20, 2018</a> <span class="sep">&bullet;</span> <em>by</em> <a href="#">Admin</a> </p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, dolorem. Officiis fugit dicta earum, sequi...</p>
              <p><a href="blog-single.html">Read More...</a></p>
            </div>
          </div>  
        </div>

        <div class="col-md-12 mb-4">
          <div class="block-3 d-md-flex">
            <a class="image" href="blog-single.html" style="background-image: url('../images/wp.jpg'); "></a>
            <div class="text">
              <h2 class="heading"><a href="#">Welcome Party Gedung A</a></h2>
              <p class="meta"><em>Posted on</em> <a href="">June 20, 2018</a> <span class="sep">&bullet;</span> <em>by</em> <a href="#">Admin</a> </p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, dolorem. Officiis fugit dicta earum, sequi...</p>
              <p><a href="blog-single.html">Read More...</a></p>
            </div>
          </div>  
        </div>

        <div class="col-md-12 mb-4">
          <div class="block-3 d-md-flex">
            <a class="image" href="blog-single.html" style="background-image: url('../images/wp1.jpg'); "></a>
            <div class="text">
              
              <h2 class="heading"><a href="#">Welcome Party Gedung J</a></h2>
              <p class="meta"><em>Posted on</em> <a href="">June 20, 2018</a> <span class="sep">&bullet;</span> <em>by</em> <a href="#">Admin</a> </p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, dolorem. Officiis fugit dicta earum, sequi...</p>
              <p><a href="blog-single.html">Read More...</a></p>
            </div>
          </div>  
        </div>

        <div class="col-md-12 mb-4">
          <div class="block-3 d-md-flex">
            <a class="image" href="blog-single.html" style="background-image: url('../images/wp2.jpg'); "></a>
            <div class="text">
              <h2 class="heading"><a href="#">Welcome Party Gedung G</a></h2>
              <p class="meta"><em>Posted on</em> <a href="">June 20, 2018</a> <span class="sep">&bullet;</span> <em>by</em> <a href="#">Admin</a> </p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, dolorem. Officiis fugit dicta earum, sequi...</p>
              <p><a href="blog-single.html">Read More...</a></p>
            </div>
          </div>  
        </div>

        <div class="col-md-12 mb-4">
          <div class="block-3 d-md-flex">
            <a class="image" href="blog-single.html" style="background-image: url('../images/wp3.jpg'); "></a>
            <div class="text">
              <h2 class="heading"><a href="#">Welcome Party Gedung B</a></h2>
              <p class="meta"><em>Posted on</em> <a href="">June 20, 2018</a> <span class="sep">&bullet;</span> <em>by</em> <a href="#">Admin</a> </p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, dolorem. Officiis fugit dicta earum, sequi...</p>
              <p><a href="blog-single.html">Read More...</a></p>
            </div>
          </div>  
        </div>


      </div>

      <div class="row mt-5">
                <div class="col-md-12 pt-5">
                  <ul class="pagination custom-pagination">
                    <li class="page-item prev"><a class="page-link" href="#"><i class="icon-keyboard_arrow_left"></i></a></li>
                    <li class="page-item active"><a class="page-linkx href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item next"><a class="page-link" href="#"><i class="icon-keyboard_arrow_right"></i></a></li>
                  </ul>


                </div>
              </div>
  </div>
  </div>

  <div class="container">
      <div class="row mb-5">
        <div class="col-md-12">

          <div class="block-32">
            <div class="col-sm-15" id="map"></div>
            <br><br>
            <form action="#">
              <div class="row">
                <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
                  <label for="checkin">Lokasi Anda</label>
                  <div class="field-icon-wrap">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
                  <label for="checkin">Tujuan</label>
                  <div class="field-icon-wrap">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="col-md-6 col-lg-3 align-self-end">
                  <button class="btn btn-primary btn-block">Petunjuk Jalan</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

  <footer class="footer">
    <div class="container">
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