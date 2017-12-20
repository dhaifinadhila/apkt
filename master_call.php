<?php
ini_set('session.gc_maxlifetime', 30*60);
session_start();
include_once("function/function_apkt_master.php");

// echo $_SESSION['id_user'];

?>

<!DOCTYPE html>
<html>
<head>	
<link rel="stylesheet" href="css/serverstyle.css">
<link rel="stylesheet" href="css/button.css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"> 
<link rel="stylesheet" type="text/css" href="ddlevelsfiles/ddlevelsmenu-base.css" />
<link rel="stylesheet" type="text/css" href="ddlevelsfiles/ddlevelsmenu-topbar.css" />
<link rel="stylesheet" type="text/css" href="ddlevelsfiles/ddlevelsmenu-sidebar.css" />
<script type="text/javascript" src="ddlevelsfiles/ddlevelsmenu.js"></script>


<script type="text/javascript" src="lib/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
		$("#kriteria_gagal_div").hide();
		$("#alasan_belum_nyala").hide();

        $('input[type="checkbox"]').change(function () {
			if (this.checked) {
                $("#kriteria_gagal_div").fadeIn('slow');
            } else 
            {
                $("#kriteria_gagal_div").fadeOut('slow');
            }
        });
		
		
		$("input[name=p5]:radio").change(function () {
			if($(this).attr("value")==4){
                $("#alasan_belum_nyala").fadeIn('slow');
			}else {
				$("#alasan_belum_nyala").fadeOut('slow');
            }
		});
    });
</script>

