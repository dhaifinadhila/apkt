 <?php
	$blth = date('Y').date('m').date('d');
 ?>
<div id="ddtopmenubar" class="mattblackmenu">
	<ul>
		 <li><a href="home.php">Home</a></li>
		 <?
		 if ($_SESSION['hak_akses']=='400') {
		 ?>
 		 <li><a href="upload_view.php">Upload Excell</a></li>  
 		 
		 <?
 }
		 ?>
		 <!--
          <li><a  href="#" rel="submenu_belum_cb">Belum Callback</a></li>
 
		  <li><a  href="#" rel="submenu_sudah_cb">Sudah Callback</a></li>
		 <li><a  href="#" rel="submenu_gagal_cb">Gagal Callback</a></li> -->
         <!-- <li><a href="#" rel="submenu_rekap" >Rekapitulasi</a></li>
		 <li><a href="#" rel="submenu_analisa" >Analisa Callback</a></li> -->
 
		 <?
		 if ($_SESSION['hak_akses']=='400') {
		 ?> 
		 <li><a href="#" rel="submenu_master" >Data Master</a></li>  


<?
		 }
?>
		 <li><a href="rekap_petugas.php">Rekap Petugas</a></li>
		 <li><a href="#" rel="submenu_jawaban">Rekapitulasi Jawaban</a></li> 
		 <li><a href="master.php"> Belum Call Back </a></li>
		 <li><a href="master_call_view.php"> Sudah Call Back </a></li>
		 <li><a href="ganti_password.php">&nbsp;&nbsp;Ganti Password&nbsp;&nbsp;</a></li>
		 <li><a href="logout.php">&nbsp;&nbsp;Logout&nbsp;&nbsp;</a></li>
		 
	</ul>
</div>

<script type="text/javascript">
ddlevelsmenu.setup("ddtopmenubar", "topbar") //ddlevelsmenu.setup("mainmenuid", "topbar|sidebar")
</script>

<ul id="submenu_master" class="ddsubmenustyle">
 
	<li><a href="hak_akses.php">Hak Akses</a></li> 
	<li><a href="area.php">Area</a></li>
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
	  <li><a href="rekap_petugas_kinerja.php?type=1&blth=<? echo date('Y').date('m');?>">Berdasarkan Kontribusi</a></li>
	  <li><a href="rekap_petugas_target.php?type=2&blth=<? echo date('Y').date('m');?>">Berdasarkan Target Individu</a></li>
	  </ul>
	</li>

	<li><a href="#">Rekapitulasi Integritas</a>
	  <ul>
	  <li><a href="rekap_integritas_pb.php?blth=<? echo date('Y').date('m');?>">Integritas Pasang Baru</a></li>
	  <li><a href="rekap_integritas_pd.php?blth=<? echo date('Y').date('m');?>">Integritas Perubahan Daya</a></li>
	  </ul>
	</li>

	<li><a href="#">Rekapitulasi High Trust Society</a>
	  <ul>
	  <li><a href="rekap_hts_pb.php?blth=<? echo date('Y').date('m');?>">HTS Pasang Baru</a></li>
	  <li><a href="rekap_hts_pd.php?blth=<? echo date('Y').date('m');?>">HTS Perubahan Daya</a></li>
	  </ul>
	</li>

	<li><a href="#">Rekapitulasi Kecepatan Layanan</a>
	  <ul>
	  <li><a href="rekap_kecepatan_pb.php?blth=<? echo date('Y').date('m');?>">Kecepatan Pasang Baru</a></li>
	  <li><a href="rekap_kecepatan_pd.php?blth=<? echo date('Y').date('m');?>">Kecepatan Perubahan Daya</a></li>
	  </ul>
	</li>

	<li><a href="#">Rekapitulasi Resume</a>
	  <ul>
	  <li><a href="rekap_pb.php?blth=<? echo date('Y').date('m');?>">Resume Pasang Baru</a></li>
	  <li><a href="rekap_pd.php?blth=<? echo date('Y').date('m');?>">Resume Perubahan Daya</a></li>
	  </ul>
	</li>
  
	<li><a href="#">Rekapitulasi Adanya Tambahan Biaya</a>
	  <ul>
	  <li><a href="rekap_tambahan_biaya_pb.php?blth=<? echo date('Y').date('m');?>">Tambahan Biaya Pasang Baru</a></li>
	  <li><a href="rekap_tambahan_biaya_pd.php?blth=<? echo date('Y').date('m');?>">Tambahan Biaya Perubahan Daya</a></li>
	  </ul>
	</li>
	<li><a href="#">Rekapitulasi Pelanggan Belum Nyala</a>
	  <ul>
	  <li><a href="rekap_belum_nyala_pb.php?blth=<? echo date('Y').date('m');?>">Belum Nyala Pasang Baru</a></li>
	  <li><a href="rekap_belum_nyala_pd.php?blth=<? echo date('Y').date('m');?>">Belum Nyala Perubahan Daya</a></li>
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
 
 
<ul id="submenu_jawaban" class="ddsubmenustyle">
	<li><a href="rekap_aspek_hts.php">Aspek HTS</a></li>
	<li><a href="rekap_laporan_berulang.php">Laporan Berulang CC 123</a></li>
	<li><a href="rekap_response_time.php">Response Time</a></li>
	<li><a href="rekap_recovery_time.php">Recovery Time</a></li>
	<li><a href="rekap_kondisi_perbaikan.php">Kondisi Perbaikan</a></li>
	<li><a href="rekap_penyebab_gangguan.php">Penyebab Gangguan</a></li>
	<li><a href="rekap_integritas.php">Integritas</a></li>
	<li><a href="rekap_paska_perbaikan.php">Kondisi Paska Perbaikan</a></li>
	<li><a href="rekap_pelanggan_blm_nyala.php">Rekapitulasi Pelanggan Belum Nyala</a></li>
</ul>
 
 
 

 


