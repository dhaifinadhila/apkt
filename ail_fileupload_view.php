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
	<div data-options="region:'north',border:false" style="height:40px;background:#e2edff;padding:10px"><B><? echo $app_name; ?></B> </div>
	<div data-options="region:'west',split:false, collapsible:false, title:''" style="width:320px;padding:10px;">
	<? include_once("menu.php");?>
	</div>

	<div data-options="region:'south',border:false" style="height:30px;background:#e2edff;padding:5px;"><? echo $app_copyright; ?></div>
	<div data-options="region:'center',title:'File Upload'">
		<div style="padding:10px">
		

 

	<table id="dg" title="Data File Upload" style="width:1000px;height:400px" data-options="
				rownumbers:true,
				singleSelect:true,
				autoRowHeight:false,
				pagination:true,
				pageSize:10">
		<thead>
			<tr>
				<th field="id_user" width="100" align="center">ID User</th>
				<th field="type_file" width="100" align="center">Type File</th>
				<th field="file_name" width="100" align="center">File Name</th>
				<th field="number_record" width="100" align="center">Number Record</th>
				<th field="upload_date" width="100" align="center">Upload Date</th>
 				
 				<th field="act" width="80" align="center">Action</th>
			</tr>
		</thead>
	</table>

	
	<script>

		<?
		 
			 
			echo "function getData(){";
			echo "var rows = [];";
			
			$data_ail_fileupload = ail_fileupload_view();
			for ($i=0;$i<count($data_ail_fileupload);$i++) { 

				$var_ID_AILFILEUPLOAD  = $data_ail_fileupload[$i][ID_AILFILEUPLOAD]; 
				$var_ID_USER  = $data_ail_fileupload[$i][ID_USER];
				$var_TYPE_FILE = $data_ail_fileupload[$i][TYPE_FILE]; 	
				$var_FILE_NAME  = $data_ail_fileupload[$i][FILE_NAME]; 
				$var_NUMBER_RECORD  = $data_ail_fileupload[$i][NUMBER_RECORD]; 
				$var_UPLOAD_DATE  = $data_ail_fileupload[$i][UPLOAD_DATE];
				
				
				  
				$current_action = "<a href=\'ail_fileupload_edit.php?id=$var_ID_AILFILEUPLOAD\'>Edit</a> <a href=\'ail_fileupload_delete.php?id=$var_ID_AILFILEUPLOAD\' onclick=\'return confirm(\"Delete : ".$var_FILE_NAME." ?\")\'>Delete</a>";		 			 
				
				
				echo "
				rows.push({
					id_user : '$var_ID_USER',
					type_file :'$var_TYPE_FILE',
					file_name:'$var_FILE_NAME',
					number_record:'$var_NUMBER_RECORD',
					upload_date:'$var_UPLOAD_DATE',
					act: '$current_action'

 				});
				";
				

			 

			}
		 			
			echo "return rows;";
		echo "}";
	 
			 
		?>


		
		function pagerFilter(data){
			if (typeof data.length == 'number' && typeof data.splice == 'function'){	// is array
				data = {
					total: data.length,
					rows: data
				}
			}
			var dg = $(this);
			var opts = dg.datagrid('options');
			var pager = dg.datagrid('getPager');
			pager.pagination({
				onSelectPage:function(pageNum, pageSize){
					opts.pageNumber = pageNum;
					opts.pageSize = pageSize;
					pager.pagination('refresh',{
						pageNumber:pageNum,
						pageSize:pageSize
					});
					dg.datagrid('loadData',data);
				}
			});
			if (!data.originalRows){
				data.originalRows = (data.rows);
			}
			var start = (opts.pageNumber-1)*parseInt(opts.pageSize);
			var end = start + parseInt(opts.pageSize);
			data.rows = (data.originalRows.slice(start, end));
			return data;
		}
		
		$(function(){
			$('#dg').datagrid({loadFilter:pagerFilter}).datagrid('loadData', getData());
		});
	</script>
	   
	</div>


	</div>


 


 

</body>
</html>