<style type="text/css">
<!--
.style1 {
	color: #FF0000;
	font-weight: bold;
}
-->
</style>
</head>
<body  bgcolor="#e9e9e9">
<table width="1024" border="0" align="center" cellpadding="0" cellspacing="0" class="BorderBox_NoColor">
  <!--DWLayoutTable-->
  <tr>
    <td height="147" colspan="3" align="left" valign="top" bgcolor="#f4f4f4"><img src="images/header.png" width="1024" height="160"></td>
  </tr>
  
  <tr>
    <td width="1028" height="173" colspan="3" align="left" valign="top" bgcolor="#FFFFFF"><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
      <tr>
        <th bgcolor="#414141" scope="col">&nbsp;</th>
        <th bgcolor="#414141" class="_css_font_default_11" scope="col">
		  <? 
		    include "menu.php"; 
		  ?>		</th>
        <th bgcolor="#414141" class="_css_font_default_11" scope="col">&nbsp;</th>
      </tr>
      <tr>
        <th width="25" scope="col">&nbsp;</th>
        <th class="_css_font_default_11" scope="col">&nbsp;</th>
        <th width="25" class="_css_font_default_11" scope="col">&nbsp;</th>
      </tr>
       <tr>
        <th width="25" scope="col">&nbsp;</th>
        <th class="_css_font_default_11" scope="col"><div align="left">Selamat Datang,<strong> <?php echo $_SESSION['nama']." - ".$_SESSION['jabatan']; ?></strong></div></th>
        <th width="25" class="_css_font_default_11" scope="col">&nbsp;</th>
      </tr>
      
      <tr>
        <th scope="col">&nbsp;</th>
        <th class="_css_font_default_11" scope="col"><div align="left"><img src="images/line_full.gif" ></div></th>
        <th class="_css_font_default_11" scope="col">&nbsp;</th>
      </tr>
      
      <tr>
        <th height="19" scope="col">&nbsp;</th>
        <th class="_css_font_default_11" scope="col"><div align="left"><strong>Belum Call Back APKT </strong> 
		 </div></th>
        <th class="_css_font_default_11" scope="col">&nbsp;</th>
      </tr>
      
      <tr>
        <th height="19" scope="col">&nbsp;</th>
        <th class="_css_font_default_11" scope="col">&nbsp;</th>
        <th class="_css_font_default_11" scope="col">&nbsp;</th>
      </tr>
      <tr>
        <th height="84" scope="col">&nbsp;</th>
        <th class="_css_font_default_11" scope="col">
		
				<?
				$VAR_ID_MASTER = $_GET['id'];
				$master_call = apkt_master_search_by_id_master($VAR_ID_MASTER);
				$VAR_STATUS_CALL_PHONE	= $master_call[0]['STATUS_CALL_PHONE'];
				//echo "tes".$VAR_STATUS_CALL_PHONE;
				
				if ($VAR_STATUS_CALL_PHONE=="1") {
					echo '<script language="javascript">alert("Pelanggan ini sudah dilakukan Callback. Silahkan mencari pelanggan yang lain.")</script>';
					echo '<script language="javascript">window.location = "master.php"</script>';
				}
				
				?>
				  <table width="90%" align="center" class="_css_font_default_12">
				  
				  <tr>
				    <td colspan="2" align="center">
						<table width="100%" border="0" cellpadding="4" cellspacing="1">
						  <tr class="_css_font_default_11_b">
							<td colspan="3" bgcolor="#CCCCCC" class="_css_font_default_12"><strong>DATA PELANGGAN </strong></td>
							</tr>
						  <tr class="_css_font_default_11">
							<td width="21%" class="_css_font_default_12"><strong>No Telepon</strong></td>
							<td width="2%" class="_css_font_default_12"><strong>:</strong></td>
							<td width="77%"><?= $master_call[0]['NOMOR_TELEPON'] ?></td>
							</tr>
							<!-- 
						  <tr class="_css_font_default_11">
							<td class="_css_font_default_12"><strong>Kode Unit</strong></td>
							<td class="_css_font_default_12"><strong>:</strong></td>
							<td><?= $master_call[0]['KODE_UNIT'] ?></td>
							</tr>
						  <tr class="_css_font_default_11_b">
							<td class="_css_font_default_12"><strong>ID Pelanggan </strong></td>
							<td class="_css_font_default_12"><strong>:</strong></td>
							<td><?= $master_call[0]['ID_PELANGGAN'] ?></td>
							</tr>
							-->
						  <tr class="_css_font_default_11_b">
							<td class="_css_font_default_12"><strong>Nama</strong></td>
							<td class="_css_font_default_12"><strong>:</strong></td>
							<td><?= $master_call[0]['NAMA'] ?></td>
						  </tr>
						  <tr class="_css_font_default_11_b">
							<td class="_css_font_default_12"><strong>Alamat</strong></td>
							<td class="_css_font_default_12"><strong>:</strong></td>
							<td><?= $master_call[0]['ALAMAT'] ?></td>
						  </tr>
						  <tr class="_css_font_default_11_b">
							<td class="_css_font_default_12"><strong>Posko </strong></td>
							<td class="_css_font_default_12"><strong>:</strong></td>
							<td><?= $master_call[0]['POSKO'] ?></td>
						  </tr>
						  
						  
						  <tr class="_css_font_default_11_b">
							<td colspan="3" bgcolor="#CCCCCC" class="_css_font_default_12"><strong>DATA LAPORAN</strong></td>
							</tr>
						  <tr class="_css_font_default_11">
							<td class="_css_font_default_12"><strong>Nomor Lapor</strong></td>
							<td class="_css_font_default_12"><strong>:</strong></td>
							<td><?= $master_call[0]['NOMOR_LAPOR'] ?></td>
							</tr>
						  <tr class="_css_font_default_11_b">
							<td class="_css_font_default_12"><strong>Deskripsi</strong></td>
							<td class="_css_font_default_12"><strong>:</strong></td>
							<td><?= $master_call[0]['DESKRIPSI'] ?></td>
						  </tr>
						  <tr class="_css_font_default_11_b">
							<td class="_css_font_default_12"><strong>Penyebab</strong></td>
							<td class="_css_font_default_12"><strong>:</strong></td>
							<td><?= $master_call[0]['PENYEBAB'] ?></td>
						  </tr>
						  <tr class="_css_font_default_11_b">
							<td class="_css_font_default_12"><strong>Tanggal Pembuatan Laporan</strong></td>
							<td class="_css_font_default_12"><strong>:</strong></td>
							<td><?= $master_call[0]['TANGGAL_BUAT'] ?></td>
						  </tr>
						  <tr class="_css_font_default_11_b">
							<td class="_css_font_default_12"><strong>Tanggal Padam </strong></td>
							<td class="_css_font_default_12"><strong>:</strong></td>
							<td><?= $master_call[0]['TANGGAL_PADAM'] ?></td>
						  </tr>
						  <tr class="_css_font_default_11_b">
							<td class="_css_font_default_12"><strong>Tanggal Nyala </strong></td>
							<td class="_css_font_default_12"><strong>:</strong></td>
							<td><?= $master_call[0]['TANGGAL_NYALA'] ?></td>
						  </tr>
						  <tr class="_css_font_default_11_b">
							<td class="_css_font_default_12"><strong>Tanggal Lapor </strong></td>
							<td class="_css_font_default_12"><strong>:</strong></td>
							<td><?= $master_call[0]['TANGGAL_LAPOR'] ?></td>
						  </tr>
						  <tr class="_css_font_default_11_b">
							<td class="_css_font_default_12"><strong>Keterangan</strong></td>
							<td class="_css_font_default_12"><strong>:</strong></td>
							<td><?= $master_call[0]['KETERANGAN'] ?></td>
						  </tr>
						  <!-- 
						  <tr class="_css_font_default_11">
							<td class="_css_font_default_12"><strong>Kode Distribusi</strong></td>
							<td class="_css_font_default_12"><strong>:</strong></td>
							<td><?= $master_call[0]['KODE_DISTRIBUSI'] ?></td>
							</tr>
						  <tr class="_css_font_default_11">
							<td width="21%" class="_css_font_default_12"><strong>Kode Area</strong></td>
							<td width="2%" class="_css_font_default_12"><strong>:</strong></td>
							<td width="77%"><?= $master_call[0]['KODE_AREA'] ?></td>
							</tr>
						  <tr class="_css_font_default_11">
							<td class="_css_font_default_12"><strong>Kode Rayon</strong></td>
							<td class="_css_font_default_12"><strong>:</strong></td>
							<td><?= $master_call[0]['KODE_RAYON'] ?></td>
							</tr>
							-->
						  <tr class="_css_font_default_11">
							<td class="_css_font_default_12"><strong>Bulan Tahun</strong></td>
							<td class="_css_font_default_12"><strong>:</strong></td>
							<td><?= $master_call[0]['BULAN_TAHUN'] ?></td>
							</tr>
						  
						  
						  <tr class="_css_font_default_11_b">
							<td colspan="3" bgcolor="#CCCCCC" class="_css_font_default_12"><strong>Status Data</strong></td>
							</tr>
						  <tr class="_css_font_default_11_b">
							<td class="_css_font_default_12"><strong>Status</strong></td>
							<td class="_css_font_default_12"><strong>:</strong></td>
							<td><?= $master_call[0]['STATUS_DATA'] ?></td>
						  </tr>
						  <tr class="_css_font_default_11_b">
							<td class="_css_font_default_12"><strong>Status Call</strong></td>
							<td class="_css_font_default_12"><strong>:</strong></td>
							<td><?= $master_call[0]['STATUS_CALL'] ?></td>
						  </tr>
						  <tr class="_css_font_default_11_b">
							<td class="_css_font_default_12"><strong>Status Call Phone</strong></td>
							<td class="_css_font_default_12"><strong>:</strong></td>
							<td><?= $master_call[0]['STATUS_CALL_PHONE'] ?></td>
						  </tr>
						  
						  
						  <tr class="_css_font_default_11_b">
							<td colspan="3" bgcolor="#CCCCCC" class="_css_font_default_12"><strong>DATA UPLOAD</strong></td>
							</tr>
						  <tr class="_css_font_default_11_b">
							<td class="_css_font_default_12"><strong>User yang Meng-upload</strong></td>
							<td class="_css_font_default_12"><strong>:</strong></td>
							<td><?= $master_call[0]['UPLOAD_PENGGUNA'] ?></td>
						  </tr>
						  <tr class="_css_font_default_11_b">
							<td class="_css_font_default_12"><strong>Nama File</strong></td>
							<td class="_css_font_default_12"><strong>:</strong></td>
							<td><?= $master_call[0]['UPLOAD_FILE'] ?></td>
						  </tr>
						  <tr class="_css_font_default_11_b">
							<td class="_css_font_default_12"><strong>Tanggal Upload </strong></td>
							<td class="_css_font_default_12"><strong>:</strong></td>
							<td><?= $master_call[0]['UPLOAD_TANGGAL'] ?></td>
						  </tr>
						  
						  <!-- 
						  <tr class="_css_font_default_11_b">
							<td colspan="3" bgcolor="#CCCCCC" class="_css_font_default_12"><strong>SUDAH PERNAH DI CALL SEBANYAK  KALI</strong></td>
							</tr>
						 -->
						</table>
					</td>
				    </tr>
				  <tr>
				    <td colspan="2" align="center">&nbsp;</td>
				    </tr>
				  <tr>
				    <td colspan="2" align="center"><div align="left"><img src="images/line_full.gif" ></div></td>
				    </tr>
				  <tr>
				    <td colspan="2" align="center">&nbsp;</td>
				    </tr>
					
			<form action="master_call_submit.php" method="post" enctype="multipart/form-data" name="form_callback_sheet">	
					
					<input name="ID_MASTER" type="hidden" id="ID_PELANGGAN" value="<? echo $VAR_ID_MASTER; ?>">
					<input name="ID_PELANGGAN" type="hidden" id="ID_PELANGGAN" value="<? echo $master_call[0]['ID_PELANGGAN'] ?>">
					<input name="NOMOR_LAPOR" type="hidden" id="NOMOR_LAPOR" value="<? echo $master_call[0]['NOMOR_LAPOR'] ?>">
					<input name="BULAN_TAHUN" type="hidden" id="BULAN_TAHUN" value="<? echo $master_call[0]['BULAN_TAHUN'] ?>">
				  <tr>
				    <td colspan="2" align="center"><p align="left" class="_css_font_default_14">Greeting : Selamat [Pagi/Siang/Sore] Bapak/Ibu <b><?= $master_call[0]['NAMA'] ?></b>, saya <?= $_SESSION['nama'] ?>dari Call Back Center PLN. 
					 Mohon kesediaan waktunya ya pak/bu? untuk menanyakan beberapa hal terkait layanan penyelesaian gangguan listrik di tempat bapak/ibu.
					 </p></td>
				    </tr>
				  <tr>
				    <td align="center">&nbsp;</td>
				    <td width="849">&nbsp;</td>
				    </tr>
				  <tr>
				    <td colspan="2" align="center"><div align="left"><img src="images/line_full.gif" ></div></td>
				    </tr>
				  
				  <tr>
				    <td align="center">&nbsp;</td>
				    <td>&nbsp;</td>
				    </tr>
				  <tr align="left">
				    <td width="27" align="center">1.</td>
                    <td>Mohon maaf, apakah saya sedang berbicara dengan Bapak/Ibu <b><?= $master_call[0]['NAMA'] ?></b> sebagai pemilik rumah?</td>
                  </tr>
				  <tr align="left">
				    <td>&nbsp;</td>
				    <td><input name="p1" id="p1" type="radio" value="1" required >
