<?php
try {
    ini_set('soap.wsdl_cached_enabled', 0);


    //Options for non-WSDL SOAP:
    //$options = array("uri"=>"http://localhost/", 
    //                          "location"=>"http://localhost/phpmaster/phpmaster/api/soap-server.php",
    //                           "trace"=>1);

    $options = array("trace"=>1, "exceptions"=>0);

    $client = new SoapClient("http://localhost/phpmaster/phpmaster/api/soap-server_wsdl2.php?WSDL", $options);

    echo $client->getDisplayName("Dimitris", "Paitaridis");        echo  "<br/><br />";
    echo $client->getDisplayName("foo", "bar");                     echo  "<br/><br />";
    
    
    echo 'Last Request: ' . $client->__getLastRequest();               echo  "<br/>";
    echo $client->__getLastRequestHeaders();                           echo  "<br/>";
    echo 'Last Response: ' . $client->__getLastResponse();        echo  "<br/>";
    echo $client->__getLastResponseHeaders();                      echo  "<br/><hr/>";

   
   echo "<pre>";
   print_r($client->__getFunctions());
   echo "</pre>";

    
}

catch (SoapFault $e) {
    echo 'SoapFault: ' . $e->getMessage();
    exit();
}

catch(Exception $exc) {
    echo 'Exception: ' . $exc->getMessage();
    exit();
}
?>
