<?php

	function apkt_area_view()
	{	
		include "lib/config.php";		
		$query = "select * from apkt_area";
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

	function apkt_area_insert($id_area, $kode_distribusi, $kode_area,$kode_posisi,$nama_area,$keterangan, $informasi_01,$informasi_02,$informasi_03,$informasi_04,$informasi_05)
	{ 
 		include "lib/config.php";			
		$query = "insert into apkt_area (id_area, kode_distribusi, kode_area,kode_posisi,nama_area,keterangan, informasi_01,informasi_02,informasi_03,informasi_04,informasi_05)
		values('$id_area', '$kode_distribusi', '$kode_area','$kode_posisi','$nama_area','$keterangan','$informasi_01','$informasi_02','$informasi_03','$informasi_04','$informasi_05')";		

		//echo $query; 
		$stmt = oci_parse($connection, $query);						
		if(oci_execute($stmt))
		{ $result = 1;}
		else 
		{ $result = $query; }			
		return $result;		
	}

	function apkt_area_delete($id_AREA)
	{ 
 		include "lib/config.php";			
		$query = "delete from apkt_area where ID_AREA = $id_AREA";	
		
		$stmt = oci_parse($connection, $query);						
		if(oci_execute($stmt))
		{ $result = 1;}
		else 
		{ $result = $query; }			
		return $result;		
	} 

	function apkt_area_update($id_area, $kode_distribusi, $kode_area,$kode_posisi,$nama_area,$keterangan, $informasi_01,$informasi_02,$informasi_03,$informasi_04,$informasi_05)
	{ 
 		include "lib/config.php";			
		$query = "update apkt_area SET id_area='$id_area', kode_distribusi='$kode_distribusi', kode_area='$kode_area',kode_posisi='$kode_posisi',nama_area='$nama_area',keterangan='$keterangan',
		informasi_01='$informasi_01',informasi_02='$informasi_02',informasi_03='$informasi_03',informasi_04='$informasi_04',informasi_05='$informasi_05' where ID_AREA = $id_area";	
		//echo $query;
		$stmt = oci_parse($connection, $query);						
		if(oci_execute($stmt))
		{ $result = 1;}
		else 
		{ $result = $query; }			
		return $result;		
	}

	function apkt_area_search_by_id_area($id_area)
	{	
			include "lib/config.php";		
			$query = "select * from apkt_area where id_area='$id_area'";
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
	
	function apkt_area_search_by_kode_distribusi($kode_distribusi)
	{	
			include "lib/config.php";		
			$query = "select * from apkt_area where kode_distribusi='$kode_distribusi'";
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
	
	function apkt_area_search_by_kode_area($kode_area)
	{	
			include "lib/config.php";		
			$query = "select * from apkt_area where kode_area='$kode_area'";
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
	
	function apkt_area_search_by_kode_posisi($kode_posisi)
	{	
			include "lib/config.php";		
			$query = "select * from apkt_area where kode_posisi='$kode_posisi'";
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
	
	function apkt_area_search_by_nama_area($nama_area)
	{	
			include "lib/config.php";		
			$query = "select * from apkt_area where nama_area='$nama_area'";
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
	
	function apkt_area_search_by_keterangan($keterangan)
	{	
			include "lib/config.php";		
			$query = "select * from apkt_area where keterangan='$keterangan'";
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