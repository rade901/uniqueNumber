<?php
function writeMsg() {
    $array = array(1,1,1,2,1,1,3,5) ;
    unset($array[0]);
    $unique_array = array(); // unique array
    foreach($array as $key=>$value){
      if(!in_array($value,$unique_array)){
           $unique_array[$key] = $value;
      }
      }
      array_shift($unique_array);
      echo "unique values are:-<br/>";
      echo implode(',',$unique_array);
    
      
    }    
  
  writeMsg(); // call the function
 