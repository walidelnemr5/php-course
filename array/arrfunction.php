<?php
$arr=["walid","ahmed",15,20];
array_unshift($arr,"ali");
echo ("<pre>");
print_r($arr);
echo ("<hr>");
array_push($arr,22);
echo ("<pre>");
print_r($arr);
echo ("<hr>");
$arr[2]="mazen";
echo ("<pre>");
print_r($arr);
echo ("<hr>");
unset($arr[3]);
echo ("<pre>");
print_r($arr);
echo ("<hr>");
$i=count($arr)-1;
unset($arr[$i]);

echo ("<pre>");
print_r($arr);

?>