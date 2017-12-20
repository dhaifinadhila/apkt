
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
		   <div id="ddtopmenubar" class="mattblackmenu">
	<ul>
		 <li><a href="home.php">Home</a></li>
		 		 <li><a href="upload_view.php">Upload Excell</a></li>  
		 		          <li><a  href="#" rel="submenu_belum_cb">Belum Callback</a></li>
		 		 <li><a  href="#" rel="submenu_sudah_cb">Sudah Callback</a></li>
		 <!-- <li><a  href="#" rel="submenu_gagal_cb">Gagal Callback</a></li> -->
         <li><a href="#" rel="submenu_rekap" >Rekapitulasi</a></li>
		 <li><a href="#" rel="submenu_analisa" >Analisa Callback</a></li>
		 		 <li><a href="#" rel="submenu_master" >Data Master</a></li> 
		 		 <li><a href="ganti_password.php">&nbsp;&nbsp;Ganti Password&nbsp;&nbsp;</a></li>
		 <li><a href="logout.php">&nbsp;&nbsp;Logout&nbsp;&nbsp;</a></li>
		 
	</ul>
</div>

<script type="text/javascript">
ddlevelsmenu.setup("ddtopmenubar", "topbar") //ddlevelsmenu.setup("mainmenuid", "topbar|sidebar")
</script>

<ul id="submenu_master" class="ddsubmenustyle">
	<li><a href="#">Distribusi dan Unit</a>
	  <ul>
	  <li><a href="distribusi.php">Kantor Distribusi</a></li>
	  <li><a href="unit.php">Kantor Unit</a></li>
	  <!-- <li><a href="rayon.php">Kantor Rayon</a></li> -->
	  </ul>	
	</li>
	<li><a href="hak_akses.php">Hak Akses Aplikasi</a></li>    
	<li><a href="pengguna.php">Daftar Pengguna </a></li>    
	<!-- <li><a href="tabel.php">File Excell Upload</a></li> -->
	<!-- <li><a href="tabel.php">Pertanyaan Callback</a></li> -->
</ul>

 
<ul id="submenu_belum_cb" class="ddsubmenustyle">
	<li><a href="belum_call.php?pbpd=1" >Pelanggan Pasang Baru</a></li>
	<li><a href="belum_call.php?pbpd=2">Pelanggan Perubahan Daya</a></li>    
</ul>

<ul id="submenu_sudah_cb" class="ddsubmenustyle">
	<li><a href="sudah_call.php?pbpd=1">Pelanggan Pasang Baru</a></li>
	<li><a href="sudah_call.php?pbpd=2">Pelanggan Perubahan Daya</a></li>    
</ul>

<ul id="submenu_gagal_cb" class="ddsubmenustyle">
	<li><a href="gagal_call.php?pbpd=1">Pelanggan Pasang Baru</a></li>
	<li><a href="gagal_call.php?pbpd=2">Pelanggan Perubahan Daya</a></li>    
</ul>


<ul id="submenu_rekap" class="ddsubmenustyle">
	<li><a href="#">Data Rekapitulasi Kinerja Petugas</a>
	  <ul>
	  <li><a href="rekap_petugas_kinerja.php?type=1&blth=201503">Berdasarkan Kontribusi</a></li>
	  <li><a href="rekap_petugas_target.php?type=2&blth=201503">Berdasarkan Target Individu</a></li>
	  </ul>
	</li>

	<li><a href="#">Rekapitulasi Integritas</a>
	  <ul>
	  <li><a href="rekap_integritas_pb.php?blth=201503">Integritas Pasang Baru</a></li>
	  <li><a href="rekap_integritas_pd.php?blth=201503">Integritas Perubahan Daya</a></li>
	  </ul>
	</li>

	<li><a href="#">Rekapitulasi High Trust Society</a>
	  <ul>
	  <li><a href="rekap_hts_pb.php?blth=201503">HTS Pasang Baru</a></li>
	  <li><a href="rekap_hts_pd.php?blth=201503">HTS Perubahan Daya</a></li>
	  </ul>
	</li>

	<li><a href="#">Rekapitulasi Kecepatan Layanan</a>
	  <ul>
	  <li><a href="rekap_kecepatan_pb.php?blth=201503">Kecepatan Pasang Baru</a></li>
	  <li><a href="rekap_kecepatan_pd.php?blth=201503">Kecepatan Perubahan Daya</a></li>
	  </ul>
	</li>

	<li><a href="#">Rekapitulasi Resume</a>
	  <ul>
	  <li><a href="rekap_pb.php?blth=201503">Resume Pasang Baru</a></li>
	  <li><a href="rekap_pd.php?blth=201503">Resume Perubahan Daya</a></li>
	  </ul>
	</li>
  
	<li><a href="#">Rekapitulasi Adanya Tambahan Biaya</a>
	  <ul>
	  <li><a href="rekap_tambahan_biaya_pb.php?blth=201503">Tambahan Biaya Pasang Baru</a></li>
	  <li><a href="rekap_tambahan_biaya_pd.php?blth=201503">Tambahan Biaya Perubahan Daya</a></li>
	  </ul>
	</li>
	<li><a href="#">Rekapitulasi Pelanggan Belum Nyala</a>
	  <ul>
	  <li><a href="rekap_belum_nyala_pb.php?blth=201503">Belum Nyala Pasang Baru</a></li>
	  <li><a href="rekap_belum_nyala_pd.php?blth=201503">Belum Nyala Perubahan Daya</a></li>
	  </ul>
	</li>
 
