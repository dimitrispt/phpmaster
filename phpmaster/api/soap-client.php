<?php

$options = array("uri"=>"http://localhost/", 
                          "location"=>"http://localhost/phpmaster/phpmaster/api/soap-server.php",
                           "trace"=>1);

$client = new SoapClient(NULL, $options);

echo $client->getDisplayName("Dimitris", "Paitaridis"); echo  "<br/>";

echo $client->__getLastRequest();                 echo  "<br/>";
echo $client->__getLastRequestHeaders();     echo  "<br/>";
echo $client->__getLastResponse();               echo  "<br/>";
echo $client->__getLastResponseHeaders();   echo  "<br/>";


echo $client->getDisplayName("foo", "bar");
?>
