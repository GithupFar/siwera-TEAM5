<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>SIWERA - SI Website Asrama</title>

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

<link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
    body {
		font-family: 'Varela Round', sans-serif;
	}
	.modal-login {
		width: 350px;
	}
	.modal-login .modal-content {
		padding: 20px;
		border-radius: 5px;
		border: none;
	}
	.modal-login .modal-header {
		border-bottom: none;
        position: relative;
		justify-content: center;
	}
	.modal-login .close {
        position: absolute;
		top: -10px;
		right: -10px;
	}
	.modal-login h4 {
		color: #636363;
		text-align: center;
		font-size: 26px;
		margin-top: 0;
	}
	.modal-login .modal-content {
		color: #999;
		border-radius: 1px;
    	margin-bottom: 15px;
        background: #fff;
		border: 1px solid #f3f3f3;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 25px;
    }
	.modal-login .form-group {
		margin-bottom: 20px;
	}
	.modal-login label {
		font-weight: normal;
		font-size: 13px;
	}
	.modal-login .form-control {
		min-height: 38px;
		padding-left: 5px;
		box-shadow: none !important;
		border-width: 0 0 1px 0;
		border-radius: 0;
	}
	.modal-login .form-control:focus {
		border-color: #ccc;
	}
	.modal-login .input-group-addon {
		max-width: 42px;
		text-align: center;
		background: none;
		border-width: 0 0 1px 0;
		padding-left: 5px;
		border-radius: 0;
	}
    .modal-login .btn {        
        font-size: 16px;
        font-weight: bold;
		background: #19aa8d;
        border-radius: 3px;
		border: none;
		min-width: 140px;
        outline: none !important;
    }
	.modal-login .btn:hover, .modal-login .btn:focus {
		background: #179b81;
	}
	.modal-login .hint-text {
		text-align: center;
		padding-top: 5px;
		font-size: 13px;
	}
	.modal-login .modal-footer {
		color: #999;
		border-color: #dee4e7;
		text-align: center;
		margin: 0 -25px -25px;
		font-size: 13px;
		justify-content: center;
	}
	.modal-login a {
		color: #fff;
		text-decoration: underline;
	}
	.modal-login a:hover {
		text-decoration: none;
	}
	.modal-login a {
		color: #19aa8d;
		text-decoration: none;
	}	
	.modal-login a:hover {
		text-decoration: underline;
	}
	.modal-login .fa {
		font-size: 21px;
	}
	.trigger-btn {
		display: inline-block;
		margin: 100px auto;
	}
</style>
</head>
<body>
    <!-- <nav class="navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-dark" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.php">
      <img class="pull-left" style="max-width:50px; margin-top: -7px;" src="../img-its/logo-its.png">SIWERA</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>
    </div>
  </nav> -->
  	<!--  -->
  	<div class="block-30" style="position: relative;">
    <!-- <div class="owl-carousel loop-block-31 "> -->
    	<!-- <div class="block-30 item" data-stellar-background-ratio="0.5"> -->
        	<div class="container">
          		<div class="row align-items-center">
            		<div class="col-sm-12">
              			<span class="subheading-sm">Selamat Datang</span>
              			<h1 style="color: white">Admin Keuangan</h1>
              			<div class="modal-dialog modal-login">
							<div class="modal-content">
								<div class="modal-header">				
									<h4 class="modal-title">Login</h4>
								</div>
								<div class="modal-body">
									<form action="list.php" method="post">
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon"><i class="fa fa-user"></i></span>
												<input type="text" class="form-control" name="username" placeholder="Username" required="required">
											</div>
										</div>
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon"><i class="fa fa-lock"></i></span>
												<input type="password" class="form-control" name="password" placeholder="Password" required="required">
											</div>
										</div>
										<div class="form-group">
											<button type="submit" class="btn btn-block btn-lg" style="background-color: #435d7d; color: white">Login</button>
										</div>
										<!-- <p class="hint-text"><a href="#">Forgot Password?</a></p> -->
									</form>
								</div>
								<!-- <div class="modal-footer">Don't have an account? <a href="#">Create one</a></div> -->
							</div>
						</div>
            		</div>
          		</div>
        	</div>
    	<!-- </div> -->
   	<!-- </div> -->
 	</div>
<!--  -->

	<!-- <div class="text-center">
		Button HTML (to Trigger Modal)
		<a href="#myModal" class="trigger-btn" data-toggle="modal">Click to Open Login Modal</a>
	</div> -->

	<!-- Modal HTML -->
<!-- 	<div id="myModal" class="modal fade">
		<div class="modal-dialog modal-login">
			<div class="modal-content">
				<div class="modal-header">				
					<h4 class="modal-title">Login</h4>
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<form action="list.php" method="post">
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-user"></i></span>
								<input type="text" class="form-control" name="username" placeholder="Username" required="required">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-lock"></i></span>
								<input type="password" class="form-control" name="password" placeholder="Password" required="required">
							</div>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary btn-block btn-lg">Sign In</button>
						</div>
						<!-- <p class="hint-text"><a href="#">Forgot Password?</a></p> -->
					</form>
				</div>
				<!-- <div class="modal-footer">Don't have an account? <a href="#">Create one</a></div> -->
			</div>
		</div>
	</div>      -->

	<!-- <footer class="page-footer">
    	<div class="footer-copyright text-center py-3">
        	<p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved by TEAM5</p>
    	</div>
    </footer> -->

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