</ul>

<ul id="submenu_analisa" class="ddsubmenustyle">
	<li><a href="#">Nomor Telepon Pelanggan dan Pihak Lain</a>
	  <ul>
	  <li><a href="analisa_telp_plg_pb.php">Telepon Pelanggan dan Pihak Lain Pasang Baru</a></li>
	  <li><a href="analisa_telp_plg_pd.php">Telepon Pelanggan dan Pihak Lain Perubahan Daya</a></li>
	  </ul>
	</li>

	<li><a href="#">Diurus Sendiri dan Diurus Pihak Lain</a>
	  <ul>
	  <li><a href="analisa_diurus_pb.php">Diurus Sendiri dan Pihak Lain Pasang Baru</a></li>
	  <li><a href="analisa_diurus_pd.php">Diurus Sendiri dan Pihak Lain Perubahan Daya</a></li>
	  </ul>
	</li>

	<li><a href="#">Analisa Kecepatan Proses Pelayanan</a>

	  <ul>
	  <li><a href="analisa_kecepatan_sendiri_pb.php">Kecepatan Layanan Proses Pasang Baru Diurus Sendiri</a></li>
	  <li><a href="analisa_kecepatan_oranglain_pb.php">Kecepatan Layanan Proses Pasang Baru Diurus Orang Lain</a></li>
	  
	  <li><a href="analisa_kecepatan_sendiri_pd.php">Kecepatan Layanan Proses Perubahan Daya Diurus Sendiri</a></li>
  	  <li><a href="analisa_kecepatan_oranglain_pd.php">Kecepatan Layanan Proses Perubahan Daya Diurus Orang Lain</a></li>
 	  </ul>


	</li>

	<li><a href="#">Tambahan Biaya</a>
	  <ul>
		  <li><a href="analisa_tambahan_biaya_sendiri_pb.php">Tambahan Biaya Pasang Baru Diurus Sendiri</a></li>
		  <li><a href="analisa_tambahan_biaya_oranglain_pb.php">Tambahan Biaya Pasang Baru Orang Lain</a></li>
		  <li><a href="analisa_tambahan_biaya_sendiri_pd.php">Tambahan Biaya Perubahan Daya Diurus Sendiri</a></li>
		  <li><a href="analisa_tambahan_biaya_oranglain_pd.php">Tambahan Biaya Perubahan Daya Orang Lain</a></li>
	  </ul>
	</li>
	<!-- 
	<li><a href="#">Alasan Tambahan Biaya</a>
	  <ul>
	  <li><a href="#">Alasan Tambahan Biaya Proses Pasang Baru</a></li>
	  <li><a href="#">Alasan Tambahan Biaya Proses Perubahan Daya</a></li>
	  </ul>
	</li>
	-->
 
