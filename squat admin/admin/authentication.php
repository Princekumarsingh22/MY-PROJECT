<?php
session_start();
if(!isset($_SESSION['auth']))
{
    $_SESSION['auth_status']="Loggin to access dashboard";
    header('Location:login.php');
    exit(0);
}
else
{
    if($_SESSION['auth'] == "1")
    {
       //auto access
    }
    else
    {
        $_SESSION['status']="You are not authirized as admin";
        header('Location: ../index.php');
        exit(0); 
    }
}


?>