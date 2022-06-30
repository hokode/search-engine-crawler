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
require "vendor/autoload.php";

// create the serpwow object, passing in our API key
$serpwow = new GoogleSearchResults("API_KEY");

// set up the search parameters
$params = [
  "q" => "pizza"
];

// retrieve the search results as JSON
$result = $serpwow->json($params);

// pretty-print the JSON result
print_r($result);

?>
```

## Getting an API Key
To get a free API Key head over to [app.serpwow.com/signup](https://app.serpwow.com/signup).

## Example Response
A snapshot (shortened for brevity) of the JSON response returned is shown below. For details of all of the fields from the Google search results page that are parsed please see the [docs](https://serpwow.com/docs/search-api/results/google/overview).
```json
{
  "request_info": {
    "success": true
  },
  "search_metadata": {
    "id": "20c8e44e9cacedabbdff2d9b7e854436056d4f33",
    "engine_url": "https://www.google.com/search?q=pizza&oq=pizza&sourceid=chrome&ie=UTF-8",
    "total_time_taken": 0.14
  },
  "search_parameters": {
    "q": "pizza"
  },
  "search_information": {
    "total_results": 1480000000,
    "time_taken_displayed": 0.45,
    "query_displayed": "pizza",
    "detected_location": "Ireland"
  },
  "local_map": {
    "link": "https://www.google.com/search?q=pizza&npsic=0&rflfq=1&rldoc=1&rlha=0&rllag=53350059,-6249133,1754&tbm=lcl&sa=X&ved=2ahUKEwiC3cLZ0JLgAhXHUxUIHQrsBC4QtgN6BAgBEAQ",
    "gps_coordinates": {
      "latitude": 53.350059,
      "longitude": -6.249133,
      "altitude": 1754
    },
    "local_results": [{
        "position": 1,
        "title": "Apache Pizza Temple Bar",
        "extensions": [
          "American-style pizza-delivery chain"
        ],
        "rating": 3.6,
        "reviews": 382,
        "type": "Pizza",
        "block_position": 1
      }
    ]
  },
  "knowledge_graph": {
    "title": "Pizza",
    "type": "Dish",
    "description": "Pizza is a savory dish of Italian origin, consisting of a usually round, flattened base of leavened wheat-based dough topped with tomatoes, cheese, and various other ingredients baked at a high temperature, traditionally in a wood-fired oven.",
    "source": {
      "name": "Wikipedia",
      "link": "https://en.wikipedia.org/wiki/Pizza"
    },
    "nutrition_facts": {
      "total_fat": [
        "10 g",
        "15%"
      ],
      "sugar": [
        "3.6 g"
      ]
    }
  },
  "related_searches": [{
      "query": "apache pizza",
      "link": "https://www.google.com/search?q=apache+pizza&sa=X&ved=2ahUKEwiC3cLZ0JLgAhXHUxUIHQrsBC4Q1QIoAHoECAUQAQ"
    }
  ],
  "organic_results": [{
      "position": 1,
      "title": "10 Best Pizzas in Dublin - A slice of the city for every price point ...",
      "link": "https://www.independent.ie/life/travel/ireland/10-best-pizzas-in-dublin-a-slice-of-the-city-for-every-price-point-37248689.html",
      "domain": "www.independent.ie",
      "displayed_link": "https://www.independent.ie/.../10-best-pizzas-in-dublin-a-slice-of-the-city-for-every-p...",
      "snippet": "Oct 20, 2018 - Looking for the best pizza in Dublin? Pól Ó Conghaile scours the city for top-notch pie... whatever your budget.",
      "cached_page_link": "https://webcache.googleusercontent.com/search?q=cache:wezzRov42dkJ:https://www.independent.ie/life/travel/ireland/10-best-pizzas-in-dublin-a-slice-of-the-city-for-every-price-point-37248689.html+&cd=4&hl=en&ct=clnk&gl=ie",
      "block_position": 2
    }
  ],
  "related_places": [{
    "theme": "Best dinners with kids",
    "places": "Pinocchio Italian Restaurant - Temple Bar, Cafe Topolisand more",
    "images": [
      "https://lh5.googleusercontent.com/p/AF1QipNhGt40OpSS408waVJUHeItGrrGqImmEKzuVbBv=w152-h152-n-k-no"
    ]
  }],
  "pagination": {
    "current": "1",
    "next": "https://www.google.com/search?q=pizza&ei=fRZQXMKqL8en1fAPitiT8AI&start=10&sa=N&ved=0ahUKEwiC3cLZ0JLgAhXHUxUIHQrsBC4Q8NMDCOkB"
  }
}
```

## Searching with a location
Example of a Google query geo-locating the query as if the user were located in New York. 
```php
<?php

