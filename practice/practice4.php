<?php
$arr=[6,5,8,9,1,-2,-9,-6];
$small=$arr[0];
foreach
($arr as $value)
{
    if($small>$value)
    {$small=$value;}
}
echo $small;
?>