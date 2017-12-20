<?php
ini_set('session.gc_maxlifetime', 30*60);
session_start();

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
        <th class="_css_font_default_11" scope="col"><div align="left">Selamat Datang,<strong> <?php echo $_SESSION['nama_lengkap']." - ".$_SESSION['PENYEBAB']; ?></strong></div></th>
        <th width="25" class="_css_font_default_11" scope="col">&nbsp;</th>
      </tr>
      
      <tr>
        <th scope="col">&nbsp;</th>
        <th class="_css_font_default_11" scope="col"><div align="left"><img src="images/line_full.gif" ></div></th>
        <th class="_css_font_default_11" scope="col">&nbsp;</th>
      </tr>
      
      <tr>
        <th height="19" scope="col">&nbsp;</th>
        <th class="_css_font_default_11" scope="col"><div align="left"><strong>Data Master </strong>&#8226; Master Aplikasi </div></th>
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
          <div align="left"><a href="MASTER.php" class="button_default_aw">MASTER  </a>&nbsp;<a href="MASTER_add.php" class="button_default_aw">Add New Master Data  </a></div>
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
        <th class="_css_font_default_11" scope="col"><form action="master_add_submit.php" method="post" enctype="multipart/form-data" name="form_callback_sheet">
          <table width="80%" border="0" align="left" class="BorderBox_ColorStandard">
            <tr>
              <td width="15">&nbsp;</td>
              <td width="151">&nbsp;</td>
              <td width="17">&nbsp;</td>
              <td width="731">&nbsp;</td>
              <td width="24">&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td class="_css_font_default_12"><div align="left"><strong>ID Master</strong> </div></td>
              <td class="_css_font_default_12"><div align="center"><strong>:</strong></div></td>
              <td><input name="ID_MASTER" type="text" class="_css_input_text" id="ID_MASTER"></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td class="_css_font_default_12"><div align="left"><strong>ID Pelanggan</strong></div></td>
              <td class="_css_font_default_12"><div align="center"><strong>:</strong></div></td>
              <td><input name="ID_PELANGGAN" type="text" class="_css_input_text" id="ID_PELANGGAN"></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td class="_css_font_default_12"><div align="left"><strong>Nomor Lapor</strong></div></td>
              <td class="_css_font_default_12"><div align="center"><strong>:</strong></div></td>
              <td><input name="NOMOR_LAPOR" type="text" class="_css_input_text" id="NOMOR_LAPOR" size="60"></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td class="_css_font_default_12"><div align="left"><strong>Nama</strong></div></td>
              <td class="_css_font_default_12"><div align="center"><strong>:</strong></div></td>
              <td><input name="NAMA" type="text" class="_css_input_text" id="NAMA" size="60"></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td class="_css_font_default_12"><div align="left"><strong>Alamat</strong></div></td>
              <td class="_css_font_default_12"><div align="center"><strong>:</strong></div></td>
              <td><input name="ALAMAT" type="text" class="_css_input_text" id="ALAMAT" size="60"></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td class="_css_font_default_12"><div align="left"><strong>Posko</strong></div></td>
              <td class="_css_font_default_12"><div align="center"><strong>:</strong></div></td>
              <td><input name="POSKO" type="text" class="_css_input_text" id="POSKO" size="60"></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td class="_css_font_default_12"><div align="left"><strong>Nomor Telepon</strong></div></td>
              <td class="_css_font_default_12"><div align="center"><strong>:</strong></div></td>
              <td><input name="NOMOR_TELEPON" type="text" class="_css_input_text" id="NOMOR_TELEPON" size="60"></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td class="_css_font_default_12"><div align="left"><strong>Deskripsi</strong></div></td>
              <td class="_css_font_default_12"><div align="center"><strong>:</strong></div></td>
              <td><input name="DESKRIPSI" type="text" class="_css_input_text" id="DESKRIPSI" size="60"></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td class="_css_font_default_12"><div align="left"><strong>Penyebab</strong></div></td>
              <td class="_css_font_default_12"><div align="center"><strong>:</strong></div></td>
              <td><input name="PENYEBAB" type="text" class="_css_input_text" id="PENYEBAB" size="60"></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td class="_css_font_default_12"><div align="left"><strong>Tanggal Buat</strong></div></td>
              <td class="_css_font_default_12"><div align="center"><strong>:</strong></div></td>
              <td><input name="TANGGAL_BUAT" type="date" class="_css_input_text" id="TANGGAL_BUAT" size="60"></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td class="_css_font_default_12"><div align="left"><strong>Tanggal Padam</strong></div></td>
              <td class="_css_font_default_12"><div align="center"><strong>:</strong></div></td>
              <td><input name="TANGGAL_PADAM" type="date" class="_css_input_text" id="TANGGAL_PADAM" size="60"></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td class="_css_font_default_12"><div align="left"><strong>Tanggal Nyala</strong></div></td>
              <td class="_css_font_default_12"><div align="center"><strong>:</strong></div></td>
              <td><input name="TANGGAL_NYALA" type="date" class="_css_input_text" id="TANGGAL_NYALA" size="60"></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td class="_css_font_default_12"><div align="left"><strong>Tanggal Lapor</strong></div></td>
              <td class="_css_font_default_12"><div align="center"><strong>:</strong></div></td>
              <td><input name="TANGGAL_LAPOR" type="date" class="_css_input_text" id="TANGGAL_LAPOR" size="60"></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td class="_css_font_default_12"><div align="left"><strong>Keterangan</strong></div></td>
              <td class="_css_font_default_12"><div align="center"><strong>:</strong></div></td>
              <td><input name="KETERANGAN" type="text" class="_css_input_text" id="KETERANGAN" size="60"></td>
              <td>&nbsp;</td>
            </tr>
			<tr>
              <td>&nbsp;</td>
              <td class="_css_font_default_12"><div align="left"><strong>Status Data</strong></div></td>
              <td class="_css_font_default_12"><div align="center"><strong>:</strong></div></td>
              <td><input name="STATUS_DATA" type="text" class="_css_input_text" id="STATUS_DATA" size="60"></td>
              <td>&nbsp;</td>
            </tr>
			<tr>
              <td>&nbsp;</td>
              <td class="_css_font_default_12"><div align="left"><strong>Status Call</strong></div></td>
              <td class="_css_font_default_12"><div align="center"><strong>:</strong></div></td>
              <td><input name="STATUS_CALL" type="text" class="_css_input_text" id="STATUS_CALL" size="60"></td>
              <td>&nbsp;</td>
            </tr>
			<tr>
              <td>&nbsp;</td>
              <td class="_css_font_default_12"><div align="left"><strong>Status Call Phone</strong></div></td>
              <td class="_css_font_default_12"><div align="center"><strong>:</strong></div></td>
              <td><input name="STATUS_CALL_PHONE" type="text" class="_css_input_text" id="STATUS_CALL_PHONE" size="60"></td>
              <td>&nbsp;</td>
            </tr>
			<tr>
              <td>&nbsp;</td>
              <td class="_css_font_default_12"><div align="left"><strong>Kode Distribusi</strong></div></td>
              <td class="_css_font_default_12"><div align="center"><strong>:</strong></div></td>
              <td><input name="KODE_DISTRIBUSI" type="text" class="_css_input_text" id="KODE_DISTRIBUSI" size="60"></td>
              <td>&nbsp;</td>
            </tr>
			<tr>
              <td>&nbsp;</td>
              <td class="_css_font_default_12"><div align="left"><strong>Kode Area</strong></div></td>
              <td class="_css_font_default_12"><div align="center"><strong>:</strong></div></td>
              <td><input name="KODE_AREA" type="text" class="_css_input_text" id="KODE_AREA" size="60"></td>
              <td>&nbsp;</td>
            </tr>
			<tr>
              <td>&nbsp;</td>
              <td class="_css_font_default_12"><div align="left"><strong>Kode Unit</strong></div></td>
              <td class="_css_font_default_12"><div align="center"><strong>:</strong></div></td>
              <td><input name="KODE_UNIT" type="text" class="_css_input_text" id="KODE_UNIT" size="60"></td>
              <td>&nbsp;</td>
            </tr>
			<tr>
              <td>&nbsp;</td>
              <td class="_css_font_default_12"><div align="left"><strong>Kode Rayon</strong></div></td>
              <td class="_css_font_default_12"><div align="center"><strong>:</strong></div></td>
              <td><input name="KODE_RAYON" type="text" class="_css_input_text" id="KODE_RAYON" size="60"></td>
              <td>&nbsp;</td>
            </tr>
			<tr>
              <td>&nbsp;</td>
              <td class="_css_font_default_12"><div align="left"><strong>Bulan Tahun</strong></div></td>
              <td class="_css_font_default_12"><div align="center"><strong>:</strong></div></td>
              <td><input name="BULAN_TAHUN" type="date" class="_css_input_text" id="BULAN_TAHUN" size="60"></td>
              <td>&nbsp;</td>
            </tr>
			<tr>
              <td>&nbsp;</td>
              <td class="_css_font_default_12"><div align="left"><strong>Upload Pengguna</strong></div></td>
              <td class="_css_font_default_12"><div align="center"><strong>:</strong></div></td>
              <td><input name="UPLOAD_PENGGUNA" type="text" class="_css_input_text" id="UPLOAD_PENGGUNA" size="60"></td>
              <td>&nbsp;</td>
            </tr>
			<tr>
              <td>&nbsp;</td>
              <td class="_css_font_default_12"><div align="left"><strong>Upload File</strong></div></td>
              <td class="_css_font_default_12"><div align="center"><strong>:</strong></div></td>
              <td><input name="UPLOAD_FILE" type="text" class="_css_input_text" id="UPLOAD_FILE" size="60"></td>
              <td>&nbsp;</td>
            </tr>
			<tr>
              <td>&nbsp;</td>
              <td class="_css_font_default_12"><div align="left"><strong>Upload Tanggal</strong></div></td>
              <td class="_css_font_default_12"><div align="center"><strong>:</strong></div></td>
              <td><input name="UPLOAD_TANGGAL" type="date" class="_css_input_text" id="UPLOAD_TANGGAL" size="60"></td>
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


