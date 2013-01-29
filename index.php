<?php
require '../vendor/autoload.php';

//index.php

$user = "dimitrispt";
$secret = "R_aba2c3569824aa90fa61e13c2d834394";
$longurl = "http%3A%2F%2Fsitepoint.com";
/////cURL///////////////////////////////////////
$ch = curl_init("http://api.bitly.com/v3/shorten?login=$user&apiKey=$secret&longurl=$longurl");

//set option for curl_exec to return (and not output) the result:
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 

$result = curl_exec($ch);

$res = json_decode($result); //api.bitly returns a json file
print_r($res);

echo $res->data->url;

echo "<hr />";
///////////////////////////////////////////////
$options = array();
$context = stream_context_create($options);

$result2 = file_get_contents(
        "http://api.bitly.com/v3/shorten?login=$user&apiKey=$secret&longurl=$longurl",
        false,
        $context);

print_r(json_decode($result2));
//////////////////////////////////////////////

?>

