<?php
ini_set('session.gc_maxlifetime', 30*60);
session_start();

include_once("lib/config.php");
include_once("function/function_apkt_master_call.php");
include_once("function/function_apkt_master.php");
include_once("function/function_apkt_pengguna.php");
 
?>
<html>
<head>	
<link rel="stylesheet" href="css/serverstyle.css">
<link rel="stylesheet" href="css/button.css">

<script type="text/javascript" src="/components/excellentexport/excellentexport.min.js"></script>

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
        <th class="_css_font_default_11" scope="col"><div align="left">Selamat Datang,<strong> <?php echo $_SESSION['nama']." - ".$_SESSION['jabatan']; ?></strong></div></th>
        <th width="25" class="_css_font_default_11" scope="col">&nbsp;</th>
      </tr>
      
      <tr>
        <th scope="col">&nbsp;</th>
        <th class="_css_font_default_11" scope="col"><div align="left"><img src="images/line_full.gif" ></div></th>
        <th class="_css_font_default_11" scope="col">&nbsp;</th>
      </tr>
      
      <tr>
        <th height="19" scope="col">&nbsp;</th>
        <th class="_css_font_default_11" scope="col"><div align="left"><strong>Rekapitulasi Recovery Time </strong></div></th>
        <th class="_css_font_default_11" scope="col">&nbsp;</th>
      </tr>
    

      <tr>
       		<th height="19" scope="col">&nbsp;</th>
        	<th class="_css_font_default_11" scope="col">
	        	<div align="left">
		            <table width="200" border="0" cellspacing="1">
			            <tr>
			                <td width="20"><img src="images/excel-icon.gif"/></td>
			                <td width="173"><a href="#" class="style1" onClick="return ExcellentExport.excel(this, 'example_exp', 'sudah_call');" download="rekap_hts.xls">Export to Excel</a></td>
			            </tr>
		            </table>
	        	</div>
        	</th>
      	</tr>

      	<tr>
	        <th height="19" scope="col">&nbsp;</th>
	        <th class="_css_font_default_11" scope="col">&nbsp;</th>
	        <th class="_css_font_default_11" scope="col">&nbsp;</th>
      	</tr>

      	<form action="rekap_recovery_time.php" method="post" enctype="multipart/form-data">	
			<tr>
	        <th height="19" scope="col">&nbsp;</th>
	        <th class="_css_font_default_11" scope="col">
				<div align="left">
					<table width="200" border="0" cellspacing="1">
					<tbody>
					<strong>Bulan Tahun</strong>&nbsp;
					<input name="VAR_BLTH" type="month" class="_css_input_text" id="txtDate" >
					&nbsp;
					<input id="submit" name="submit" type="submit" class="button_default_aw" value="Submit" style="height:28px;">
					</tbody>
					</table>
				</div>
			</th>
			</tr>
			
			<tr>
				<th height="19" scope="col">&nbsp;</th>
				<th class="_css_font_default_11" scope="col">&nbsp;</th>
				<th class="_css_font_default_11" scope="col">&nbsp;</th>
			</tr>
		</form>

    <tr>
        <th height="84" scope="col">&nbsp;</th>
        <th class="_css_font_default_11" scope="col">
		
		<table id="example" class="display" cellspacing="0" width="100%">
				<thead class="_css_font_default_11_b">
					<tr>
                    	<th>NO</th>
                         <!-- <th><div align='center'>ID PELANGGAN</div></th>-->
							<th><div align='center'>KODE AREA</div></th>
							<th><div align='center'>NAMA AREA</div></th>
							<th><div align='center'>TIDAK LEBIH DARI 1 JAM</div></th>
							<th><div align='center'>2 S/D 3 JAM</div></th>
							<th><div align='center'>4 S/D 12 JAM</div></th>
							<th><div align='center'>BELUM MENYALA SAMPAI SAAT INI</div></th>
							<th><div align='center'>TIDAK PADAM</div></th>
							<th><div align='center'>JAWABAN TIDAK DIISI</div></th>
							<th><div align='center'>TOTAL</div></th>
							<!--
							<th><div align='center'>POSKO</div></th>
						
						 <th><div align='center'>AGEN</div></th>
                         <th><div align='center'>CALL JUMLAH</div></th>
                         <th><div align='center'>CALL TANGGAL</div></th>
                         <th><div align='center'>CALL KETERANGAN</div></th>
                         <th><div align='center'>BULAN TAHUN</div></th>
                         <th><div align='center'>JAWABAN 01</div></th>
                         <th><div align='center'>INFO JAWABAN 01</div></th>
                         <th><div align='center'>JAWABAN 02</div></th>
                         <th><div align='center'>INFO JAWABAN 02</div></th>
                         <th><div align='center'>JAWABAN 03</div></th>
                         <th><div align='center'>INFO JAWABAN 03</div></th>
                         <th><div align='center'>JAWABAN 04</div></th>
                         <th><div align='center'>INFO JAWABAN 04</div></th>
                         <th><div align='center'>JAWABAN 05</div></th>
                         <th><div align='center'>INFO JAWABAN 05</div></th>
                         <th><div align='center'>JAWABAN 06</div></th>
                         <th><div align='center'>INFO JAWABAN 06</div></th>
                         <th><div align='center'>JAWABAN 07</div></th>
                         <th><div align='center'>INFO JAWABAN 07</div></th>
                         <th><div align='center'>JAWABAN 08</div></th>
                         <th><div align='center'>INFO JAWABAN 08</div></th>
						 -->
					</tr>
				</thead>

				<tbody class="_css_font_default_11_b">
                
					<?
					$BULAN_THN	= $_POST['VAR_BLTH'];
					$THN		= substr($BULAN_THN,0,4);
					$BLN		= substr($BULAN_THN,5,2);
					$BLN_THN	= $THN.$BLN;
					

					if ( $BLN_THN=='' ) {

					} else 
					{
						
						$rekap_recovery_time = apkt_master_call_by_rekap_recovery_time($BLN_THN);
					}

					$nomor=1;
					for ($i=0;$i<count($rekap_recovery_time);$i++) {
						$VAR_KODE_AREA	= $rekap_recovery_time[$i]['KODE_AREA'];
						$VAR_NAMA_AREA	= $rekap_recovery_time[$i]['NAMA_AREA'];
						$VAR_JAWABAN_1 	= $rekap_recovery_time[$i]['TIDAK_LEBIH_DR_1'];
						$VAR_JAWABAN_2 	= $rekap_recovery_time[$i]['DUA_SD_3'];
						$VAR_JAWABAN_3 	= $rekap_recovery_time[$i]['EMPAT_SD_12'];
						$VAR_JAWABAN_4 	= $rekap_recovery_time[$i]['BLM_NYALA'];
						$VAR_JAWABAN_5 	= $rekap_recovery_time[$i]['TDK_PADAM'];
						$VAR_JAWABAN_KOSONG		= $rekap_recovery_time[$i]['JAWABAN_KOSONG'];
						$VAR_TOTAL_PELANGGAN 	= $rekap_recovery_time[$i]['TOTAL_PELANGGAN'];
						
						/* $VAR_ID_MASTER=$master_call[$i]['ID_MASTER_CALL'];
						$VAR_ID_PELANGGAN=$master_call[$i]['ID_PELANGGAN'];
						$VAR_NOMOR_LAPOR=$master_call[$i]['NOMOR_LAPOR'];
						$VAR_ID_USER=$master_call[$i]['ID_USER'];
						$VAR_CALL_JUMLAH=$master_call[$i]['CALL_JUMLAH'];
						$VAR_CALL_TANGGAL=$master_call[$i]['CALL_TANGGAL'];
						$VAR_CALL_KETERANGAN=$master_call[$i]['CALL_KETERANGAN'];
						$VAR_BULAN_TAHUN=$master_call[$i]['BULAN_TAHUN'];
						$VAR_JAWABAN_01=$master_call[$i]['JAWABAN_1'];
						$VAR_JAWABAN_01_INFO=$master_call[$i]['JAWABAN_1_INFO'];
						$VAR_JAWABAN_02=$master_call[$i]['JAWABAN_2'];
						$VAR_JAWABAN_02_INFO=$master_call[$i]['JAWABAN_2_INFO'];
						$VAR_JAWABAN_03=$master_call[$i]['JAWABAN_3'];
						$VAR_JAWABAN_03_INFO=$master_call[$i]['JAWABAN_3_INFO'];
						$VAR_JAWABAN_04=$master_call[$i]['JAWABAN_4'];
						$VAR_JAWABAN_04_INFO=$master_call[$i]['JAWABAN_4_INFO'];
						$VAR_JAWABAN_05=$master_call[$i]['JAWABAN_5'];
						$VAR_JAWABAN_05_INFO=$master_call[$i]['JAWABAN_5_INFO'];
						$VAR_JAWABAN_06=$master_call[$i]['JAWABAN_6'];
						$VAR_JAWABAN_06_INFO=$master_call[$i]['JAWABAN_6_INFO'];
						$VAR_JAWABAN_07=$master_call[$i]['JAWABAN_7'];
						$VAR_JAWABAN_07_INFO=$master_call[$i]['JAWABAN_7_INFO'];
						$VAR_JAWABAN_08=$master_call[$i]['JAWABAN_8'];
						$VAR_JAWABAN_08_INFO=$master_call[$i]['JAWABAN_8_INFO'];
						$VAR_JAWABAN_09=$master_call[$i]['JAWABAN_09'];
						$VAR_JAWABAN_09_INFO=$master_call[$i]['JAWABAN_09_INFO'];
						$VAR_JAWABAN_10=$master_call[$i]['JAWABAN_10'];
						$VAR_JAWABAN_10_INFO=$master_call[$i]['JAWABAN_10_INFO'];
						$VAR_JAWABAN_11=$master_call[$i]['JAWABAN_11'];
						$VAR_JAWABAN_11_INFO=$master_call[$i]['JAWABAN_11_INFO'];
						$VAR_JAWABAN_12=$master_call[$i]['JAWABAN_12'];
						$VAR_JAWABAN_12_INFO=$master_call[$i]['JAWABAN_12_INFO'];
						$VAR_JAWABAN_13=$master_call[$i]['JAWABAN_13'];
						$VAR_JAWABAN_13_INFO=$master_call[$i]['JAWABAN_13_INFO'];
						$VAR_JAWABAN_14=$master_call[$i]['JAWABAN_14'];
						$VAR_JAWABAN_14_INFO=$master_call[$i]['JAWABAN_14_INFO'];
						$VAR_JAWABAN_15=$master_call[$i]['JAWABAN_15'];
						$VAR_JAWABAN_15_INFO=$master_call[$i]['JAWABAN_15_INFO'];
						$VAR_INFORMASI_01=$master_call[$i]['INFORMASI_01'];
						$VAR_INFORMASI_02=$master_call[$i]['INFORMASI_02'];
						$VAR_INFORMASI_03=$master_call[$i]['INFORMASI_03'];
						$VAR_INFORMASI_04=$master_call[$i]['INFORMASI_04'];
						$VAR_INFORMASI_05=$master_call[$i]['INFORMASI_05'];
						$JUMLAH_CALLNYA=$master_call[$i]['JUMLAH_CALLNYA'];
						

						$agen = apkt_pengguna_search_by_id_user($VAR_ID_USER);
						$nama_agen = $agen[0]['EMAIL'];
						
						$posko		= apkt_master_posko($VAR_NOMOR_LAPOR);
						$VAR_NAMA	= $posko[0]['NAMA'];
						$VAR_ALAMAT	= $posko[0]['ALAMAT'];
						$VAR_NO_TELEPON	= $posko[0]['NOMOR_TELEPON'];
						$VAR_POSKO		= $posko[0]['POSKO']; */

										
						echo "<tr>";
							echo "<td><div align='center'>".$nomor."</div></td>";
							echo "<td><div align='center'>".strtoupper($VAR_KODE_AREA)."</div></td>";
							echo "<td><div align='center'>".strtoupper($VAR_NAMA_AREA)."</div></td>";
							echo "<td><div align='center'>".strtoupper($VAR_JAWABAN_1)."</div></td>";
							echo "<td><div align='center'>".strtoupper($VAR_JAWABAN_2)."</div></td>";
							echo "<td><div align='center'>".strtoupper($VAR_JAWABAN_3)."</div></td>";
							echo "<td><div align='center'>".strtoupper($VAR_JAWABAN_4)."</div></td>";
							echo "<td><div align='center'>".strtoupper($VAR_JAWABAN_5)."</div></td>";
							echo "<td><div align='center'>".strtoupper($VAR_JAWABAN_KOSONG)."</div></td>";
							echo "<td><div align='center'>".strtoupper($VAR_TOTAL_PELANGGAN)."</div></td>";
							//echo "<td><div align='center'>".strtoupper($VAR_ID_PELANGGAN)."</div></td>";
							/* echo "<td><div align='center'><a href='master_called_readonly.php?nl=$VAR_NOMOR_LAPOR' target='_blank'>".strtoupper($VAR_NOMOR_LAPOR)."</a></div></td>";
							echo "<td><div align='center'><a href='master_called_readonly.php?nl=$VAR_NOMOR_LAPOR' target='_blank'>".strtoupper($VAR_NAMA)."</a></div></td>";
							echo "<td><div align='center'><a href='master_called_readonly.php?nl=$VAR_NOMOR_LAPOR' target='_blank'>".strtoupper($VAR_ALAMAT)."</a></div></td>";
							echo "<td><div align='center'><a href='master_called_readonly.php?nl=$VAR_NOMOR_LAPOR' target='_blank'>".strtoupper($VAR_NO_TELEPON)."</a></div></td>";
							echo "<td><div align='center'><a href='master_called_readonly.php?nl=$VAR_NOMOR_LAPOR' target='_blank'>".strtoupper($VAR_POSKO)."</a></div></td>";
							echo "<td><div align='center'><a href='master_called_readonly.php?nl=$VAR_NOMOR_LAPOR' target='_blank'>".strtoupper($nama_agen)."</a></div></td>";
							echo "<td><div align='center'><a href='master_called_readonly.php?nl=$VAR_NOMOR_LAPOR' target='_blank'>".strtoupper($JUMLAH_CALLNYA)."</a></div></td>";
							echo "<td><div align='center'><a href='master_called_readonly.php?nl=$VAR_NOMOR_LAPOR' target='_blank'>".strtoupper($VAR_CALL_TANGGAL)."</a></div></td>";
							echo "<td><div align='left'><a href='master_called_readonly.php?nl=$VAR_NOMOR_LAPOR' target='_blank'>".strtoupper($VAR_CALL_KETERANGAN)."</a></div></td>";
							echo "<td><div align='center'><a href='master_called_readonly.php?nl=$VAR_NOMOR_LAPOR' target='_blank'>".strtoupper($VAR_BULAN_TAHUN)."</a></div></td>";
							echo "<td><div align='center'><a href='master_called_readonly.php?nl=$VAR_NOMOR_LAPOR' target='_blank'>".strtoupper($VAR_JAWABAN_01)."</a></div></td>";
							echo "<td><div align='center'><a href='master_called_readonly.php?nl=$VAR_NOMOR_LAPOR' target='_blank'>".strtoupper($VAR_JAWABAN_01_INFO)."</a></div></td>";
							echo "<td><div align='center'><a href='master_called_readonly.php?nl=$VAR_NOMOR_LAPOR' target='_blank'>".strtoupper($VAR_JAWABAN_02)."</a></div></td>";
							echo "<td><div align='center'><a href='master_called_readonly.php?nl=$VAR_NOMOR_LAPOR' target='_blank'>".strtoupper($VAR_JAWABAN_02_INFO)."</a></div></td>";
							echo "<td><div align='center'><a href='master_called_readonly.php?nl=$VAR_NOMOR_LAPOR' target='_blank'>".strtoupper($VAR_JAWABAN_03)."</a></div></td>";
							echo "<td><div align='center'><a href='master_called_readonly.php?nl=$VAR_NOMOR_LAPOR' target='_blank'>".strtoupper($VAR_JAWABAN_03_INFO)."</a></div></td>";
							echo "<td><div align='center'><a href='master_called_readonly.php?nl=$VAR_NOMOR_LAPOR' target='_blank'>".strtoupper($VAR_JAWABAN_04)."</a></div></td>";
							echo "<td><div align='center'><a href='master_called_readonly.php?nl=$VAR_NOMOR_LAPOR' target='_blank'>".strtoupper($VAR_JAWABAN_04_INFO)."</a></div></td>";
							echo "<td><div align='center'><a href='master_called_readonly.php?nl=$VAR_NOMOR_LAPOR' target='_blank'>".strtoupper($VAR_JAWABAN_05)."</a></div></td>";
							echo "<td><div align='center'><a href='master_called_readonly.php?nl=$VAR_NOMOR_LAPOR' target='_blank'>".strtoupper($VAR_JAWABAN_05_INFO)."</a></div></td>";
							echo "<td><div align='center'><a href='master_called_readonly.php?nl=$VAR_NOMOR_LAPOR' target='_blank'>".strtoupper($VAR_JAWABAN_06)."</a></div></td>";
							echo "<td><div align='center'><a href='master_called_readonly.php?nl=$VAR_NOMOR_LAPOR' target='_blank'>".strtoupper($VAR_JAWABAN_06_INFO)."</a></div></td>";
							echo "<td><div align='center'><a href='master_called_readonly.php?nl=$VAR_NOMOR_LAPOR' target='_blank'>".strtoupper($VAR_JAWABAN_07)."</a></div></td>";
							echo "<td><div align='center'><a href='master_called_readonly.php?nl=$VAR_NOMOR_LAPOR' target='_blank'>".strtoupper($VAR_JAWABAN_07_INFO)."</a></div></td>";
							echo "<td><div align='center'><a href='master_called_readonly.php?nl=$VAR_NOMOR_LAPOR' target='_blank'>".strtoupper($VAR_JAWABAN_08)."</a></div></td>";
							echo "<td><div align='center'><a href='master_called_readonly.php?nl=$VAR_NOMOR_LAPOR' target='_blank'>".strtoupper($VAR_JAWABAN_08_INFO)."</a></div></td>"; */
							echo "</a>";
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


