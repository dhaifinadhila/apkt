<?php

	function apkt_file_upload_view()
	{	
		include "lib/config.php";		
		$query = "select * from apkt_file_upload";
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


	function apkt_file_upload_insert($id_user,$file_name,$number_record, $informasi_01,$informasi_02,$informasi_04,$informasi_05)
	{ 
 		include "lib/config.php";		
		$query = "insert into apkt_file_upload  values(NULL,'$id_user','$file_name','$number_record',
					SYSDATE,'$informasi_01','$informasi_02','$informasi_04','$informasi_05')";
		//echo $query;
		
		$stmt = oci_parse($connection, $query);						
		if(oci_execute($stmt))
		{ $result = 1;}
		else 
		{ $result = $query; }			
		return $result;		
	}

	function apkt_file_upload_delete($id_file_upload)
	{ 
 		include "lib/config.php";		
		$query = "delete from apkt_file_upload where id_file_upload = $id_file_upload";		
		$stmt = oci_parse($connection, $query);						
		if(oci_execute($stmt))
		{ $result = 1;}
		else 
		{ $result = $query; }			
		return $result;		
	} 

	function apkt_file_upload_update($id_file_upload,$id_user,$type_file,$file_name,$number_record,$upload_date, $informasi_01,$informasi_02,$informasi_03,$informasi_04,$informasi_05)
	{ 
 		include "lib/config.php";		
		
		$query ="update apkt_file_upload SET id_user='$id_user',type_file='$type_file',file_name='$file_name',number_record='$number_record',upload_date=to_date ('$upload_date','yyyy-mm-dd'),
		informasi_01='$informasi_01',informasi_02='$informasi_02',informasi_03='$informasi_03',informasi_04='$informasi_04',informasi_05='$informasi_05' where id_file_upload='$id_file_upload'";
		
		$stmt = oci_parse($connection, $query);						
		if(oci_execute($stmt))
		{ $result = 1;}
		else 
		{ $result = $query; }			
		return $result;		
	}

	function apkt_file_upload_search_by_id_file_upload($id_file_upload)
	{	
		include "lib/config.php";	
		$query = "select * from apkt_file_upload where id_file_upload='$id_file_upload'";
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
	
	function apkt_file_upload_search_by_id_user($id_user)
	{	
		include "lib/config.php";	
		$query = "select * from apkt_file_upload where id_user='$id_user'";
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
	
	function apkt_file_upload_search_by_type_file($type_file)
	{	
		include "lib/config.php";	
		$query = "select * from apkt_file_upload where type_file='$type_file'";
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
	
	function apkt_file_upload_search_by_file_name($file_name)
	{	
		include "lib/config.php";	
		$query = "select * from apkt_file_upload where file_name='$file_name'";
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

	function apkt_file_upload_search_by_number_record($number_record)
	{	
		include "lib/config.php";	
		$query = "select * from apkt_file_upload where number_record='$number_record'";
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

	function apkt_file_upload_search_by_upload_date($upload_date)
	{	
		include "lib/config.php";	
		$query = "select * from apkt_file_upload where upload_date='$upload_date'";
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