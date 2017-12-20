<?
ini_set('session.gc_maxlifetime', 30*60);
session_start();
include_once("lib/config.php");
include_once("function/function_ail_fileupload.php");
 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="themes/default/easyui.css">
	<link rel="stylesheet" type="text/css" href="themes/icon.css">
	<link rel="stylesheet" type="text/css" href="demo/demo.css">
	<script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript" src="jquery.easyui.min.js"></script>

  	<style>
        .datagrid-header-rownumber{
            width:70px;
        }
        .datagrid-cell-rownumber{
            width:70px;
        }
    </style>

</head>
<body class="easyui-layout">
	<div data-options="region:'north',border:false" style="height:40px;background:#e2edff;padding:10px"><B><? echo $app_name; ?></B></div>
	<div data-options="region:'west',split:false, collapsible:false, title:''" style="width:320px;padding:10px;">
	<? include_once("menu.php");?>
	</div>

	<div data-options="region:'south',border:false" style="height:30px;background:#e2edff;padding:5px;"><? echo $app_copyright; ?></div>
	<div data-options="region:'center',title:'File Upload'">
		<div style="padding:10px">
		<div class="easyui-panel" title="Input Data File Upload" style="width:800px">

		<div style="padding:10px 60px 20px 10px">
	    <form id="submitForm" method="post"  enctype="multipart/form-data"  action="ail_fileupload_input_submit.php">
	    	<table cellpadding="5">

	    		<tr>
	    			<td>ID File Upload</td>
	    			<td>:</td>
	    			<td><input class="easyui-textbox" type="text" name="var_id_ailfileupload" data-options="required:true"></input></td>
	    		</tr>
	    		
	    		<tr>
	    			<td>ID User</td>
	    			<td>:</td>
	    			<td><input class="easyui-textbox" type="text" name="var_id_user" data-options="required:true"></input></td>
	    		</tr>
 	    	

 	    		<tr>
	    			<td>File Name</td>
	    			<td>:</td>
	    			<td><input  type="file" name="var_file_name" data-options="required:true"></input></td>
	    		</tr>

<!--
				<tr>
	    			<td>Upload Date</td>
	    			<td>:</td>
	    			<td><input class="easyui-textbox" type="date" name="var_upload_date" data-options="required:true"></input></td>
	    		</tr>
-->				
	    		<tr>
	    			<td></td>
	    			<td></td>
	    			<td></td>
	    		</tr>
	    		<tr>
	    			<td></td>
	    			<td></td>
	    			<td><td><a href="#" class="easyui-linkbutton" onclick="document.getElementById('submitForm').submit();">Submit</a>
	    	<a href="javascript:void(0)" class="easyui-linkbutton" onclick="document.getElementById('submitForm').clearForm()">Clear</a></td></td>
	    	
	    		</tr>
	    		</tr>


	    	</table>
	    </form>
	    </div>


	    </div>
	</div>


	</div>
</body>
</html>