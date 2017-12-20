<?php
include_once("lib/config.php");
include_once("function/function_apkt_master.php");

 
					$master = apkt_master_view();

					$xml = "<data>";
					
					$nomor=1;
					for ($i=0;$i<count($master);$i++) {
						$xml = $xml."<customer>";
						$VAR_ID_MASTER			=$master[$i]['ID_MASTER'];
						$VAR_ID_PELANGGAN		=$master[$i]['ID_PELANGGAN'];
						$VAR_NOMOR_LAPOR		=$master[$i]['NOMOR_LAPOR'];
						$VAR_NAMA 				=$master[$i]['NAMA'];
						$VAR_ALAMAT 			=$master[$i]['ALAMAT'];
						$VAR_POSKO				=$master[$i]['POSKO'];
						$VAR_NOMOR_TELEPON		=$master[$i]['NOMOR_TELEPON'];
						$VAR_DESKRIPSI			=$master[$i]['DESKRIPSI'];
						$VAR_PENYEBAB			=$master[$i]['PENYEBAB'];
						$VAR_TANGGAL_BUAT		=$master[$i]['TANGGAL_BUAT'];
						$VAR_TANGGAL_PADAM		=$master[$i]['TANGGAL_PADAM'];
						$VAR_TANGGAL_NYALA		=$master[$i]['TANGGAL_NYALA'];
						$VAR_TANGGAL_LAPOR		=$master[$i]['TANGGAL_LAPOR'];
						$VAR_KETERANGAN			=$master[$i]['KETERANGAN'];
						$VAR_STATUS_DATA		=$master[$i]['STATUS_DATA'];
						$VAR_STATUS_CALL 		=$master[$i]['STATUS_CALL'];
						$VAR_STATUS_CALL_PHONE 	=$master[$i]['STATUS_CALL_PHONE'];
						
						$VAR_KODE_DISTRIBUSI	=$master[$i]['KODE_DISTRIBUSI'];
						$VAR_KODE_AREA			=$master[$i]['KODE_AREA'];
						$VAR_KODE_UNIT			=$master[$i]['KODE_UNIT'];
						$VAR_KODE_RAYON			=$master[$i]['KODE_RAYON'];
						$VAR_BULAN_TAHUN		=$master[$i]['BULAN_TAHUN'];
						$VAR_UPLOAD_PENGGUNA	=$master[$i]['UPLOAD_PENGGUNA'];
						$VAR_UPLOAD_FILE		=$master[$i]['UPLOAD_FILE'];
						$VAR_UPLOAD_TANGGAL		=$master[$i]['UPLOAD_TANGGAL'];

						$VAR_INFORMASI_01=$master[$i]['INFORMASI_01'];
						$VAR_INFORMASI_02=$master[$i]['INFORMASI_02'];
						$VAR_INFORMASI_03=$master[$i]['INFORMASI_03'];
						$VAR_INFORMASI_04=$master[$i]['INFORMASI_04'];
						$VAR_INFORMASI_05=$master[$i]['INFORMASI_05'];
						
						$token = md5($key.$VAR_ID_MASTER);
						
						$xml = $xml."<id>$VAR_ID_MASTER</id>";
						$xml = $xml."<token>$token</token>";
						$xml = $xml."<noreg>$VAR_NOMOR_LAPOR</noreg>";
						$xml = $xml."<phone_1>$VAR_NOMOR_TELEPON</phone_1>";
						$xml = $xml."<phone_2>$VAR_NOMOR_TELEPON</phone_2>";
						$xml = $xml."<name>$VAR_NAMA</name>";
						$xml = $xml."<date>$VAR_UPLOAD_TANGGAL</date>";
						$xml = $xml."</customer>";
};

$xml = $xml."</data>";

	echo $xml;

/* $sxe = new SimpleXMLElement($xml);

print $sxe->asXML(); */

?>