<?php 

function flatten($array) {
    $return = array();
    while(count($array)) {
        $value = array_shift($array);
        if(is_array($value))
            foreach($value as $sub)
                $array[] = $sub;
        else
            $return[] = $value;
    }
    return $return;
}

function dirToArray($dir) { 
   
   $result = array(); 

   $cdir = scandir($dir); 
   foreach ($cdir as $key => $value) 
   { 
      if (!in_array($value,array(".",".."))) 
      { 
         if (is_dir($dir . DIRECTORY_SEPARATOR . $value)) 
         { 
            $result[$value] = dirToArray($dir . DIRECTORY_SEPARATOR . $value); 
         } 
         else 
         { 
            $result[] = $dir. DIRECTORY_SEPARATOR .$value; 
         } 
      } 
   } 
   
   return $result; 
} 

function fileToArray($file_path) { 
   $result = array(); 
	$content = file_get_contents($file_path);
	//var_dump($content);
   preg_match_all('/\$_\[\'(.*)\'][\s\t]*=[\s\t]*\'(.*)\';/i',$content,$matches);

   for($i=0;$i<count($matches[1]);$i++){
	$result[$matches[1][$i]] = $matches[2][$i];   
   }
//var_dump($result);
	return $result; 
	}



function mapTagsToArray($filesArray) { 
	foreach($filesArray as $key => $fileArray){
				$temp = fileToArray($fileArray);
				//var_dump($temp);
				$res[$fileArray][] = $temp;
	}
	return $res;
}
$filesArray = flatten(dirToArray("C:\\wamp64\\www\\opencart\\upload\\catalog\\language\\he-temp"));
//var_dump(mapTagsToArray($filesArray));
sendYandexRequest("Warning: No Shipping options are available. Please <a href=\"%s\">contact us</a> for assistance!");

function sendYandexRequest($text){
	$dest_language = "he";
	$format = "html";
	$key = "trnsl.1.1.20170427T150420Z.7fc4518c4dddedad.782e947ac8aed915a77498e4dbc356b9a0a191e1";
	$base_path = "https://translate.yandex.net/api/v1.5/tr.json/translate";
	$url = $base_path."?".http_build_query(array("key"=>$key,"text"=>$text,"lang"=>$dest_language,"format"=>$format));
	$res  = json_decode(file_get_contents($url),TRUE);
	echo urlencode($res["text"][0]);
}