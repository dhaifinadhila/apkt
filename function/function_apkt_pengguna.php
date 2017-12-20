<?php
	

	function find_operator_by_id_user_blth($id_user,$blth)
	{	
		include "lib/config.php";				
		$query = "select * from  mv_apkt_pengguna_kinerja_BLTH where id_user = '$id_user' AND BULAN_TAHUN = '$blth' ";
		
		//echo "SQL=".$query;
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


	function find_operator_by_id_user($id_user)
	{	
		include "lib/config.php";				
		$query = "select * from  mv_apkt_pengguna_kinerja where id_user = '$id_user' ";
		//echo "SQL=".$query;
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



	function apkt_pengguna_view()
	{	
		include "lib/config.php";		
		$query = "select * from apkt_pengguna";
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

	function apkt_pengguna_insert($id_user,$kode_area,$hak_akses,$kode_posisi,$nip,$nama,$email,$passwd,$jabatan,$target_call,
							$keterangan,$informasi_01,$informasi_02,$informasi_03,$informasi_04,$informasi_05)
	{ 
 		include "lib/config.php";		
		$query = "insert into apkt_pengguna(id_user,kode_area,hak_akses,kode_posisi,nip,nama,email,password,jabatan,target_call,keterangan,
		informasi_01,informasi_02,informasi_03,informasi_04,informasi_05) 
		values('$id_user','$kode_area','$hak_akses','$kode_posisi','$nip','$nama','$email','$passwd','$jabatan',
					'$target_call','$keterangan','$informasi_01','$informasi_02','$informasi_03','$informasi_04','$informasi_05')";		
		//echo $query;
		$stmt = oci_parse($connection, $query);						
		if(oci_execute($stmt))
		{ $result = 1;}
		else 
		{ $result = $query; }			
		return $result;
	}
	
	function apkt_pengguna_edit($id_user,$kode_area,$hak_akses,$kode_posisi,$nip,$nama,$email,$passwd,$jabatan,$target_call,
							$keterangan,$informasi_01,$informasi_02,$informasi_03,$informasi_04,$informasi_05)
	{ 
 		include "lib/config.php";			
		$query = "update apkt_pengguna set kode_area = $kode_area, hak_akses = '$hak_akses', kode_posisi = '$kode_posisi', nip = '$nip',
		 			nama = '$nama', email = '$email', password = '$passwd', jabatan = '$jabatan', target_call = '$target_call', keterangan = '$keterangan',
		 			informasi_01 = '$informasi_01', informasi_02 = '$informasi_02', informasi_03 = '$informasi_03', informasi_04 = '$informasi_04', 
					informasi_05 = '$informasi_05' 
					where id_user = $id_user";	
		//echo $query;
		$stmt = oci_parse($connection, $query);
		if(oci_execute($stmt))
		{ $result = 1;}
		else 
		{ $result = $query; }			
		return $result;
	}

	function apkt_pengguna_delete($id_user)
	{ 
 		include "lib/config.php";			
		$query = "delete from apkt_pengguna where ID_USER = $id_user";		
		$stmt = oci_parse($connection, $query);						
		if(oci_execute($stmt))
		{ $result = 1;}
		else 
		{ $result = $query; }			
		return $result;		
	}
	
	function apkt_pengguna_search_by_id_user($id_user)
	{	
		include "lib/config.php";		
		$query = "select * from apkt_pengguna where id_user = '$id_user'";
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
	
	function apkt_pengguna_search_by_kode_area($kode_area)
	{	
		include "lib/config.php";		
		$query = "select * from apkt_pengguna where kode_area = '$kode_area'";
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
	
	function apkt_pengguna_search_by_hak_akses($hak_akses)
	{	
		include "lib/config.php";		
		$query = "select * from apkt_pengguna where hak_akses = '$hak_akses'";
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
	
	function apkt_pengguna_search_by_kode_posisi($kode_posisi)
	{	
		include "lib/config.php";		
		$query = "select * from apkt_pengguna where kode_posisi = '$kode_posisi'";
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
	
	function apkt_pengguna_search_by_nip($nip)
	{	
		include "lib/config.php";		
		$query = "select * from apkt_pengguna where nip = '$nip'";
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
	
	function apkt_pengguna_search_by_nama($nama)
	{	
		include "lib/config.php";		
		$query = "select * from apkt_pengguna where nama = '$nama'";
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
	
	function apkt_pengguna_search_by_email($email)
	{	
		include "lib/config.php";		
		$query = "select * from apkt_pengguna where email = '$email'";
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
	
	function apkt_pengguna_search_by_passwd($passwd)
	{	
		include "lib/config.php";		
		$query = "select * from apkt_pengguna where passwd = '$passwd'";
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
	
	function apkt_pengguna_search_by_jabatan($jabatan)
	{	
		include "lib/config.php";		
		$query = "select * from apkt_pengguna where jabatan = '$jabatan'";
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
	
	function apkt_pengguna_search_by_target_call($target_call)
	{	
		include "lib/config.php";		
		$query = "select * from apkt_pengguna where target_call = '$target_call'";
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
	
	function apkt_pengguna_search_by_keterangan($keterangan)
	{	
		include "lib/config.php";		
		$query = "select * from apkt_pengguna where keterangan = '$keterangan'";
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