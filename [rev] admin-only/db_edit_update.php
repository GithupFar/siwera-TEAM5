<?php
	session_start();
    if (!isset($_SESSION['sudahLogin'])) {
        header("location:db_login.php");
    }

	include("_conn.php");
	
	$name = $_FILES['file']['name'];
	$target_dir = "../upload/";
 	$target_file = $target_dir . basename($_FILES["file"]["name"]);

	$sql = "UPDATE fp_article set judul='".$_POST['judul']."',foto='".$name."',teks='".$_POST['teks']."',lokasi='".$_POST['lokasi']."' WHERE id_judul='".$_POST['id_judul']."'";
	$result = mysqli_query($conn, $sql);
		
	move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);

	mysqli_close($conn);
	header("location:index.php");
?>