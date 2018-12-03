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
          <li class="nav-item active"><a href="gedung.php" class="nav-link">Gedung</a></li>
          <li class="nav-item"><a href="pembayaran.php" class="nav-link">Cek Pembayaran</a></li>
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

  <div class="site-section bg-light">
      <div class="container">
        <div class="row mb-5 pt-5 justify-content-center">
            <div class="col-md-7 text-center section-heading">
              <h2 class="heading">Gedung &amp; Kamar</h2>
            </div>
          </div>
        <div class="row">
          <div class="col-lg-4 mb-5">
            <div class="block-34">
              <div class="image">
                <a data-toggle="modal" data-target="gedungA"><img src="../images/single.jpg" alt="Image placeholder"></a>
              </div>
              <div class="text">
                <h2 class="heading">Gedung A</h2>
                <ul class="specs">
                  <li><strong>Gedung Putri</strong></li>
                  <li><strong>Lantai:</strong> 3</li>
                  <li><strong>Facilities:</strong> Kamar mandi bersama tiap lantai, Wi-Fi, Ruang TV bersama</li>
                  <li><strong>Ukuran:</strong> 3,5 x 3 m dan 3,5 x 6 meter</li>
                  <li><strong>Tipe:</strong> Single Blok</li>
                </ul>
              </div>
              <div class="card-desk">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Lihat Kamar 
              </button>
              </div>

            </div>
          </div>

          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Gedung A</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col">
                      <div class="card">
                        <div class="card-header"><h4>Kamar untuk 1 Orang</h4></div>
                        <div class="card-body">
                            ...
                        </div>
                        <div class="card-footer">
                            <a href="pendaftaran.php"><button class="btn-primary" type="button" id="pesankamar">Pesan Kamar</button></a>
                        </div>
                      </div>
                    </div>
                    <div class="col mb-5">
                      <div class="card">
                        <div class="card-header"><h4>Kamar untuk 2 Orang</h4></div>
                        <div class="card-body">
                            ...
                        </div>
                        <div class="card-footer">
                            <a href="pendaftaran.php"><button class="btn-primary" type="button" id="pesankamar">Pesan Kamar</button></a>
                        </div>
                      </div>
                    </div>
                    <div class="w-100"> <br><br></div>
                    <div class="col mb-5">
                      <div class="card">
                        <div class="card-header"><h4>Kamar untuk 4 Orang</h4></div>
                        <div class="card-body">
                            ...
                        </div>
                        <div class="card-footer">
                            <a href="pendaftaran.php"><button class="btn-primary" type="button" id="pesankamar">Pesan Kamar</button></a>
                        </div>
                      </div>
                    </div>
                    <div class="col  mb-5">
                      <div class="card">
                        <div class="card-header"><h4>Kamar untuk 4 Orang (BIDIKMISI)</h4></div>
                        <div class="card-body">
                            ...
                        </div>
                        <div class="card-footer">
                            <a href="pendaftaran.php"><button class="btn-primary" type="button" id="pesankamar">Pesan Kamar</button></a>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-5">
            <div class="block-34">
              <div class="image">
                <a data-toggle="modal" data-target="gedungB"><img src="../images/single.jpg" alt="Image placeholder"></a>
              </div>
              <div class="text">
                <h2 class="heading">Gedung B</h2>
                <ul class="specs">
                  <li><strong>Gedung Putri</strong></li>
                  <li><strong>Lantai:</strong> 3</li>
                  <li><strong>Facilities:</strong> Kamar mandi bersama tiap lantai, Wi-Fi, Ruang TV bersama</li>
                  <li><strong>Ukuran:</strong> 3,5 x 3 m dan 3,5 x 6 meter</li>
                  <li><strong>Tipe:</strong> Single Blok</li>
                </ul>
              </div>
              <div class="card-desk">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Lihat Kamar 
              </button>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-5">
            <div class="block-34">
              <div class="image">
                <a data-toggle="modal" data-target="gedungC"><img src="../images/single.jpg" alt="Image placeholder"></a>
              </div>
              <div class="text">
                <h2 class="heading">Gedung C</h2>
                <ul class="specs">
                  <li><strong>Gedung Putri</strong></li>
                  <li><strong>Lantai:</strong> 3</li>
                  <li><strong>Facilities:</strong> Kamar mandi bersama tiap lantai, Wi-Fi, Ruang TV bersama</li>
                  <li><strong>Ukuran:</strong> 3,5 x 3 m dan 3,5 x 6 meter</li>
                  <li><strong>Tipe:</strong> Single Blok</li>
                </ul>
              </div>
              <div class="card-desk">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Lihat Kamar 
              </button>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-5">
            <div class="block-34">
              <div class="image">
                <a href="#"><img src="../images/single.jpg" alt="Image placeholder"></a>
              </div>
              <div class="text">
                <h2>Gedung D</h2>
                <ul class="specs">
                  <li><strong>Gedung Putri</strong></li>
                  <li><strong>Lantai:</strong> 3</li>
                  <li><strong>Facilities:</strong> Kamar mandi bersama tiap lantai, Wi-Fi, Ruang TV bersama</li>
                  <li><strong>Ukuran:</strong> 3,5 x 3 m dan 3,5 x 6 meter</li>
                  <li><strong>Tipe:</strong> Single Blok</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-5">
            <div class="block-34">
              <div class="image">
                <a href="#"><img src="../images/single.jpg" alt="Image placeholder"></a>
              </div>
              <div class="text">
                <h2>Gedung E</h2>
                <ul class="specs">
                  <li><strong>Gedung Putra</strong></li>
                  <li><strong>Lantai:</strong> 3</li>
                  <li><strong>Facilities:</strong> Kamar mandi bersama tiap lantai, Wi-Fi, Ruang TV bersama</li>
                  <li><strong>Ukuran:</strong> 3,5 x 3 m dan 3,5 x 6 meter</li>
                  <li><strong>Tipe:</strong> Single Blok</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-5">
            <div class="block-34">
              <div class="image">
                <a href="#"><img src="../images/twin.jpg" alt="Image placeholder"></a>
              </div>
              <div class="text">
                <h2>Gedung G</h2>
                <ul class="specs">
                  <li><strong>Gedung Putra</strong></li>
                  <li><strong>Lantai:</strong> 4</li>
                  <li><strong>Facilities:</strong> Kamar mandi dalam, Wi-Fi, ruang belajar, ruang TV bersama, Lobby</li>
                  <li><strong>Ukuran:</strong> 3,6 x 6 meter</li>
                  <li><strong>Tipe:</strong> Twin Blok</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-5">
            <div class="block-34">
              <div class="image">
                <a href="#"><img src="../images/twin.jpg" alt="Image placeholder"></a>
              </div>
              <div class="text">
                <h2>Gedung H</h2>
                <ul class="specs">
                  <li><strong>Gedung Putri</strong></li>
                  <li><strong>Lantai:</strong> 4</li>
                  <li><strong>Facilities:</strong> Kamar mandi dalam, Wi-Fi, ruang belajar, ruang TV bersama, Lobby</li>
                  <li><strong>Ukuran:</strong> 3,6 x 6 meter</li>
                  <li><strong>Tipe:</strong> Twin Blok</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-5">
            <div class="block-34">
              <div class="image">
                <a href="#"><img src="../images/twin.jpg" alt="Image placeholder"></a>
              </div>
              <div class="text">
                <h2>Gedung I</h2>
                <ul class="specs">
                  <li><strong>Gedung Putra</strong></li>
                  <li><strong>Lantai:</strong> 4</li>
                  <li><strong>Facilities:</strong> Kamar mandi dalam, Wi-Fi, ruang belajar, ruang TV bersama, Lobby</li>
                  <li><strong>Ukuran:</strong> 3,6 x 6 meter</li>
                  <li><strong>Tipe:</strong> Twin Blok</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-5">
            <div class="block-34">
              <div class="image">
                <a href="#"><img src="../images/twin.jpg" alt="Image placeholder"></a>
              </div>
              <div class="text">
                <h2>Gedung J</h2>
                <ul class="specs">
                  <li><strong>Gedung Putri</strong></li>
                  <li><strong>Lantai:</strong> 4</li>
                  <li><strong>Facilities:</strong> Kamar mandi dalam, Wi-Fi, ruang belajar, ruang TV bersama, Lobby</li>
                  <li><strong>Ukuran:</strong> 3,6 x 6 meter</li>
                  <li><strong>Tipe:</strong> Twin Blok</li>
                </ul>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

  <footer class="footer">
    <div class="container" style="bottom:0;">
          <p>
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved by TEAM5
          </p>
    </div>
  </footer>


<!--  -->
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