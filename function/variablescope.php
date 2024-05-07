<?php
$x=5;
function getx(){
   global $x;
    echo $x;
} 
echo $x;
echo "<br>";
getx();
?>