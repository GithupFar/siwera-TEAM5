<?php include("config.php");
if(isset($_POST['daftar'])){
	// $pb_id = $_POST['pb_id'];
	$pm_id = $_POST['pm_id'];
	$p_nrp = $_POST['p_nrp'];
	$pb_status = $_POST['pb_status'];

	$sql = "INSERT INTO data_keuangan(pm_id, p_nrp, pb_status) VALUE ('$pm_id', '$p_nrp', '$pb_status')";
	$query = mysqli_query($db, $sql);

	if($query){
		header('Location: list.php?status=sukses');
	}
	else{
		header('Location: list.php?status=gagal');
	}
}
else{
	die("Akses dilarang...");
}
?>