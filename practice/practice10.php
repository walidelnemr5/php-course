<?php
$arr=[1,2,3,4,5,1,2,3,4,5,6,7,8,9,1,2,3,4,5,6,7];
function getrepeat($arr,$num)
{
    $count=0;
    foreach ($arr as $value){
      if ($value==$num){
        $count++;
      }
    }
    return $count;
} 
echo getrepeat($arr,1)
?>