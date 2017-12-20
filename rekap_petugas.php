<?php
ini_set('session.gc_maxlifetime', 30*60);
session_start();

include_once("lib/config.php");
include_once("function/function_apkt_pengguna.php");
include_once("function/engine.php");
 

 //$data_user = find_operator_by_id_user(101);
//print_r( $data_user);
					//	$callnya =  $data_user[0]['JUMLAH_CALL'];

					//	echo "FFF=".$callnya."";
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
        <th class="_css_font_default_11" scope="col"><div align="left"><strong>Rekap Petugas </strong></div></th>
        <th class="_css_font_default_11" scope="col">&nbsp;</th>
      </tr>


	   <!--
      <tr>
        <th height="19" scope="col">&nbsp;</th>
        <th class="_css_font_default_11" scope="col">&nbsp;</th>
        <th class="_css_font_default_11" scope="col">&nbsp;</th>
      </tr>

	 
      <tr>
        <th height="19" scope="col">&nbsp;</th>
        <th class="_css_font_default_11" scope="col"><div align="left">
            <div align="left"><a href="pengguna.php" class="button_default_aw">Pengguna</a>&nbsp;<a href="pengguna_add.php" class="button_default_aw">Add New Pengguna</a></div>
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
            <table width="200" border="0" cellspacing="1">
              <tr>
                <td width="20"><img src="images/excel-icon.gif"/></td>
                <td width="173"><a href="#" class="style1" onClick="return ExcellentExport.excel(this, 'example', 'pengguna');" download="pengguna.xls">Export to Excel</a></td>
              </tr>
            </table>
        </div></th>
        <th class="_css_font_default_11" scope="col">&nbsp;</th>
      </tr>

	  -->

      <tr>
        <th height="19" scope="col">&nbsp;</th>
        <th class="_css_font_default_11" scope="col">&nbsp;</th>
        <th class="_css_font_default_11" scope="col">&nbsp;</th>
      </tr>

    <tr>
        <th height="84" scope="col">&nbsp;</th>
        <th class="_css_font_default_11" scope="col">

