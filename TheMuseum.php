<?php
 $arr1 = [12,2,3,4,5];
 
 
 function removeSmallest($arr) {
   $smallestNum = min($arr);
   $finalArray = [];
   foreach($arr as $num){
     if ($num != $smallestNum) 
     {
       array_push($finalArray, $num);
     }
   }
   
 echo $finalArray;
  
}  
 
 removeSmallest($arr1);
 