<?php
ini_set('session.gc_maxlifetime', 30*60);
session_start();

include_once("lib/config.php");
include_once("function/function_apkt_pengguna.php");


$VAR_ID_USER=$_POST['ID_USER'];
$VAR_NIP=$_POST['NIP'];
$VAR_NAMA=$_POST['NAMA'];
$VAR_EMAIL=$_POST['EMAIL'];
$VAR_PASSWD_LAMA=$_POST['PASSWD_LAMA'];
$VAR_PASSWD_BARU=$_POST['PASSWD_BARU'];
$VAR_CONF_PASSWD=$_POST['CONF_PASSWD'];
$VAR_INFORMASI_01='1';
$VAR_INFORMASI_02='2';
$VAR_INFORMASI_03='3';
$VAR_INFORMASI_04='4';
$VAR_INFORMASI_05='5';

$pengguna = apkt_pengguna_search_by_id_user($VAR_ID_USER);

if(($VAR_PASSWD_LAMA == $pengguna[0]['PASSWD']) && ($VAR_PASSWD_BARU == $VAR_CONF_PASSWD)){
	
	$return_add_pengguna = apkt_pengguna_edit_password(
			$VAR_ID_USER,
			$VAR_NIP,
			$VAR_NAMA,
			$VAR_EMAIL,
			$VAR_PASSWD_BARU,
			$VAR_INFORMASI_01,
			$VAR_INFORMASI_02,
			$VAR_INFORMASI_03,
			$VAR_INFORMASI_04,
			$VAR_INFORMASI_05
			);
	
	
		if ($return_add_pengguna==1) {
			echo '<script language="javascript">alert("Password Anda Berhasil di Update")</script>';
			echo '<script language="javascript">window.location = "ganti_password.php"</script>';
		} else {
			echo '<script language="javascript">alert("Password Anda Gagal di Update")</script>';
			echo '<script language="javascript">window.location = "ganti_password.php"</script>';
		}
	}
else
{
	echo '<script language="javascript">alert("Password Anda Salah atau Password Anda tidak Cocok")</script>';
	echo '<script language="javascript">window.location = "ganti_password.php"</script>';
}
?>
