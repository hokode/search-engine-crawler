<?php
/** sample code how to implement**/
require_once __DIR__ . '/../vendor/autoload.php';

use hokode\SearchEngineCrawler\SearchEngine;



$client = new searchEngine();

//set search engine or defaults to google.com
$client->setEngine('google.com');
//set search depth or defaults to 5
$client->setDepth(10);

//pass the key words
$str = "";
$arrstr = explode(" ",$str);

$results = $client->search($arrstr);

print_r($results);