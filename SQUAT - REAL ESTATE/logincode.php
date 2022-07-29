<?php
session_start();
include('includes/connection.php');


if(isset($_POST['login_btn']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];

    $log_query="SELECT *FROM user_profile WHERE useremail='$email' AND userpassword='$password' LIMIT 1";
    $log_query_run=mysqli_query($con,$log_query);

    if(mysqli_num_rows($log_query_run) > 0)
    {
        foreach($log_query_run as $row)
        {
            $user_id=$row['userid'];
            $user_name=$row['username'];
            $user_email=$row['useremail'];
            $user_phone=$row['usermobile'];
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
/* START LOGIN FORM */
// include("includes/connection.php");
// if(isset($_POST["login_btn"]))
// {
//    $email=$_POST["email"];
//    $password=$_POST["password"];

//    $sql="select * from user_profile where useremail= '".$email."'";
// $rs=mysqli_query($con,$sql);
//  if($row=mysqli_fetch_array($rs))
//  {
//  	if($row["userpassword"]==$password)
//  	{
//  		echo"<script>alert('Login success')</script>";
//         echo"<script>window.location='index.php'</script>";
//  	}
//  	else
//  		echo"<script>alert('Invalid password')</script>";

//  }
//  else
//  	echo"<script>alert('Invalid user id')</script>";
//  mysqli_close($con);

// }
/* END LOGIN FORM */
?>