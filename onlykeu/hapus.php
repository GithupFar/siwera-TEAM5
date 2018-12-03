<?php include("config.php");

if(isset($_GET['pb_id'])){
	$id = $_GET['pb_id'];

	$sql = "DELETE FROM data_keuangan WHERE pb_id = $pb_id";
	$query = mysqli_query($db, $sql);

	if($query){
		header('Location: index.php');
	}
	else{
		die("gagal menghapus...");
	}
}
else{
	die("akses dilarang...");
}
?>