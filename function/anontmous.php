<!-- <?php
$function=function (){
echo "walid";
};
$function();
?> -->
<?php
$total=[10,20,30,40,50];
 $new_array=array_map(function($price){
    return $price+10;
 },$total);
 echo "<pre>";
 print_r($new_array);
 ?>
