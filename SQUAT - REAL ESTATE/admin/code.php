<?php
session_start();
include('authentication.php');
include('config/dbcon.php');


if(isset($_POST['logout_btn']))
{
   /*  session_destroy(); */
    unset($_SESSION['auth']);
    unset($_SESSION['auth_user']);

    $_SESSION['status']="Logged Out successfully";
    header('location: login.php');
    exit(0);

}


if(isset($_POST['addUser']))
{
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $confirmpassword=$_POST['confirmpassword'];

    if($password==$confirmpassword)
    {
            $checkemail="SELECT useremail FROM user_profile WHERE useremail='$email' ";
            $checkemail_run=mysqli_query($con,$checkemail);

                if(mysqli_num_rows($checkemail_run) > 0)
                {
                    //taken already exist
                    $_SESSION['status']="Email Id is already taken";
                    header("Location:registered.php");
                    exit;
                }
                else
                {
                    //Available----Record not found
                    $user_query="INSERT INTO user_profile(username,usermobile,useremail,userpassword) values ('$name','$phone','$email','$password')";
                    $user_query_run=mysqli_query($con,$user_query);

                        if($user_query_run)
                        {
                            $_SESSION['status']="User added Successfully";
                            header("Location:registered.php");
                        }
                        else
                        {
                            $_SESSION['status']="User Registration failed";
                            header("Location:registered.php");
                        }   
                }   
    }
    else
    {
        $_SESSION['status']="Password and ConfirmPassword does't match";
        header("Location:registered.php");
    }
}


if(isset($_POST['updateUser']))
{
    $user_id=$_POST['user_id'];
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $role_as=$_POST['role_as'];

    $query="UPDATE user_profile SET username='$name', usermobile='$phone', useremail='$email', userpassword='$password',role_as='$role_as' WHERE userid='$user_id' ";
    $query_run=mysqli_query($con,$query);

    if($query_run)
    {
        $_SESSION['status']="User updated Successfully";
        header("Location:registered.php");
    }
    else
    {
        $_SESSION['status']="User updating failed";
        header("Location:registered.php");
    }
}

if(isset($_POST['DeleteUserbtn']))
{
    $userid=$_POST['delete_id'];

    $query="DELETE FROM user_profile WHERE userid='$userid' ";
    $query_run=mysqli_query($con,$query);

    if($query_run)
    {
        $_SESSION['status']="User deleted Successfully";
        header("Location:registered.php");
    }
    else
    {
        $_SESSION['status']="User deleting failed";
        header("Location:registered.php");
    }
}


if(isset($_POST['check_Emailbtn']))
{
    $email=$_POST['email'];

    $checkemail="SELECT useremail FROM user_profile WHERE useremail='$email' ";
    $checkemail_run=mysqli_query($con,$checkemail);

        if(mysqli_num_rows($checkemail_run) > 0)
        {
           echo"Email id already taken..!";
        }
        else
        {          
            echo"it's Available";
        }
}

?>