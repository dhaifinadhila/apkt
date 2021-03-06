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
    	<td height="147" colspan="3" align="left" valign="top" bgcolor="#f4f4f4"><img src="images/header.png" width="1024" height="160">
    	</td>
  	</tr>
  
  	<tr>
    	<td width="1028" height="173" colspan="3" align="left" valign="top" bgcolor="#FFFFFF">
    	<table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
      	<tr>
        	<th bgcolor="#414141" scope="col">&nbsp;</th>
        	<th bgcolor="#414141" class="_css_font_default_11" scope="col">
		  	<? include "menu.php"; ?>
		  	</th>
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
	        <th class="_css_font_default_11" scope="col"><div align="left"><strong>Rekapitulasi Aspek HTS </strong></div></th>
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

      	<form action="rekap_aspek_hts.php" method="post" enctype="multipart/form-data">	
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
							<th><div align='center'>PELANGGAN SENDIRI</div></th>
							<th><div align='center'>KELUARGA</div></th>
							<th><div align='center'>ORANG LAIN</div></th>
							<th><div align='center'>JAWABAN TIDAK DIISI</div></th>
							<th><div align='center'>TOTAL</div></th>
							
					</tr>
				</thead>

				<tbody class="_css_font_default_11_b">
					<?
					$BULAN_THN	= $_POST['VAR_BLTH'];
					$THN		= substr($BULAN_THN,0,4);
					$BLN		= substr($BULAN_THN,5,2);
					$BLN_THN	= $THN.$BLN;
					//echo $BLN_THN;

					if ( $BLN_THN=='') {

					} else 
					{
						
						$rekap_hts = apkt_master_call_by_rekap_hts($BLN_THN);
					}

					$nomor=1;
					for ($i=0;$i<count($rekap_hts);$i++) {
						$VAR_KODE_AREA	= $rekap_hts[$i]['KODE_AREA'];
						$VAR_NAMA_AREA	= $rekap_hts[$i]['NAMA_AREA'];
						$VAR_JAWABAN_1 = $rekap_hts[$i]['PELANGGAN_YBS'];
						$VAR_JAWABAN_2 = $rekap_hts[$i]['KELUARGA'];
						$VAR_JAWABAN_3 = $rekap_hts[$i]['ORANG_LAIN'];
						$VAR_JAWABAN_KOSONG		= $rekap_hts[$i]['JAWABAN_KOSONG'];
						$VAR_TOTAL_PELANGGAN 	= $rekap_hts[$i]['TOTAL_PELANGGAN'];
					

										
						echo "<tr>";
							echo "<td><div align='center'>".$nomor."</div></td>";
							echo "<td><div align='center'>".strtoupper($VAR_KODE_AREA)."</div></td>";
							echo "<td><div align='center'>".strtoupper($VAR_NAMA_AREA)."</div></td>";
							echo "<td><div align='center'>".strtoupper($VAR_JAWABAN_1)."</div></td>";
							echo "<td><div align='center'>".strtoupper($VAR_JAWABAN_2)."</div></td>";
							echo "<td><div align='center'>".strtoupper($VAR_JAWABAN_3)."</div></td>";
							echo "<td><div align='center'>".strtoupper($VAR_JAWABAN_KOSONG)."</div></td>";
							echo "<td><div align='center'>".strtoupper($VAR_TOTAL_PELANGGAN)."</div></td>";
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
	          	</div>
          	</th>
        	<th class="_css_font_default_11" scope="col">&nbsp;</th>
        </tr>
      
    	</table>
    	</td>
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


