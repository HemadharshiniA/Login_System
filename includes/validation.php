<?php
   
   function validateUsername($username)
   {
    if(empty($username))
        {
            return "Username should not be empty";
        }
    if(strlen($username) < 3)
        {
            return "Username should contain at least 3 characters";
        }
    else
        {
            return "";   //will give validation in auth.php
        }
   }


   function validateEmail($email)
   {
    if(empty($email))
        {
            return "Email should not be empty";
        }
    if(!filter_var($email,FILTER_VALIDATE_EMAIL))
        {
            return "Valid Email Address is required";
        }
    else
        {
            return "";   //will give validation in auth.php
        }
   }


   function validatePassword($password)
   {
    if(empty($password))
        {
            return "Password should not be empty";
        }
    if(strlen($username) == 6)
        {
            return "Username should contain 6 characters";
        }
    else
        {
            return "";   //will give validation in auth.php
        }
   }

?>