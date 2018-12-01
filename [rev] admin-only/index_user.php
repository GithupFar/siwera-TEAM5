<?php
	session_start();
    if (!isset($_SESSION['sudahLogin'])) {
        header("location:db_login.php");
    }

	include("_conn.php");
	$sql = "select * from cek_article order by c_jid desc";
	$result = mysqli_query($conn, $sql);
	if ($result == True){
		$row = mysqli_fetch_all($result,MYSQLI_ASSOC);
	}
	//$image = $row['foto'];
	//$image_src = "upload/$image";
	mysqli_close($conn);
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

<style media="screen" type="text/css">
td {
max-width: 120px;
white-space: nowrap;
overflow: hidden;
text-overflow: ellipsis;
}
</style>
	
  <body class="bg-secondary">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <nav class="navbar-brand">ANKER Admin-only</nav>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
			<li class="nav-item">
              <a class="nav-link" href="index.php">Admin-post
                <span class="sr-only">(current)</span></a>
            </li>
			<li class="nav-item active">
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
	<?php if ($result == True){ ?>
    <div class="container">

      <!-- Page Heading -->
      <h1 class="my-4">
      </h1>
    <!-- /.container -->
		<div class="table-responsive-lg">
		<table class="table table-bordered">
		  <thead class="thead-light">
			<tr>
			  <th scope="col">No.</th>
			  <th scope="col">Picture</th>
			  <th scope="col">Title</th>
			  <th scope="col">Description</th>
			  <th scope="col">Location</th>
			  <th scope="col">Action</th>
			</tr>
		  </thead>
		  <tbody style="color: white">
			  <?php $i = 1;?>
                <?php foreach ($row as $key => $value) { ?>
                <tr>
                    <td>
                        <?php
                          echo $i++;  
                        ?>
                    </td>
                    <td><img src="../upload/<?php echo $value['cfoto'] ?>" height="200" max-width="500%">
					</td>
                    <td><?php echo $value['cjudul'] ?></td>
                    <td><?php echo $value['cteks'] ?></td>
					<td><?php echo $value['clokasi'] ?></td>
                    <td style="text-align:center;">
                        <form action="db_insert.php" method="post">
                            <input type="hidden" name="c_jid" value="<?php echo $value['c_jid']?>">
							<input type="hidden" name="cjudul" value="<?php echo $value['cjudul']?>">
							<input type="hidden" name="cfoto" value="<?php echo $value['cfoto']?>">
                            <input type="hidden" name="cteks" value="<?php echo $value['cteks']?>">
							<input type="hidden" name="clokasi" value="<?php echo $value['clokasi']?>">
                            <button type="submit" name="insert" id="insert" class="btn btn-success">Post</button>
                        </form>
						<br />
                        <form action="db_delete.php" method="post">
                            <input type="hidden" name="c_jid" value="<?php echo $value['c_jid']?>">
                            <button type="submit" name="del_user" id="del_user" class="btn btn-danger" onClick="return confirm('Apakah anda ingin menghapus data ?')">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
  <?php } else {
		echo '<h1 class="display-2 text-center">Data Kosong !</h2>';
	}?>
		</div>
	</div>
	  

    <!-- Bootstrap core JavaScript -->
    <script src="https://blackrockdigital.github.io/startbootstrap-4-col-portfolio/vendor/jquery/jquery.min.js"></script>
    <script src="https://blackrockdigital.github.io/startbootstrap-4-col-portfolio/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>