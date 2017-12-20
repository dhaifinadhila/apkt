<?
ini_set('session.gc_maxlifetime', 30*60);
session_start();
include_once("lib/config.php");
include_once("function/function_ail_fileupload.php");
include_once("function/function_ail_doc.php");
require_once 'lib/excell/simplexlsx.class.php';
require_once 'lib/excell/reader.php';


$path= "upload/".$HTTP_POST_FILES['var_file_name']['name'];

$get_var_type_file =array('jpg','jpeg','png','gif','bmp','doc','docx','xls','xlsx','sql');


if($var_file_name !=none)
	{
	if(copy($HTTP_POST_FILES['var_file_name']['tmp_name'], $path))
		{
		$get_var_id_ailfileupload 	= $_POST['var_id_ailfileupload'];
		$get_var_id_user 			= $_POST['var_id_user'];
		$get_var_type_file 			= $HTTP_POST_FILES['var_file_name']['type']; 
		$get_var_file_name 			= $HTTP_POST_FILES['var_file_name']['name'];

		//$random_digit=rand(0000,9999);
		//$new_file_name=$random_digit.$var_file_name;
		//$get_var_number_record = $_POST['var_number_record'];
		
		//$get_var_number_record 	= $_POST['var_number_record'];
		//$get_var_upload_date 		= $_POST['var_upload_date'];
		
		$xlsx = new SimpleXLSX('upload/'.$get_var_file_name.'');
		$excel_data = $xlsx->rows();
		$jumlah_row_excel_data=count($excel_data);
		$return_insert = ail_fileupload_insert($get_var_id_ailfileupload, $get_var_id_user,$get_var_type_file,$get_var_file_name,$jumlah_row_excel_data);

		for ($i=1;$i<count($excel_data);$i++) 
		{
				$id_dokumen 		= $excel_data[$i][0];	
				$nama_dokumen 		= $excel_data[$i][1];
				$id_user			= $excel_data[$i][2];	
				$id_checklist		= $excel_data[$i][3];
				$lokasi_area		= $excel_data[$i][4];
				$lokasi_blok		= $excel_data[$i][5];	
				$lokasi_lemari		= $excel_data[$i][6];	
				$lokasi_level		= $excel_data[$i][7];	
				$lokasi_binder		= $excel_data[$i][8];	
				$lokasi_dokumen		= $excel_data[$i][9];
				$tgl_upload 		= date('Y-m-d',$xlsx->unixstamp($excel_data[$i][10]));	
				$file_jpg			= $excel_data[$i][11];
				$id_pelanggan		= $excel_data[$i][12];
				$ip_ftp_unit		= $excel_data[$i][13];
				$ip_ftp_central		= $excel_data[$i][14];
				$status_doc_unit	= $excel_data[$i][15];
				$status_doc_central	= $excel_data[$i][16];
				$last_update		= date('Y-m-d',$xlsx->unixstamp($excel_data[$i][17]));
				$kode_area			= $excel_data[$i][18];
				$periode			= $excel_data[$i][19];
				$periode_date_start	= $excel_data[$i][20];
				$periode_date_end	= $excel_data[$i][21];
				$file_name			= $excel_data[$i][22];
				$informasi_01		= $excel_data[$i][23];
				$informasi_02		= $excel_data[$i][24];
				$informasi_03		= $excel_data[$i][25];
				$informasi_04		= $excel_data[$i][26];
				$informasi_05		= $excel_data[$i][27];
				$informasi_06		= $excel_data[$i][28];
				$informasi_07		= $excel_data[$i][29];
				$informasi_08		= $excel_data[$i][30];
				$informasi_09		= $excel_data[$i][31];
				$informasi_10		= $excel_data[$i][32];
				
/*				
				echo "ID Dokumen = ".$id_dokumen."<BR>";
				echo "Nama Dokumen = ".$nama_dokumen."<BR>";
				echo "ID user = ".$id_user."<BR>";
				echo "ID Checklist = ".$id_checklist."<BR>";
				echo "Lokasi Area = ".$lokasi_area."<BR>";
				echo "Lokasi Blok = ".$lokasi_blok."<BR>";
				echo "Lokasi Lemari = ".$lokasi_lemari."<BR>";
				echo "Lokasi Level = ".$lokasi_level."<BR>";
				echo "Lokasi Binder = ".$lokasi_binder."<BR>";
				echo "Lokasi Dokumen = ".$lokasi_dokumen."<BR>";
				echo "Tanggal Upload = ".$tgl_upload."<BR>";
				echo "File JPG = ".$file_jp."<BR>";
				echo "ID Pelanggan = ".$id_pelanggan."<BR>";
				echo "IP FTP Unit = ".$ip_ftp_unit."<BR>";
				echo "IP FTP Central = ".$ip_ftp_central."<BR>";
				echo "Status Dokumen Unit = ".$status_doc_unit."<BR>";
				echo "Status Dokumen Central = ".$status_doc_central."<BR>";
				echo "Last Update = ".$last_update."<BR>";
				echo "Kode Area= ".$kode_area."<BR>";
				echo "Periode = ".$periode."<BR>";
				echo "Periode Date Start = ".$periode_date_start."<BR>";
				echo "Periode Date End = ".$periode_date_end."<BR>";
				echo "File Name = ".$file_name."<BR><BR>";
*/						
		ail_doc_insert($id_dokumen, $nama_dokumen, $id_user, $id_checklist, $lokasi_area, $lokasi_blok, $lokasi_lemari,$lokasi_level,$lokasi_binder,$lokasi_dokumen, $tgl_upload, $file_jpg,
		$id_pelanggan, $ip_ftp_unit, $ip_ftp_central, $status_doc_unit, $status_doc_central, $last_update, $kode_area, $periode, $periode_date_start,$periode_date_end,$file_name,
		$informasi_01,$informasi_02,$informasi_03,$informasi_04,$informasi_05,$informasi_06,$informasi_07,$informasi_08,$informasi_09,$informasi_10);
		}
 
		if ($return_insert==1)
		{
		echo '<script language="javascript">alert("Penambahan File Upload Berhasil Disimpan dengan Jumlah Record '.($jumlah_row_excel_data-1).'.")</script>';
		echo '<script language="javascript">window.location = "ail_doc_view.php"</script>';
		}
		else 
		{
		echo '<script language="javascript">alert("ERROR : Penambahan File Upload Gagal Disimpan")</script>';
		echo '<script language="javascript">window.location = "ail_fileupload_view.php"</script>';
		} 
		}
}
?>
