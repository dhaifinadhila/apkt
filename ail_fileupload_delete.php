<?
ini_set('session.gc_maxlifetime', 30*60);
session_start();
include_once("lib/config.php");
include_once("function/function_ail_fileupload.php");
$id_ailfileupload = $_GET['id'];
$return_delete = ail_fileupload_delete($id_ailfileupload);

if ($return_delete==1) {
	echo '<script language="javascript">alert("FileUpload Berhasil Dihapus")</script>';
	echo '<script language="javascript">window.location = "ail_fileupload_view.php"</script>';
} else {
	echo '<script language="javascript">alert("ERROR : Data FileUpload Gagal di Hapus !")</script>';
	echo '<script language="javascript">window.location = "ail_fileupload_view.php"</script>';
} 
?>