</ul>
 
 
 
 

 


		</th>
        <th bgcolor="#414141" class="_css_font_default_11" scope="col">&nbsp;</th>
      </tr>
      <tr>
        <th width="25" scope="col">&nbsp;</th>
        <th class="_css_font_default_11" scope="col">&nbsp;</th>
        <th width="25" class="_css_font_default_11" scope="col">&nbsp;</th>
      </tr>
       <tr>
        <th width="25" scope="col">&nbsp;</th>
        <th class="_css_font_default_11" scope="col"><div align="left">Selamat Datang,<strong> KUSTAN - SPV DATABASE</strong></div></th>
        <th width="25" class="_css_font_default_11" scope="col">&nbsp;</th>
      </tr>
      
      <tr>
        <th scope="col">&nbsp;</th>
        <th class="_css_font_default_11" scope="col"><div align="left"><img src="images/line_full.gif" ></div></th>
        <th class="_css_font_default_11" scope="col">&nbsp;</th>
      </tr>
      
      <tr>
        <th height="19" scope="col">&nbsp;</th>
        <th class="_css_font_default_11" scope="col"><div align="left"><strong>Belum Callback </strong>&#8226; <strong>
		Pelanggan Perubahan Daya</strong>
		&#8226; Nomor Agenda : 542109921501063758		</div></th>
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
		
		<form name="form_callback_sheet" method="post" action="call_submit.php?id=30969&token=e624ee446bd5711b139afe335485a2d8">						  
		
				  <table width="90%" align="center" class="_css_font_default_12">
				  
				  <tr>
				    <td colspan="2" align="center">
						<table width="100%" border="0" cellpadding="4" cellspacing="1">
						  <tr class="_css_font_default_11">
							<td colspan="3" bgcolor="#CCCCCC" class="_css_font_horizontal_title"><strong>DATA NOMOR </strong></td>
							</tr>
						  
						  <tr class="_css_font_default_11">
							<td width="21%" class="_css_font_default_12"><strong>No Telepon</strong></td>
							<td width="2%" class="_css_font_default_12"><strong>:</strong></td>
							<td width="77%">021</td>
							</tr>
						  
						  <tr class="_css_font_default_11">
							<td class="_css_font_default_12"><strong>No HP </strong></td>
							<td class="_css_font_default_12"><strong>:</strong></td>
							<td>95436216</td>
							</tr>
						  
						  <tr class="_css_font_default_11">
							<td width="21%" class="_css_font_default_12"><strong>No Registrasi </strong></td>
							<td width="2%" class="_css_font_default_12"><strong>:</strong></td>
							<td width="77%">5421017061433</td>
							</tr>
						  
						  <tr class="_css_font_default_11">
							<td class="_css_font_default_12"><strong>No Agenda </strong></td>
							<td class="_css_font_default_12"><strong>:</strong></td>
							<td>542109921501063758</td>
							</tr>
						  
						  <tr class="_css_font_default_11_b">
							<td colspan="3" bgcolor="#CCCCCC" class="_css_font_default_12"><strong>IDENTITAS PELANGGAN </strong></td>
							</tr>
						  <tr class="_css_font_default_11_b">
							<td class="_css_font_default_12"><strong>Kode Unit</strong></td>
							<td class="_css_font_default_12"><strong>:</strong></td>
							<td>54210</td>
						  </tr>
						  <tr class="_css_font_default_11_b">
							<td class="_css_font_default_12"><strong>Nama Unit</strong></td>
							<td class="_css_font_default_12"><strong>:</strong></td>
							<td>BANDENGAN</td>
						  </tr>
						  <tr class="_css_font_default_11_b">
							<td class="_css_font_default_12"><strong>ID Pelanggan </strong></td>
							<td class="_css_font_default_12"><strong>:</strong></td>
							<td>542100651481</td>
							</tr>
						  <tr class="_css_font_default_11_b">
							<td class="_css_font_default_12"><strong>Nama</strong></td>
							<td class="_css_font_default_12"><strong>:</strong></td>
							<td>ONG WIE HOK</td>
						  </tr>
						  <tr class="_css_font_default_11_b">
							<td class="_css_font_default_12"><strong>Alamat</strong></td>
							<td class="_css_font_default_12"><strong>:</strong></td>
							<td>JL JL KARTINI 13 DLM NO12 RT No.  RT.  RW.</td>
						  </tr>
						  <tr class="_css_font_default_11_b">
							<td class="_css_font_default_12"><strong>Asal Pemohon </strong></td>
							<td class="_css_font_default_12"><strong>:</strong></td>
							<td>WEB ONLINE</td>
						  </tr>
						  <tr class="_css_font_default_11_b">
							<td class="_css_font_default_12"><strong>Tarif Lama </strong></td>
							<td class="_css_font_default_12"><strong>:</strong></td>
							<td>R1</td>
						  </tr>
						  <tr class="_css_font_default_11_b">
							<td class="_css_font_default_12"><strong>Daya Lama </strong></td>
							<td class="_css_font_default_12"><strong>:</strong></td>
							<td>450</td>
						  </tr>
						  <tr class="_css_font_default_11_b">
							<td class="_css_font_default_12"><strong>Tarif </strong></td>
							<td class="_css_font_default_12"><strong>:</strong></td>
							<td>R1T</td>
						  </tr>
						  <tr class="_css_font_default_11_b">
							<td class="_css_font_default_12"><strong>Daya </strong></td>
							<td class="_css_font_default_12"><strong>:</strong></td>
							<td>2200</td>
						  </tr>
						  
						  <tr class="_css_font_default_11_b">
							<td class="_css_font_default_12"><strong>Paket SAR </strong></td>
							<td class="_css_font_default_12"><strong>:</strong></td>
							<td>Prabayar (Prepaid) Satu Arah</td>
						  </tr>
						  <tr class="_css_font_default_11_b">
							<td class="_css_font_default_12"><strong>Total Biaya </strong></td>
							<td class="_css_font_default_12"><strong>:</strong></td>
							<td>Rp.1,665,750</td>
						  </tr>
						  <tr class="_css_font_default_11_b">
							<td colspan="3" bgcolor="#CCCCCC" class="_css_font_default_12"><strong>TANGGAL TRANSAKSI </strong></td>
							</tr>
						  <tr class="_css_font_default_11_b">
							<td class="_css_font_default_12"><strong>Tanggal Permohonan </strong></td>
							<td class="_css_font_default_12"><strong>:</strong></td>
							<td>06-JAN-15</td>
						  </tr>
						  <tr class="_css_font_default_11_b">
							<td class="_css_font_default_12"><strong>Tanggal Bayar </strong></td>
							<td class="_css_font_default_12"><strong>:</strong></td>
							<td>07-JAN-15</td>
						  </tr>
						  <tr class="_css_font_default_11_b">
							<td class="_css_font_default_12"><strong>Tanggal PK </strong></td>
							<td class="_css_font_default_12"><strong>:</strong></td>
							<td>20-JAN-15</td>
						  </tr>
						  <tr class="_css_font_default_11_b">
							<td class="_css_font_default_12"><strong>Tanggal Nyala </strong></td>
							<td class="_css_font_default_12"><strong>:</strong></td>
							<td>26-JAN-15</td>
						  </tr>
						  <tr class="_css_font_default_11_b">
							<td colspan="3" bgcolor="#CCCCCC" class="_css_font_default_12"><strong>SUDAH PERNAH DI CALL SEBANYAK  KALI</strong></td>
							</tr>
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
				  <tr>
				    <td colspan="2" align="center"><p align="left" class="_css_font_default_14">Selamat  Siang Bapak/Ibu ONG WIE HOK yang terhormat, saya 
					 dari CALL BACK CENTER bermaksud menanyakan beberapa hal terkait pelayanan dan pelaksanaan <B>Perubahan Daya</B> di tempat Bapak/Ibu, mohon kesediaan waktunya.</p></td>
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
                    <td>Mohon maaf, apakah kami sedang berbicara dengan Bapak/Ibu ONG WIE HOK ? </td>
                  </tr>
				  <tr align="left">
				    <td>&nbsp;</td>
				    <td><input name="p1" id="p1" type="radio" value="1">
