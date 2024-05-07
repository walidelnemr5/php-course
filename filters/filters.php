<?php
echo "<pre>";
print_r(filter_list());
echo "<hr>";
$x=60;
print_r( filter_var($x,FILTER_VALIDATE_INT));
echo "<hr>";
$email="walid@gmail.com";
print_r( filter_var($email,FILTER_VALIDATE_EMAIL));
echo "<hr>";
$url="https://www.facebook.com";
print_r( filter_var($url,FILTER_VALIDATE_URL));
echo "<hr>";
$ip="192.0.2.146";
print_r( filter_var($ip,FILTER_VALIDATE_IP));
echo "<hr>";
$mac="00-B0-D0-63-C2-26";
print_r( filter_var($mac,FILTER_VALIDATE_MAC));
?>





