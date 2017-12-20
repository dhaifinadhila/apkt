<?php
ini_set('session.gc_maxlifetime', 30*60);
//ini_set('max_execution_time', 0);
session_start();
include_once("lib/config.php");
include_once("function/function_apkt_master.php");
 
//echo "<pre>";
//print_r($data);
//echo "</pre>";

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

	<link rel="stylesheet" type="text/css" href="lib/datatables/media/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="lib/datatables/examples/resources/syntax/shCore.css">
	<link rel="stylesheet" type="text/css" href="lib/datatables/examples/resources/demo.css">

	<style type="text/css" class="init">
	th, td { white-space: nowrap; }
	div.dataTables_wrapper {
		width: 972px;
		margin: 0 auto;
	}
	</style>
	<script type="text/javascript" language="javascript" src="lib/datatables/media/js/jquery.js"></script>
	<script type="text/javascript" language="javascript" src="lib/datatables/media/js/jquery.dataTables.js"></script>
	<script type="text/javascript" language="javascript" src="lib/datatables/examples/resources/syntax/shCore.js"></script>
	<script type="text/javascript" language="javascript" src="lib/datatables/examples/resources/demo.js"></script>
	<script type="text/javascript" language="javascript" class="init">

	$(document).ready(function() {
		$('#example').dataTable( {
			"scrollX": true
		} );
	} );

	</script>
	
