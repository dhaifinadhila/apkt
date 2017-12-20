<?php
ini_set('session.gc_maxlifetime', 30*60);
session_start();
include_once("lib/config.php");

$get_var_username = $_POST['var_email'];
$get_var_passwd = $_POST['var_passwd'];
 	
	function login($email,$passwd)
	{	
		include "lib/config.php";		
		$query = "SELECT * FROM APKT_PENGGUNA WHERE email='$email' AND password='$passwd'";
		$statement	= oci_parse($connection, $query);
		oci_execute($statement);
		oci_fetch_array ($statement, OCI_ASSOC);
		$row_count	= oci_num_rows($statement);	
		$result = array();				
		if ($row_count > 0) {								
			oci_execute($statement);
			$i=1;		
			while ($row = oci_fetch_array ($statement, OCI_ASSOC)) {	
				array_push($result,$row);					
				$i++;
			}
		}			
		return $result;		
	}

$pengguna = login($get_var_username,$get_var_passwd);

//print_r($pengguna);

$VAR_ID_USER=$pengguna[0]['ID_USER'];
$VAR_KODE_AREA=$pengguna[0]['KODE_AREA'];
$VAR_HAK_AKSES=$pengguna[0]['HAK_AKSES'];
$VAR_KODE_POSISI=$pengguna[0]['KODE_POSISI'];
$VAR_NIP=$pengguna[0]['NIP'];
$VAR_NAMA=$pengguna[0]['NAMA'];
$VAR_EMAIL=$pengguna[0]['EMAIL'];
$VAR_PASSWD=$pengguna[0]['PASSWD'];
$VAR_JABATAN=$pengguna[0]['JABATAN'];
$VAR_TARGET_CALL=$pengguna[0]['TARGET_CALL'];
 
  
if ($VAR_ID_USER=="") {
    /*echo '<script language="javascript">alert("MESSAGE : Login Gagal, User tidak ditemukan. Silahkan ulangi kembali")</script>';
    echo '<script language="javascript">window.location = "login.php"</script>';*/
} else {
	$_SESSION['id_user'] = $VAR_ID_USER;
	$_SESSION['kode_area'] = $VAR_KODE_AREA;	
	$_SESSION['hak_akses'] = $VAR_HAK_AKSES;
	$_SESSION['kode_posisi'] = $VAR_KODE_POSISI;
	$_SESSION['nip'] = $VAR_NIP;	
	$_SESSION['nama'] = $VAR_NAMA;		
	$_SESSION['email'] = $VAR_EMAIL;
	$_SESSION['jabatan'] = $VAR_JABATAN;
	$_SESSION['target_call'] = $VAR_TARGET_CALL;	
	
	
	
	if ($_SESSION['temp_url']<>"" or $_SESSION['temp_url']<>null ) {
		echo '<script language="javascript">window.location ="'.$_SESSION["temp_url"].'"</script>';
		$_SESSION['temp_url']="";
	}	
	else {
		echo '<script language="javascript">window.location = "home.php"</script>';
	}	

} 
 

?>