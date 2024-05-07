<?php
$color=["red","green","orange","blue"];
$index=array_rand($color);
$color=$color[$index];

switch($color)
{
    case 'green':
        case 'orange':
        echo "color is green or orange";
        break;
        case 'blue':
            echo "color is blue";
            break;
            case 'red':
                echo "color is red";
                break;
                default:
                echo "color is not good";

}
?>