<?php
function gettotal(...$total)
{
    return array_sum($total);

}
echo gettotal(5,6,7,30);
?>