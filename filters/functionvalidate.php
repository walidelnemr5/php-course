<?php

if 
($_SERVER['REQUEST_METHOD']=="POST")
{ 
    $user_name= trim(filter_input(INPUT_POST,"user_name",FILTER_SANITIZE_STRING));
    $user_email=trim(filter_input(INPUT_POST,"user_email",FILTER_SANITIZE_EMAIL));
    if(requireInput($user_name))
    {
        echo " name required";
        header("location:functionvalidate1.php");}
    elseif(minInput($user_name,3))
    {
        echo "name must be more than 3 chars";
        die();}
    elseif(maxInput($user_name,20))
    {
        echo "name must be less than 20 chars";
        die();}
    if(requireInput($user_email))
    {
        echo " email required";
        die();}
    elseif(emailInput($user_email))
    {
        echo "please type valid email";
        die();}
    echo $user_name."<br>";
    echo $user_email;} 
else 
{
 echo "not supported method";}
function requireInput($input){
    if(empty($input)){
        return true; }
    else{
        return false;}
}
function minInput($input,$lenght){
    if(strlen($input)<$lenght){
       return true;}
    else{
        return false;}
}
function maxInput($input,$lenght){
    if(strlen($input)>$lenght){
       return true;}
    else{
        return false;}
}
function emailInput($email){
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
       return true;}
    else{
        return false;}
}
?>