<?php
error_reporting(E_ALL | E_STRICT);
require('UploadHandler.php');
$upload_handler = new UploadHandler();
if(isset($_GET['oid'])){
	$oid = $_GET['oid'];
	$upload_handler->setOptionsAttribute('oid', $oid);
}
$upload_handler->initialize();
