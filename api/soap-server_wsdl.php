<?php
include 'ServiceFunctions.php';
//include 'php-wsdl-2.3/class.phpwsdl.php';


$server = new SoapServer('wsdl.xml');
$server->setClass('ServiceFunctions');
$server->handle();

?>
