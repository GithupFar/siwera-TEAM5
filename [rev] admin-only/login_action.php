<?php
	session_start();
	$username = $_POST['username'];
	$pass = $_POST['pass'];
	
	if ($username == "dosen" && $pass=="informatika2018") {
		$_SESSION['sudahLogin'] = 1;	
		header('Location: '."index.php");
		
	} else {
		header('Location: '."db_login.php");
	}
?>
