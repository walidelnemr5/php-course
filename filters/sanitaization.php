<?php
$string="walid <script>alert('hello me')</script><h1> elnemr</h1>";
echo $string;
echo "<hr>";
$string="walid <script>alert('hello me')</script><h1> elnemr</h1>";
print_r( filter_var($string,FILTER_SANITIZE_STRING));
echo "<hr>";
$str="walid وليد elnemr";
print_r( filter_var($str,FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH));
echo "<hr>";
$str1="walid وليد elnemr";
print_r( filter_var($str1,FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_LOW));
echo "<hr>";
$email="walid@gmail.com";
print_r( filter_var($email,FILTER_SANITIZE_EMAIL));
echo "<hr>";
$email1="wali<>d@gmail.com";
echo $email1;
echo "<br>";
print_r( filter_var($email1,FILTER_SANITIZE_EMAIL));
echo "<hr>";
$url="https://www.facebook.com";
print_r( filter_var($url,FILTER_SANITIZE_URL));
echo "<hr>";
$url1="https://www.facebook.com";
print_r( filter_var($url1,FILTER_SANITIZE_URL));
echo "<hr>";
$x=50;
var_dump (filter_var($x,FILTER_VALIDATE_INT,
["options"=>["min_range"=>20,"max_range"=>60]]));
echo "<hr>";
$str2= 20 ;
var_dump (filter_var($str2,FILTER_VALIDATE_INT,
["flags"=>FILTER_NULL_ON_FAILURE,
"options"=>["min_range"=>20,"max_range"=>60]]));
?>





