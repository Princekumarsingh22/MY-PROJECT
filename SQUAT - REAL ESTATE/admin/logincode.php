<?php
session_start();
include('config/dbcon.php');


if(isset($_POST['login_btn']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];

    $log_query="SELECT *FROM usertable WHERE email='$email' AND password='$password' LIMIT 1";
    $log_query_run=mysqli_query($con,$log_query);

    if(mysqli_num_rows($log_query_run) > 0)
    {
        foreach($log_query_run as $row)
        {
            $user_id=$row['id'];
            $user_name=$row['name'];
            $user_email=$row['email'];
            $user_phone=$row['phone'];
            $role_as=$row['role_as'];
         }
 
         $_SESSION['auth']="$role_as";
         $_SESSION['auth_user']=[
             'user_id'=>$user_id,
             'user_name'=>$user_name,
             'user_email'=>$user_email,
             'user_phone'=>$user_phone
         ];
         $_SESSION['status']="Logged in Successfully";
         header('Location:index.php');
    }
    else
    {
        $_SESSION['status']="Invalid Email or Password";
        header('Location:login.php');
    }
}
else
{
    $_SESSION['status']="Access Denied";
    header('location:login.php');
}
?>