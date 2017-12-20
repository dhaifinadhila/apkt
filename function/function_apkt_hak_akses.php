<?php

	function apkt_hak_akses_view()
	{	
		include "lib/config.php";		
		$query = "select * from apkt_hak_akses";
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

	function apkt_hak_akses_insert($id_hak_akses, $hak_akses, $keterangan,$informasi_01,$informasi_02,$informasi_03,$informasi_04,$informasi_05)
	{ 
 		include "lib/config.php";			
		$query = "insert into apkt_hak_akses (id_hak_akses, hak_akses, keterangan,informasi_01,informasi_02,informasi_03,informasi_04,informasi_05)
		values('$id_hak_akses', '$hak_akses', '$keterangan','$informasi_01','$informasi_02','$informasi_03','$informasi_04','$informasi_05')";		
		
		$stmt = oci_parse($connection, $query);						
		if(oci_execute($stmt))
		{ $result = 1;}
		else 
		{ $result = $query; }			
		return $result;		
	}

	function apkt_hak_akses_delete($id_hak_akses)
	{ 
 		include "lib/config.php";			
		$query = "delete from apkt_hak_akses where id_hak_akses = $id_hak_akses";		
		$stmt = oci_parse($connection, $query);						
		if(oci_execute($stmt))
		{ $result = 1;}
		else 
		{ $result = $query; }			
		return $result;		
	} 

	function apkt_hak_akses_update($id_hak_akses, $hak_akses, $keterangan,$informasi_01,$informasi_02,$informasi_03,$informasi_04,$informasi_05)
	{ 
 		include "lib/config.php";			
		$query = "update apkt_hak_akses SET id_hak_akses='$id_hak_akses', hak_akses='$hak_akses', keterangan='$keterangan',
		informasi_01='$informasi_01',informasi_02='$informasi_02',informasi_03='$informasi_03',informasi_04='$informasi_04',informasi_05='$informasi_05'
		where id_hak_akses = $id_hak_akses";	
		ECHO $id_hak_akses, $hak_akses, $keterangan,$informasi_01,$informasi_02,$informasi_03,$informasi_04,$informasi_05;
		$stmt = oci_parse($connection, $query);						
		if(oci_execute($stmt))
		{ $result = 1;}
		else 
		{ $result = $query; }			
		return $result;		
	}

	function apkt_hak_akses_search_by_id_hak_akses($id_hak_akses)
	{	
		include "lib/config.php";		
		$query = "select * from apkt_hak_akses where id_hak_akses='$id_hak_akses'";
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
	
	function apkt_hak_akses_search_by_hak_akses($hak_akses)
	{	
		include "lib/config.php";		
		$query = "select * from apkt_hak_akses where hak_akses='$hak_akses'";
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
	
	function apkt_hak_akses_search_by_keterangan($keterangan)
	{	
		include "lib/config.php";		
		$query = "select * from apkt_hak_akses where keterangan='$keterangan'";
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