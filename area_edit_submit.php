<?php
ini_set('session.gc_maxlifetime', 30*60);
session_start();

include_once("lib/config.php");
include_once("function/function_apkt_area.php");

$VAR_ID_AREA=$_POST['ID_AREA'];
$VAR_KODE_DISTRIBUSI=$_POST['KODE_DISTRIBUSI'];
$VAR_KODE_AREA=$_POST['KODE_AREA'];
$VAR_KODE_POSISI=$_POST['KODE_POSISI'];
$VAR_NAMA_AREA=$_POST['NAMA_AREA'];
$VAR_KETERANGAN=$_POST['KETERANGAN'];
$VAR_INFORMASI_01='1';
$VAR_INFORMASI_02='2';
$VAR_INFORMASI_03='3';
$VAR_INFORMASI_04='4';
$VAR_INFORMASI_05='5';

$return_edit_area = apkt_area_update(
	$VAR_ID_AREA, 
	$VAR_KODE_DISTRIBUSI, 
	$VAR_KODE_AREA, 
	$VAR_KODE_POSISI, 
	$VAR_NAMA_AREA, 
	$VAR_KETERANGAN, 
	$VAR_INFORMASI_01,
	$VAR_INFORMASI_02,
	$VAR_INFORMASI_03,
	$VAR_INFORMASI_04,
	$VAR_INFORMASI_05
		);


if ($return_edit_area==1) {
	echo '<script language="javascript">alert("Data Area Berhasil diupdate")</script>';
	echo '<script language="javascript">window.location = "area.php"</script>';
} else {
	echo '<script language="javascript">alert("Data Area Gagal diupdate")</script>';
	echo '<script language="javascript">window.location = "area.php"</script>';
} 
?>
