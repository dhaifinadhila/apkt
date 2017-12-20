<?php
ini_set('session.gc_maxlifetime', 30*60);
session_start();
include_once("lib/config.php");
include_once("function/function_apkt_area.php");

$id_user_area = $_GET['id'];
$return_delete_user = apkt_area_delete($id_user_area);
if ($return_delete_user==1) {
	echo '<script language="javascript">alert("Data Area Berhasil di Hapus !")</script>';
	echo '<script language="javascript">window.location = "area.php"</script>';
} else {
	echo '<script language="javascript">alert("Data Area Gagal di Hapus !")</script>';
	echo '<script language="javascript">window.location = "area.php"</script>';
} 
?>
