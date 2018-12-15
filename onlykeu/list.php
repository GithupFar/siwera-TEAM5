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
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="../css/style.css">
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
<!--   <div class="block-30 block-30-sm item">
        <div class="d-flex align-items-center flex-column justify-content-center h-100">
          <div class="card" style="width: 800px;">
            <div class="card border border-light rounded-7">
                  <div class="card-header p-0">
                    <div class="bg-info text-white text-center py-2">
                      <h3 style="color:white;">Data Keuangan</h3>
                    </div>
                  </div>
                   -->
                  <!--  -->
                    <!-- <table border="1">
                      <thead>
                        <tr>
                          <th>ID Pembayaran</th>
                          <th>ID Pemesanan</th>
                          <th>NRP Pemesan</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody> -->
                        <!-- <?php
                        //$sql = "SELECT * FROM data_keuangan";
                        //$query = mysqli_query($db, $sql);

                          //  while($bayar = mysqli_fetch_array($query)){
                            //    echo "<tr>";

                              //  echo "<td>".$bayar['pb_id']."</td>";
                                //echo "<td>".$bayar['pm_id']."</td>";
                                //echo "<td>".$bayar['p_nrp']."</td>";
                                //echo "<td>".$bayar['pb_status']."</td>";

                                //echo "<td>";
                                //echo "<a href='form-edit.php?id=".$bayar['pb_id']."'>Edit</a> | ";
                                //echo "<a href='hapus.php?id=".$bayar['pb_id']."'>Hapus</a>";
                                //echo "</td>";

                                //echo "</tr>";
                            //}
                        ?> -->
<!--                       </tbody>
                    </table>
                    <p>Total : <?php //echo mysqli_num_rows($query) ?></p>
            
      </div>
    </div>
  </div> 
  </div> -->
  <!-- TABLE BARU -->
  <!-- <div class="container"> -->
    <!-- <div class="row"> -->
  <div class="block-30 block-30-sm item">
    <div class="d-flex align-items-center flex-column justify-content-center h-100">
      <div class="card" style="width: 800px;">
        <div class="card border border-light rounded-7">
          <div class="card-header p-0">
            <div class="bg-info text-dark text-center py-2">
              <h1 class="d-flex align-items-center flex-column justify-content-center h-100">Data Keuangan</h1>
            </div>
          <!-- <div class="col-md-12"> -->
            <!-- <h4>Bootstrap Snipp for Datatable</h4> -->
            <div class="table-responsive">
              <table class="table">
                         
                <thead class="thead bg-info">         
                  <th>PB_ID</th>
                  <th>PM_ID</th>
                  <th>Nama</th>
                  <th>NRP</th>
                  <th>Jumlah Cicilan</th>
                  <th>Status</th>
                  <th>Edit</th>                  
                  <!-- <th>Delete</th> -->
                </thead>
              
                <tbody>
                  <tr>
                  <td>PB_001</td>
                  <td>PM_001</td>
                  <td>Angel</td>
                  <td>3218100121</td>
                  <td>Cicilan Ke-1(Rp.950.000)</td>
                  <td>Belum Lunas</td>
                  <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                  <!-- <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td> -->
                  </tr>
                  
                  <tr>
                  <td>PB_002</td>
                  <td>PM_002</td>
                  <td>Jacob</td>
                  <td>2218100080</td>
                  <td>-</td>
                  <td>Lunas</td>
                  <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                  <!-- <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td> -->
                  </tr>
                  
                  
                  <tr>
                  <td>PB_003</td>
                  <td>PM_003</td>
                  <td>Mark</td>
                  <td>2818100121</td>
                  <td>Cicilan Ke-3(Rp.2.850.000)</td>
                  <td>Belum Lunas</td>
                  <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                  <!-- <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td> -->
                  </tr>
                  
                  
                  
                  <tr>
                  <td>PB_004</td>
                  <td>PM_004</td>
                  <td>Jonny</td>
                  <td>3418100092</td>
                  <td>Cicilan Ke-2(Rp.1.900.000)</td>
                  <td>Belum Lunas</td>
                  <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                  <!-- <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td> -->
                  </tr>
                  
                  
                  <tr>
                  <td>PB_005</td>
                  <td>PM_005</td>
                  <td>Jennie</td>
                  <td>12181000026</td>
                  <td>-</td>
                  <td>Lunas</td>
                  <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                  <!-- <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td> -->
                  </tr>
            
                </tbody>
              
              </table>

              <!-- <div class="clearfix"></div> -->
            <!-- <button type="button" class="btn btn-xs" data-title="Download">Unduh Laporan <span class="glyphicon glyphicon-download-alt"></span></button>
 -->
            <p><a href="#" class="btn py-3 px-2 btn-primary">Unduh Laporan </a><span class="glyphicon glyphicon-download-alt"></span></p>

              <ul class="pagination pull-right">
                <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
              </ul>
                              
            </div>
                  
        </div>
      </div>
    </div>
  </div>
<!--  -->

<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
          <h4 class="modal-title custom_align" id="Heading"></h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <input class="form-control " type="text" placeholder="Angel">
        </div>
        <div class="form-group">
          <input class="form-control " type="text" placeholder="3218100121">
        </div>
        <div class="form-group">
          <!-- <textarea rows="2" class="form-control" placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan"></textarea> -->
          <p>
          <label for="cicilan">Cicilan : </label>
          <select name="cicilan">
            <option>Cicilan Ke-1</option>
            <option>Cicilan Ke-2</option>
            <option>Cicilan Ke-3</option>
            <option>Cicilan Ke-4</option>
          </select>  
        </p>
        </div>
      </div>
      <div class="modal-footer ">
        <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
      </div>
    </div>
      <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
</div>
    
    
    
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading"></h4>
      </div>
          <div class="modal-body">
       
       <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>
       
      </div>
        <div class="modal-footer ">
        <button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
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
  
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
  </body>
</html>