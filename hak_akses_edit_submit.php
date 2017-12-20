<?php
ini_set('session.gc_maxlifetime', 30*60);
session_start();

include_once("lib/config.php");
include_once("function/function_apkt_hak_akses.php");

$VAR_ID_HAK_AKSES=$_POST['ID_HAK_AKSES'];
$VAR_HAK_AKSES=$_POST['HAK_AKSES'];
$VAR_KETERANGAN=$_POST['KETERANGAN'];
$VAR_INFORMASI_01='1';
$VAR_INFORMASI_02='2';
$VAR_INFORMASI_03='3';
$VAR_INFORMASI_04='4';
$VAR_INFORMASI_05='5';

$return_edit_hak_akses = apkt_hak_akses_update(
		$VAR_ID_HAK_AKSES,
		$VAR_HAK_AKSES,
		$VAR_KETERANGAN,
		$VAR_INFORMASI_01,
		$VAR_INFORMASI_02,
		$VAR_INFORMASI_03,
		$VAR_INFORMASI_04,
		$VAR_INFORMASI_05
		);


if ($return_edit_hak_akses==1) {
	echo '<script language="javascript">alert("Data Hak Akses Berhasil diupdate")</script>';
	echo '<script language="javascript">window.location = "hak_akses.php"</script>';
} else {
	echo '<script language="javascript">alert("Data Hak Akses Gagal diupdate")</script>';
	echo '<script language="javascript">window.location = "hak_akses.php"</script>';
} 
?>
