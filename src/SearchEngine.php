<?php 

namespace hokode\SearchEngineCrawler;

use hokode\myErrorHandling\Exceptions;

class SearchEngine
{
  
   //this function will get the search engine defined by user or default to google.com if none is set
   public function setEngine($str='google.com'){
         global $searchEngine;

          //check if str is empty
       if(empty($str)){
         throw new Exceptions("Search Engine value cannot be empty");
       }else{
         $searchEngine = $str;
       }

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
       //check if depth is an integer
       if(is_int($depth) && $depth > 0){
         $searchDepth = $depth;
       }else{
          throw new Exceptions("Depth must be an integer and greater than zero.");
       }

       
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
        //$query = $keywords; we need $keywords to come in as an array.
           throw new Exceptions("Keywords must be provided and as an array");      
       }

            //Now loop through getting the content 
            $content = '';

            for ($x = 0; $x <= $searchDepth - 1; $x++) {
               $pages = $x * 10;
               //get content
               $content .= $this->getContent($searchEngine,$pages,$query); 
            }
           
            
            //the unawanted } at the end of the string adding an empty array value :-)
            $content = substr($content, 0, -1);
           
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

         $domResults = new \simple_html_dom();
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
             $title="";
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
               //ensure we actually have content
               
                  $content .= $title.'[]'.$linkurl.'[]'.$pages.'[]'.$isAD.'[]'.$keywords.'}';
                        
            }
         }

    return $content;
   }
}

