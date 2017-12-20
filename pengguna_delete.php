<?php
ini_set('session.gc_maxlifetime', 30*60);
session_start();
include_once("lib/config.php");
include_once("function/function_apkt_pengguna.php");

$id_user_pengguna = $_GET['id'];
$return_delete_user = apkt_pengguna_delete($id_user_pengguna);
if ($return_delete_user==1) {
	echo '<script language="javascript">alert("Data Pengguna Berhasil di Hapus !")</script>';
	echo '<script language="javascript">window.location = "pengguna.php"</script>';
} else {
	echo '<script language="javascript">alert("Data Pengguna Gagal di Hapus !")</script>';
	echo '<script language="javascript">window.location = "pengguna.php"</script>';
} 
?>
