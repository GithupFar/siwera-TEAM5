<?php
	session_start();
	$nosipmaba = $_POST['nosipmaba'];
	$pass = $_POST['pass'];
	
	if ($nosipmaba == "capeng" && $pass=="passcapeng" ||$nosipmaba == "sari" && $pass=="passpeng") {
		$_SESSION['sudahLogin'] = 1;	
		header('Location: '."only-ca&penghuni/index.php");
		
	} else {
		header('Location: '."registrasi.php");
	}
?>