// composer autoload
require "vendor/autoload.php";

// create the serpwow object, passing in our API key
$serpwow = new GoogleSearchResults("API_KEY");

// set up the search parameters
$params = [
  "q" => "pizza",
  "location" => "New York,New York,United States"
];

// retrieve the search results as JSON
$result = $serpwow->json($params);

// pretty-print the JSON result
print_r($result);

?>
```

## Searching Google Places, Google Videos, Google Images, Google Shopping and Google News
Use the ``search_type`` param to search Google Places, Videos, Images and News. See the [Search API Parameters Docs](https://serpwow.com/docs/search-api/searches) for full details of the additional params available for each search type.
```php
<?php

// composer autoload
require "vendor/autoload.php";

// create the serpwow object, passing in our API key
$serpwow = new GoogleSearchResults("API_KEY");


// perform a search on Google News, just looking at blogs, ordered by date, in the last year, filtering out duplicates
$params = [
  "q" => "football news",
  "search_type" => "news",
  "news_type" => "blogs",
  "show_duplicates" => "false",
  "sort_by" => "date",
  "time_period" => "last_year"
];
// retrieve the search results as JSON
$result = $serpwow->json($params);
// pretty-print the JSON result
print_r($result);


// perform a search on Google Places for 'plumber' in London
$params = [
  "q" => "football news",
  "search_type" => "places",
  "location" => "London,England,United Kingdom"
];
$result = $serpwow->json($params);
print_r($result);


// perform an image search on Google Images for "red flowers"
$params = [
  "q" => "red flowers",
  "search_type" => "images"
];
$result = $serpwow->json($params);
print_r($result);

?>
```

## Returning results as JSON, HTML and CSV
SerpWow can return data in JSON, HTML and CSV formats using the ``json``, ``html`` and ``csv`` methods. For CSV results use the ``csv_fields`` param ([docs](https://serpwow.com/docs/search-api/reference/csv-fields)) to request specific result fields.
```php
<?php

// composer autoload
require "vendor/autoload.php";

// create the serpwow object, passing in our API key
$serpwow = new GoogleSearchResults("API_KEY");

/* 
  Set up parameters the query (q) and location parameters
  note that the "location" parameter should be a value
  returned from the Locations API.
  We'll re-use the same params for all 3 examples.
*/
$params = [
  "q" => "pizza",
  "location" => "New York,New York,United States"
];

// retrieve the search results as JSON
$result = $serpwow->json($params);
print_r($result);


// retrieve the Google search results as HTML
$result = $serpwow->html($params);
print_r($result);

// retrieve the Google search results as CSV
$result = $serpwow->csv($params);
print_r($result);

?>
```

## Requesting mobile and tablet results
To request that SerpWow renders the Google search results via a mobile or tablet browser use the ``device`` param:
```php
<?php

// composer autoload
require "vendor/autoload.php";

// create the serpwow object, passing in our API key
$serpwow = new GoogleSearchResults("API_KEY");

// set up the mobile params
$paramsMobile = [
  "q" => "pizza",
  "device" => "mobile"
];

// set up the tablet params
$paramsTablet = [
  "q" => "pizza",
  "device" => "tablet"
];

// // set up the desktop params (note we omit the 'device' param)
$paramsDesktop = [
  "q" => "pizza"
];

// retrieve the mobile search results
$result = $serpwow->json($paramsMobile);
print_r($result);