Ya, saya sendiri <strong>[lanjut ke pertanyaan no 3]</strong></td>
				    </tr>
				  <tr align="left">
				    <td>&nbsp;</td>
                    <td><input name="p1" id="radio3" type="radio" value="2">
Bukan Saya <strong>[lanjut ke pertanyaan no 2]</strong></td>
                    </tr>  
				  <tr align="left">
				    <td width="27" align="center">&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr> 
				  <tr align="left">
				    <td width="27" align="center">2.</td>
                    <td><strong>Jika bukan dengan Bapak/Ibu ONG WIE HOK</strong>, lalu dengan Bapak/Ibu siapa saya berbicara?</td>
                  </tr>
				  <tr align="left">
				    <td width="27" align="center">&nbsp;</td>
                    <td>Dan apakah ada hubungan keluarga dengan Bapak/Ibu ONG WIE HOK</td>
                  </tr>
				  <tr align="left">
				    <td height="23">&nbsp;</td>
                    <td>						
						<input name="p2" id="p2" type="radio" value="1">
						Masih ada hubungan keluarga (Suami/Istri/Anak dan seterusnya) <strong>[lanjut ke pertanyaan no 3]</strong></td>
                    </tr>       
				<tr align="left">
				  <td height="23">&nbsp;</td>
                  <td><input name="p2" id="radio" type="radio" value="2">
