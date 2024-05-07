<?php
$sum=0;
$start=rand(1,10);
$end=rand(20,40);
 for($i=$start;$i<=$end;$i++)
{
    if($i%2==0){
    $sum=$sum+$i;
    echo $i."\n"."<br>";
}
}
echo $start."\n"."<br>";
echo $end."\n"."<br>";
echo $sum;
?>