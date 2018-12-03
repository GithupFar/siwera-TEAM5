<?php include("config.php");
if(isset($_POST['simpan'])){
	$pb_id = $_POST['pb_id'];
	$pm_id = $_POST['pm_id'];
	$p_nrp =$_POST['p_nrp'];
	$pb_status = $_POST['pb_status'];

	$sql = "UPDATE data_keuangan SET pm_id = '$pm_id', p_nrp='$p_nrp', pb_status='$pb_status' WHERE pb_id=$pb_id";
	$query = mysqli_query($db, $sql);

	if($query)
	{
		header('Location: list.php');
	}
	else{
		die("Gagal menyimpan perubahan...");
	}
}
else{
	die("Akses dilarang...");
}
?>