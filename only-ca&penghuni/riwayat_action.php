<?php
	session_start();
	$kbooking = $_POST['kbooking'];
	
	if ($kbooking=="000-111-000") {
		$_SESSION['sudahLogin'] = 1;	
		header('Id: '."#tab");
		
	} else {
		header('Location: '."pembayaran.php");
	}
?>
