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


## Example Response
A snapshot of the array response returned is shown below. 
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

    [7] => Array
        (
            [0] => Shop Men Shoes & Accessories in UAE - Level Shoes
            [1] => https://www.levelshoes.com/men.html
            [2] => 0
            [3] => 0
            [4] => men's shoes
        )

    [8] => Array
        (
            [0] => Mens Shoes & Boots | Next United Arab Emirates
            [1] => https://www.next.ae/en/shop/gender-men-productaffiliation-footwear-0
            [2] => 0
            [3] => 0
            [4] => men's shoes
        )

    [9] => Array
        (
            [0] => Men's Shoes - 25-75% OFF - MENA, Worldwide, International
            [1] => https://en-global.namshi.com/men-shoes/
            [2] => 0
            [3] => 0
            [4] => men's shoes
        )

    [10] => Array
        (
            [0] => Shop Men's Shoes Online - Bloomingdale's UAE
            [1] => https://bloomingdales.ae/mens-shoes/
            [2] => 0
            [3] => 0
            [4] => men's shoes
        )

    [11] => Array
        (
            [0] => Men's Shoes | adidas UAE
            [1] => https://www.adidas.ae/en/men-shoes
            [2] => 0
            [3] => 0
            [4] => men's shoes
        )

    [12] => Array
        (
            [0] => Buy Shoes for Men Online - Brands For Less
            [1] => https://www.brandsforless.com/en-ae/men/shoes/
            [2] => 0
            [3] => 0
            [4] => men's shoes
        )

    [13] => Array
        (
            [0] => Online Shopping For Men Shoes, Clothing, Bags & More ... - 6thStreet
            [1] => https://en-ae.6thstreet.com/men.html
            [2] => 0
            [3] => 0
            [4] => men's shoes
        )

    [14] => Array
        (
            [0] => Online Shopping For Men Shoes, Clothing, Bags & More ... - 6thStreet
            [1] => https://support.google.com/websearch%3Fp%3Dws_settings_location%26hl%3Dar-AE
            [2] => 0
            [3] => 1
            [4] => men's shoes
        )

    [15] => Array
        (
            [0] => Online Shopping For Men Shoes, Clothing, Bags & More ... - 6thStreet
            [1] => https://accounts.google.com/ServiceLogin%3Fcontinue%3Dhttps://www.google.ae/search%253Fq%253Dmen%252527s%252Bshoes%2526start%253D0%26hl%3Dar
            [2] => 0
            [3] => 1
            [4] => men's shoes
        )

    [16] => Array
        (
            [0] => Men's Shoes Online Shopping Dubai, UAE - Sun & Sand Sports
            [1] => https://en-ae.sssports.com/mens/shoes
            [2] => 10
            [3] => 0
            [4] => men's shoes
        )

    [17] => Array
        (
            [0] => Men´s Shoes | Online Sale | ZARA United Arab Emirates
            [1] => https://www.zara.com/ae/en/man-shoes-l769.html
            [2] => 10
            [3] => 0
            [4] => men's shoes
        )

    [18] => Array
        (
            [0] => Shop Shoes & Sneakers for Men Online in Dubai & Abu Dhabi
            [1] => https://www.footlocker.ae/en/shop-mens/shoes/
            [2] => 10
            [3] => 0
            [4] => men's shoes
        )

    [19] => Array
        (
            [0] => Men's Shoes | Men's Casual & Formal Footwear | Burberry® Official
            [1] => https://ae.burberry.com/mens-shoes/
            [2] => 10
            [3] => 0
            [4] => men's shoes
        )

    [20] => Array
        (
            [0] => Shop Shoes Collection for Men Online in UAE
            [1] => https://ae.hm.com/en/shop-men/shop-product/shoes/
            [2] => 10
            [3] => 0
            [4] => men's shoes
        )

    [21] => Array
        (
            [0] => Men's Shoes | Hermès USA
            [1] => https://www.hermes.com/us/en/category/men/shoes/
            [2] => 10
            [3] => 0
            [4] => men's shoes
        )

    [22] => Array
        (
            [0] => Clarks Men's Shoes - Sandals, Casual, Smart Styles | Buy Online
            [1] => https://www.clarksstores.ae/pages/mens
            [2] => 10
            [3] => 0
            [4] => men's shoes
        )

    [23] => Array
        (
            [0] => New Men's Shoes. Nike AE
            [1] => https://www.nike.com/ae/w/new-mens-shoes-3n82yznik1zy7ok
            [2] => 10
            [3] => 0
            [4] => men's shoes
        )

    [24] => Array
        (
            [0] => Men's Designer Shoes on Sale - Farfetch UAE
            [1] => https://www.farfetch.com/ae/shopping/men/sale/shoes-2/items.aspx
            [2] => 10
            [3] => 0
            [4] => men's shoes
        )

    [25] => Array
        (
            [0] => Men's Designer Shoes on Sale - Farfetch UAE
            [1] => https://support.google.com/websearch%3Fp%3Dws_settings_location%26hl%3Dar-AE
            [2] => 10
            [3] => 1
            [4] => men's shoes
        )

    [26] => Array
        (
            [0] => Men's Designer Shoes on Sale - Farfetch UAE
            [1] => https://accounts.google.com/ServiceLogin%3Fcontinue%3Dhttps://www.google.ae/search%253Fq%253Dmen%252527s%252Bshoes%2526start%253D10%26hl%3Dar
            [2] => 10
            [3] => 1
            [4] => men's shoes
        )

    [27] => Array
        (
            [0] => Shop Men Footwear | Footwear at Best Prices | LuLu UAE
            [1] => https://www.luluhypermarket.com/en-ae/lifestyle-footwear-men/c/HY00217010
            [2] => 20
            [3] => 0
            [4] => men's shoes
        )

    [28] => Array
        (
            [0] => Men's Designer Shoes on Sale - Farfetch UAE
            [1] => https://www.farfetch.com/ae/shopping/men/sale/shoes-2/items.aspx
            [2] => 20
            [3] => 0
            [4] => men's shoes
        )

    [29] => Array
        (
            [0] => Shop Men Shoes Online | ALDO Shoes, UAE
            [1] => https://www.aldoshoes.me/ae/en/men.html
            [2] => 20
            [3] => 0
            [4] => men's shoes
        )

    [30] => Array
        (
            [0] => All Shoes - Men Luxury Collection | LOUIS VUITTON
            [1] => https://me.louisvuitton.com/eng-ae/men/shoes/all-shoes/_/N-t118ht95
            [2] => 20
            [3] => 0
            [4] => men's shoes
        )

    [31] => Array
        (
            [0] => Comfortable Men's Shoes and Footwear - Crocs
            [1] => https://www.crocs.com/c/men/footwear
            [2] => 20
            [3] => 0
            [4] => men's shoes
        )

    [32] => Array
        (
            [0] => Men's Shoes -Roberto Cavalli Official Website & Online Store
            [1] => https://www.robertocavalli.com/en-ca/shopping/man/shoes
            [2] => 20
            [3] => 0
            [4] => men's shoes
        )

    [33] => Array
        (
            [0] => Men's Shoes | Nordstrom
            [1] => https://www.nordstrom.com/browse/men/shoes
            [2] => 20
            [3] => 0
            [4] => men's shoes
        )

    [34] => Array
        (
            [0] => Men's Running, Casual & Athletic Shoes - New Balance
            [1] => https://www.newbalance.com/men/shoes/all-shoes/
            [2] => 20
            [3] => 0
            [4] => men's shoes
        )

    [35] => Array
        (
            [0] => Men's Shoes | Men's Dress Shoes & Casual Shoes - DSW
            [1] => https://www.dsw.com/en/us/category/mens-shoes/N-1z141hwZ1z141ju
            [2] => 20
            [3] => 0
            [4] => men's shoes
        )

    [36] => Array
        (
            [0] => Shop Men's Shoes | SKECHERS
            [1] => https://www.skechers.com/men/shoes/
            [2] => 20
            [3] => 0
            [4] => men's shoes
        )

    [37] => Array
        (
            [0] => Shop Men's Shoes | SKECHERS
            [1] => https://support.google.com/websearch%3Fp%3Dws_settings_location%26hl%3Dar-AE
            [2] => 20
            [3] => 1
            [4] => men's shoes
        )

    [38] => Array
        (
            [0] => Shop Men's Shoes | SKECHERS
            [1] => https://accounts.google.com/ServiceLogin%3Fcontinue%3Dhttps://www.google.ae/search%253Fq%253Dmen%252527s%252Bshoes%2526start%253D20%26hl%3Dar
            [2] => 20
            [3] => 1
            [4] => men's shoes
        )

    [39] => Array
        (
            [0] => Men's Shoes - Buy Shoes for Men Online in Saudi Arabia | REDTAG
            [1] => https://sa.redtag-stores.com/collections/mens-footwear
            [2] => 30
            [3] => 0
            [4] => men's shoes
        )

    [40] => Array
        (
            [0] => Men's Designer Shoes - Bally
            [1] => https://www.ballyofswitzerland.com/en/men/shoes/
            [2] => 30
            [3] => 0
            [4] => men's shoes
        )

    [41] => Array
        (
            [0] => Shoes for Men | Nordstrom Rack
            [1] => https://www.nordstromrack.com/shop/Men/Shoes
            [2] => 30
            [3] => 0
            [4] => men's shoes
        )

    [42] => Array
        (
            [0] => Men's UA Outlet Deals - Shoes - Under Armour
            [1] => https://www.underarmour.com/en-us/c/outlet/mens/shoes/
            [2] => 30
            [3] => 0
            [4] => men's shoes
        )

    [43] => Array
        (
            [0] => Men's Sneakers, Athletic, Running, & Training Shoes | Reebok US
            [1] => https://www.reebok.com/us/men-shoes
            [2] => 30
            [3] => 0
            [4] => men's shoes
        )

    [44] => Array
        (
            [0] => Men's Shoes | HUGO BOSS
            [1] => https://www.hugoboss.com/men-shoes/
            [2] => 30
            [3] => 0
            [4] => men's shoes
        )

    [45] => Array
        (
            [0] => Men's Shoes | M&S
            [1] => https://www.marksandspencer.com/l/men/mens-shoes
            [2] => 30
            [3] => 0
            [4] => men's shoes
        )

    [46] => Array
        (
            [0] => Men's Comfortable & Casual Shoes 98 Products - Hush Puppies
            [1] => https://www.hushpuppies.com/US/en/mens-shoes/
            [2] => 30
            [3] => 0
            [4] => men's shoes
        )

    [47] => Array
        (
            [0] => Find Athletic, Casual & Dress Shoes for Men - Kohl's
            [1] => https://www.kohls.com/catalog/mens-shoes.jsp%3FCN%3DGender:Mens%2BDepartment:Shoes
            [2] => 30
            [3] => 0
            [4] => men's shoes
        )

    [48] => Array
        (
            [0] => Men's Shoes - Prada
            [1] => https://www.prada.com/ww/en/men/shoes.html
            [2] => 30
            [3] => 0
            [4] => men's shoes
        )

    [49] => Array
        (
            [0] => Men's Shoes - Prada
            [1] => https://support.google.com/websearch%3Fp%3Dws_settings_location%26hl%3Dar-AE
            [2] => 30
            [3] => 1
            [4] => men's shoes
        )

    [50] => Array
        (
            [0] => Men's Shoes - Prada
            [1] => https://accounts.google.com/ServiceLogin%3Fcontinue%3Dhttps://www.google.ae/search%253Fq%253Dmen%252527s%252Bshoes%2526start%253D30%26hl%3Dar
            [2] => 30
            [3] => 1
            [4] => men's shoes
        )

    [51] => Array
        (
            [0] => Men's Shoes - Prada
            [1] => https://www.prada.com/ww/en/men/shoes.html
            [2] => 40
            [3] => 0
            [4] => men's shoes
        )

    [52] => Array
        (
            [0] => Men's Designer Shoes | Luxury Men's Shoes | JIMMY CHOO
            [1] => https://row.jimmychoo.com/en/men/shoes/
            [2] => 40
            [3] => 0
            [4] => men's shoes
        )

    [53] => Array
        (
            [0] => Men's Designer Shoes | MR PORTER
            [1] => https://www.mrporter.com/en-us/mens/shoes
            [2] => 40
            [3] => 0
            [4] => men's shoes
        )

    [54] => Array
        (
            [0] => Shoes for Men | All Men's shoes | ALDO US
            [1] => https://www.aldoshoes.com/us/en_US/men/footwear
            [2] => 40
            [3] => 0
            [4] => men's shoes
        )

    [55] => Array
        (
            [0] => Mens Shoes | Selfridges
            [1] => https://www.selfridges.com/GB/en/cat/shoes/mens/
            [2] => 40
            [3] => 0
            [4] => men's shoes
        )

    [56] => Array
        (
            [0] => Men's Shoes, Men's Leather Shoes - Cat Footwear
            [1] => https://www.catfootwear.com/US/en/mens-shoes/
            [2] => 40
            [3] => 0
            [4] => men's shoes
        )

    [57] => Array
        (
            [0] => Men's shoes · Shoes for men - El Corte Inglés
            [1] => https://www.elcorteingles.com/en/mens-fashion/shoes/
            [2] => 40
            [3] => 0
            [4] => men's shoes
        )

    [58] => Array
        (
            [0] => Men's Footwear - Upto 50% to 80% OFF on Branded Men's Shoes ...
            [1] => https://www.flipkart.com/mens-footwear/pr%3Fsid%3Dosp,cil
            [2] => 40
            [3] => 0
            [4] => men's shoes
        )

    [59] => Array
        (
            [0] => Men's shoes - Lanvin
            [1] => https://www.lanvin.com/us/men/shoes.html
            [2] => 40
            [3] => 0
            [4] => men's shoes
        )

    [60] => Array
        (
            [0] => Men's Shoes | Suede & Leather Shoes For Men | Dune UK
            [1] => https://www.dunelondon.com/mens-shoes/
            [2] => 40
            [3] => 0
            [4] => men's shoes
        )

    [61] => Array
        (
            [0] => Men's Shoes | Suede & Leather Shoes For Men | Dune UK
            [1] => https://support.google.com/websearch%3Fp%3Dws_settings_location%26hl%3Dar-AE
            [2] => 40
            [3] => 1
            [4] => men's shoes
        )

    [62] => Array
        (
            [0] => Men's Shoes | Suede & Leather Shoes For Men | Dune UK
            [1] => https://accounts.google.com/ServiceLogin%3Fcontinue%3Dhttps://www.google.ae/search%253Fq%253Dmen%252527s%252Bshoes%2526start%253D40%26hl%3Dar
            [2] => 40
            [3] => 1
            [4] => men's shoes
        )

    [63] => Array
        (
            [0] => Men's Shoes - Target
            [1] => https://www.target.com/c/men-s-shoes/-/N-5xu1w
            [2] => 50
            [3] => 0
            [4] => men's shoes
        )

    [64] => Array
        (
            [0] => Men's Shoes, Dress Shoes, Casual Shoes & More | Buckle
            [1] => https://www.buckle.com/mens/shoes
            [2] => 50
            [3] => 0
            [4] => men's shoes
        )

    [65] => Array
        (
            [0] => Men's Shoes - Smart & Casual Shoes from Jones Bootmaker
            [1] => https://www.jonesbootmaker.com/collections/mens-shoes
            [2] => 50
            [3] => 0
            [4] => men's shoes
        )

    [66] => Array
        (
            [0] => Shoes for Men - Lyst
            [1] => https://www.lyst.com/shop/mens-shoes/
            [2] => 50
            [3] => 0
            [4] => men's shoes
        )

    [67] => Array
        (
            [0] => Casual Designer Shoes & Footwear - Men - ASOS
            [1] => https://www.asos.com/men/shoes-boots-trainers/cat/%3Fcid%3D4209
            [2] => 50
            [3] => 0
            [4] => men's shoes
        )

    [68] => Array
        (
            [0] => Buy Men Shoes Online with Discount upto 50% | Myntra
            [1] => https://www.myntra.com/men-shoes
            [2] => 50
            [3] => 0
            [4] => men's shoes
        )

    [69] => Array
        (
            [0] => Luxury Shoes | Footwear for Men - DIOR
            [1] => https://www.dior.com/en_us/fashion/mens-fashion/shoes/all-shoes
            [2] => 50
            [3] => 0
            [4] => men's shoes
        )

    [70] => Array
        (
            [0] => Men's shoes online: sneakers, boots, espadrilles and slippers | YOOX
            [1] => https://www.yoox.com/us/men/shoes/shoponline
            [2] => 50
            [3] => 0
            [4] => men's shoes
        )

    [71] => Array
        (
            [0] => Men's Shoes & Boots | Formal & Casual - Hudson Shoes
            [1] => https://www.hudsonshoes.com/h-mens
            [2] => 50
            [3] => 0
            [4] => men's shoes
        )

    [72] => Array
        (
            [0] => Men's Shoes, Sneakers, Boots & Sandals, Famous Footwear
            [1] => https://www.famousfootwear.com/shoes/mens
            [2] => 50
            [3] => 0
            [4] => men's shoes
        )

    [73] => Array
        (
            [0] => Men's Shoes, Sneakers, Boots & Sandals, Famous Footwear
            [1] => https://support.google.com/websearch%3Fp%3Dws_settings_location%26hl%3Dar-AE
            [2] => 50
            [3] => 1
            [4] => men's shoes
        )

    [74] => Array
        (
            [0] => Men's Shoes, Sneakers, Boots & Sandals, Famous Footwear
            [1] => https://accounts.google.com/ServiceLogin%3Fcontinue%3Dhttps://www.google.ae/search%253Fq%253Dmen%252527s%252Bshoes%2526start%253D50%26hl%3Dar
            [2] => 50
            [3] => 1
            [4] => men's shoes
        )

    [75] => Array
        (
            [0] => Men's shoes and sneakers | hummel® online shop
            [1] => https://www.hummel.net/men/mens-shoes
            [2] => 60
            [3] => 0
            [4] => men's shoes
        )

    [76] => Array
        (
            [0] => Men's Shoes | Oxfords, Boots, Sneakers & More - Cole Haan
            [1] => https://www.colehaan.com/mens-shoes
            [2] => 60
            [3] => 0
            [4] => men's shoes
        )

    [77] => Array
        (
            [0] => Men's Shoes | Kenneth Cole
            [1] => https://www.kennethcole.com/collections/men-shoes
            [2] => 60
            [3] => 0
            [4] => men's shoes
        )

    [78] => Array
        (
            [0] => Armani Exchange Men's Shoes - Sneakers, Flip Flops, Boots | A|X ...
            [1] => https://www.armaniexchange.com/us/men/shoes
            [2] => 60
            [3] => 0
            [4] => men's shoes
        )

    [79] => Array
        (
            [0] => Shop All Macy's Mens Shoes - Mens Footwear - Macy's
            [1] => https://www.macys.com/shop/mens-clothing/shop-all-mens-footwear%3Fid%3D55822
            [2] => 60
            [3] => 0
            [4] => men's shoes
        )

    [80] => Array
        (
            [0] => Men's Shoes - Zappos.com
            [1] => https://www.zappos.com/c/mens-shoes
            [2] => 60
            [3] => 0
            [4] => men's shoes
        )

    [81] => Array
        (
            [0] => Men's Shoes: Sneakers, Boots, Sandals & Footwear | Kith
            [1] => https://kith.com/collections/mens-footwear
            [2] => 60
            [3] => 0
            [4] => men's shoes
        )

    [82] => Array
        (
            [0] => Men's Running Shoes - Brooks Running
            [1] => https://www.brooksrunning.com/en_us/all-mens-running-shoes/
            [2] => 60
            [3] => 0
            [4] => men's shoes
        )

    [83] => Array
        (
            [0] => Men's Shoes | Men's Casual & Dress Shoes - Allen Edmonds
            [1] => https://www.allenedmonds.com/mens-shoes
            [2] => 60
            [3] => 0
            [4] => men's shoes
        )

    [84] => Array
        (
            [0] => Clarks Shoes & Sandals in UAE Online - Jashanmal
            [1] => https://www.jashanmal.com/collections/clarks
            [2] => 60
            [3] => 0
            [4] => men's shoes
        )

    [85] => Array
        (
            [0] => Clarks Shoes & Sandals in UAE Online - Jashanmal
            [1] => https://support.google.com/websearch%3Fp%3Dws_settings_location%26hl%3Dar-AE
            [2] => 60
            [3] => 1
            [4] => men's shoes
        )

    [86] => Array
        (
            [0] => Clarks Shoes & Sandals in UAE Online - Jashanmal
            [1] => https://accounts.google.com/ServiceLogin%3Fcontinue%3Dhttps://www.google.ae/search%253Fq%253Dmen%252527s%252Bshoes%2526start%253D60%26hl%3Dar
            [2] => 60
            [3] => 1
            [4] => men's shoes
        )

    [87] => Array
        (
            [0] => Men's Shoes | John Lewis & Partners
            [1] => https://www.johnlewis.com/browse/men/mens-shoes/_/N-7onz
            [2] => 70
            [3] => 0
            [4] => men's shoes
        )

    [88] => Array
        (
            [0] => Men's - Native Shoes
            [1] => https://www.nativeshoes.com/mens
            [2] => 70
            [3] => 0
            [4] => men's shoes
        )

    [89] => Array
        (
            [0] => Men's Shoes - Low, High Top & Boot Styles. Converse.com
            [1] => https://www.converse.com/shop/mens-shoes
            [2] => 70
            [3] => 0
            [4] => men's shoes
        )

    [90] => Array
        (
            [0] => Men's Shoes | Oxfords, Boots, Sneakers & More - Cole Haan
            [1] => https://www.colehaan.com/mens-shoes
            [2] => 70
            [3] => 0
            [4] => men's shoes
        )

    [91] => Array
        (
            [0] => Men's Designer Footwear & Shoes - Ralph Lauren
            [1] => https://www.ralphlauren.com/men-footwear-shoes
            [2] => 70
            [3] => 0
            [4] => men's shoes
        )

    [92] => Array
        (
            [0] => Armani Exchange Men's Shoes - Sneakers, Flip Flops, Boots | A|X ...
            [1] => https://www.armaniexchange.com/us/men/shoes
            [2] => 70
            [3] => 0
            [4] => men's shoes
        )

    [93] => Array
        (
            [0] => Men's Shoes | Kenneth Cole
            [1] => https://www.kennethcole.com/collections/men-shoes
            [2] => 70
            [3] => 0
            [4] => men's shoes
        )

    [94] => Array
        (
            [0] => Men's Shoes ⋅ Men's Trainers, Casual Shoes, Leather Shoes | Aigle
            [1] => https://www.aigle.com/eu/en/men-shoes
            [2] => 70
            [3] => 0
            [4] => men's shoes
        )

    [95] => Array
        (
            [0] => Men's shoes and sneakers | hummel® online shop
            [1] => https://www.hummel.net/men/mens-shoes
            [2] => 70
            [3] => 0
            [4] => men's shoes
        )

    [96] => Array
        (
            [0] => Luxury Shoes | Footwear for Men - DIOR
            [1] => https://www.dior.com/en_us/fashion/mens-fashion/shoes/all-shoes
            [2] => 70
            [3] => 0
            [4] => men's shoes
        )

    [97] => Array
        (
            [0] => Luxury Shoes | Footwear for Men - DIOR
            [1] => https://support.google.com/websearch%3Fp%3Dws_settings_location%26hl%3Dar-AE
            [2] => 70
            [3] => 1
            [4] => men's shoes
        )

    [98] => Array
        (
            [0] => Luxury Shoes | Footwear for Men - DIOR
            [1] => https://accounts.google.com/ServiceLogin%3Fcontinue%3Dhttps://www.google.ae/search%253Fq%253Dmen%252527s%252Bshoes%2526start%253D70%26hl%3Dar
            [2] => 70
            [3] => 1
            [4] => men's shoes
        )

    [99] => Array
        (
            [0] => Men's Shoes | Top brands | Hot Deals - Central Online
            [1] => https://www.central.co.th/en/men/shoes
            [2] => 80
            [3] => 0
            [4] => men's shoes
        )

    [100] => Array
        (
            [0] => Men's Shoes - Zappos.com
            [1] => https://www.zappos.com/c/mens-shoes
            [2] => 80
            [3] => 0
            [4] => men's shoes
        )

    [101] => Array
        (
            [0] => Men's Shoes: Sandals, Sneakers & More - American Eagle
            [1] => https://www.ae.com/intl/en/c/men/shoes/cat4840024
            [2] => 80
            [3] => 0
            [4] => men's shoes
        )

    [102] => Array
        (
            [0] => Men shoes - John Lobb
            [1] => https://www.johnlobb.com/en_gb/mens-shoes
            [2] => 80
            [3] => 0
            [4] => men's shoes
        )

    [103] => Array
        (
            [0] => Men's Shoes | John Lewis & Partners
            [1] => https://www.johnlewis.com/browse/men/mens-shoes/_/N-7onz
            [2] => 80
            [3] => 0
            [4] => men's shoes
        )

    [104] => Array
        (
            [0] => Luxury Shoes | Footwear for Men - DIOR
            [1] => https://www.dior.com/en_us/fashion/mens-fashion/shoes/all-shoes
            [2] => 80
            [3] => 0
            [4] => men's shoes
        )

    [105] => Array
        (
            [0] => Shop Men's Shoes | Men's Casual Shoes & Boots - Born Shoes
            [1] => https://www.bornshoes.com/en/shop-mens-shoes/
            [2] => 80
            [3] => 0
            [4] => men's shoes
        )

    [106] => Array
        (
            [0] => LLOYD Shoes: Men's Shoes & Accessories for Discerning Men
            [1] => https://www.lloyd.com/wd/en/men/
            [2] => 80
            [3] => 0
            [4] => men's shoes
        )

    [107] => Array
        (
            [0] => Men's Designer Shoes, Boots & Dress Shoes | Brooks Brothers
            [1] => https://www.brooksbrothers.com/mens/shoes
            [2] => 80
            [3] => 0
            [4] => men's shoes
        )

    [108] => Array
        (
            [0] => Shoes for Men | Dolce&Gabbana - Dolce & Gabbana
            [1] => https://www.dolcegabbana.com/en/men/shoes/
            [2] => 80
            [3] => 0
            [4] => men's shoes
        )

    [109] => Array
        (
            [0] => Shoes for Men | Dolce&Gabbana - Dolce & Gabbana
            [1] => https://support.google.com/websearch%3Fp%3Dws_settings_location%26hl%3Dar-AE
            [2] => 80
            [3] => 1
            [4] => men's shoes
        )

    [110] => Array
        (
            [0] => Shoes for Men | Dolce&Gabbana - Dolce & Gabbana
            [1] => https://accounts.google.com/ServiceLogin%3Fcontinue%3Dhttps://www.google.ae/search%253Fq%253Dmen%252527s%252Bshoes%2526start%253D80%26hl%3Dar
            [2] => 80
            [3] => 1
            [4] => men's shoes
        )

    [111] => Array
        (
            [0] => Mens Shoes | Brown Thomas
            [1] => https://www.brownthomas.com/men/shoes/
            [2] => 90
            [3] => 0
            [4] => men's shoes
        )

    [112] => Array
        (
            [0] => Men's Shoes and Footwear | The North Face
            [1] => https://www.thenorthface.com/shop/shoes-mens
            [2] => 90
            [3] => 0
            [4] => men's shoes
        )

    [113] => Array
        (
            [0] => Shoes For Men | COACH®
            [1] => https://www.coach.com/shop/men/shoes/view-all
            [2] => 90
            [3] => 0
            [4] => men's shoes
        )

    [114] => Array
        (
            [0] => Men's Shoes - Bruno Magli
            [1] => https://www.brunomagli.com/collections/mens-shoes
            [2] => 90
            [3] => 0
            [4] => men's shoes
        )

    [115] => Array
        (
            [0] => Men's Running Shoes (518) - ASICS
            [1] => https://www.asics.com/us/en-us/mens-running-shoes/c/aa10201000/
            [2] => 90
            [3] => 0
            [4] => men's shoes
        )

    [116] => Array
        (
            [0] => Men's Shoes Latest Styles | 6pm
            [1] => https://www.6pm.com/men-shoes/CK_XAcABAuICAgEY.zso
            [2] => 90
            [3] => 0
            [4] => men's shoes
        )

    [117] => Array
        (
            [0] => Men's Shoes for Sale - eBay
            [1] => https://www.ebay.com/b/Mens-Shoes/93427/bn_61999
            [2] => 90
            [3] => 0
            [4] => men's shoes
        )

    [118] => Array
        (
            [0] => Shoes For Men | Men's Dress Shoes & Men's Casual Shoes
            [1] => https://www.florsheim.com/shop/styles/shoes/viewAll/page0.html
            [2] => 90
            [3] => 0
            [4] => men's shoes
        )

    [119] => Array
        (
            [0] => Men's Shoes - Dillard's
            [1] => https://www.dillards.com/c/shoes-men-shoes
            [2] => 90
            [3] => 0
            [4] => men's shoes
        )

    [120] => Array
        (
            [0] => Men's Shoes | All Men's Espadrilles, Sneakers, Slip Ons, and Boots
            [1] => https://www.toms.com/us/men/shoes
            [2] => 90
            [3] => 0
            [4] => men's shoes
        )

    [121] => Array
        (
            [0] => Men's Shoes | All Men's Espadrilles, Sneakers, Slip Ons, and Boots
            [1] => https://support.google.com/websearch%3Fp%3Dws_settings_location%26hl%3Dar-AE
            [2] => 90
            [3] => 1
            [4] => men's shoes
        )

    [122] => Array
        (
            [0] => Men's Shoes | All Men's Espadrilles, Sneakers, Slip Ons, and Boots
            [1] => https://accounts.google.com/ServiceLogin%3Fcontinue%3Dhttps://www.google.ae/search%253Fq%253Dmen%252527s%252Bshoes%2526start%253D90%26hl%3Dar
            [2] => 90
            [3] => 1
            [4] => men's shoes
        )

    [123] => Array
        (
            [0] => Shoes For Men | Men's Dress Shoes & Men's Casual Shoes
            [1] => https://www.florsheim.com/shop/styles/shoes/viewAll/page0.html
            [2] => 100
            [3] => 0
            [4] => men's shoes
        )

    [124] => Array
        (
            [0] => Men's Shoes - Dillard's
            [1] => https://www.dillards.com/c/shoes-men-shoes
            [2] => 100
            [3] => 0
            [4] => men's shoes
        )

    [125] => Array
        (
            [0] => Men's Shoes | All Men's Espadrilles, Sneakers, Slip Ons, and Boots
            [1] => https://www.toms.com/us/men/shoes
            [2] => 100
            [3] => 0
            [4] => men's shoes
        )

    [126] => Array
        (
            [0] => Men's Shoes | Call It Spring Canada
            [1] => https://www.callitspring.com/ca/en/men/footwear
            [2] => 100
            [3] => 0
            [4] => men's shoes
        )

    [127] => Array
        (
            [0] => Haband Online Footwear for Men - Shoes
            [1] => https://www.haband.com/search/shoes/mens-shoes/%3Fcategory%3D/shoes/mens-shoes/
            [2] => 100
            [3] => 0
            [4] => men's shoes
        )

    [128] => Array
        (
            [0] => Men's Shoes | Sneakers, Athletic, Boots & Sandals - JCPenney
            [1] => https://www.jcpenney.com/g/shoes/mens-shoes%3Fid%3Dcat100300057
            [2] => 100
            [3] => 0
            [4] => men's shoes
        )

    [129] => Array
        (
            [0] => Buy Men| Shoes and Accessories for Men Online - Bata
            [1] => https://www.bata.in/men/
            [2] => 100
            [3] => 0
            [4] => men's shoes
        )

    [130] => Array
        (
            [0] => Mens Shoes - Walmart.com
            [1] => https://www.walmart.com/browse/clothing/mens-shoes/5438_1045804_1045807
            [2] => 100
            [3] => 0
            [4] => men's shoes
        )

    [131] => Array
        (
            [0] => Explore casual men's shoes | Official ECCO® store
            [1] => https://us.ecco.com/men/shoes/casual-shoes/
            [2] => 100
            [3] => 0
            [4] => men's shoes
        )

    [132] => Array
        (
            [0] => Shoes For Men - Footwear - Tata CLiQ
            [1] => https://www.tatacliq.com/men/c-msh1311
            [2] => 100
            [3] => 0
            [4] => men's shoes
        )

    [133] => Array
        (
            [0] => Shoes For Men - Footwear - Tata CLiQ
            [1] => https://support.google.com/websearch%3Fp%3Dws_settings_location%26hl%3Dar-AE
            [2] => 100
            [3] => 1
            [4] => men's shoes
        )

    [134] => Array
        (
            [0] => Shoes For Men - Footwear - Tata CLiQ
            [1] => https://accounts.google.com/ServiceLogin%3Fcontinue%3Dhttps://www.google.ae/search%253Fq%253Dmen%252527s%252Bshoes%2526start%253D100%26hl%3Dar
            [2] => 100
            [3] => 1
            [4] => men's shoes
        )

    [135] => Array
        (
            [0] => 
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


