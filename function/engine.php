<?php
function rekap_detail_analisa_tambahan_biaya_sendiri($kolom,$var,$jenis_mutasi,$unit,$blth) {
		include "lib/config.php";
		if ($kolom=="1") {
		$query = "select * from cbc_master_call
		where
		id_master_call in (
		select
		 id_master_call
		from cbc_callback  
		where
		  permintaan_via =$var
		 and
		 cbc_jenis_mutasi =$jenis_mutasi
		 and
		  unittujuan = $unit
		 and
		  callback_bulan = $blth
		)";
		}else
		if ($kolom=="2") {
			$query = "select * from cbc_master_call
		where
		id_master_call in (
		select
		 id_master_call
		from cbc_callback  
		where
		  permintaan_via =$var
		 and
		 cbc_jenis_mutasi =$jenis_mutasi
		 and
		  unittujuan = $unit
         and 
		  tambahan_biaya = 1
		 and
		  callback_bulan = $blth
		)";
		}else
		if ($kolom=="3") {
		$query = "select * from cbc_master_call
		where
		id_master_call in (
		select
		 id_master_call
		from cbc_callback  
		where
		  permintaan_via =$var
		 and
		 cbc_jenis_mutasi =$jenis_mutasi
		 and
		  unittujuan = $unit
         and 
		  tambahan_biaya = 2
		 and
		  callback_bulan = $blth
		)";
		}  
		//echo $query; 



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


	function rekap_detail_analisa_kecepatan_sendiri($kolom,$var,$jenis_mutasi,$unit,$blth) {
		include "lib/config.php";
		if ($kolom=="1") {
		$query = "select * from cbc_master_call
		where
		id_master_call in (
		select
		 id_master_call
		from cbc_callback  
		where
		permintaan_via =$var
		 and
		 cbc_jenis_mutasi =$jenis_mutasi
		 and
		  unittujuan = $unit
		 and
		  callback_bulan = $blth
		)";
		}else
		if ($kolom=="2") {
		$query = "select * from cbc_master_call
		where
		id_master_call in (
		select
		 id_master_call
		from cbc_callback  
		where
		kecepatan_layanan =$var
		 and
		 cbc_jenis_mutasi =$jenis_mutasi
		 and
		  unittujuan = $unit
		  and
		   permintaan_via = 2
		 and
		  callback_bulan = $blth
		)";
		}else
		if ($kolom=="3") {
		$query = "select * from cbc_master_call
		where
		id_master_call in (
		select
		 id_master_call
		from cbc_callback  
		where
		kecepatan_layanan =$var
		 and
		 cbc_jenis_mutasi =$jenis_mutasi
		 and
		  unittujuan = $unit
		  and
		   permintaan_via = 1
		 and
		  callback_bulan = $blth
		)";
		} else
		if ($kolom=="4") {
		$query = "select * from cbc_master_call
		where
		id_master_call in (
		select
		 id_master_call
		from cbc_callback  
		where
		kecepatan_layanan =$var
		 and
		 cbc_jenis_mutasi =$jenis_mutasi
		 and
		  unittujuan = $unit
		  and
		   permintaan_via =2
		 and
		  callback_bulan = $blth
		)";
		}  

		//echo $query; 



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



	function rekap_detail_analisa_diurus_pb($var,$jenis_mutasi,$unit,$blth) {
		include "lib/config.php";

		$query = "select * from cbc_master_call
		where
		id_master_call in (
		select
		 id_master_call
		from cbc_callback  
		where
		permintaan_via =$var
		 and
		 cbc_jenis_mutasi =$jenis_mutasi
		 and
		  unittujuan = $unit
		 and
		  callback_bulan = $blth
		)";

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


	function rekap_detail_analisa_telp_plg_pb($var,$jenis_mutasi,$unit,$blth) {
		include "lib/config.php";

		$query = "select * from cbc_master_call
		where
		id_master_call in (
		select
		 id_master_call
		from cbc_callback  
		where
		nomor_telp_pelanggan =$var
		 and
		 cbc_jenis_mutasi =$jenis_mutasi
		 and
		  unittujuan = $unit
		 and
		  callback_bulan = $blth
		)";

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

	function rekap_detail_tambahan_biaya_pbpd($kolom,$var,$jenis_mutasi,$unit,$blth) {
		include "lib/config.php";
		
		if ($kolom=="1") {
		$query = "
		select * from cbc_master_call
		where
		id_master_call in (
		select
		 id_master_call
		from cbc_callback  
		where
		 tambahan_biaya =$var
		 and
		 cbc_jenis_mutasi = $jenis_mutasi
		 and
		  unittujuan =$unit
		 and
		  callback_bulan = $blth
		)";
		} else
		if ($kolom=="2") {
		$query = "
		select * from cbc_master_call
		where
		id_master_call in (
		select
		 id_master_call
		from cbc_callback  
		where
		 tambahan_biaya =$var
		 and
		 cbc_jenis_mutasi = $jenis_mutasi
		 and
		  unittujuan =$unit
		 and
		  callback_bulan = $blth
		)";
		}else
		if ($kolom=="3") {
		$query = "
		select * from cbc_master_call
		where
		id_master_call in (
		select
		 id_master_call
		from cbc_callback  
		where
		 tambahan_biaya_alasan = $var
		 and
		 cbc_jenis_mutasi = $jenis_mutasi
		 and
		  unittujuan =$unit
		 and
		  callback_bulan = $blth
		)";
		}  	  			


		//echo $query;

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


	function rekap_detail_pb($kolom,$var,$jenis_mutasi,$unit,$blth) {
		include "lib/config.php";
		
		if ($kolom=="1") {
		$query = "select * from cbc_master_call
			where
			id_master_call in (
			select
			 id_master_call
			from cbc_callback  
			where
			 tambahan_biaya = $var 			  
			 and
			 cbc_jenis_mutasi = $jenis_mutasi
			 and
			  unittujuan = $unit
			 and
			  callback_bulan = $blth
			) ";
		} else
		if ($kolom=="2") {
		$query = "select * from cbc_master_call
			where
			id_master_call in (
			select
			 id_master_call
			from cbc_callback  
			where
			 permintaan_via = $var 			  
			 and
			 cbc_jenis_mutasi = $jenis_mutasi
			 and
			  unittujuan = $unit
			) ";
		}	 else
		if ($kolom=="3") {
		$query = "select * from cbc_master_call
			where
			id_master_call in (
			select
			 id_master_call
			from cbc_callback  
			where
			 kecepatan_layanan = $var 			  
			 and
			 cbc_jenis_mutasi = $jenis_mutasi
			 and
			  unittujuan = $unit
			) ";
		}				

		//echo $query;

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


function rekap_detail_kecepatan_layanan_pbpd($kecepatan_layanan,$jenis_mutasi,$unit,$blth) {
		include "lib/config.php";	
		
		$query = "select * from cbc_master_call
			where
			id_master_call in (
			select
			 id_master_call
			from cbc_callback  
			where
			 kecepatan_layanan = $kecepatan_layanan 
			 and
			 cbc_jenis_mutasi = $jenis_mutasi
			 and
			  unittujuan = $unit
			 and
			  callback_bulan = $blth
			) ";
 
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

	function rekap_detail_tindak_lanjut_belumnyala_pbpd($kecepatan_layanan,$jenis_mutasi,$unit,$blth,$jenis_belumnyala) {
		include "lib/config.php";	
		
		if ($jenis_belumnyala == 0) //belum tindak lanjut 
		{
			$query = "select * from cbc_master_call
				where
				id_master_call in (
				select
				 id_master_call
				from cbc_callback  
				where
				 kecepatan_layanan = $kecepatan_layanan 
				 and
				 cbc_jenis_mutasi = $jenis_mutasi
				 and
				  unittujuan = $unit
				 and
				  callback_bulan = $blth
				  
				) and
				  informasi_07 IS NULL";
				
		}else if ($jenis_belumnyala == 1) //sudah tindak lanjut 
		{
			$query = "select * from cbc_master_call
				where
				id_master_call in (
				select
				 id_master_call
				from cbc_callback  
				where
				 kecepatan_layanan = $kecepatan_layanan 
				 and
				 cbc_jenis_mutasi = $jenis_mutasi
				 and
				  unittujuan = $unit
				 and
				  callback_bulan = $blth
				  
				)and
				  informasi_07 IS NOT NULL ";
		}else if ($jenis_belumnyala == 2) //sudah nyala 
		{
			$query = "select * from cbc_master_call
				where
				id_master_call in (
				select
				 id_master_call
				from cbc_callback  
				where
				 kecepatan_layanan = $kecepatan_layanan 
				 and
				 cbc_jenis_mutasi = $jenis_mutasi
				 and
				  unittujuan = $unit
				 and
				  callback_bulan = $blth
				  
				)and
				  informasi_08 IS NOT NULL ";
		}
		//echo '<script language="javascript">alert("MESSAGE : '.$query.'")</script>';
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

function rekap_detail_rekap_hts_pbpd($kolom,$jenis_mutasi,$unittujuan,$blth) {
		include "lib/config.php";		
		
		if ($kolom=="1") {
			$query = "select * from cbc_master_call
			where
			id_master_call in (
			select
			 id_master_call
			from cbc_callback  
			where
			  nomor_telp_pelanggan = 1	
			  and
  			  jenis_mutasi = $jenis_mutasi			  
			  and
			  unittujuan = $unittujuan
			  and
			  callback_bulan = $blth
			)";
		} else
		if ($kolom=="2") {
			$query = "select * from cbc_master_call
			where
			id_master_call in (
			select
			 id_master_call
			from cbc_callback  
			where
			  nomor_telp_pelanggan = 2	
			  and
  			  jenis_mutasi = $jenis_mutasi			  
			  and
			  unittujuan = $unittujuan
			)";
		} else
		if ($kolom=="4") {
			$query = "select * from cbc_master_call
			where
			id_master_call in (
			select
			 id_master_call
			from cbc_callback  
			where
			  nomor_telp_pelanggan_bukan = 1	
			  and
  			  jenis_mutasi = $jenis_mutasi			  
			  and
			  unittujuan = $unittujuan
			)";
		}else
		if ($kolom=="5") {
			$query = "select * from cbc_master_call
			where
			id_master_call in (
			select
			 id_master_call
			from cbc_callback  
			where
			  nomor_telp_pelanggan_bukan = 2	
			  and
  			  jenis_mutasi = $jenis_mutasi			  
			  and
			  unittujuan = $unittujuan
			)";
		} else
		if ($kolom=="6") {
			$query = "select * from cbc_master_call
			where
			id_master_call in (
			select
			 id_master_call
			from cbc_callback  
			where
			  permintaan_via = 2	
			  and
  			  jenis_mutasi = $jenis_mutasi			  
			  and
			  unittujuan = $unittujuan
			)";
		}else
		if ($kolom=="7") {
			$query = "select * from cbc_master_call
			where
			id_master_call in (
			select
			 id_master_call
			from cbc_callback  
			where
			  permintaan_via = 1	
			  and
  			  jenis_mutasi = $jenis_mutasi			  
			  and
			  unittujuan = $unittujuan
			)";
		}else
		if ($kolom=="8") {
			$query = "select * from cbc_master_call
			where
			id_master_call in (
			select
			 id_master_call
			from cbc_callback  
			where
			   permintaan_via_oranglain = 1 
			  and
  			  jenis_mutasi = $jenis_mutasi			  
			  and
			  unittujuan = $unittujuan
			)";
		}else
		if ($kolom=="9") {
			$query = "select * from cbc_master_call
			where
			id_master_call in (
			select
			 id_master_call
			from cbc_callback  
			where
			   permintaan_via_oranglain = 2
			  and
  			  jenis_mutasi = $jenis_mutasi			  
			  and
			  unittujuan = $unittujuan
			)";
		} else
		if ($kolom=="10") {
			$query = "select * from cbc_master_call
			where
			id_master_call in (
			select
			 id_master_call
			from cbc_callback  
			where
			   permintaan_via_oranglain = 3
			  and
  			  jenis_mutasi = $jenis_mutasi			  
			  and
			  unittujuan = $unittujuan
			)";
		}else
		if ($kolom=="11") {
			$query = "select * from cbc_master_call
			where
			id_master_call in (
			select
			 id_master_call
			from cbc_callback  
			where
			   permintaan_via_oranglain = 4
			  and
  			  jenis_mutasi = $jenis_mutasi			  
			  and
			  unittujuan = $unittujuan
			)";
		}




		//echo $query;
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

	function rekap_detail_integritas_pb($jenis_mutasi,$tambahan_biaya,$unittujuan,$blth)
	{	
		include "lib/config.php";				
		$query = "select * from cbc_master_call
		where
		id_master_call in (
		select
		 id_master_call
		from cbc_callback  
		where
		  jenis_mutasi = $jenis_mutasi
		  and
		  tambahan_biaya = $tambahan_biaya 
		  and
		  unittujuan = $unittujuan
		  and
		  callback_bulan = $blth
		)";
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


	function rekap_detail_rekap_petugas_kinerja($id_pengguna,$jenis_mutasi,$blth)
	{	
		include "lib/config.php";	
		$query = "select * from cbc_master_call
		where
		id_master_call in (
		select
		 id_master_call
		from cbc_callback  
		where
		  jenis_mutasi = $jenis_mutasi  and  id_penggguna = $id_pengguna and callback_bulan = $blth) ";

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


	function login($usernamenya,$passwordnya)
	{	
		include "lib/config.php";				
		$query = "select * from  CBC_PENGGUNA where email = '$usernamenya' AND password = '$passwordnya' ";
		//echo $query;
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
	function cek_user_email_unit($kode_unit){
		include "lib/config.php";				
		$query = "select * from  CBC_PENGGUNA where kode_unit = '$kode_unit' AND hak_akses = '500' ";
		//echo $query;
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
	function cek_unit_induk($kode_unit){
		include "lib/config.php";				
		$query = "select * from  CBC_UNIT where kode_unit = '$kode_unit'";
		//echo $query;
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

	function biaya_sendiri_pb()
	{	
		include "lib/config.php";				
		$query = "select * from  mv_biaya_sendiri_pb ";
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

	function biaya_sendiri_pd()
	{	
		include "lib/config.php";				
		$query = "select * from  mv_biaya_sendiri_pd ";
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


	function biaya_oranglain_pb()
	{	
		include "lib/config.php";				
		$query = "select * from  mv_biaya_oranglain_pb ";
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


	function biaya_oranglain_pd()
	{	
		include "lib/config.php";				
		$query = "select * from  mv_biaya_oranglain_pd ";
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



	function kecepatan_sendiri_pb()
	{	
		include "lib/config.php";				
		$query = "select * from  mv_kecepatan_sendiri_pb ";
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

	function kecepatan_oranglain_pb()
	{	
		include "lib/config.php";				
		$query = "select * from  mv_kecepatan_oranglain_pb ";
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


	function kecepatan_sendiri_pd()
	{	
		include "lib/config.php";				
		$query = "select * from  mv_kecepatan_sendiri_pd ";
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

	function kecepatan_oranglain_pd()
	{	
		include "lib/config.php";				
		$query = "select * from  mv_kecepatan_oranglain_pd ";
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

	function analisa_diurus_pd()
	{	
		include "lib/config.php";				
		$query = "select * from  mv_analisa_diurus_pd ";
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

	function analisa_diurus_pb()
	{	
		include "lib/config.php";				
		$query = "select * from  mv_analisa_diurus_pb ";
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



	function mv_analisa_telp_plg_pb()
	{	
		include "lib/config.php";				
		$query = "select * from  mv_analisa_telp_plg_pb ";
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

	function mv_analisa_telp_plg_pd()
	{	
		include "lib/config.php";				
		$query = "select * from  mv_analisa_telp_plg_pd ";
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



	function rekap_tambahan_biaya_pb()
	{	
		include "lib/config.php";				
		$query = "select * from  mv_tambahan_biaya_pb ";
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
	
	function rekap_tambahan_biaya_pb_blth($blth)
	{	
		include "lib/config.php";				
		$query = "select * from  mv_tambahan_biaya_pb_blth where blth = $blth ";
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

	function rekap_tambahan_biaya_pd()
	{	
		include "lib/config.php";				
		$query = "select * from  mv_tambahan_biaya_pd ";
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
	
	function rekap_tambahan_biaya_pd_blth($blth)
	{	
		include "lib/config.php";				
		$query = "select * from  mv_tambahan_biaya_pd_blth where blth = $blth ";
		//echo $query;
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



	function rekap_pb()
	{	
		include "lib/config.php";				
		$query = "select * from  mv_rekap_pb ";
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
	function rekap_pb_blth($blth)
	{	
		include "lib/config.php";				
		$query = "select * from  mv_rekap_pb_blth where blth = $blth ";
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

	function rekap_pd()
	{	
		include "lib/config.php";				
		$query = "select * from  mv_rekap_pd ";
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
	
	function rekap_pd_blth($blth)
	{	
		include "lib/config.php";				
		$query = "select * from  mv_rekap_pd_blth where blth = $blth ";
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


	function rekap_kecepatan_layanan_pd()
	{	
		include "lib/config.php";				
		$query = "select * from  mv_kecepatan_layanan_pd ";
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
	
	function rekap_kecepatan_layanan_pd_blth($blth)
	{	
		include "lib/config.php";				
		$query = "select * from  mv_kecepatan_layanan_pd_blth where blth = $blth ";
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


	function rekap_kecepatan_layanan_pb()
	{	
		include "lib/config.php";				
		$query = "select * from  mv_kecepatan_layanan_pb ";
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
	
	function rekap_kecepatan_layanan_pb_blth($blth)
	{	
		include "lib/config.php";				
		$query = "select * from  mv_kecepatan_layanan_pb_blth where blth = $blth ";
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

	function rekap_hts_pd()
	{	
		include "lib/config.php";				
		$query = "select * from  MV_HTS_PD ";
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
	
	function rekap_hts_pd_blth($blth)
	{	
		include "lib/config.php";				
		$query = "select * from  MV_HTS_PD_BLTH where blth = $blth ";
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


	function rekap_hts_pb()
	{	
		include "lib/config.php";				
		$query = "select * from  MV_HTS_PB ";
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
	
	function rekap_hts_pb_blth($blth)
	{	
		include "lib/config.php";				
		$query = "select * from  MV_HTS_PB_BLTH where blth = $blth ";
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

	function rekap_integritas_pd()
	{	
		include "lib/config.php";				
		$query = "select * from  mv_integritas_pd ";
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
	
	function rekap_integritas_pd_blth($blth)
	{	
		include "lib/config.php";				
		$query = "select * from  mv_integritas_pd_blth where blth = $blth";
		//echo $query; 
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

	function rekap_integritas_pb()
	{	
		include "lib/config.php";				
		$query = "select * from  mv_integritas_pb ";
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
	
	function rekap_integritas_pb_blth($blth)
	{	
		include "lib/config.php";				
		$query = "select * from  mv_integritas_pb_blth where blth = '$blth' ";
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


	function rekap_petugas_by_kontribusi_blth_sum($blth)
	{	
		include "lib/config.php";				
		$query = "select SUM(total_pelanggan) as TOTAL_PLG from mv_pengguna_kinerja_blth where callback_bulan = '$blth' ";
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

	function rekap_petugas_by_kontribusi_sum()
	{	
		include "lib/config.php";				
		$query = "select SUM(total_pelanggan) as TOTAL_PLG from mv_pengguna_kinerja";
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


	function rekap_petugas_by_kontribusi()
	{	
		include "lib/config.php";				
		$query = "select * from mv_pengguna_kinerja";
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

	function rekap_petugas_by_kontribusi_blth($blth)
	{	
		include "lib/config.php";				
		$query = "select * from mv_pengguna_kinerja_blth where callback_bulan = '$blth' ";
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


?>