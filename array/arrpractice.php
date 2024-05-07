<?php
$new=[1,2,3];
$old=[4,5,6];
echo count($old);
$new = array_merge($old, $new);


echo("<hr>");
echo ("<pre>");
print_r($old);
echo("<hr>");
echo ("<pre>");
print_r($new);
echo("<hr>");


?>