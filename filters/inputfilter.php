<?php
if 
($_SERVER['REQUEST_METHOD']=="POST")
{
    $user_name= trim(filter_input(INPUT_POST,"user_name",FILTER_SANITIZE_STRING));
    $user_email=trim(filter_input(INPUT_POST,"user_email",FILTER_SANITIZE_EMAIL));
    if(empty($user_name))
    {
        echo " name required";
        die();
    }
    elseif(strlen($user_name)<3)
    {
        echo "name must be more than 3 chars";
        die();
    }
    elseif(strlen($user_name)>20)
    {
        echo "name must be less than 20 chars";
        die();
    }
    if(empty($user_email))
    {
        echo " email required";
        die();
    }
    elseif(!filter_var($user_email,FILTER_VALIDATE_EMAIL))
    {
        echo "please type valid email";
        die();
    }
  

   echo $user_name."<br>";
   echo $user_email;
} 
else 
{
 echo "not supported method";
}
?>