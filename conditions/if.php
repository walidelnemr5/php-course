<!-- <?php
$num1=1;
$num2=2;
if($num1<$num2)
{echo "num is samll";};
?> -->
<?php
$n=rand(2,200);
if(($n % 2==0)){
    echo "this number $n is even";
}
else if ($n % 2!=0) {
    echo "this number $n is odd"; 
}
?>
