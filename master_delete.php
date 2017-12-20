<?php
ini_set('session.gc_maxlifetime', 30*60);
session_start();
include_once("lib/config.php");
include_once("function/function_apkt_master.php");

$id_user_master = $_GET['id'];
$return_delete_user = apkt_master_delete($id_user_master);
if ($return_delete_user==1) {
	echo '<script language="javascript">alert("Data Master Berhasil di Hapus !")</script>';
	echo '<script language="javascript">window.location = "master.php"</script>';
} else {
	echo '<script language="javascript">alert("Data Master Gagal di Hapus !")</script>';
	echo '<script language="javascript">window.location = "master.php"</script>';
} 
?>
