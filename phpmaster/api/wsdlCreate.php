<?php

require_once("wsdl_creator/WSDLCreator.php");
//header("Content-Type: application/xml");


$test = new WSDLCreator("WSDLExample1", "http://localhost/phpmaster/phpmaster/api/soap-server.php");
//$test->includeMethodsDocumentation(false);

$test->addFile("ServiceFunctions.php");
//$test->addFile("example_class2.php");

$test->setClassesGeneralURL("http://localhost/");

//$test->addURLToClass("example1", "http://localhost/");
//$test->addURLToTypens("XMLCreator", "http://localhost/");

//$test->ignoreMethod(array("example1_1"=>"getEx"));

$test->createWSDL();

$test->printWSDL(true); // print with headers
//print $test->getWSDL();
//$test->downloadWSDL();

//$test->saveWSDL(dirname(__FILE__)."/wsdl.xml", false);



?>