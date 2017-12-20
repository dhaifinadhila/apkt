<?php
ini_set('session.gc_maxlifetime', 30*60);
session_start();

include_once("lib/config.php");
include_once("function/function_apkt_pengguna.php");

$VAR_ID_USER	=$_POST['ID_USER'];
$VAR_KODE_AREA	=$_POST['KODE_AREA'];
$VAR_HAK_AKSES	=$_POST['HAK_AKSES'];
$VAR_KODE_POSISI=$_POST['KODE_POSISI'];
$VAR_NIP		=$_POST['NIP'];
$VAR_NAMA		=$_POST['NAMA'];
$VAR_EMAIL		=$_POST['EMAIL'];
$VAR_PASSWD		=$_POST['PASSWD'];
$VAR_JABATAN	=$_POST['JABATAN'];
$VAR_TARGET_CALL=$_POST['TARGET_CALL'];
$VAR_KETERANGAN	=$_POST['KETERANGAN'];
$VAR_INFORMASI_01='1';
$VAR_INFORMASI_02='2';
$VAR_INFORMASI_03='3';
$VAR_INFORMASI_04='4';
$VAR_INFORMASI_05='5';

$return_edit_pengguna = apkt_pengguna_edit(
	$VAR_ID_USER, 
	$VAR_KODE_AREA, 
	$VAR_HAK_AKSES, 
	$VAR_KODE_POSISI, 
	$VAR_NIP, 
	$VAR_NAMA, 
	$VAR_EMAIL, 
	$VAR_PASSWD, 
	$VAR_JABATAN, 
	$VAR_TARGET_CALL, 
	$VAR_KETERANGAN, 
	$VAR_INFORMASI_01,
	$VAR_INFORMASI_02,
	$VAR_INFORMASI_03,
	$VAR_INFORMASI_04,
	$VAR_INFORMASI_05
		);


if ($return_edit_pengguna==1) {
	echo '<script language="javascript">alert("Data Pengguna Berhasil Diubah")</script>';
	echo '<script language="javascript">window.location = "pengguna.php"</script>';
} else {
	echo '<script language="javascript">alert("Data pengguna Gagal Diubah")</script>';
	echo '<script language="javascript">window.location = "pengguna.php"</script>';
} 
?>
