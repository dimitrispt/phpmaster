<?php
include 'ServiceFunctions.php';

$options = array('uri'=>'http://localhost/');
$server = new SoapServer(NULL, $options);
$server->setClass('ServiceFunctions');
$server->handle();


?>
