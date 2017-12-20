<?php
ini_set('session.gc_maxlifetime', 30*60);
session_start();
include_once("lib/config.php");
include_once("function/function_apkt_fileupload.php");

$id_FILE_UPLOAD = $_GET['id'];
$return_delete_user = apkt_file_upload_delete($id_FILE_UPLOAD);
if ($return_delete_user==1) {
	echo '<script language="javascript">alert("Data Excel Berhasil di Hapus !")</script>';
	echo '<script language="javascript">window.location = "upload_view.php"</script>';
} else {
	echo '<script language="javascript">alert("Data Excel Gagal di Hapus !")</script>';
	echo '<script language="javascript">window.location = "upload_view.php"</script>';
} 
?>
