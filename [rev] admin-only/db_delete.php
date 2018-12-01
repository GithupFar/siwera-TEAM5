<?php
    session_start();
    if (!isset($_SESSION['sudahLogin'])) {
        header("location:db_login.php");
    }

    include("_conn.php");

	if(isset($_POST['del_admin'])){
    $sql = "delete from fp_article where id_judul = '".$_POST['id_judul']."'";

    $result = mysqli_query($conn,$sql);
    mysqli_close($conn);

    header('Location: '."index.php");
	}

	if(isset($_POST['del_user'])){
    $sql = "delete from cek_article where c_jid = '".$_POST['c_jid']."'";

    $result = mysqli_query($conn,$sql);
    mysqli_close($conn);

    header('Location: '."index_user.php");
	}
?>