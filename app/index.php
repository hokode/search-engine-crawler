<?php
/** sample code how to implement**/
require_once __DIR__ . '/../vendor/autoload.php';

use hokode\SearchEngineCrawler\SearchEngine;



$client = new searchEngine();

//set search engine or defaults to google.com
$client->setEngine('google.ae');
//set search depth or defaults to 5 must be an integer
$client->setDepth(5);

$results = $client->search(['sports','news']);

print_r($results);