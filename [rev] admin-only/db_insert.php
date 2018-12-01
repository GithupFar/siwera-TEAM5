<?php
session_start();
if (!isset($_SESSION['sudahLogin'])) {
	header("location:db_login.php");
}

include("_conn.php");

if(isset($_POST['create'])){
 
 $name = $_FILES['file']['name'];
 $target_dir = "../upload/";
 $target_file = $target_dir . basename($_FILES["file"]["name"]);

 // Select file type
 $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

 // Valid file extensions
 $extensions_arr = array("jpg","jpeg","png","gif");
 
 // Check extension
 if( in_array($imageFileType,$extensions_arr) ){
 	
  // Insert record
  $query = "INSERT INTO fp_article (judul,foto,teks,lokasi) VALUES('".$_POST['judul']."','".$name."', '".$_POST['teks']."','".$_POST['lokasi']."')";
  $result = mysqli_query($conn,$query);
	 
  // Upload file
  move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);

  mysqli_close($conn); 
  header('Location: '."index.php");
 }
  header('Location: '."index.php");
}

if(isset($_POST['insert'])){
  $query = "INSERT INTO fp_article (judul,foto,teks,lokasi) VALUES('".$_POST['cjudul']."','".$_POST['cfoto']."', '".$_POST['cteks']."','".$_POST['clokasi']."')";
  $result = mysqli_query($conn,$query);

  $sql = "delete from cek_article where c_jid = '".$_POST['c_jid']."'";
  $result = mysqli_query($conn,$sql);
    // var_dump($result);
    // die();
  mysqli_close($conn); 
  header('Location: '."index.php");
}

?>  