<?php

$concerts = array(
    array("title"=>"The Magic Flute", "time"=>1329636600),
    array("title"=>"Four Seasons", "time"=>1329636600),
    array("title"=>"Requiem", "time"=>1329636600),
    
);


echo json_encode($concerts)."<br>";
print_r(json_decode(json_encode($concerts), false));

echo "<hr />";

$simplexml = new SimpleXMLElement('<?xml version="1.0"?><concerts />');

$concert1 = $simplexml->addChild('concert');

$concert1->addChild("title", "The Magic Flute");
$concert1->addChild("time", 1329636600);


$concert2 = $simplexml->addChild('concert');

$concert2->addChild("title", "Four Seasons");
$concert2->addChild("time", 1329636600);

$xml = $simplexml->asXML();


$concert_list = simplexml_load_string($xml);

//var_dump($concert_list);
echo "<hr />";

foreach ($concert_list as $concert) {
    echo $concert->title . "<br />";
    echo date('g:i, jS M', (int)$concert->time);
            
}
echo "<br />";
echo $concert_list->concert[1]->title;



?>
   