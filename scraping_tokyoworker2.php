<?php

$html = file_get_contents("./output.txt");

// echo $html;

//$domDocument = new DOMDocument();
//$domDocument->loadHTML($html);
//$xmlString = $domDocument->saveXML();
//file_put_contents("./output2.txt", $xmlString);
//$xml = simplexml_load_string($xmlString);

// $xml = simplexml_load_string($html);
// echo "t";

// var_dump($xmlString);
#echo $html;

$ary = [];
preg_match_all('/<span class="m-mainlist-item__ttl">(.*)<\/span>/', $html, $ary);

var_dump($ary);
