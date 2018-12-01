<?php
	session_start();
    if (!isset($_SESSION['sudahLogin'])) {
        header("location:db_login.php");
    }
	if(isset($_POST['file'])){
	$name = $_FILES['file']['name'];	
	}
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ANKER</title>
	<link rel="shortcut icon" href="icon2.png" type="image/x-icon"/>
    <!-- Bootstrap core CSS -->
    <link href="https://blackrockdigital.github.io/startbootstrap-4-col-portfolio/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://blackrockdigital.github.io/startbootstrap-4-col-portfolio/css/4-col-portfolio.css" rel="stylesheet">

  </head>

  <body class="bg-secondary">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <nav class="navbar-brand" >ANKER Admin-only</nav>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Admin-post
                <span class="sr-only">(current)</span></a>
            </li>
			<li class="nav-item disabled">
              <a class="nav-link" href="index_user.php">User-post</a>
            </li>
            <li class="nav-item disabled">
              <a class="nav-link" href="db_logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
	  
    <!-- Page Content -->
	
<div class="container d-flex justify-content-center">
	<div class="my-4">
        <div class="card">
            <div class="card-body">
		  <form method="post" action="db_insert.php" enctype='multipart/form-data'>
				<input type="hidden" name="id_judul" value="<?php echo $_GET['id_judul']?>">
			  <div class="form-group">
				<label for="">Judul</label>
					  <input name="judul" type="text" required="required" class="form-control" id="judul" value="<?php echo $_GET['judul']?>">
				</div>
			  <div class="form-group">
				<label>Unggah Foto</label>
				  <div>

				  </div>
				  <input name='file' type='file' required="required" />
				</div>
			  <div class="form-group">
				  <label for="">Deskripsi</label>
			  <textarea name="teks" required="required" class="form-control" id="teks" rows="3" value="<?php echo $_GET['teks']?>"> </textarea>
			  </div>
			  <div class="form-group">
				<label for="">Lokasi</label>
					  <input name="lokasi" type="text" required="required" class="form-control" id="lokasi" value="<?php echo $_GET['lokasi']?>">
			  </div>
				<button type='submit' class="btn btn-success" name='create'>Unggah</button>
			</form>
			</div>
		</div>
	</div>
</div>
    <!-- /.container -->

    <!-- Footer -->

    <!-- Bootstrap core JavaScript -->
    <script src="https://blackrockdigital.github.io/startbootstrap-4-col-portfolio/vendor/jquery/jquery.min.js"></script>
    <script src="https://blackrockdigital.github.io/startbootstrap-4-col-portfolio/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>