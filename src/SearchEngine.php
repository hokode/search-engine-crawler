<?php 

namespace hokode\SearchEngineCrawler;

class SearchEngine
{
  
   //this function will get the search engine defined by user or default to google.com if none is set
   public function setEngine($str='google.com'){
         global $searchEngine;
         $searchEngine = $str;
      return $searchEngine;
   }
   
   //this function gets the set Search Engine
   public function getSearchEngine(){
        global $searchEngine;
      return $searchEngine;
   }


   //this function will set the serch depth or default to 5 if not set
   public function setDepth($depth=5){
       global $searchDepth;
       $searchDepth = $depth;
      return $searchDepth;
   }
   
   //this function gets the set search Depth
   public function getsearchDepth(){
       global $searchDepth;
      return $searchDepth;
   }


   /**This function will search as per the array of keywords supplied**/
   public function search($keywords){
     
      $searchEngine = $this->getSearchEngine();
      $searchDepth = $this->getsearchDepth();
      

      //initialise query
      $query ="";

    //check if $keyywords is an array
       if(is_array($keywords)){
        //its an array get values and generate query search string
            $arrkeyslen = count($keywords);

            //loop through creating the search query 
               for ($x = 0; $x <= $arrkeyslen - 1; $x++) {
                   $query .= $keywords[$x]."+";
               }

                //remove the last + from the $query string
               $query = substr($query, 0, -1);

       }else{
        //not an array just one keyword supplied query has only one keyword
        $query = $keywords;
       }

            //Now loop through getting the content 
            $content = '';

            for ($x = 0; $x <= $searchDepth; $x++) {
               $pages = $x * 10;
               //get content
               $content .= $this->getContent($searchEngine,$pages,$query); 
            }
           
            //lets get our content into an array
            $results = array_map(
               function ($substr) {
                   return explode('[]', $substr);
               }, 
               explode('}', $content)
           );
           

    return $results;
   }



   /**This function crawl the set engines and get the content**/
   public function getContent($searchEngine,$pages,$searchString){
      $content ='';
      
      //generate the url
      $url = "https://www.".$searchEngine."/search?q=".$searchString."&start=".$pages."";

      $curl = curl_init();
      curl_setopt($curl, CURLOPT_URL, $url);
      //curl_setopt($curl, CURLOPT_FOLLOWLOCATION, false);
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
      $response = curl_exec($curl);
      curl_close($curl);

         $domResults = new simple_html_dom();
         $domResults->load($response);

         //flag support links
          $blacklist = array('157','1605');

         foreach($domResults->find('a[href^=/url?]') as $link){

           //lets work on the sections
           $doc = new \DOMDocument;
           $doc->loadHTML($link->outertext);
           $titles = $doc->getElementsByTagName('h3');
           //$descriptions = $doc->getElementsByTagName('span dir');
           
           if (!$titles->count()){
             $isAD = 1;
           }else{
             $isAD = 0;
             $title = $titles->item(0)->nodeValue;
           }


            $acc_links = strtok($link->plaintext,'&#8249;');
            //$description =$link->outertext;
            $linkurl = strtok(str_replace("/url?q=","", $link->href),'&');
            $keywords = str_replace('+', " ", $searchString);
            
            //lets ignore the support links
            if (in_array($acc_links, $blacklist)){
               //blacklisted ignore
            }else{
               $content .= $title.'[]'.$linkurl.'[]'.$pages.'[]'.$isAD.'[]'.$keywords.'}';
            }
         }

    return $content;
   }
}

