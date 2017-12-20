<?php
ini_set('session.gc_maxlifetime', 30*60);
session_start();

include_once("lib/config.php");
include_once("function/function_apkt_fileupload.php");
 
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
/*	function confirmDelete() {
			if (confirm('Anda yakin ingin menghapus data Belum CallBack?')) {
				//Make ajax call
				$.ajax({
					url: "hapus_belum_callback.php",
					type: "POST",
					data: {id : 5},
					dataType: "html", 
					success: function() {
						alert("Data berhasil dihapus");
					}
				});

			}
		}*/
	</script>
	
	
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
		  ?></th>
	
        <th bgcolor="#414141" class="_css_font_default_11" scope="col">&nbsp;</th>
      </tr>
      <tr>
        <th width="25" scope="col">&nbsp;</th>
        <th class="_css_font_default_11" scope="col">&nbsp;</th>
        <th width="25" class="_css_font_default_11" scope="col">&nbsp;</th>
      </tr>
      <tr>
        <th width="25" scope="col">&nbsp;</th>
        <th class="_css_font_default_11" scope="col"><div align="left">Selamat Datang, <strong><?php echo $_SESSION['nama']." - ".$_SESSION['jabatan']; ?></strong></div></th>
        <th width="25" class="_css_font_default_11" scope="col">&nbsp;</th>
      </tr>
      
      <tr>
        <th scope="col">&nbsp;</th>
        <th class="_css_font_default_11" scope="col"><div align="left"><img src="images/line_full.gif" ></div></th>
        <th class="_css_font_default_11" scope="col">&nbsp;</th>
      </tr>
      
      <tr>
        <th height="19" scope="col">&nbsp;</th>
        <th class="_css_font_default_11" scope="col"><div align="left"><strong>Upload File Excell </strong></div></th>
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
            <div align="left"><a href="upload_view.php" class="button_default_aw"> File Excell </a>&nbsp;<a href="upload.php" class="button_default_aw">Add New File Excell </a>&nbsp;
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
		
		<table id="example" class="display" cellspacing="0" width="100%">
				<thead class="_css_font_default_11_b">
					<tr>
                    	<th>NO</th>
                         <!-- <th><div align='center'>PENGGUNA</div></th> -->
                        <th><div align='center'>File Name</div></th>
 						<th>Number Record</th>
                        <th>Upload Date</th>
                        <th>DOWNLOAD</th>
						<th>ACTION</th>
					</tr>
				</thead>

				<tbody class="_css_font_default_11_b">
 				<?
					$upload = apkt_file_upload_view();
					$nomor=1;
					for ($i=0;$i<count($upload);$i++) {
						$VAR_ID_FILE_UPLOAD   =$upload[$i]['ID_FILE_UPLOAD'];
						$VAR_ID_USER          =$upload[$i]['ID_USER'];
						$VAR_TYPE_FILE        =$upload[$i]['TYPE_FILE'];
			 
						$VAR_NUMBER_RECORD  =$upload[$i]['NUMBER_RECORD'];
						$VAR_UPLOAD_DATE    =$upload[$i]['UPLOAD_DATE'];
						$VAR_DOWNLOAD       =$upload[$i]['DOWNLOAD'];
						$VAR_ACTION         =$upload[$i]['ACTION'];

						$VAR_INFORMASI_01=$upload[$i]['INFORMASI_01'];
						$VAR_INFORMASI_02=$upload[$i]['INFORMASI_02'];
						$VAR_INFORMASI_03=$upload[$i]['INFORMASI_03'];
						$VAR_INFORMASI_04=$upload[$i]['INFORMASI_04'];
						$VAR_INFORMASI_05=$upload[$i]['INFORMASI_05'];

					
						echo "<tr>";
							echo "<td><div align='center'>".$nomor."</div></td>";
							echo "<td><div align='center'>".strtoupper($VAR_TYPE_FILE)."</div></td>";
							echo "<td><div align='center'>".strtoupper($VAR_NUMBER_RECORD)."</div></td>";
							echo "<td><div align='center'>".strtoupper($VAR_UPLOAD_DATE)."</div></td>";
							echo "<td><div align='center'><a href='upload/$VAR_TYPE_FILE'> Download </a></div></td>";
							echo "<td><div align='center'><a href='upload_delete.php?id=$VAR_TYPE_FILE' onclick='return confirm(\"Delete : ".$VAR_FILE_NAME." ?\")'><img src='images/icon_delete.gif' width='16' height='16' border='0'></a>";
						    echo "</div>";
						    echo "</td>";
																																											
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
            <span class="_css_font_default_11">CallBack Center (CBC) Versi 2.0 &copy; 2015 - PT. PLN (Persero) Distribusi Jakarta Raya dan Tangerang. All Rights Reserved <BR><BR>Untuk memperoleh user login silahkan email ke : pepen.suwargana@pln.co.id</span>          </div>         </th>
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


