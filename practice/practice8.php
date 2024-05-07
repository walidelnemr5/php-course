 <?php
function getprime($num){
    for ($i=2;$i<$num;$i++)
    {
        if($num % $i==0){
            return 0;
        } 
    }
    return 1;
}
if( getprime(10)){
    echo "eeee";
}
else {
    echo "dddd";
}
?> 

