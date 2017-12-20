<?
ini_set('session.gc_maxlifetime', 30*60);
session_start();
include_once("lib/config.php");
include_once("function/function_apkt_fileupload.php");
include_once("function/function_apkt_master.php");
require_once('lib/excell/simplexlsx.class.php');
require_once('lib/excell/reader.php');

$var_file_name = $_FILES['var_file_name']['name'];
$path= "upload/".$var_file_name;


$get_var_type_file =array('xls','xlsx');

if($var_file_name !=none)
	{

	if(copy($_FILES['var_file_name']['tmp_name'], $path))
		{
			//ECHO $path;
		//$get_var_id_fileupload 	= $_POST['var_id_fileupload'];
		$get_var_id_user 			= $_SESSION['id_user'];
		$get_var_type_file 			= $_FILES['var_file_name']['type']; 
		$get_var_file_name 			= $_FILES['var_file_name']['name'];
		$get_var_informasi_01		= '1';
		$get_var_informasi_02		= '2';
		$get_var_informasi_03		= '3';
		$get_var_informasi_04		= '4';
		$get_var_informasi_05		= '5';

		//$random_digit=rand(0000,9999);
		//$new_file_name=$random_digit.$var_file_name;
		//$get_var_number_record = $_POST['var_number_record'];		

		$xlsx = new SimpleXLSX('upload/'.$get_var_file_name.'');
		$excel_data = $xlsx->rows();
		
		//jumlsh baris di file excel
		$jumlah_row_excel_data=count($excel_data);

		//echo "JML=".$jumlah_row_excel_data."<BR>";		
		
		$return_insert = apkt_file_upload_insert($get_var_id_user,$get_var_file_name,$jumlah_row_excel_data, $get_var_informasi_01,$get_var_informasi_02,$get_var_informasi_04,$get_var_informasi_05);
				
		$jumlah_double = 0;
		$jumlah_record_ok = 0;
		for ($i=1;$i<=count($excel_data);$i++) 
		{				
						$id_pelanggan	= '0';
						$nomor_lapor	= $excel_data[$i][0];	

						$nama			= $excel_data[$i][1];
						$nama			= trim(str_replace("'","",$excel_data[$i][1]));
						$nama			= str_replace(")","",$nama);
						$nama			= str_replace("","(",$nama);
						$nama			= str_replace(",","",$nama);
						$nama			= str_replace("~","",$nama);
						$nama			= str_replace("`","",$nama);
						$nama			= str_replace("{","",$nama);
						$nama			= str_replace("}","",$nama);

						$alamat			= trim(str_replace("'","",$excel_data[$i][2]));
						$alamat			= str_replace(")","",$alamat);
						$alamat			= str_replace("","(",$alamat);
						$alamat			= str_replace(",","",$alamat);
						$alamat			= str_replace("~","",$alamat);
						$alamat			= str_replace("`","",$alamat);
						$alamat			= str_replace("{","",$alamat);
						$alamat			= str_replace("}","",$alamat);
						
						$posko			= $excel_data[$i][3];
						$nomor_telepon 	= $excel_data[$i][4];

						$deskripsi 		= $excel_data[$i][5];
						$deskripsi		= trim(str_replace("'","",$excel_data[$i][5]));
						$deskripsi		= str_replace(")","",$deskripsi);
						$deskripsi		= str_replace("(","",$deskripsi);
						$deskripsi		= str_replace(",","",$deskripsi);
						$deskripsi		= str_replace("~","",$deskripsi);
						$deskripsi		= str_replace("`","",$deskripsi);
						$deskripsi		= str_replace("{","",$deskripsi);
						$deskripsi		= str_replace("}","",$deskripsi);
						

						$penyebab 		= $excel_data[$i][6];
						$tanggal_buat 	= date('Y-m-d',$xlsx->unixstamp($excel_data[$i][7]));
						$tanggal_padam 	= date('Y-m-d',$xlsx->unixstamp($excel_data[$i][8]));
						$tanggal_nyala 	= date('Y-m-d',$xlsx->unixstamp($excel_data[$i][9]));
						//$tanggal_lapor 		= date('Y-m-d',$xlsx->unixstamp($excel_data[$i][11]));
						$tanggal_lapor 	= '';
						$keterangan 	= $excel_data[$i][11];
						$status_data 	= $excel_data[$i][12];
						$status_call 	= $excel_data[$i][13];
						$status_call_phone 		= '0';
						$kode_distribusi 		= '0';
						$kode_area 		= '0';
						$kode_unit 		= '0';
						$kode_rayon 	= '0';
						//$bulan_tahun 		= date('Y-m-d',$xlsx->unixstamp($excel_data[$i][20]));
						$bulan_tahun 	= date('Ym');
						$upload_file 	= $get_var_file_name;
						$upload_pengguna= $get_var_id_user;
						$upload_tanggal = date('Ymd');
						//date('Y-m-d',$xlsx->unixstamp($excel_data[$i][5]));	
						$informasi_01		= $excel_data[$i][24];
						$informasi_02		= $excel_data[$i][25];
						$informasi_03		= $excel_data[$i][26];
						$informasi_04		= $excel_data[$i][27];
						$informasi_05		= $excel_data[$i][28];
						$informasi_06		= $excel_data[$i][29];
						$informasi_07		= $excel_data[$i][30];
						$informasi_08		= $excel_data[$i][31];
						$informasi_09		= $excel_data[$i][32];
						$informasi_10		= $excel_data[$i][33];
						
						if ($nomor_lapor<>"") 
						{

							$double = apkt_master_search_by_nomor_lapor($nomor_lapor);

							if (count($double)> 0){
								$jumlah_double++; 
								//echo $jumlah_double;
							} else {
								$jumlah_record_ok++;
							
													
								$return_insert = apkt_upload_master_insert(
								$id_pelanggan, 
								$nomor_lapor, 
								$nama, 
								$alamat, 
								$posko, 
								$nomor_telepon, 
								$deskripsi, 
								$penyebab, 
								$tanggal_buat, 
								$tanggal_padam, 
								$tanggal_nyala, 
								$tanggal_lapor, 
								$keterangan, 
								$status_data, 
								$status_call, 
								$status_call_phone, 
								$kode_distribusi, 
								$kode_area, 
								$kode_unit, 
								$kode_rayon, 
								$bulan_tahun, 
								$upload_pengguna, 
								$upload_file, 
								$upload_tanggal, 
								$informasi_01, 
								$informasi_02, 
								$informasi_03, 
								$informasi_04, 
								$informasi_05, 
								$informasi_06, 
								$informasi_07, 
								$informasi_08, 
								$informasi_09, 
								$informasi_10);
							}

						}

						//echo "<hR>";
		} // END FOR.

		  // echo "DOUBLE = ".$jumlah_double;


			//echo '<script language="javascript">alert("Penambahan File Upload Berhasil Disimpan dengan Jumlah Record '.($jumlah_row_excel_data-1).'.")</script>';

	
			//echo '<script language="javascript">alert("ERROR : Penambahan File Upload Gagal Disimpan")</script>';
			//echo '<script language="javascript">alert("Penambahan File Upload Berhasil Disimpan dengan Jumlah Record :'.$jumlah_record_ok.'.", Gagal Karena Double : "'.$jumlah_double.'")</script>';

			//echo '<script language="javascript">window.location = "upload_view.php"</script>';
			//echo '<script language="javascript">alert("Penambahan File Upload Berhasil Disimpan dengan Jumlah Record :'.$jumlah_record_ok.'.", Gagal Karena Double : "'.$jumlah_double.'")</script>';

			
			echo '<script language="javascript">alert("Penambahan File Upload Berhasil Disimpan dengan Jumlah Record : \"'.$jumlah_record_ok.'\" , Gagal Karena Double : \"'.$jumlah_double.'\" ")</script>';
			echo '<script language="javascript">window.location = "upload_view.php"</script>';
			
		}
	}

	
	//echo '<script language="javascript">window.location = "upload_view.php"</script>';

?>