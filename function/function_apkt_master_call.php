<?php
	
	function apkt_master_call_view_blth($blth,$blth2)
	{	
		include "lib/config.php";		
		
		//$query = "select * from apkt_master_call  where  call_tanggal > to_date('01-".$blth."','dd-mm-yyyy') and call_tanggal < to_date('30-".$blth."','dd-mm-yyyy')";
		
		
/* 		$query = "	 
select   count(*) AS JUMLAH_CALLNYA, ID_PELANGGAN,NOMOR_LAPOR,ID_USER,CALL_JUMLAH,CALL_TANGGAL,CALL_KETERANGAN,BULAN_TAHUN,JAWABAN_1,JAWABAN_1_INFO,
JAWABAN_2,JAWABAN_2_INFO,
JAWABAN_3,JAWABAN_3_INFO,
JAWABAN_4,JAWABAN_4_INFO,
JAWABAN_5,JAWABAN_5_INFO,
JAWABAN_6,JAWABAN_6_INFO,
JAWABAN_7,JAWABAN_7_INFO,
JAWABAN_8,JAWABAN_8_INFO,
JAWABAN_9,JAWABAN_9_INFO,
JAWABAN_10,JAWABAN_10_INFO,
JAWABAN_11,JAWABAN_11_INFO,
JAWABAN_12,JAWABAN_12_INFO,
JAWABAN_13,JAWABAN_13_INFO,
JAWABAN_14,JAWABAN_14_INFO,
JAWABAN_15,JAWABAN_15_INFO,
 
INFORMASI_01,
INFORMASI_02,
INFORMASI_03,
INFORMASI_04,
INFORMASI_05 from apkt_master_call where call_tanggal > to_date('".$blth."','dd-mm-yyyy') and call_tanggal < to_date('".$blth2."','dd-mm-yyyy')
group by  ID_PELANGGAN,NOMOR_LAPOR,ID_USER,CALL_JUMLAH,CALL_TANGGAL,CALL_KETERANGAN,BULAN_TAHUN,JAWABAN_1,JAWABAN_1_INFO,
JAWABAN_2,JAWABAN_2_INFO,
JAWABAN_3,JAWABAN_3_INFO,
JAWABAN_4,JAWABAN_4_INFO,
JAWABAN_5,JAWABAN_5_INFO,
JAWABAN_6,JAWABAN_6_INFO,
JAWABAN_7,JAWABAN_7_INFO,
JAWABAN_8,JAWABAN_8_INFO,
JAWABAN_9,JAWABAN_9_INFO,
JAWABAN_10,JAWABAN_10_INFO,
JAWABAN_11,JAWABAN_11_INFO,
JAWABAN_12,JAWABAN_12_INFO,
JAWABAN_13,JAWABAN_13_INFO,
JAWABAN_14,JAWABAN_14_INFO,
JAWABAN_15,JAWABAN_15_INFO,
 
INFORMASI_01,
INFORMASI_02,
INFORMASI_03,
INFORMASI_04,
INFORMASI_05"; */

		$query= "
		select nomor_lapor,
		max(id_pelanggan) as id_pelanggan,
		max(ID_USER) AS ID_USER,
		MAX(CALL_SUKSES) AS CALL_SUKSES,
		max(CALL_JUMLAH) AS CALL_JUMLAH,
		max(CALL_TANGGAL) AS CALL_TANGGAL,
		max(CALL_KETERANGAN) AS CALL_KETERANGAN,
		max(BULAN_TAHUN) AS BULAN_TAHUN,
		max(JAWABAN_1) AS JAWABAN_1,max(JAWABAN_1_INFO) AS JAWABAN_1_INFO,
		max(JAWABAN_2) AS JAWABAN_2,max(JAWABAN_2_INFO) AS JAWABAN_2_INFO,
		max(JAWABAN_3) AS JAWABAN_3,max(JAWABAN_3_INFO) AS JAWABAN_3_INFO,
		max(JAWABAN_4) AS JAWABAN_4,max(JAWABAN_4_INFO) AS JAWABAN_4_INFO,
		max(JAWABAN_5) AS JAWABAN_5,max(JAWABAN_5_INFO) AS JAWABAN_5_INFO,
		max(JAWABAN_6) AS JAWABAN_6,max(JAWABAN_6_INFO) AS JAWABAN_6_INFO,
		max(JAWABAN_7) AS JAWABAN_7,max(JAWABAN_7_INFO) AS JAWABAN_7_INFO,
		max(JAWABAN_8) AS JAWABAN_8,max(JAWABAN_8_INFO) AS JAWABAN_8_INFO,
		max(JAWABAN_9) AS JAWABAN_9,max(JAWABAN_9_INFO) AS JAWABAN_9_INFO,
		max(JAWABAN_10) AS JAWABAN_10,max(JAWABAN_10_INFO) AS JAWABAN_10_INFO,
		max(JAWABAN_11) AS JAWABAN_11,max(JAWABAN_11_INFO) AS JAWABAN_11_INFO,
		max(JAWABAN_12) AS JAWABAN_12,max(JAWABAN_12_INFO) AS JAWABAN_12_INFO,
		max(JAWABAN_13) AS JAWABAN_13,max(JAWABAN_13_INFO) AS JAWABAN_13_INFO,
		max(JAWABAN_14) AS JAWABAN_14,max(JAWABAN_14_INFO) AS JAWABAN_14_INFO,
		max(JAWABAN_15) AS JAWABAN_15,max(JAWABAN_15_INFO) AS JAWABAN_15_INFO,
		max(INFORMASI_01) AS INFORMASI_01,
		max(INFORMASI_02) AS INFORMASI_02,
		max(INFORMASI_03) AS INFORMASI_03,
		max(INFORMASI_04) AS INFORMASI_04,
		max(INFORMASI_05) AS INFORMASI_05
		from apkt_master_call where call_tanggal between to_date('".$blth."','dd-mm-yyyy') and to_date('".$blth2." 23:59:59','dd-mm-yyyy HH24:MI:SS')
		group by nomor_lapor
		" ;
		
		
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

	function apkt_master_call_view()
	{	
		include "lib/config.php";		
		$query = "select * from apkt_master_call";
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

	function apkt_master_call_insert($id_pelanggan,$nomor_lapor,$id_user,$call_jumlah,$call_sukses,$call_keterangan,$bulan_tahun,
	$jawaban_01, 
	$jawaban_01_info, 
	$jawaban_02, 
	$jawaban_02_info, 
	$jawaban_03, 
	$jawaban_03_info, 
	$jawaban_04, 
	$jawaban_04_info, 
	$jawaban_05, 
	$jawaban_05_info, 
	$jawaban_06, 
	$jawaban_06_info, 
	$jawaban_07, 
	$jawaban_07_info, 
	$jawaban_08, 
	$jawaban_08_info, 
	$jawaban_09, 
	$jawaban_09_info, 
	$jawaban_10, 
	$jawaban_10_info, 
	$jawaban_11, 
	$jawaban_11_info, 
	$jawaban_12, 
	$jawaban_12_info, 
	$jawaban_13, 
	$jawaban_13_info, 
	$jawaban_14, 
	$jawaban_14_info, 
	$jawaban_15, 
	$jawaban_15_info, 
	$informasi_01,$informasi_02,$informasi_03,$informasi_04,$informasi_05,$informasi_06,$informasi_07,$informasi_08,$informasi_09,$informasi_10)
	{ 
 		include "lib/config.php";
		$query = "insert into apkt_master_call values(null,$id_pelanggan,'$nomor_lapor',$id_user,$call_jumlah, SYSDATE ,$call_sukses,'$call_keterangan','$bulan_tahun',
		'$jawaban_01', 
		'$jawaban_01_info', 
		'$jawaban_02', 
		'$jawaban_02_info', 
		'$jawaban_03', 
		'$jawaban_03_info', 
		'$jawaban_04', 
		'$jawaban_04_info', 
		'$jawaban_05', 
		'$jawaban_05_info', 
		'$jawaban_06', 
		'$jawaban_06_info', 
		'$jawaban_07', 
		'$jawaban_07_info', 
		'$jawaban_08', 
		'$jawaban_08_info', 
		'$jawaban_09', 
		'$jawaban_09_info', 
		'$jawaban_10', 
		'$jawaban_10_info', 
		'$jawaban_11', 
		'$jawaban_11_info', 
		'$jawaban_12', 
		'$jawaban_12_info', 
		'$jawaban_13', 
		'$jawaban_13_info', 
		'$jawaban_14', 
		'$jawaban_14_info', 
		'$jawaban_15', 
		'$jawaban_15_info', 
		'$informasi_01','$informasi_02','$informasi_03','$informasi_04','$informasi_05','$informasi_06','$informasi_07','$informasi_08','$informasi_09','$informasi_10')";	
		
		//echo $query;

		$stmt = oci_parse($connection, $query);						
		if(oci_execute($stmt))
		{ $result = 1;}
		else 
		{ $result = $query; }			
		return $result;		
	}
	
	function apkt_master_call_edit($id_master_call,$id_pelanggan,$nomor_lapor,$call_jumlah,$call_tanggal,$call_sukses,$call_,$bulan_tahun,$informasi_01,$informasi_02,$informasi_03,$informasi_04,$informasi_05)
	{ 
 		include "lib/config.php";			
		$query = "update apkt_master_call set id_master_call = '$id_master_call', id_pelanggan = '$id_pelanggan', nomor_lapor = '$nomor_lapor', call_jumlah = '$call_jumlah',
		 			call_tanggal = '$call_tanggal', call_sukses = '$call_sukses', call_ = '$call_', bulan_tahun = '$bulan_tahun', 
					jawaban_1 = '$jawaban_1', 
					jawaban_1_info = '$jawaban_1_info', 
					jawaban_2 = '$jawaban_2', 
					jawaban_2_info = '$jawaban_2_info', 
					jawaban_3 = '$jawaban_3', 
					jawaban_3_info = '$jawaban_3_info', 
					jawaban_4 = '$jawaban_4', 
					jawaban_4_info = '$jawaban_4_info', 
					jawaban_5 = '$jawaban_5', 
					jawaban_5_info = '$jawaban_5_info', 
					jawaban_6 = '$jawaban_6', 
					jawaban_6_info = '$jawaban_6_info', 
					jawaban_7 = '$jawaban_7', 
					jawaban_7_info = '$jawaban_7_info', 
					jawaban_8 = '$jawaban_8', 
					jawaban_8_info = '$jawaban_8_info', 
					jawaban_9 = '$jawaban_9', 
					jawaban_9_info = '$jawaban_9_info', 
					jawaban_10 = '$jawaban_10', 
					jawaban_10_info = '$jawaban_10_info', 
					jawaban_11 = '$jawaban_11', 
					jawaban_11_info = '$jawaban_11_info', 
					jawaban_12 = '$jawaban_12', 
					jawaban_12_info = '$jawaban_12_info', 
					jawaban_13 = '$jawaban_13', 
					jawaban_13_info = '$jawaban_13_info', 
					jawaban_14 = '$jawaban_14', 
					jawaban_14_info = '$jawaban_14_info', 
					jawaban_15 = '$jawaban_15', 
					jawaban_15_info = '$jawaban_15_info', 
					informasi_01 = '$informasi_01', informasi_02 = '$informasi_02', informasi_03 = '$informasi_03', informasi_04 = '$informasi_04', 
					informasi_05 = '$informasi_05' 
					where id_master_call = $id_master_call";	
		$stmt = oci_parse($connection, $query);						
		if(oci_execute($stmt))
		{ $result = 1;}
		else 
		{ $result = $query; }			
		return $result;		
	}

	function apkt_master_call_delete($id_master_call)
	{ 
 		include "lib/config.php";			
		$query = "delete from apkt_master_call where id_master_call = $id_master_call";		
		$stmt = oci_parse($connection, $query);						
		if(oci_execute($stmt))
		{ $result = 1;}
		else 
		{ $result = $query; }			
		return $result;		
	}
	
	function apkt_master_call_search_by_id_master_call($id_master_call)
	{	
		include "lib/config.php";		
		$query = "select * from apkt_master_call where id_master_call = '$id_master_call'";
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
	
	function apkt_master_call_search_by_id_pelanggan($id_pelanggan)
	{	
		include "lib/config.php";		
		$query = "select * from apkt_master_call where id_pelanggan = '$id_pelanggan'";
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
	
	function apkt_master_call_search_by_nomor_lapor($nomor_lapor)
	{	
		include "lib/config.php";		
		$query = "select * from apkt_master_call where nomor_lapor like '%$nomor_lapor%'";
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
	
	function apkt_master_call_search_by_call_jumlah($call_jumlah)
	{	
		include "lib/config.php";		
		$query = "select * from apkt_master_call where call_jumlah = '$call_jumlah'";
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
	
	function apkt_master_call_search_by_call_tanggal($call_tanggal)
	{	
		include "lib/config.php";		
		$query = "select * from apkt_master_call where call_tanggal = '$call_tanggal'";
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
	
	function apkt_master_call_search_by_call_sukses($call_sukses)
	{	
		include "lib/config.php";		
		$query = "select * from apkt_master_call where call_sukses = '$call_sukses'";
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
	
	function apkt_master_call_search_by_call_keterangan($call_keterangan)
	{	
		include "lib/config.php";		
		$query = "select * from apkt_master_call where call_keterangan = '$call_keterangan'";
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
	
	function apkt_master_call_search_by_bulan_tahun($bulan_tahun)
	{	
		include "lib/config.php";		
		$query = "select * from apkt_master_call where bulan_tahun = '$bulan_tahun'";
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
	
	
	
	function apkt_master_call_search_by_jawaban_1($jawaban_1)
	{	
		include "lib/config.php";		
		$query = "select * from apkt_master_call where jawaban_1 = '$jawaban_1'";
		
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
	function apkt_master_call_search_by_jawaban_2($jawaban_2)
	{	
		include "lib/config.php";		
		$query = "select * from apkt_master_call where jawaban_2 = '$jawaban_2'";
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
	function apkt_master_call_search_by_jawaban_3($jawaban_3)
	{	
		include "lib/config.php";		
		$query = "select * from apkt_master_call where jawaban_3 = '$jawaban_3'";
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
	function apkt_master_call_search_by_jawaban_4($jawaban_4)
	{	
		include "lib/config.php";		
		$query = "select * from apkt_master_call where jawaban_4 = '$jawaban_4'";
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
	function apkt_master_call_search_by_jawaban_5($jawaban_5)
	{	
		include "lib/config.php";		
		$query = "select * from apkt_master_call where jawaban_5 = '$jawaban_5'";
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
	function apkt_master_call_search_by_jawaban_6($jawaban_6)
	{	
		include "lib/config.php";		
		$query = "select * from apkt_master_call where jawaban_6 = '$jawaban_6'";
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
	function apkt_master_call_search_by_jawaban_7($jawaban_7)
	{	
		include "lib/config.php";		
		$query = "select * from apkt_master_call where jawaban_7 = '$jawaban_7'";
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
	function apkt_master_call_search_by_jawaban_8($jawaban_8)
	{	
		include "lib/config.php";		
		$query = "select * from apkt_master_call where jawaban_8 = '$jawaban_8'";
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
	function apkt_master_call_search_by_jawaban_9($jawaban_9)
	{	
		include "lib/config.php";		
		$query = "select * from apkt_master_call where jawaban_9 = '$jawaban_9'";
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
	function apkt_master_call_search_by_jawaban_10($jawaban_10)
	{	
		include "lib/config.php";		
		$query = "select * from apkt_master_call where jawaban_10 = '$jawaban_10'";
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
	function apkt_master_call_search_by_jawaban_11($jawaban_11)
	{	
		include "lib/config.php";		
		$query = "select * from apkt_master_call where jawaban_11 = '$jawaban_11'";
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
	function apkt_master_call_search_by_jawaban_12($jawaban_12)
	{	
		include "lib/config.php";		
		$query = "select * from apkt_master_call where jawaban_12 = '$jawaban_12'";
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
	function apkt_master_call_search_by_jawaban_13($jawaban_13)
	{	
		include "lib/config.php";		
		$query = "select * from apkt_master_call where jawaban_13 = '$jawaban_13'";
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
	function apkt_master_call_search_by_jawaban_14($jawaban_14)
	{	
		include "lib/config.php";		
		$query = "select * from apkt_master_call where jawaban_14 = '$jawaban_14'";
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
	function apkt_master_call_search_by_jawaban_15($jawaban_15)
	{	
		include "lib/config.php";		
		$query = "select * from apkt_master_call where jawaban_15 = '$jawaban_15'";
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

	function apkt_master_call_by_rekap_hts($blth)
	{	
		include "lib/config.php";		
		$query = "SELECT * FROM MV_APKT_REKAP_HTS WHERE BULAN_TAHUN = $blth ";
				
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
	
	function apkt_master_call_by_rekap_laporan_berulang($blth)
	{	
		include "lib/config.php";		
		$query = "SELECT * FROM MV_APKT_REKAP_LAPORAN_BERULANG WHERE BULAN_TAHUN = $blth ";
				
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
	
	function apkt_master_call_by_rekap_response_time($blth)
	{	
		include "lib/config.php";		
		$query = "SELECT * FROM MV_APKT_REKAP_RESPONSE_TIME WHERE BULAN_TAHUN = $blth ";
				
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
	
	
	function apkt_master_call_by_rekap_recovery_time($blth)
	{	
		include "lib/config.php";		
		$query = "SELECT * FROM MV_APKT_REKAP_RECOVERY_TIME WHERE BULAN_TAHUN = $blth ";
				
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
	
	function apkt_master_call_by_rekap_kondisi_perbaikan($blth)
	{	
		include "lib/config.php";		
		$query = "SELECT * FROM MV_APKT_REKAP_PERBAIKAN WHERE BULAN_TAHUN = $blth ";
				
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
	
	function apkt_master_call_by_rekap_penyebab_gangguan($blth)
	{	
		include "lib/config.php";		
		$query = "SELECT * FROM MV_APKT_REKAP_SEBAB_GANGGUAN WHERE BULAN_TAHUN = $blth ";
				
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
	
	function apkt_master_call_by_rekap_integritas($blth)
	{	
		include "lib/config.php";		
		$query = "SELECT * FROM MV_APKT_REKAP_INTEGRITAS WHERE BULAN_TAHUN = $blth ";
				
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
	
	function apkt_master_call_by_rekap_paska_perbaikan($blth)
	{	
		include "lib/config.php";		
		$query = "SELECT * FROM MV_APKT_REKAP_PASKA_PERBAIKAN WHERE BULAN_TAHUN = $blth ";
				
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
	
	function apkt_master_call_by_rekap_pelanggan_blm_nyala($blth)
	{	
		include "lib/config.php";		
		$query = "SELECT * FROM MV_APKT_REKAP_BLM_NYALA WHERE BULAN_TAHUN = $blth ";
				
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
	
?>