Ya, saya sendiri <strong>[lanjut ke pertanyaan no 3]</strong></td>
				    </tr>
				  <tr align="left">
				    <td>&nbsp;</td>
                    <td><input name="p1" id="p1" type="radio" value="2">
Bukan, Saya masih keluarganya</td>
                    </tr>  
				  <tr align="left">
				    <td>&nbsp;</td>
                    <td><input name="p1" id="p1" type="radio" value="3">
Bukan Saya (Orang Lain)</td>
                    </tr>  
				  <tr align="left">
				    <td width="27" align="center">&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
				  <tr align="left">
				    <td width="27" align="center">2.</td>
                    <td>Sudah berapa kali Bapak/Ibu melaporkan gangguan yang sekarang ini kepada Call Center 123?</td>
                  </tr>
				  <tr align="left">
				    <td>&nbsp;</td>
				    <td><input name="p2" id="p2" type="radio" value="1" required>
1 Kali</td>
				    </tr>
				  <tr align="left">
				    <td>&nbsp;</td>
                    <td><input name="p2" id="p2" type="radio" value="2">
2 Kali</td>
                    </tr>  
				  <tr align="left">
				    <td>&nbsp;</td>
                    <td><input name="p2" id="p2" type="radio" value="3">
3 Kali atau Lebih</td>
                    </tr>  
				  <tr align="left">
				    <td width="27" align="center">&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
				  
				 <tr align="left">
				   <td width="27" align="center">3.</td>
                    <td>Berapa lamakah Bapak/Ibu <b><?= $master_call[0]['NAMA'] ?></b> menunggu sejak selesai menelpon hingga petugas tiba di tempat?	</td>
                  </tr> 
				  <tr align="left">
				    <td height="23">&nbsp;</td>
				    <td><input name="p3" id="p3" type="radio" value="1"  required>
