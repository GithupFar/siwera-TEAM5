<?php include("config.php"); ?>
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

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.php">
      <img class="pull-left" style="max-width:50px; margin-top: -7px;" src="../img-its/logo-its.png">SIWERA</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="tambah.php" class="nav-link">Tambah Data</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="block-30 block-30-sm item">
        <div class="d-flex align-items-center flex-column justify-content-center h-100">
          <div class="card" style="width: 800px;">
            <div class="card border border-light rounded-7">
                  <div class="card-header p-0">
                    <div class="bg-info text-white text-center py-2">
                      <h3 style="color:white;">Data Keuangan</h3>
                    </div>
                  </div>
                  
                  <!--  -->
                    <table border="2">
                      <thead>
                        <tr>
                          <th>NRP</th>
                          <th>ID Pembayaran</th>
                          <th>Nama</th>
                          <th>Tanggal lahir</th>
                          <th>Departemen</th>
                          <th>Jalur Masuk</th>
                          <th>Fakultas</th>
                          <th>Jenis Kelamin</th>
                          <th>Email</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $sql = "SELECT * FROM penghuni";
                        $query = mysqli_query($db, $sql);

                            while($bayar = mysqli_fetch_array($query)){
                                echo "<tr>";

                                echo "<td>".$bayar['P_NRP']."</td>";
                                echo "<td>".$bayar['PB_ID']."</td>";
                                echo "<td>".$bayar['P_NAMA']."</td>";
                                echo "<td>".$bayar['P_TGLLAHIR']."</td>";
                                echo "<td>".$bayar['P_DEPARTEMEN']."</td>";
                                echo "<td>".$bayar['P_JALURMASUK']."</td>";
                                echo "<td>".$bayar['P_FAKULTAS']."</td>";
                                echo "<td>".$bayar['P_JENISKELAMIN']."</td>";
                                echo "<td>".$bayar['P_EMAIL']."</td>";

                                echo "<td>";
                                echo "<a href='form-edit.php?id=".$bayar['P_NRP']."'>Edit</a> | ";
                                echo "<a href='hapus.php?id=".$bayar['P_NRP']."'>Hapus</a>";
                                echo "</td>";
                                echo "</tr>";
                            }
                        ?>
                      </tbody>
                    </table>
                    <p>Total : <?php echo mysqli_num_rows($query) ?></p>
            
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