<div align="left">
			<form action="rekap_petugas_blth.php" method="GET">
            <table width="200" border="0" cellspacing="1">
              <tbody> 
			  <tr>
                <td width="50"><div class="_css_font_default_11"><strong>Bulan</strong></div></td>
                <td class="_css_font_default_11" scope="col">
				<select id="bl" name="bl" class="_css_input_text">
					<option value="01">Januari</option>";
					<option value="02">Pebruari</option>";
					<option value="03">Maret</option>";
					<option value="04">April</option>";
					<option value="05">Mei</option>";
					<option value="06">Juni</option>";
					<option value="07">Juli</option>";
					<option value="08">Agustus</option>";
					<option value="09">September</option>";
					<option value="10">Oktober</option>";
					<option value="11">Nopember</option>";
					<option value="12">Desember</option>";
				</select>
				</td>
              </tr>
			  <tr>
                <td width="50"><div class="_css_font_default_11"><strong>Tahun</strong></div></td>
                <td class="_css_font_default_11" scope="col">
				<select id="th" name="th" class="_css_input_text">
					<option value="2014">2014</option>";
					<option value="2015">2015</option>";
					<option value="2016">2016</option>";
					<option value="2017">2017</option>";
					<option value="2018">2018</option>";
					<option value="2019">2019</option>";
					<option value="2020">2020</option>";
					<option value="2021">2021</option>";
					<option value="2022">2022</option>";
					<option value="2023">2023</option>";
					<option value="2024">2024</option>";
					<option value="2025">2025</option>";
				</select>
				</td>
              </tr>
			   <tr>
                <td width="50"></td>
                <td class="_css_font_default_11" scope="col">
				<input id="submit" name="submit" type="submit" class="button_default_aw" value="Update">
				</td>
              </tr>
            </tbody></table>
			</FORM>
        </div>

		
		<table id="example" class="display" cellspacing="0" width="100%">
				<thead class="_css_font_default_11_b">
					<tr>
                    	<th>NO</th>
                         <th><div align='center'>AGEN</div></th>
                         <th><div align='center'>KODE AREA</div></th>
                         <th><div align='center'>HAK AKSES</div></th>
                         <th><div align='center'>KODE POSISI</div></th>
                         <th><div align='center'>NIP</div></th>
                         <th><div align='center'>NAMA</div></th>
                         <th><div align='center'>EMAIL</div></th>
                          <th><div align='center'>JABATAN</div></th>
						 <th><div align='center'>JUMLAH CALL</div></th>
                         <th><div align='center'>TARGET CALL</div></th>
                         <th><div align='center'>PERSEN</div></th>
                         <!-- <th><div align='center'>MODIFIKASI</div></th> -->
					</tr>
				</thead>

				<tbody class="_css_font_default_11_b">
                
					<?
					$pengguna = apkt_pengguna_view();
					$nomor=1;
					for ($i=0;$i<count($pengguna);$i++) {
						$VAR_ID_USER 		=$pengguna[$i]['ID_USER'];
						$VAR_KODE_AREA 		=$pengguna[$i]['KODE_AREA'];
						$VAR_HAK_AKSES 		=$pengguna[$i]['HAK_AKSES'];
						$VAR_KODE_POSISI 	=$pengguna[$i]['KODE_POSISI'];
						$VAR_NIP 			=$pengguna[$i]['NIP'];
						$VAR_NAMA 			=$pengguna[$i]['NAMA'];
						$VAR_EMAIL 			=$pengguna[$i]['EMAIL'];
						$VAR_PASSWD 		=$pengguna[$i]['PASSWD'];
						$VAR_JABATAN 		=$pengguna[$i]['JABATAN'];
						$VAR_TARGET_CALL	=$pengguna[$i]['TARGET_CALL'];
						$VAR_KETERANGAN		=$pengguna[$i]['KETERANGAN'];
						
						$VAR_INFORMASI_01=$pengguna[$i]['INFORMASI_01'];
						$VAR_INFORMASI_02=$pengguna[$i]['INFORMASI_02'];
						$VAR_INFORMASI_03=$pengguna[$i]['INFORMASI_03'];
						$VAR_INFORMASI_04=$pengguna[$i]['INFORMASI_04'];
						$VAR_INFORMASI_05=$pengguna[$i]['INFORMASI_05'];

						$data_user = find_operator_by_id_user($VAR_ID_USER);
						$callnya =  $data_user[0]['JUMLAH_CALL'];

						$persen = ($callnya / $VAR_TARGET_CALL) * 100;

						if ($callnya=="") {
							$callnya = "0";
						}

						$agen = apkt_pengguna_search_by_id_user($VAR_ID_USER);
						$nama_agen = $agen[0]['EMAIL'];

					
						if ($callnya>0) {
						echo "<tr>";
							echo "<td><div align='center'>".$nomor."</div></td>";
							echo "<td><div align='center'>".strtoupper($nama_agen)."</div></td>";
							echo "<td><div align='center'>".strtoupper($VAR_KODE_AREA)."</div></td>";
							echo "<td><div align='center'>".strtoupper($VAR_HAK_AKSES)."</div></td>";
							echo "<td><div align='center'>".strtoupper($VAR_KODE_POSISI)."</div></td>";
							echo "<td><div align='center'>".strtoupper($VAR_NIP)."</div></td>";
							echo "<td><div align='center'>".strtoupper($VAR_NAMA)."</div></td>";
							echo "<td><div align='center'>".strtoupper($VAR_EMAIL)."</div></td>";
 							echo "<td><div align='center'>".strtoupper($VAR_JABATAN)."</div></td>";
							echo "<td><div align='center'>".strtoupper($callnya)."</div></td>";
							echo "<td><div align='center'>".strtoupper($VAR_TARGET_CALL)."</div></td>";
							echo "<td><div align='left'>".number_format($persen,2)." % </div></td>";	
							/*
						    echo "<td class='_css_font_default_link_11'><div align='center'>";
								echo "<a href='pengguna_edit.php?id=$VAR_ID_USER'><img src='images/icon_edit.gif' width='16' height='16' border='0'></a>&nbsp;";	
								echo "<a href='pengguna_delete.php?id=$VAR_ID_USER' onclick='return confirm(\"Delete : ".$VAR_KETERANGAN." ?\")'><img src='images/icon_delete.gif' width='16' height='16' border='0'></a>";
						    echo "</div>";
						    echo "</td>";
							*/
												 																																															
 						echo "</tr>"; 
						}
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


