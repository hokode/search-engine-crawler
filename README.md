# Google Search Engine Crawler

This PHP package allows you to scrape and parse Google Search Results.Package does not use or require GoogleAPIs integration.

## Installation
You can install search-engine-crawler with [Composer](https://getcomposer.org/).

```shell
$ composer require hokode/search-engine-crawler dev-master
```

View package on [Packagist.com](https://packagist.org/packages/hokode/search-engine-crawler)


## Simple Example
Simplest example for a standard query "mens shoes", returning the Google SERP (Search Engine Results Page) data as an array.
```php
<?php

// composer autoload
require_once __DIR__ . '/../vendor/autoload.php';


use hokode\SearchEngineCrawler\SearchEngine;

$client = new SearchEngine();

//set search engine or defaults to google.com
$client->setEngine('google.com');
//set search depth or defaults to 5
$client->setDepth(10);

$results = $client->search(['sports','news']);

print_r($results);

?>
```


## Example Response
A snapshot (shortened for brevity) of the array response returned is shown below. 
```array
Array
(
    [0] => Array
        (
            [title] => Sports News - The Indian Express
            [url] => https://indianexpress.com/section/sports/
            [rank] => 0
            [ad] => 0
            [keywords] => sports news
        )

    [1] => Array
        (
            [title] => NDTV Sports: Latest Sports News, Live Scores, Results Today's ...
            [url] => https://sports.ndtv.com/
            [rank] => 0
            [ad] => 0
            [keywords] => sports news
        )

    [2] => Array
        (
            [title] => Latest Cricket News, Live Match Scores & Sports ... - Times of India
            [url] => https://timesofindia.indiatimes.com/sports
            [rank] => 0
            [ad] => 0
            [keywords] => sports news
        )

    [3] => Array
        (
            [title] => Sky Sports - Sports News, Transfers, Scores | Watch Live Sport
            [url] => https://www.skysports.com/
            [rank] => 0
            [ad] => 0
            [keywords] => sports news
        )

    [4] => Array
        (
            [title] => Sports News, Latest Sports News, Sports News Headlines Today
            [url] => https://www.hindustantimes.com/sports
            [rank] => 0
            [ad] => 0
            [keywords] => sports news
        )

    [5] => Array
        (
            [title] => Sports News, Latest Sports Updates, Cricket World ... - India Today
            [url] => https://www.indiatoday.in/sports
            [rank] => 0
            [ad] => 0
            [keywords] => sports news
        )



)

```


## Search Engines Supported
google.* (where * can be ae,ke,com etc).

