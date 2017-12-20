<?php


	function flaq_sudah_call($id_master)
	{ 
 		include "lib/config.php";			
		$query = "update apkt_master SET  status_call_phone='1'	where id_master = $id_master";					
		
		$stmt = oci_parse($connection, $query);						
		if(oci_execute($stmt))
		{ $result = 1;}
		else 
		{ $result = $query; }			
		return $result;
	}

	function apkt_master_view()
	{	
		include "lib/config.php";		
		$query = "select * from apkt_master WHERE status_call_phone = '0' ";
		//echo "$query";
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

	function apkt_master_insert($id_pelanggan, $nomor_lapor, $nama, $alamat, $posko, $nomor_telepon, $deskripsi,$penyebab,$tanggal_buat, $tanggal_padam, $tanggal_nyala, $tanggal_lapor, $keterangan, $status_data, $status_call, $status_call_phone, $kode_distribusi, $kode_area, $kode_unit, $kode_rayon,$bulan_tahun,$upload_pengguna,$upload_file,$upload_tanggal,$informasi_01,$informasi_02,$informasi_03,$informasi_04,$informasi_05,$informasi_06,$informasi_07,$informasi_08,$informasi_09,$informasi_10)
	{ 
 		include "lib/config.php";			
		$query = "insert into apkt_master (id_master,id_pelanggan,nomor_lapor, nama, alamat, posko, nomor_telepon, deskripsi,penyebab,tanggal_buat, tanggal_padam, tanggal_nyala,tanggal_lapor, keterangan, status_data,status_call, status_call_phone, kode_distribusi, kode_area, kode_unit, kode_rayon,bulan_tahun,upload_pengguna,upload_file,upload_tanggal,informasi_01,informasi_02,informasi_03,informasi_04,informasi_05,informasi_06,informasi_07,informasi_08,informasi_09,informasi_10)
		values(null, 
		'$id_pelanggan', 
		'$nomor_lapor', 
		'$nama', 
		'$alamat', 
		'$posko', 
		'$nomor_telepon', 
		'$deskripsi', 
		'$penyebab', 
		to_date('$tanggal_buat','yyyy-mm-dd'), 
		to_date('$tanggal_padam','yyyy-mm-dd'), 
		to_date('$tanggal_nyala','yyyy-mm-dd'), 
		to_date('$tanggal_lapor','yyyy-mm-dd'), 
		'$keterangan', 
		'$status_data', 
		'$status_call', 
		'$status_call_phone', 
		'$kode_distribusi', 
		'$kode_area','$kode_unit', 
		'$kode_rayon', 
		to_date('$bulan_tahun','yyyy-mm-dd'), 
		'$upload_pengguna', 
		'$upload_file', 
		to_date('$upload_tanggal','yyyy-mm-dd'), 
		'$informasi_01','$informasi_02','$informasi_03','$informasi_04','$informasi_05','$informasi_06','$informasi_07','$informasi_08','$informasi_09','$informasi_10')";		

		
		$stmt = oci_parse($connection, $query);	
		
		if(oci_execute($stmt))
		{ $result = 1;}
		else 
		{ $result = $query; }			
		return $result;		
	}

	function apkt_upload_master_insert($id_pelanggan, $nomor_lapor, $nama, $alamat, $posko, $nomor_telepon, $deskripsi,$penyebab,$tanggal_buat, $tanggal_padam, $tanggal_nyala, $tanggal_lapor, $keterangan, $status_data, $status_call, $status_call_phone, $kode_distribusi, $kode_area, $kode_unit, $kode_rayon,$bulan_tahun,$upload_pengguna,$upload_file,$upload_tanggal,$informasi_01,$informasi_02,$informasi_03,$informasi_04,$informasi_05,$informasi_06,$informasi_07,$informasi_08,$informasi_09,$informasi_10)
	{ 
 		include "lib/config.php";			
		$query = "insert into apkt_master (id_master,id_pelanggan,nomor_lapor, nama, alamat, posko, nomor_telepon, deskripsi,penyebab,tanggal_buat, tanggal_padam, tanggal_nyala,tanggal_lapor, keterangan, status_data,status_call, status_call_phone, kode_distribusi, kode_area, kode_unit, kode_rayon,bulan_tahun,upload_pengguna,upload_file,upload_tanggal,informasi_01,informasi_02,informasi_03,informasi_04,informasi_05,informasi_06,informasi_07,informasi_08,informasi_09,informasi_10)
		values(null, 
		'$id_pelanggan', 
		'$nomor_lapor', 
		'$nama', 
		'$alamat', 
		'$posko', 
		'$nomor_telepon', 
		'$deskripsi', 
		'$penyebab', 
		to_date('$tanggal_buat','yyyy-mm-dd'), 
		to_date('$tanggal_padam','yyyy-mm-dd'), 
		to_date('$tanggal_nyala','yyyy-mm-dd'), 
		'$tanggal_lapor', 
		'$keterangan', 
		'$status_data', 
		'$status_call', 
		'$status_call_phone', 
		'$kode_distribusi', 
		'$kode_area',
		'$kode_unit', 
		'$kode_rayon', 
		'$bulan_tahun', 
		'$upload_pengguna', 
		'$upload_file', 
		'$upload_tanggal', 
		'$informasi_01','$informasi_02','$informasi_03','$informasi_04','$informasi_05','$informasi_06','$informasi_07','$informasi_08','$informasi_09','$informasi_10')";		

	 	//echo $query."<HR>";

		$stmt = oci_parse($connection, $query);	
		
		if(oci_execute($stmt))
		{ $result = 1;}
		else 
		{ $result = $query; }			
		return $result;		
	}

	function apkt_master_delete($id_master)
	{ 
 		include "lib/config.php";			
		$query = "delete from apkt_master where id_master = $id_master";		
		$stmt = oci_parse($connection, $query);						
		if(oci_execute($stmt))
		{ $result = 1;}
		else 
		{ $result = $query; }			
		return $result;		
	} 

	function apkt_master_update($id_master, $id_pelanggan, $nomor_lapor, $nama, $alamat, $posko, $nomor_telepon, $deskripsi,$penyebab,$tanggal_buat, $tanggal_padam, $tanggal_nyala, $tanggal_lapor, $keterangan, $status_data, $status_call, $status_call_phone, $kode_distribusi, $kode_area, $kode_unit, $kode_rayon,$bulan_tahun,$upload_pengguna,$upload_file,$upload_tanggal,$informasi_01,$informasi_02,$informasi_03,$informasi_04,$informasi_05,$informasi_06,$informasi_07,$informasi_08,$informasi_09,$informasi_10)
	{ 
 		include "lib/config.php";			
		$query = "update apkt_master SET id_pelanggan='$id_pelanggan',
					nomor_lapor='$nomor_lapor',
					nama='$nama',
					alamat='$alamat',
					posko='$posko',
					nomor_telepon='$nomor_telepon', 
					deskripsi='$deskripsi',
					penyebab='$penyebab', 
					tanggal_buat=to_date('$tanggal_buat','yyyy-mm-dd'), 
					tanggal_padam=to_date('$tanggal_padam','yyyy-mm-dd'), 
					tanggal_nyala=to_date('$tanggal_nyala','yyyy-mm-dd'), 
					tanggal_lapor=to_date('$tanggal_lapor','yyyy-mm-dd'), 
					keterangan='$keterangan',
					status_data='$status_data',
					status_call='$status_call',
					status_call_phone='$status_call_phone',
					kode_distribusi='$kode_distribusi',
					kode_area='$kode_area',
					kode_unit='$kode_unit',
					kode_rayon='$kode_rayon',
					bulan_tahun=to_date('$bulan_tahun','yyyy-mm-dd'), 
					upload_pengguna='$upload_pengguna',
					upload_file ='$upload_file',
					upload_tanggal=$upload_tanggal, 
					informasi_01='$informasi_01',
					informasi_02='$informasi_02',
					informasi_03='$informasi_03',
					informasi_04='$informasi_04',
					informasi_05='$informasi_05',
					informasi_06='$informasi_06',
					informasi_07='$informasi_07',
					informasi_08='$informasi_08',
					informasi_09='$informasi_09',
					informasi_10='$informasi_10'
				where id_master = $id_master";	
				
		
		$stmt = oci_parse($connection, $query);						
		if(oci_execute($stmt))
		{ $result = 1;}
		else 
		{ $result = $query; }			
		return $result;
	}

	
	function apkt_master_search_by_id_master($id_master)
	{	
		include "lib/config.php";		
		$query = "select * from apkt_master where id_master='$id_master'";
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
	
	function apkt_master_search_by_id_pelanggan($id_pelanggan)
	{	
		include "lib/config.php";		
		$query = "select * from apkt_master where id_pelanggan = '$id_pelanggan'";
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
	
	function apkt_master_search_by_nomor_lapor($nomor_lapor)
	{	
		include "lib/config.php";		
		$query = "select * from apkt_master where nomor_lapor like '%$nomor_lapor%'";
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
	
	function apkt_master_search_by_nama($nama)
	{	
		include "lib/config.php";		
		$query = "select * from apkt_master where nama='$nama'";
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
	
	function apkt_master_search_by_alamat($alamat)
	{	
		include "lib/config.php";		
		$query = "select * from apkt_master where alamat='$alamat'";
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
	
	function apkt_master_search_by_posko($posko)
	{	
		include "lib/config.php";		
		$query = "select * from apkt_master where posko='$posko'";
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
	
	function apkt_master_search_by_nomor_telepon($nomor_telepon)
	{	
		include "lib/config.php";		
		$query = "select * from apkt_master where nomor_telepon='$nomor_telepon'";
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
	
	function apkt_master_search_by_deskripsi($deskripsi)
	{	
		include "lib/config.php";		
		$query = "select * from apkt_master where deskripsi='$deskripsi'";
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
	
	function apkt_master_search_by_penyebab($penyebab)
	{	
		include "lib/config.php";		
		$query = "select * from apkt_master where penyebab='$penyebab'";
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
	
	function apkt_master_search_by_tanggal_buat($tanggal_buat)
	{	
		include "lib/config.php";		
		$query = "select * from apkt_master where tanggal_buat='$tanggal_buat'";
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
	
	function apkt_master_search_by_tanggal_padam($tanggal_padam)
	{	
		include "lib/config.php";		
		$query = "select * from apkt_master where tanggal_padam='$tanggal_padam'";
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
	
	function apkt_master_search_by_tanggal_nyala($tanggal_nyala)
	{	
		include "lib/config.php";		
		$query = "select * from apkt_master where tanggal_nyala='$tanggal_nyala'";
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
	
	function apkt_master_search_by_tanggal_lapor($tanggal_lapor)
	{	
		include "lib/config.php";		
		$query = "select * from apkt_master where tanggal_lapor='$tanggal_lapor'";
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
	
	function apkt_master_search_by_keterangan($keterangan)
	{	
		include "lib/config.php";		
		$query = "select * from apkt_master where keterangan='$keterangan'";
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
	
	function apkt_master_search_by_status_data($status_data)
	{	
		include "lib/config.php";		
		$query = "select * from apkt_master where status_data='$status_data'";
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
	
	function apkt_master_search_by_status_call($status_call)
	{	
		include "lib/config.php";		
		$query = "select * from apkt_master where status_call='$status_call'";
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
	
	function apkt_master_search_by_status_call_phone($status_call_phone)
	{	
		include "lib/config.php";		
		$query = "select * from apkt_master where status_call_phone='$status_call_phone'";
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
	
	function apkt_master_search_by_kode_distribusi($kode_distribusi)
	{	
		include "lib/config.php";		
		$query = "select * from apkt_master where kode_distribusi = '$kode_distribusi'";
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
	
	function apkt_master_search_by_kode_area($kode_area)
	{	
		include "lib/config.php";		
		$query = "select * from apkt_master where kode_area='$kode_area'";
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
	
	function apkt_master_search_by_kode_unit($kode_unit)
	{	
		include "lib/config.php";		
		$query = "select * from apkt_master where kode_unit='$kode_unit'";
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
	
	function apkt_master_search_by_kode_rayon($kode_rayon)
	{	
		include "lib/config.php";		
		$query = "select * from apkt_master where kode_rayon='$kode_rayon'";
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
	
	function apkt_master_search_by_bulan_tahun($bulan_tahun)
	{	
		include "lib/config.php";		
		$query = "select * from apkt_master where bulan_tahun='$bulan_tahun'";
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
	
	function apkt_master_search_by_upload_pengguna($upload_pengguna)
	{	
		include "lib/config.php";		
		$query = "select * from apkt_master where upload_pengguna='$upload_pengguna'";
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
	
	function apkt_master_search_by_upload_file($upload_file)
	{	
		include "lib/config.php";		
		$query = "select * from apkt_master where upload_file='$upload_file'";
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
	
	function apkt_master_search_by_upload_tanggal($upload_tanggal)
	{	
		include "lib/config.php";		
		$query = "select * from apkt_master where upload_tanggal='$upload_tanggal'";
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
	
	function apkt_master_posko($nomor_lapor)
	{	
		include "lib/config.php";		
		$query = "select nama,alamat,nomor_telepon,posko from apkt_master where nomor_lapor='$nomor_lapor' ";
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