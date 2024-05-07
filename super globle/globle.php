<?php
$GLOBALS;
$x=50;
function getx()
{
    $GLOBALS["x"]=100;
    // $x=20;
    echo  $GLOBALS["x"]; 
}
getx();
echo "<br>";
echo $x;


