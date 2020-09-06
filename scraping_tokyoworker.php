<?php

$html = file_get_contents("./output.txt");

// echo $html;

$domDocument = new DOMDocument();
$domDocument->loadHTML($html);
$xmlString = $domDocument->saveXML();
file_put_contents("./output2.txt", $xmlString);
$xml = simplexml_load_string($xmlString);

// $xml = simplexml_load_string($html);
// echo "t";

// var_dump($xmlString);
var_dump($xml);