Orang Lain (Teman/Tetangga/Biro Jasa dan seterusnya). </td>
                    </tr>    
				 <tr align="left">
				   <td align="center">&nbsp;</td>
				   <td>Bisakah kami diberi nomor telpon Bapak/Ibu ONG WIE HOK?
                     <input name="VAR_P2_TELP" type="text" class="_css_input_text" id="VAR_P2_TELP" >
                     <span class="style1">[STOP]</span></td>
				   </tr>
				 <tr align="left">
				   <td width="27" align="center">&nbsp;</td>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                  </tr> 
				   
				 <tr align="left">
				   <td width="27" align="center">3.</td>
                    <td>Apakah Bapak/Ibu ONG WIE HOK melakukan sendiri proses permohonan <B>Perubahan Daya</B> ?</td>
                  </tr> 
				  <tr align="left">
				    <td height="23">&nbsp;</td>
				    <td><input name="p3" id="p3" type="radio" value="1">
Tidak <strong>[lanjut ke pertanyaan no 4] </strong></td>
				    </tr>
				  <tr align="left">
				    <td height="23">&nbsp;</td>
                    <td><input name="p3" id="radio2" type="radio" value="2">
Ya, melalui CC123, web PLN atau Loket PLN <strong>[lanjut ke pertanyaan no 5] </strong></td>
                    </tr> 
				 <tr align="left">
				   <td width="27" align="center">&nbsp;</td>
                    <td>&nbsp;</td>
                 </tr>   	   	                                    
				  <tr align="left">
				    <td width="27" align="center">4.</td>
                    <td>Jika Bapak/Ibu ONG WIE HOK tidak melakukan sendiri proses permohonan <B>Perubahan Daya</B> , siapakah yang membantu dalam proses tersebut?</td>
                  </tr> 
				   <tr align="left">
				     <td width="27" align="center">&nbsp;</td>
                    <td>
                        <input name="p4" id="p4" type="radio" value="1"> Petugas PLN yang berada di sekitar kantor PLN  </td>
                  </tr> 
				   <tr align="left">
				     <td width="27" align="center">&nbsp;</td>
                    <td>
                        <input name="p4" id="p4" type="radio" value="2"> Petugas lapangan PLN (Baca Meter, Pemutusan/Penyambungan, Layanan Teknik) </td>
                  </tr> 
				   <tr align="left">
				     <td width="27" align="center">&nbsp;</td>
                    <td>
                        <input name="p4" id="p4" type="radio" value="3"> Perusahaan biro jasa / instalatir dan sejenisnya</td>
                  </tr> 				   <tr align="left">
                    <td width="27" align="center">&nbsp;</td>
                    <td>
                        <input name="p4" id="p4" type="radio" value="4"> 
                        Selain ketiga poin di atas </td>
                  </tr> 
				  <tr align="left">
				    <td width="27" align="center">&nbsp;</td>
                    <td>&nbsp;</td>
                 </tr>   	
				  <tr align="left">
				    <td width="27" align="center">5.</td>
                    <td>Setelah Bapak/Ibu ONG WIE HOK membayar biaya Penyambungan, berapa lamakah waktu yang diperlukan hingga listrik menyala?</td>
                  </tr> 
				  <tr align="left">
				    <td width="27" align="center">&nbsp;</td>
                    <td><em>[data AP2T: 19 hari] </em></td>
                  </tr> 
				   <tr align="left">
				     <td width="27" align="center">&nbsp;</td>
                    <td><input name="p5" id="p5" type="radio" value="1"> 1 hari s/d 3 hari kerja</td>
                  </tr> 
				  <tr align="left">
				    <td width="27" align="center">&nbsp;</td>
                    <td><input name="p5" id="p5" type="radio" value="2"> 4 hari s/d 10 hari kerja</td>
                  </tr> 
				  <tr align="left">
				    <td width="27" align="center">&nbsp;</td>
                    <td><input name="p5" id="p5" type="radio" value="3"> lebih dari 10 hari kerja</td>
                  </tr> 
				  <tr align="left">
				    <td width="27" align="center">&nbsp;</td>
                    <td>
						<input name="p5" id="p5" type="radio" value="4"> Belum menyala 
						<select id="alasan_belum_nyala" name="alasan_belum_nyala">
						  <option value="Material kosong">Material kosong</option>
						  <option value="Jaringan belum operasi">Jaringan belum operasi</option>
						  <option value="Pelanggan belum bayar instalasi">Pelanggan belum bayar instalasi</option>
						  <option value="Rumah masih rehab/dibangun">Rumah masih rehab/dibangun</option>
						  <option value="Belum ada SLO">Belum ada SLO</option>
						  <option value="PB sementara ditutup">PB sementara ditutup</option>
						  <option value="Alasan tidak jelas">Alasan tidak jelas</option>
						</select>
					</td>
                  </tr> 
				   <tr align="left">
				     <td width="27" align="center">&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr> 
				  <tr align="left">
				    <td width="27" align="center">6.</td>
                    <td>Apakah Bapak/Ibu ONG WIE HOK dikenakan biaya tambahan di luar biaya yang tertera pada Nomor Register <B>Perubahan Daya</B> ?</td>
                  </tr> 
				  <tr align="left">
				    <td width="27" align="center">&nbsp;</td>
                    <td><input name="p6" id="p6" type="radio" value="1"> Ya, memberi biaya tambahan <strong>[lanjut ke pertanyaan no 7]</strong></td>
                  </tr> 
				  <tr align="left">
				    <td width="27" align="center">&nbsp;</td>
                    <td><input name="p6" id="p6" type="radio" value="2"> Tidak mengeluarkan biaya tambahan lainnya <span class="style1">[STOP]</span></td>
                  </tr> 
				   <tr align="left">
				     <td width="27" align="center">&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
				  <tr align="left">
				    <td width="27" align="center">7.</td>
                    <td>Kapan Bapak/Ibu ONG WIE HOK memberikan biaya tambahan di luar ketentuan tersebut?</td>
                  </tr>
				  <tr align="left">
				    <td width="27" align="center">&nbsp;</td>
                    <td><input name="p7" id="p7" type="radio" value="1"> Awal proses permohonan <B>Perubahan Daya</B> </td>
                  </tr> 
				  <tr align="left">
				    <td width="27" align="center">&nbsp;</td>
                    <td><input name="p7" id="p7" type="radio" value="2"> Saat proses permohonan <B>Perubahan Daya</B> </td>
                  </tr> 
				  <tr align="left">
				    <td width="27" align="center">&nbsp;</td>
                    <td><input name="p7" id="p7" type="radio" value="3"> Setelah proses permohonan <B>Perubahan Daya</B> </td>
                  </tr>
				  <tr align="left">
				    <td width="27" align="center">&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr> 
				  <tr align="left">
				    <td width="27" align="center">8.</td>
                    <td>Apakah alasan Bapak/Ibu ONG WIE HOK memberikan biaya tambahan di luar ketentuan tersebut?</td>
                  </tr> 
				  <tr align="left">
				    <td width="27" align="center">&nbsp;</td>
                    <td><input name="p8" id="p8" type="radio" value="1">
                      Petugas meminta sebagai jasa layanan/tip atau biaya tambah kabel<span class="style1"> [STOP]</span></td>
                  </tr>     
				  <tr align="left">
				    <td width="27" align="center">&nbsp;</td>
                    <td><input name="p8" id="p8" type="radio" value="2">
                      Agar proses Pasang Baru dapat dipercepat pengerjaannya<span class="style1"> [STOP]</span></td>
                  </tr>     
				  <tr align="left">
				    <td width="27" align="center">&nbsp;</td>
                    <td><input name="p8" id="p8" type="radio" value="3">
                      Untuk biaya Jaminan Instalasi dan SLO (Sertifikat Laik Operasi) <span class="style1">[STOP]</span></td>
                  </tr> 
				  <tr align="left">
				    <td width="27" align="center">&nbsp;</td>
                    <td><input name="p8" id="p8" type="radio" value="4">Sebagai ucapan terima kasih kepada petugas <span class="style1">[STOP]</span></td>
                  </tr>  				
				  <tr align="left">
				    <td width="27" align="center">&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>  
				  <tr align="left">
				    <td width="27" align="center">&nbsp;</td>
                    <td>Terima kasih Bapak/Ibu ONG WIE HOK telah meluangkan waktu untuk kami.</td>
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
              </table>
				</form></th>
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