Kurang dari 30 Menit  </td>
				    </tr>
				  <tr align="left">
				    <td height="23">&nbsp;</td>
                    <td><input name="p3" id="p3" type="radio" value="2">
Lebih dari 30 Menit  </td>
                    </tr> 

				  <tr align="left">
				    <td height="23">&nbsp;</td>
                    <td><input name="p3" id="p3" type="radio" value="3">
Petugas Belum Datang  </td>
                    </tr> 

				 <tr align="left">
				   <td width="27" align="center">&nbsp;</td>
                    <td>&nbsp;</td>
                 </tr>   	   	                                    
				  <tr align="left">
				    <td width="27" align="center">4.</td>
                    <td>Berapa lama padam sampai dengan listrik menyala kembali?</td>
                  </tr> 
				   <tr align="left">
				     <td width="27" align="center">&nbsp;</td>
                    <td>
                        <input name="p4" id="p4" type="radio" value="1"  required >Tidak lebih dari 1 jam</td>
                  </tr> 
				   <tr align="left">
				     <td width="27" align="center">&nbsp;</td>
                    <td>
                        <input name="p4" id="p4" type="radio" value="2"> 2 s/d 3 jam </td>
                  </tr> 
				   <tr align="left">
				     <td width="27" align="center">&nbsp;</td>
                    <td>
                        <input name="p4" id="p4" type="radio" value="3"> 4 s/d 12 jam</td>
                  </tr>
				   <tr align="left">
                    <td width="27" align="center">&nbsp;</td>
                    <td>
                        <input name="p4" id="p4" type="radio" value="4"> Belum menyala sampai saat ini [Sistem otomatis notifikasi ke Area yang Bersangkutan] </td>
				  </tr>
				  
				  </tr>
				   <tr align="left">
                    <td width="27" align="center">&nbsp;</td>
                    <td>
                        <input name="p4" id="p4" type="radio" value="5"> Tidak Padam </td>
				  </tr>
					<tr align="left">
                    <td width="27" align="center">&nbsp;</td>
					<td>*Petugas memastikan kembali kepada pelanggan apabila gangguan memang belum diselesaikan oleh Area yang bersangkutan.*</td>
					</tr>
				  <tr align="left">
				    <td width="27" align="center">&nbsp;</td>
                    <td>&nbsp;</td>
                 </tr>   	
				  <tr align="left">
				    <td width="27" align="center">5.</td>
                    <td>Apakah perbaikan yang dilakukan sudah selesai seperti semula, atau masih bersifat sementara?</td>
                  </tr>
				   <tr align="left">
				     <td width="27" align="center">&nbsp;</td>
                    <td><input name="p5" id="p5" type="radio" value="1" required>Sambung normal seperti semula</td>
                  </tr> 
				  <tr align="left">
				    <td width="27" align="center">&nbsp;</td>
                    <td><input name="p5" id="p5" type="radio" value="2">Sambung sementara via meter</td>
                  </tr> 
				  <tr align="left">
				    <td width="27" align="center">&nbsp;</td>
                    <td><input name="p5" id="p5" type="radio" value="3">Sambung langsung via pembatas</td>
                  </tr> 
				  <tr align="left">
				    <td width="27" align="center">&nbsp;</td>
                    <td>
						<input name="p5" id="p5" type="radio" value="4">Sambung langsung tanpa meter dan tanpa MCB
					</td>
                  </tr> 
				   <tr align="left">
				     <td width="27" align="center">&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr> 
				  <tr align="left">
				    <td width="27" align="center" >6.</td>
                    <td>Apakah petugas kami memberi informasi perihal terjadinya gangguan di rumah Bapak/Ibu?</td>
                  </tr> 
				  <tr align="left">
				    <td width="27" align="center">&nbsp;</td>
                    <td><input name="p6" id="p6" type="radio" value="1" required>Penyebab gangguan/padam</td>
                  </tr> 
				  <tr align="left">
				    <td width="27" align="center">&nbsp;</td>
                    <td><input name="p6" id="p6" type="radio" value="2">Memberitahu akan ada petugas yang akan mengganti peralatan/menyampaikan surat (LG)</td>
                  </tr> 
				  <tr align="left">
				    <td width="27" align="center">&nbsp;</td>
                    <td><input name="p6" id="p6" type="radio" value="3">Pemberitahuan adanya tagihan susulan</td>
                  </tr> 
				  <tr align="left">
				    <td width="27" align="center">&nbsp;</td>
                    <td><input name="p6" id="p6" type="radio" value="4">Petugas tidak meninggalkan pesan/surat atau informasi</td>
                  </tr> 
				  <tr align="left">
				     <td width="27" align="center">&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
				  <tr align="left">
				    <td width="27" align="center">7.</td>
                    <td>Apakah di rumah Bapak/Ibu <b><?= $master_call[0]['NAMA'] ?></b> memberikan uang/biaya? </td>
                  </tr>
				  <tr align="left">
				    <td width="27" align="center">&nbsp;</td>
                    <td><input name="p7" id="p7" type="radio" value="1" required> Tidak memberi uang atau barang apapun</td>
                  </tr> 
				  <tr align="left">
				    <td width="27" align="center">&nbsp;</td>
                    <td><input name="p7" id="p7" type="radio" value="2"> Ya, memberikan uang untuk tips </td>
                  </tr> 
				  <tr align="left">
				    <td width="27" align="center">&nbsp;</td>
                    <td><input name="p7" id="p7" type="radio" value="3"> Ya, memberikan uang untuk material </td>
                  </tr>
				  <tr align="left">
				    <td width="27" align="center">&nbsp;</td>
                    <td><input name="p7" id="p7" type="radio" value="4"> Ya, memberikan tips berupa barang sebagai ucapan terima kasih </td></td>
                  </tr> 
				  <tr align="left">
				     <td width="27" align="center">&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
				  <tr align="left">
				    <td width="27" align="center">8.</td>
                    <td>Saat ini, kondisi setempat bagaimana bpk/ibu?</td>
                  </tr> 
				  <tr align="left">
				    <td width="27" align="center">&nbsp;</td>
                    <td><input name="p8" id="p8" type="radio" value="1" required>
                      Tegangan masih drop</td>
                  </tr>     
				  <tr align="left">
				    <td width="27" align="center">&nbsp;</td>
                    <td><input name="p8" id="p8" type="radio" value="2">
                      Ditengarai bukan petugas yang datang bukanlah petugas Yantek PLN dan pelanggan dikenakan biaya mahal</td>
                  </tr>
				  <tr align="left">
				    <td width="27" align="center">&nbsp;</td>
                    <td><input name="p8" id="p8" type="radio" value="3">
                      Telah dilakukan pemindahan phase oleh bukan petugas Yantek PLN</td>
                  </tr> 
				  <tr align="left">
				    <td width="27" align="center">&nbsp;</td>
                    <td><input name="p8" id="p8" type="radio" value="4">Petugas Yantek PLN memperbaiki instalasi pelanggan di luar jam tugas</td>
                  </tr>  				
				  <tr align="left">
				    <td width="27" align="center">&nbsp;</td>
                    <td><input name="p8" id="p8" type="radio" value="5">Pelanggan keberatan disambung langsung oleh petugas</td>
                  </tr>
				  <tr align="left">
				    <td width="27" align="center">&nbsp;</td>
                    <td><input name="p8" id="p8" type="radio" value="6">Pelanggan keberatan setelah diperbaiki tidak disegel kembali</td>
                  </tr>
				  <tr align="left">
				    <td width="27" align="center">&nbsp;</td>
                    <td><input name="p8" id="p8" type="radio" value="7">Normal</td>
                  </tr>
				  <tr align="left">
				    <td width="27" align="center">&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>  
				  <tr align="left">
				    <td width="27" align="center">&nbsp;</td>
                    <td>"Closing :  Terima kasih bapak/Ibu <b><?= $master_call[0]['NAMA'] ?></b> telah meluangkan waktunya.
