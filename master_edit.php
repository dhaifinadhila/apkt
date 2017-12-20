<?php
ini_set('session.gc_maxlifetime', 30*60);
session_start();

include_once("lib/config.php");
include_once("function/function_apkt_master.php");
$VAR_ID_MASTER = $_GET['id'];
$master = apkt_master_search_by_id_master($VAR_ID_MASTER);


$VAR_ID_MASTER=$master[0]['ID_MASTER'];
$VAR_ID_PELANGGAN=$master[0]['ID_PELANGGAN'];
$VAR_NOMOR_LAPOR=$master[0]['NOMOR_LAPOR'];
$VAR_NAMA=$master[0]['NAMA'];
$VAR_ALAMAT=$master[0]['ALAMAT'];
$VAR_POSKO=$master[0]['POSKO'];
$VAR_NOMOR_TELEPON=$master[0]['NOMOR_TELEPON'];
$VAR_DESKRIPSI=$master[0]['DESKRIPSI'];
$VAR_PENYEBAB=$master[0]['PENYEBAB'];
//echo $VAR_TANGGAL_BUAT;

//02-03-2015

//$VAR_TANGGAL_BUAT_tanggal = $VAR_TANGGAL_BUAT[0].$VAR_TANGGAL_BUAT[1];
//$VAR_TANGGAL_BUAT_bulan = $VAR_TANGGAL_BUAT[3].$VAR_TANGGAL_BUAT[4];
//$VAR_TANGGAL_BUAT_tahun = $VAR_TANGGAL_BUAT[6].$VAR_TANGGAL_BUAT[7].$VAR_TANGGAL_BUAT[8].$VAR_TANGGAL_BUAT[9];

//$VAR_TANGGAL_BUAT = $VAR_TANGGAL_BUAT_bulan."/".$VAR_TANGGAL_BUAT_tanggal."/".$VAR_TANGGAL_BUAT_tahun;

$VAR_TANGGAL_BUAT=$master[0]['TANGGAL_BUAT'];
$VAR_TANGGAL_PADAM=$master[0]['TANGGAL_PADAM'];
$VAR_TANGGAL_NYALA=$master[0]['TANGGAL_NYALA'];
$VAR_TANGGAL_LAPOR=$master[0]['TANGGAL_LAPOR'];
$VAR_KETERANGAN=$master[0]['KETERANGAN'];
$VAR_STATUS_DATA=$master[0]['STATUS_DATA'];
$VAR_STATUS_CALL=$master[0]['STATUS_CALL'];
$VAR_STATUS_CALL_PHONE=$master[0]['STATUS_CALL_PHONE'];
$VAR_KODE_DISTRIBUSI=$master[0]['KODE_DISTRIBUSI'];
$VAR_KODE_AREA=$master[0]['KODE_AREA'];
$VAR_KODE_UNIT=$master[0]['KODE_UNIT'];
$VAR_KODE_RAYON=$master[0]['KODE_RAYON'];
$VAR_BULAN_TAHUN=$master[0]['BULAN_TAHUN'];
$VAR_UPLOAD_PENGGUNA=$master[0]['UPLOAD_PENGGUNA'];
$VAR_UPLOAD_FILE=$master[0]['UPLOAD_FILE'];
$VAR_UPLOAD_TANGGAL=$master[0]['UPLOAD_TANGGAL'];
$VAR_INFORMASI_01='1';
$VAR_INFORMASI_02='2';
$VAR_INFORMASI_03='3';
$VAR_INFORMASI_04='4';
$VAR_INFORMASI_05='5';
$VAR_INFORMASI_06='6';
$VAR_INFORMASI_07='7';
$VAR_INFORMASI_08='8';
$VAR_INFORMASI_09='9';
$VAR_INFORMASI_10='10';


