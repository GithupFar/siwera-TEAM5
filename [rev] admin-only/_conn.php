<?php
	$dbname = "vkvxweok_16010_fp";
	$user = "vkvxweok_web2018";
	$pass = "informatika2018";
	$conn = mysqli_connect("localhost",$user,$pass,$dbname);

	if(!$conn)
		echo "Gagal terhubung ke database";
	/*else
		echo "Berhasil terhubung ke database";
	*/
?>