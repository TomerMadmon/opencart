<?php 
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
		if(is_array($fileArray)){
			foreach($fileArray as $key2 => $fileArray2){
				$temp = fileToArray($fileArray2);
				//var_dump($temp);
				$res[$fileArray2][] = $temp;
			}
		}else{
			$res[$fileArray2][] = fileToArray($fileArray2);
		}
			
	}
	return $res;
}
$filesArray = dirToArray("C:\\wamp64\\www\\opencart\\upload\\catalog\\language\\he-temp");
var_dump(mapTagsToArray($filesArray));