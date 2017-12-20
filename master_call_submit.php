<?php
ini_set('session.gc_maxlifetime', 30*60);
session_start();

include_once("lib/config.php");
include_once("function/function_apkt_master_call.php");
include_once("function/function_apkt_master.php");

$id_master = $_POST['ID_MASTER'];


$VAR_ID_PELANGGAN=$_POST['ID_PELANGGAN'];
$VAR_NOMOR_LAPOR=$_POST['NOMOR_LAPOR'];
//$VAR_ID_USER=$_SESSION['ID_USER'];
$VAR_ID_USER=$_SESSION['id_user'];

//$VAR_CALL_JUMLAH=$_POST['CALL_JUMLAH'];
$VAR_CALL_JUMLAH='0';
//$VAR_CALL_TANGGAL=$_POST['CALL_TANGGAL'];
//$VAR_CALL_SUKSES=$_POST['CALL_SUKSES'];

 
if(isset ($_POST['gagal_call'])) 
	{
	$VAR_CALL_SUKSES = '1';
	
	}
else
	{
    $VAR_CALL_SUKSES = '0';
	}    
 

/*  if ( $VAR_CALL_SUKSES = '1' )
 {
	$VAR_CALL_KETERANGAN	= $_POST['kriteria_gagal'];
	//ECHO $VAR_CALL_KETERANGAN;
 }
 else
 {
	$VAR_CALL_KETERANGAN	= $_POST['keterangan'];
 } */
 
$VAR_CALL_KETERANGAN	= $_POST['keterangan'];
//$VAR_CALL_SUKSES='0';

$VAR_BULAN_TAHUN=date("Ym");

$VAR_JAWABAN_01=$_POST['p1'];
$VAR_JAWABAN_01_INFO='INFO 1';
$VAR_JAWABAN_02=$_POST['p2'];
$VAR_JAWABAN_02_INFO='INFO 2';
$VAR_JAWABAN_03=$_POST['p3'];
$VAR_JAWABAN_03_INFO='INFO 3';
$VAR_JAWABAN_04=$_POST['p4'];
$VAR_JAWABAN_04_INFO='INFO 4';
$VAR_JAWABAN_05=$_POST['p5'];
$VAR_JAWABAN_05_INFO='INFO 5';
$VAR_JAWABAN_06=$_POST['p6'];
$VAR_JAWABAN_06_INFO='INFO 6';
$VAR_JAWABAN_07=$_POST['p7'];
$VAR_JAWABAN_07_INFO='INFO 7';
$VAR_JAWABAN_08=$_POST['p8'];
$VAR_JAWABAN_08_INFO='INFO 8';
$VAR_JAWABAN_09='pertanyaan 9';
$VAR_JAWABAN_09_INFO='INFO 9';
$VAR_JAWABAN_10='pertanyaan 10';
$VAR_JAWABAN_10_INFO='INFO 10';
$VAR_JAWABAN_11='pertanyaan 11';
$VAR_JAWABAN_11_INFO='INFO 11';	
$VAR_JAWABAN_12='pertanyaan 12';
$VAR_JAWABAN_12_INFO='INFO 12';
$VAR_JAWABAN_13='pertanyaan 13';
$VAR_JAWABAN_13_INFO='INFO 13';
$VAR_JAWABAN_14='pertanyaan 14';
$VAR_JAWABAN_14_INFO='INFO 14';
$VAR_JAWABAN_15='pertanyaan 15';
$VAR_JAWABAN_15_INFO='INFO 15';

$VAR_INFORMASI_01='1';
$VAR_INFORMASI_02='2';
$VAR_INFORMASI_03='3';
$VAR_INFORMASI_04='4';
$VAR_INFORMASI_05='5';
$VAR_INFORMASI_06='6';
$VAR_INFORMASI_07='7';
$VAR_INFORMASI_08='8';
$VAR_INFORMASI_09='9';
$VAR_INFORMASI_10='10';


$return_add_master_call = apkt_master_call_insert(
		$VAR_ID_PELANGGAN, 
		$VAR_NOMOR_LAPOR, 
		$VAR_ID_USER, 
		$VAR_CALL_JUMLAH, 
		$VAR_CALL_SUKSES, 
		$VAR_CALL_KETERANGAN, 
		$VAR_BULAN_TAHUN, 
		$VAR_JAWABAN_01, 
		$VAR_JAWABAN_01_INFO, 
		$VAR_JAWABAN_02, 
		$VAR_JAWABAN_02_INFO, 
		$VAR_JAWABAN_03, 
		$VAR_JAWABAN_03_INFO, 
		$VAR_JAWABAN_04, 
		$VAR_JAWABAN_04_INFO, 
		$VAR_JAWABAN_05, 
		$VAR_JAWABAN_05_INFO, 
		$VAR_JAWABAN_06, 
		$VAR_JAWABAN_06_INFO, 
		$VAR_JAWABAN_07, 
		$VAR_JAWABAN_07_INFO, 
		$VAR_JAWABAN_08, 
		$VAR_JAWABAN_08_INFO, 
		$VAR_JAWABAN_09, 
		$VAR_JAWABAN_09_INFO, 
		$VAR_JAWABAN_10, 
		$VAR_JAWABAN_10_INFO, 
		$VAR_JAWABAN_11, 
		$VAR_JAWABAN_11_INFO, 
		$VAR_JAWABAN_12, 
		$VAR_JAWABAN_12_INFO, 
		$VAR_JAWABAN_13, 
		$VAR_JAWABAN_13_INFO, 
		$VAR_JAWABAN_14, 
		$VAR_JAWABAN_14_INFO, 
		$VAR_JAWABAN_15, 
		$VAR_JAWABAN_15_INFO, 
		$VAR_INFORMASI_01,
		$VAR_INFORMASI_02,
		$VAR_INFORMASI_03,
		$VAR_INFORMASI_04,
		$VAR_INFORMASI_05,
		$VAR_INFORMASI_06,
		$VAR_INFORMASI_07,
		$VAR_INFORMASI_08,
		$VAR_INFORMASI_09,
		$VAR_INFORMASI_10
		);


if ($return_add_master_call==1) {
	flaq_sudah_call($id_master);
	echo '<script language="javascript">alert("Data Master Call Berhasil di Simpan")</script>';
	echo '<script language="javascript">window.location = "master.php"</script>';
} else {
	echo '<script language="javascript">alert("Data Master Call Gagal di Simpan")</script>';
	echo '<script language="javascript">window.location = "master.php"</script>';
} 
 
?>
