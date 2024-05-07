<?php
function fillcolor(&$color)
{
    $color="green";
    return "color is $color";
}
$color="red";
echo fillcolor($color);
echo "<br>";
echo $color;
?>