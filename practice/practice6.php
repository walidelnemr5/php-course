<?php
for($i=1;$i<=100;$i++)
{
    if($i%5==0 && $i%3==0){echo $i." five"." three"."<br>";}
    elseif($i%3==0){echo $i." three"."<br>";}
    elseif ($i%5==0){echo $i." five"."<br>";}
    else {echo $i."<br>";}
   
} 
?>