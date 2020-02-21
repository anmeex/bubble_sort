<?php
function bubblesort($x){
  
   //$x=array(7,1,8,5,3,9,8);
   $c=count($x)-1;
   //echo $c;
   
   
    for($i=$c;$i>=1;$i--){
      for($j=$i-1;$j>=0;$j--){    
      
     if($x[$i]<$x[$j]){
     list($x[$i],$x[$j])=array($x[$j],$x[$i]);
    
      }
       
     }
     
    }
    
  print_r($x);
  
}
$x=array(5,8,6,4,3);
bubblesort($x);
  

?>


