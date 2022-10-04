<?php 

// Initialize str to a camel case string.
$str = "saveChangesInTheEditor";
// Function camelcase with parameter str to enable count each camel character in the str
function camelcase($str) {
   $count = 1;
  for ($i = 0; $i < strlen($str); $i++) {
     if ($str[$i] === strtoupper($str[$i])){
   
        $count++;
      
      }
  }
  echo  $count;
}
camelcase($str);

?>