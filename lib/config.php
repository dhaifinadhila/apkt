<?php
error_reporting(0);	
ini_set('extension', 'php_oci8.dll');



 $ora_username	= "cbc";
 $ora_password	= "124@cbc";
 $ora_server	= "localhost"; 
 $ora_service	= "EMAP"; 

$server_service = $ora_server."/".$ora_service;
$connection		= oci_connect($ora_username, $ora_password, $server_service);
$key			= "creator=kustan@pln.co.id#phone=081320077300";
/* 
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
} */

	//echo phpinfo();
	//error_reporting(0);	
	//$username		= "cbc";
	//$password		= "callback@123";	
	//$service		= "DB072"; 
	//$connection		= oci_connect($username,$password,$service);	
	//$email_active		= true;
?>