<?php
if 
($_SERVER['REQUEST_METHOD']=="POST")
{
    if(strlen($_POST['user_name'])<3)
    {
        echo "name must be more than 3 chars";
        die();
    }
    elseif(strlen($_POST['user_name'])>20)
    {
        echo "name must be less than 20 chars";
        die();
    }
    if(empty($_POST["user_email"]))
    {
        echo " email required";
        die();
    }
    elseif(!filter_var($_POST['user_email'],FILTER_VALIDATE_EMAIL))
    {
        echo "please type valid email";
        die();
    }
  

   echo $_POST["user_name"]."<br>";
   echo $_POST["user_email"];
} 
else 
{
 echo "not supported method";
}
?>