<script src="lib/excellentexport/excellentexport.js"></script>			
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
        <th class="_css_font_default_11" scope="col"><div align="left">Selamat Datang,<strong>  <?php echo $_SESSION['nama']." - ".$_SESSION['jabatan']; ?></strong></div></th>
        <th width="25" class="_css_font_default_11" scope="col">&nbsp;</th>
      </tr>
      
      <tr>
        <th scope="col">&nbsp;</th>
        <th class="_css_font_default_11" scope="col"><div align="left"><img src="images/line_full.gif" ></div></th>
        <th class="_css_font_default_11" scope="col">&nbsp;</th>
      </tr>
      
      <tr>
        <th height="19" scope="col">&nbsp;</th>
        <th class="_css_font_default_11" scope="col"><div align="left"><strong>Belum Call Back </strong></div></th>
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
            <div align="left"><a href="master.php" class="button_default_aw">master</a>&nbsp;<a href="master_add.php" class="button_default_aw">Add New master</a></div>
        </div></th>
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
		 <?
		 if ($_SESSION['hak_akses']=='400') {
		 ?>
            <table width="200" border="0" cellspacing="1">
              <tr>
                <td width="20"><img src="images/excel-icon.gif"/></td>
                <td width="173"><a href="#" class="style1" onClick="return ExcellentExport.excel(this, 'example', 'master');" download="master.xls">Export to Excel</a></td>
              </tr>
            </table>
			<?
	  }
			 ?>
        </div
		></th>
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
		
		<table id="example" class="display" cellspacing="0" width="100%">
				<thead class="_css_font_default_11_b">
					<tr>
                    	<th>NO</th>
                         <th><div align='center'>ID MASTER</div></th>
                         <th><div align='center'>ID PELANGGAN</div></th>
                         <th><div align='center'>NOMOR LAPOR</div></th>
                         <th><div align='center'>NAMA</div></th>
                         <th><div align='center'>ALAMAT</div></th>
                         <th><div align='center'>POSKO</div></th>
                         <th><div align='center'>NOMOR TELEPON</div></th>
                         <th><div align='center'>DESKRIPSI</div></th>
                         <th><div align='center'>PENYEBAB</div></th>
                         <th><div align='center'>TANGGAL BUAT</div></th>
                         <th><div align='center'>TANGGAL PADAM</div></th>
                         <th><div align='center'>TANGGAL NYALA</div></th>
                         <th><div align='center'>TANGGAL LAPOR</div></th>
                         <th><div align='center'>KETERANGAN</div></th>
                         <th><div align='center'>STATUS DATA</div></th>
                         <th><div align='center'>STATUS CALL</div></th>
                         <th><div align='center'>STATUS CALL PHONE</div></th>
                         <th><div align='center'>KODE DISTRIBUSI</div></th>
                         <th><div align='center'>KODE AREA</div></th>
                         <th><div align='center'>KODE UNIT</div></th>
                         <th><div align='center'>KODE RAYON</div></th>
                         <th><div align='center'>BULAN TAHUN</div></th>
                         <th><div align='center'>UPLOAD PENGGUNA</div></th>
                         <th><div align='center'>UPLOAD FILE</div></th>
                         <th><div align='center'>UPLOAD TANGGAL</div></th>
                         <!-- <th><div align='center'>MODIFIKASI</div></th> -->
					</tr>
				</thead>

				<tbody class="_css_font_default_11_b">
                
					<?
					$master = apkt_master_view();
					$nomor=1;
					for ($i=0;$i<count($master);$i++) {
						$VAR_ID_MASTER=$master[$i]['ID_MASTER'];
						$VAR_ID_PELANGGAN=$master[$i]['ID_PELANGGAN'];
						$VAR_NOMOR_LAPOR=$master[$i]['NOMOR_LAPOR'];
						$VAR_NAMA=$master[$i]['NAMA'];
						$VAR_ALAMAT=$master[$i]['ALAMAT'];
						$VAR_POSKO=$master[$i]['POSKO'];
						$VAR_NOMOR_TELEPON=$master[$i]['NOMOR_TELEPON'];
						$VAR_DESKRIPSI=$master[$i]['DESKRIPSI'];
						$VAR_PENYEBAB=$master[$i]['PENYEBAB'];
						$VAR_TANGGAL_BUAT=$master[$i]['TANGGAL_BUAT'];
						$VAR_TANGGAL_PADAM=$master[$i]['TANGGAL_PADAM'];
						$VAR_TANGGAL_NYALA=$master[$i]['TANGGAL_NYALA'];
						$VAR_TANGGAL_LAPOR=$master[$i]['TANGGAL_LAPOR'];
						$VAR_KETERANGAN=$master[$i]['KETERANGAN'];
						$VAR_STATUS_DATA=$master[$i]['STATUS_DATA'];
						$VAR_STATUS_CALL=$master[$i]['STATUS_CALL'];
						$VAR_STATUS_CALL_PHONE=$master[$i]['STATUS_CALL_PHONE'];
						$VAR_KODE_DISTRIBUSI=$master[$i]['KODE_DISTRIBUSI'];
						$VAR_KODE_AREA=$master[$i]['KODE_AREA'];
						$VAR_KODE_UNIT=$master[$i]['KODE_UNIT'];
						$VAR_KODE_RAYON=$master[$i]['KODE_RAYON'];
						$VAR_BULAN_TAHUN=$master[$i]['BULAN_TAHUN'];
						$VAR_UPLOAD_PENGGUNA=$master[$i]['UPLOAD_PENGGUNA'];
						$VAR_UPLOAD_FILE=$master[$i]['UPLOAD_FILE'];
						$VAR_UPLOAD_TANGGAL=$master[$i]['UPLOAD_TANGGAL'];
						$VAR_INFORMASI_01=$master[$i]['INFORMASI_01'];
						$VAR_INFORMASI_02=$master[$i]['INFORMASI_02'];
						$VAR_INFORMASI_03=$master[$i]['INFORMASI_03'];
						$VAR_INFORMASI_04=$master[$i]['INFORMASI_04'];
						$VAR_INFORMASI_05=$master[$i]['INFORMASI_05'];

						$token = md5($key.$VAR_ID_MASTER);

					
						echo "<tr>";
							echo "<input name='ID_MASTER' type='hidden' class='_css_input_text' id='ID_MASTER' value=".$VAR_ID_MASTER.">";
							echo "<td><div align='center'>".$nomor."</div></td>";
							echo "<td><a href='master_call.php?id=$VAR_ID_MASTER&token=$token'><div align='center'>".strtoupper($VAR_ID_MASTER)."</div></a></td>";
							echo "<td><a href='master_call.php?id=$VAR_ID_MASTER&token=$token'><div align='center'>".strtoupper($VAR_ID_PELANGGAN)."</div></a></td>";
							echo "<td><a href='master_call.php?id=$VAR_ID_MASTER&token=$token'><div align='center'>".strtoupper($VAR_NOMOR_LAPOR)."</div></a></td>";
							echo "<td><a href='master_call.php?id=$VAR_ID_MASTER&token=$token'><div align='center'>".strtoupper($VAR_NAMA)."</div></a></td>";
							echo "<td><a href='master_call.php?id=$VAR_ID_MASTER&token=$token'><div align='left'>".strtoupper($VAR_ALAMAT)."</div></a></td>";
							echo "<td><a href='master_call.php?id=$VAR_ID_MASTER&token=$token'><div align='center'>".strtoupper($VAR_POSKO)."</div></a></td>";
							echo "<td><a href='master_call.php?id=$VAR_ID_MASTER&token=$token'><div align='center'>".strtoupper($VAR_NOMOR_TELEPON)."</div></a></td>";
							echo "<td><a href='master_call.php?id=$VAR_ID_MASTER&token=$token'><div align='left'>".strtoupper($VAR_DESKRIPSI)."</div></a></td>";
							echo "<td><a href='master_call.php?id=$VAR_ID_MASTER&token=$token'><div align='left'>".strtoupper($VAR_PENYEBAB)."</div></a></td>";
							echo "<td><a href='master_call.php?id=$VAR_ID_MASTER&token=$token'><div align='center'>".strtoupper($VAR_TANGGAL_BUAT)."</div></a></td>";
							echo "<td><a href='master_call.php?id=$VAR_ID_MASTER&token=$token'><div align='center'>".strtoupper($VAR_TANGGAL_BUAT)."</div></a></td>";
							echo "<td><a href='master_call.php?id=$VAR_ID_MASTER&token=$token'><div align='center'>".strtoupper($VAR_TANGGAL_BUAT)."</div></a></td>";
							echo "<td><a href='master_call.php?id=$VAR_ID_MASTER&token=$token'><div align='center'>".strtoupper($VAR_TANGGAL_BUAT)."</div></a></td>";
							echo "<td><a href='master_call.php?id=$VAR_ID_MASTER&token=$token'><div align='left'>".strtoupper($VAR_KETERANGAN)."</div></a></td>";
							echo "<td><a href='master_call.php?id=$VAR_ID_MASTER&token=$token'><div align='center'>".strtoupper($VAR_STATUS_DATA)."</div></a></td>";
							echo "<td><a href='master_call.php?id=$VAR_ID_MASTER&token=$token'><div align='center'>".strtoupper($VAR_STATUS_CALL)."</div></a></td>";
							echo "<td><a href='master_call.php?id=$VAR_ID_MASTER&token=$token'><div align='center'>".strtoupper($VAR_STATUS_CALL_PHONE)."</div></a></td>";
							echo "<td><a href='master_call.php?id=$VAR_ID_MASTER&token=$token'><div align='center'>".strtoupper($VAR_KODE_DISTRIBUSI)."</div></a></td>";
							echo "<td><a href='master_call.php?id=$VAR_ID_MASTER&token=$token'><div align='center'>".strtoupper($VAR_KODE_AREA)."</div></a></td>";
							echo "<td><a href='master_call.php?id=$VAR_ID_MASTER&token=$token'><div align='center'>".strtoupper($VAR_KODE_UNIT)."</div></a></td>";
							echo "<td><a href='master_call.php?id=$VAR_ID_MASTER&token=$token'><div align='center'>".strtoupper($VAR_KODE_RAYON)."</div></a></td>";
							echo "<td><a href='master_call.php?id=$VAR_ID_MASTER&token=$token'><div align='center'>".strtoupper($VAR_BULAN_TAHUN)."</div></a></td>";
							echo "<td><a href='master_call.php?id=$VAR_ID_MASTER&token=$token'><div align='center'>".strtoupper($VAR_UPLOAD_PENGGUNA)."</div></a></td>";
							echo "<td><a href='master_call.php?id=$VAR_ID_MASTER&token=$token'><div align='center'>".strtoupper($VAR_UPLOAD_FILE)."</div></a></td>";
							echo "<td><a href='master_call.php?id=$VAR_ID_MASTER&token=$token'><div align='center'>".strtoupper($VAR_UPLOAD_TANGGAL)."</div></a></td>";
							/*
						    echo "<td class='_css_font_default_link_11'><div align='center'>";
								echo "<a href='master_edit.php?id=$VAR_ID_MASTER'><img src='images/icon_edit.gif' width='16' height='16' border='0'></a>&nbsp;";	
								echo "<a href='master_delete.php?id=$VAR_ID_MASTER' onclick='return confirm(\"Delete : ".$VAR_KETERANGAN." ?\")'><img src='images/icon_delete.gif' width='16' height='16' border='0'></a>";
						    echo "</div>";
						    echo "</td>";
							*/
												 																																															
 						echo "</tr>"; 
						$nomor++;
                    }
                    ?>                
 
 
				</tbody>
			</table>
			
					
		</th>
        <th class="_css_font_default_11" scope="col">&nbsp;</th>
      </tr>
      
      <tr>
        <th scope="col">&nbsp;</th>
        <th class="_css_font_default_11" scope="col">&nbsp;</th>
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