Informasi ini sangat berarti bagi kami untuk meningkatkan mutu pelayanan PLN. Bila memerlukan informasi layanan PLN, silahkan menghubungi Contact Center 123. Selamat Pagi/Siang/Sore
"</td>
                  </tr> 
				  <tr align="left">
				    <td width="27" align="center">&nbsp;</td>
                    <td>Jawaban ini sangat berarti bagi kami untuk meningkatkan mutu pelayanan PLN. Selamat Siang</td>
                  </tr> 

				<tr align="left">
				    <td width="27" align="center">&nbsp;</td>
                    <td>
						<input type="checkbox" name="gagal_call" id="gagal_call" value="1">Gagal Call<br>
					</td>
                  </tr>
				  <tr id="kriteria_gagal_div">
				    <td width="27" align="center">&nbsp;</td>
                    <td>
						<select id="kriteria_gagal" name="kriteria_gagal">
						  <option value="Telp tidak diangkat">Telp tidak diangkat</option>
						  <option value="Nomor tidak aktif / tidak terdaftar">Nomor tidak aktif / tidak terdaftar</option>
						  <option value="Telp diangkat tapi dibiarkan">Telp diangkat tapi dibiarkan</option>
						</select> 
					</td>
                  </tr>
				  <tr align="left">
				    <td width="27" align="center">&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr> 
				  <tr align="left">
				    <td width="27" align="center">&nbsp;</td>
                    <td>Keterangan</td>
                  </tr> 
				  <tr align="left">
				    <td width="27" align="center">&nbsp;</td>
                    <td><textarea id="keterangan" name="keterangan" rows="4" cols="50"></textarea> 
					</td>
                  </tr>
				  	   
				  <tr align="left">
				    <td width="27" align="center">&nbsp;</td>
                    <td>						
						<input class="button" type="submit" name="Submit" value="SIMPAN">
						 <input class="button" type="reset" name="reset" value="RESET"></td>
                  </tr>
				  <tr>
				    <td align="center">&nbsp;</td>
				    <td>&nbsp;</td>
				    </tr>
				  <tr>
				    <td align="center">&nbsp;</td>
				    <td>&nbsp;</td>
				    </tr>
					
				</form>
				
              </table>
				</th>
        <th class="_css_font_default_11" scope="col">&nbsp;</th>
      </tr>
      
      <tr>
        <th scope="col">&nbsp;</th>
        <th class="_css_font_default_11" scope="col">&nbsp; </th>
        <th class="_css_font_default_11" scope="col">&nbsp;</th>
      </tr>
      <tr>
        <th scope="col">&nbsp;</th>
        <th class="_css_font_default_11" scope="col"><div align="left" class="_css_font_default_11_b">
          <div align="center">
            <span class="_css_font_default_11">CallBack Center (CBC) Versi 2.0 &copy; 2015 - PT. PLN (Persero) Distribusi Jakarta Raya dan Tangerang. All Rights Reserved <BR><BR>Untuk memperoleh user login silahkan email ke : pepen.suwargana@pln.co.id</span>          </div>         </th>
        <th class="_css_font_default_11" scope="col">&nbsp;</th>
        </tr>
      
    </table></td>
  </tr>
  
  
  <tr>
    <td height="22" colspan="3" bgcolor="#FFFFFF"><!--DWLayoutEmptyCell-->&nbsp;</td>
  </tr>
  <tr>
    <td height="22" colspan="3" bgcolor="#FFFFFF"><!--DWLayoutEmptyCell-->&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>