?>
<html>
<head>	
<link rel="stylesheet" href="css/serverstyle.css">
<link rel="stylesheet" href="css/button.css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"> 
<link rel="stylesheet" type="text/css" href="ddlevelsfiles/ddlevelsmenu-base.css" />
<link rel="stylesheet" type="text/css" href="ddlevelsfiles/ddlevelsmenu-topbar.css" />
<link rel="stylesheet" type="text/css" href="ddlevelsfiles/ddlevelsmenu-sidebar.css" />
<script type="text/javascript" src="ddlevelsfiles/ddlevelsmenu.js"></script>
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
		  <? 
		    include "menu.php"; 
		  ?>		</th>
        <th bgcolor="#414141" class="_css_font_default_11" scope="col">&nbsp;</th>
      </tr>
      <tr>
        <th width="25" scope="col">&nbsp;</th>
        <th class="_css_font_default_11" scope="col">&nbsp;</th>
        <th width="25" class="_css_font_default_11" scope="col">&nbsp;</th>
      </tr>
      <tr>
        <th width="25" scope="col">&nbsp;</th>
        <th class="_css_font_default_11" scope="col"><div align="left">Selamat Datang,<strong> <?php echo $_SESSION['nama_lengkap']." - ".$_SESSION['jabatan']; ?></strong></div></th>
        <th width="25" class="_css_font_default_11" scope="col">&nbsp;</th>
      </tr>
      
      <tr>
        <th scope="col">&nbsp;</th>
        <th class="_css_font_default_11" scope="col"><div align="left"><img src="images/line_full.gif" ></div></th>
        <th class="_css_font_default_11" scope="col">&nbsp;</th>
      </tr>
      
      <tr>
        <th height="19" scope="col">&nbsp;</th>
        <th class="_css_font_default_11" scope="col"><div align="left"><strong>Data Master </strong>&#8226; master Aplikasi </div></th>
        <th class="_css_font_default_11" scope="col">&nbsp;</th>
      </tr>
      <tr>
        <th height="19" scope="col">&nbsp;</th>
        <th class="_css_font_default_11" scope="col">&nbsp;</th>
        <th class="_css_font_default_11" scope="col">&nbsp;</th>
      </tr>
      <tr>
        <th height="19" scope="col">&nbsp;</th>
        <th class="_css_font_default_11" scope="col"><div align="left">
          <div align="left"><a href="master.php" class="button_default_aw">master  </a>&nbsp;<a href="master_add.php" class="button_default_aw">Add New master  </a></div>
        </div></th>
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
		<form action="master_edit_submit.php?id=<? echo $VAR_ID_MASTER; ?>" method="post" enctype="multipart/form-data" name="form_callback_sheet">
          <table width="80%" border="0" align="left" class="BorderBox_ColorStandard">
            <tr>
              <td width="15">&nbsp;</td>
              <td width="151">&nbsp;</td>
              <td width="17">&nbsp;</td>
              <td width="731">&nbsp;</td>
              <td width="24">&nbsp;</td>
            </tr>
				<input name="ID_MASTER" type="hidden" class="_css_input_text" id="ID_MASTER" value="<? echo $VAR_ID_MASTER ?>">
            <tr>
              <td>&nbsp;</td>
              <td class="_css_font_default_12"><div align="left"><strong>ID Pelanggan</strong></div></td>
              <td class="_css_font_default_12"><div align="center"><strong>:</strong></div></td>
              <td><input name="ID_PELANGGAN" type="text" class="_css_input_text" id="ID_PELANGGAN" value="<? echo $VAR_ID_PELANGGAN ?>"></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td class="_css_font_default_12"><div align="left"><strong>Nomor Lapor</strong></div></td>
              <td class="_css_font_default_12"><div align="center"><strong>:</strong></div></td>
              <td><input name="NOMOR_LAPOR" type="text" class="_css_input_text" id="NOMOR_LAPOR" size="60" value="<? echo $VAR_NOMOR_LAPOR ?>"></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td class="_css_font_default_12"><div align="left"><strong>Nama</strong></div></td>
              <td class="_css_font_default_12"><div align="center"><strong>:</strong></div></td>
              <td><input name="NAMA" type="text" class="_css_input_text" id="NAMA" size="60" value="<? echo $VAR_NAMA ?>"></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td class="_css_font_default_12"><div align="left"><strong>Alamat</strong></div></td>
              <td class="_css_font_default_12"><div align="center"><strong>:</strong></div></td>
              <td><input name="ALAMAT" type="text" class="_css_input_text" id="ALAMAT" size="60" value="<? echo $VAR_ALAMAT ?>"></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td class="_css_font_default_12"><div align="left"><strong>Posko</strong></div></td>
              <td class="_css_font_default_12"><div align="center"><strong>:</strong></div></td>
              <td><input name="POSKO" type="text" class="_css_input_text" id="POSKO" size="60" value="<? echo $VAR_POSKO ?>"></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td class="_css_font_default_12"><div align="left"><strong>Nomor Telepon</strong></div></td>
              <td class="_css_font_default_12"><div align="center"><strong>:</strong></div></td>
              <td><input name="NOMOR_TELEPON" type="text" class="_css_input_text" id="NOMOR_TELEPON" size="60" value="<? echo $VAR_NOMOR_TELEPON ?>"></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td class="_css_font_default_12"><div align="left"><strong>Deskripsi</strong></div></td>
              <td class="_css_font_default_12"><div align="center"><strong>:</strong></div></td>
              <td><input name="DESKRIPSI" type="text" class="_css_input_text" id="DESKRIPSI" size="60" value="<? echo $VAR_DESKRIPSI ?>"></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td class="_css_font_default_12"><div align="left"><strong>Penyebab</strong></div></td>
              <td class="_css_font_default_12"><div align="center"><strong>:</strong></div></td>
              <td><input name="PENYEBAB" type="text" class="_css_input_text" id="PENYEBAB" size="60" value="<? echo $VAR_PENYEBAB ?>"></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td class="_css_font_default_12"><div align="left"><strong>Tanggal Buat</strong></div></td>
              <td class="_css_font_default_12"><div align="center"><strong>:</strong></div></td>
              <td><input name="TANGGAL_BUAT" type="text" class="_css_input_text" id="TANGGAL_BUAT" size="60" value="<? echo $VAR_TANGGAL_BUAT ?>"></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td class="_css_font_default_12"><div align="left"><strong>Tanggal Padam</strong></div></td>
              <td class="_css_font_default_12"><div align="center"><strong>:</strong></div></td>
              <td><input name="TANGGAL_PADAM" type="text" class="_css_input_text" id="TANGGAL_PADAM" size="60" value="<? echo $VAR_TANGGAL_PADAM ?>"></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td class="_css_font_default_12"><div align="left"><strong>Tanggal Nyala</strong></div></td>
              <td class="_css_font_default_12"><div align="center"><strong>:</strong></div></td>
              <td><input name="TANGGAL_NYALA" type="text" class="_css_input_text" id="TANGGAL_NYALA" size="60" value="<? echo $VAR_TANGGAL_NYALA ?>"></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td class="_css_font_default_12"><div align="left"><strong>Tanggal Lapor</strong></div></td>
              <td class="_css_font_default_12"><div align="center"><strong>:</strong></div></td>
              <td><input name="TANGGAL_LAPOR" type="text" class="_css_input_text" id="TANGGAL_LAPOR" size="60" value="<? echo $VAR_TANGGAL_LAPOR ?>"></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td class="_css_font_default_12"><div align="left"><strong>Keterangan</strong></div></td>
              <td class="_css_font_default_12"><div align="center"><strong>:</strong></div></td>
              <td><input name="KETERANGAN" type="text" class="_css_input_text" id="KETERANGAN" size="60" value="<? echo $VAR_KETERANGAN ?>"></td>
              <td>&nbsp;</td>
            </tr>
			<tr>
              <td>&nbsp;</td>
              <td class="_css_font_default_12"><div align="left"><strong>Status Data</strong></div></td>
              <td class="_css_font_default_12"><div align="center"><strong>:</strong></div></td>
              <td><input name="STATUS_DATA" type="text" class="_css_input_text" id="STATUS_DATA" size="60" value="<? echo $VAR_STATUS_DATA ?>"></td>
              <td>&nbsp;</td>
            </tr>
			<tr>
              <td>&nbsp;</td>
              <td class="_css_font_default_12"><div align="left"><strong>Status Call</strong></div></td>
              <td class="_css_font_default_12"><div align="center"><strong>:</strong></div></td>
              <td><input name="STATUS_CALL" type="text" class="_css_input_text" id="STATUS_CALL" size="60" value="<? echo $VAR_STATUS_CALL ?>"></td>
              <td>&nbsp;</td>
            </tr>
			<tr>
              <td>&nbsp;</td>
              <td class="_css_font_default_12"><div align="left"><strong>Status Call Phone</strong></div></td>
              <td class="_css_font_default_12"><div align="center"><strong>:</strong></div></td>
              <td><input name="STATUS_CALL_PHONE" type="text" class="_css_input_text" id="STATUS_CALL_PHONE" size="60" value="<? echo $VAR_STATUS_CALL_PHONE ?>"></td>
              <td>&nbsp;</td>
            </tr>
			<tr>
              <td>&nbsp;</td>
              <td class="_css_font_default_12"><div align="left"><strong>Kode Distribusi</strong></div></td>
              <td class="_css_font_default_12"><div align="center"><strong>:</strong></div></td>
              <td><input name="KODE_DISTRIBUSI" type="text" class="_css_input_text" id="KODE_DISTRIBUSI" size="60" value="<? echo $VAR_KODE_DISTRIBUSI ?>"></td>
              <td>&nbsp;</td>
            </tr>
			<tr>
              <td>&nbsp;</td>
              <td class="_css_font_default_12"><div align="left"><strong>Kode Area</strong></div></td>
              <td class="_css_font_default_12"><div align="center"><strong>:</strong></div></td>
              <td><input name="KODE_AREA" type="text" class="_css_input_text" id="KODE_AREA" size="60" value="<? echo $VAR_KODE_AREA ?>"></td>
              <td>&nbsp;</td>
            </tr>
			<tr>
              <td>&nbsp;</td>
              <td class="_css_font_default_12"><div align="left"><strong>Kode Unit</strong></div></td>
              <td class="_css_font_default_12"><div align="center"><strong>:</strong></div></td>
              <td><input name="KODE_UNIT" type="text" class="_css_input_text" id="KODE_UNIT" size="60" value="<? echo $VAR_KODE_UNIT ?>"></td>
              <td>&nbsp;</td>
            </tr>
			<tr>
              <td>&nbsp;</td>
              <td class="_css_font_default_12"><div align="left"><strong>Kode Rayon</strong></div></td>
              <td class="_css_font_default_12"><div align="center"><strong>:</strong></div></td>
              <td><input name="KODE_RAYON" type="text" class="_css_input_text" id="KODE_RAYON" size="60" value="<? echo $VAR_KODE_RAYON ?>"></td>
              <td>&nbsp;</td>
            </tr>
			<tr>
              <td>&nbsp;</td>
              <td class="_css_font_default_12"><div align="left"><strong>Bulan Tahun</strong></div></td>
              <td class="_css_font_default_12"><div align="center"><strong>:</strong></div></td>
              <td><input name="BULAN_TAHUN" type="text" class="_css_input_text" id="BULAN_TAHUN" size="60" value="<? echo $VAR_BULAN_TAHUN ?>"></td>
              <td>&nbsp;</td>
            </tr>
			<tr>
              <td>&nbsp;</td>
              <td class="_css_font_default_12"><div align="left"><strong>Upload Pengguna</strong></div></td>
              <td class="_css_font_default_12"><div align="center"><strong>:</strong></div></td>
              <td><input name="UPLOAD_PENGGUNA" type="text" class="_css_input_text" id="UPLOAD_PENGGUNA" size="60" value="<? echo $VAR_UPLOAD_PENGGUNA ?>"></td>
              <td>&nbsp;</td>
            </tr>
			<tr>
              <td>&nbsp;</td>
              <td class="_css_font_default_12"><div align="left"><strong>Upload File</strong></div></td>
              <td class="_css_font_default_12"><div align="center"><strong>:</strong></div></td>
              <td><input name="UPLOAD_FILE" type="text" class="_css_input_text" id="UPLOAD_FILE" size="60" value="<? echo $VAR_UPLOAD_FILE ?>"></td>
              <td>&nbsp;</td>
            </tr>
			<tr>
              <td>&nbsp;</td>
              <td class="_css_font_default_12"><div align="left"><strong>Upload Tanggal</strong></div></td>
              <td class="_css_font_default_12"><div align="center"><strong>:</strong></div></td>
              <td><input name="UPLOAD_TANGGAL" type="text" class="_css_input_text" id="UPLOAD_TANGGAL" size="60" value="<? echo $VAR_UPLOAD_TANGGAL ?>"><font size='2'>dd-mm-yyyy</font></td>
              <td>&nbsp;</td>
            </tr>
            
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td><input name="Submit" type="submit" class="button_default_aw" value="Submit"></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
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
            <? include_once("copyright.php"); ?>
          </div>         </th>
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


