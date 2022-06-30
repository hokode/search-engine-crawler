# Google Search Engine Crawler

This PHP package allows you to scrape and parse Google Search Results.

## Installation
You can install search-engine-crawler with [Composer](https://getcomposer.org/).

```shell
$ composer require hokode/search-engine-crawler
```

View package on [Packagist.com](https://packagist.org/packages/hokode/search-engine-crawler)


## Simple Example
Simplest example for a standard query "men's shoes", returning the Google SERP (Search Engine Results Page) data as an array.
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

//pass the key words
$str = "men's shoes";
$arrstr = explode(" ",$str);

$results = $client->search($arrstr);

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
            [0] => Men's Shoes UAE | 30-75% OFF | Dubai, Abu Dhabi - Noon
            [1] => https://www.noon.com/uae-en/fashion/men-31225/shoes-17421/
            [2] => 0
            [3] => 0
            [4] => men's shoes
        )

    [1] => Array
        (
            [0] => Men's Shoes UAE | 30-75% OFF | Dubai, Abu Dhabi - Noon
            [1] => https://www.noon.com/uae-en/fashion/men-31225/shoes-17421/formal-shoes-20899/
            [2] => 0
            [3] => 1
            [4] => men's shoes
        )

    [2] => Array
        (
            [0] => Men's Shoes UAE | 30-75% OFF | Dubai, Abu Dhabi - Noon
            [1] => https://www.noon.com/uae-en/fashion/men-31225/shoes-17421/nike/
            [2] => 0
            [3] => 1
            [4] => men's shoes
        )

    [3] => Array
        (
            [0] => Men's Shoes UAE | 30-75% OFF | Dubai, Abu Dhabi - Noon
            [1] => https://www.noon.com/uae-en/fashion/men-31225/shoes-17421/adidas/
            [2] => 0
            [3] => 1
            [4] => men's shoes
        )

    [4] => Array
        (
            [0] => Men's Shoes UAE | 30-75% OFF | Dubai, Abu Dhabi - Noon
            [1] => https://www.noon.com/uae-en/fashion/men-31225/shoes-17421/vans/
            [2] => 0
            [3] => 1
            [4] => men's shoes
        )

    [5] => Array
        (
            [0] => Shop Men's Shoes, Bags & More Online | Shoemart UAE
            [1] => https://www.shoemartstores.com/ae/en/department/men
            [2] => 0
            [3] => 0
            [4] => men's shoes
        )

    [6] => Array
        (
            [0] => Buy Shoes For Men online at Best Prices in UAE - Amazon.ae
            [1] => https://www.amazon.ae/Men-Shoes/b%3Fie%3DUTF8%26node%3D11995876031
            [2] => 0
            [3] => 0
            [4] => men's shoes
        )

)

```

## Array Fields Explained 

```array
            [0] => Explore casual men's shoes | Official ECCO® store <----------------------title
            [1] => https://us.ecco.com/men/shoes/casual-shoes/ <---------------------- url
            [2] => 100 <---------------------- ranking
            [3] => 0 <----------------------Ad, 0 No, 1 Yes
            [4] => men's shoes <-------------------- keywords

?>
```


