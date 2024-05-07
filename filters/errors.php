<?php
$errors=[];
if 
($_SERVER['REQUEST_METHOD']=="POST")
{ 
    $user_name= trim(filter_input(INPUT_POST,"user_name",FILTER_SANITIZE_STRING));
    $user_email=trim(filter_input(INPUT_POST,"user_email",FILTER_SANITIZE_EMAIL));
    if(requireInput($user_name))
    {
        $errors[]=" name required";
        }
    elseif(minInput($user_name,3))
    {
        $errors[]= "name must be more than 3 chars";
        }
    elseif(maxInput($user_name,20))
    {
        $errors[]= "name must be less than 20 chars";
        }
    if(requireInput($user_email))
    {
        $errors[]= " email required";
        }
    elseif(emailInput($user_email))
    {
        $errors[]="please type valid email";
        }
        if(empty($errors))
        {
            echo "good"."<br>";
        }else{

            var_dump($errors)."<br>";
            die();
        }
    echo $user_name."<br>";
    echo $user_email;} 
else 
{ echo "not supported method";}
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