// retrieve the tablet search results
$result = $serpwow->json($paramsTablet);
print_r($result);

// retrieve the desktop search results
$result = $serpwow->json($paramsDesktop);
print_r($result);

?>
```

## Parsing results
When making a request via the ``json`` method an object is returned. You can inspect this dict to iterate, parse and store the results in your app.
```php
<?php

// composer autoload
require "vendor/autoload.php";

// create the serpwow object, passing in our API key
$serpwow = new GoogleSearchResults("API_KEY");

// set up a simple query
$params = [
  "q" => "pizza"
];

// retrieve the search results as JSON
$result = $serpwow->json($params);

// determine if the request was successful
$success = $result->request_info->success;

if ($success) {
  
  // extract the time taken and number of organic results
  $timeTaken = $result->search_metadata->total_time_taken;
  $organicResultCount = sizeof($result->organic_results);

  // print
  print_r($organicResultCount.' organic results returned in '.$timeTaken.'s');
  
}

?>
```

## Paginating results, returning up to 100 results per page
Use the ``page`` and ``num`` parameters to paginate through Google search results. The maximum number of results returned per page (controlled by the ``num`` param) is 100 (a Google-imposed limitation) for all ``search_type``'s apart from Google Places, where the maximum is 20. Here's an example.
```php
<?php

// composer autoload
require "vendor/autoload.php";

$numberOfResults = 100;

// create the serpwow object, passing in our API key
$serpwow = new GoogleSearchResults("API_KEY");

// set up a simple query
$params = [
  "q" => "pizza",
  "page" => 1,
  "num" => $numberOfResults
];

// retrieve the search results as JSON
$result = $serpwow->json($params);

// print out the number of organic results returned 
print_r(sizeof(result.organic_results).' organic results returned');

?>
```

## Search example with all parameters
```php
<?php

// composer autoload
require "vendor/autoload.php";

// create the serpwow object, passing in our API key
$serpwow = new GoogleSearchResults("API_KEY");

// set up a simple query
$params = [
  "q" => "pizza",
  "gl" => "us",
  "hl" => "en",
  "location" => "New York,New York,United States",
  "google_domain" => "google.com",
  "time_period" => "custom",
  "sort_by" => "date",
  "time_period_min" => "02/01/2018",
  "time_period_max" => "02/08/2019",
  "device" => "mobile",
  "csv_fields" => "search.q,organic_results.position,organic_results.domain",
  "page" => "1",
  "num" => "100"
];

// retrieve the search results as CSV
$result = $serpwow->csv($params);

// print out the number of organic results returned 
print_r($result);

?>
```

## Locations API Example
The [Locations API](https://serpwow.com/docs/locations-api/overview) allows you to search for SerpWow supported Google search locations. You can supply the ``full_name`` returned by the Locations API as the ``location`` parameter in a Search API query (see [Searching with a location](https://github.com/serpwow/google-search-results-python#searching-with-a-location) example above) to retrieve search results geo-located to that location.
```php
<?php

// composer autoload
require "vendor/autoload.php";

// create the serpwow object, passing in our API key
$serpwow = new GoogleSearchResults("API_KEY");

// set up a simple locations query
$params = [
  "q" => "mumbai"
];

// retrieve locations matching the query parameters as JSON
$result = $serpwow->locations($params);

// print out the locations returned 
print_r($result);

?>
```

## Account API Example
The [Account API](https://serpwow.com/docs/account-api) allows you to check your current SerpWow usage and billing information. 
```php
<?php

// composer autoload
require "vendor/autoload.php";

// create the serpwow object, passing in our API key
$serpwow = new GoogleSearchResults("API_KEY");

// get our account info
$result = $serpwow->account($params);

// print out the locations returned 
print_r($result);

?>
```

## Batches API
The [Batches API](https://serpwow.com/docs/batches-api) allows you to create, update and delete Batches on your SerpWow account (Batches allow you to save up to 15,000 Searches and have SerpWow run them on a schedule).

For more information and extensive code samples please see the [Batches API Docs](https://serpwow.com/docs/batches-api).
