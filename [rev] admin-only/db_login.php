<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
	<link rel="shortcut icon" href="icon2.png" type="image/x-icon"/>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
        body,
        html {
            height: 100%;
			color:aliceblue;
        }
    </style>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
	
<body>
    <div class="d-flex align-items-center flex-column justify-content-center h-100 bg-dark">
		<div>
			<a href="../index.php"><button class="btn btn-outline-secondary btn-lg btn-block" >Back</button></a>
        </div>
		
        <h1 class="display-2 mb-3">
			Login</h1>
        <form action="login_action.php" class="" method="post">
		  <div class="form-group">
			<input class="form-control" placeholder="Username" type="text" name="username">
		  </div>
		  <div class="form-group">
			<input type="password" name="pass" class="form-control" placeholder="Password">
		  </div>
		  <div class="form-group">
                <button class="btn btn-outline-light" id="btnLogin">Login!</button>
          </div>
		</form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>