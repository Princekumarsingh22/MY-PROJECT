<?php
include('dbcon.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

function sendemail_verify($name,$email,$verify_token)
{
    $mail = new PHPMailer(true);
    /* $mail->SMTPDebug=2; */                     
    $mail->isSMTP();                                             
    $mail->SMTPAuth   = true;   
                                   
    $mail->Host       = 'smtp.gmail.com';
    $mail->Username   = 'linuxhjp1213@gmail.com';                    
    $mail->Password   = 'prince@1213';    
                             
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
    $mail->Port       = 587;

    $mail->setFrom('linuxhjp1213@gmail.com', $name);
    $mail->addAddress($email);  
       
    $mail->isHTML(true);                                  
    $mail->Subject = 'Email verification from SQUAT';

    $email_template="
        <h2>You have Refistered with SQUAT</h2>
        <h5>Verify Your Email address to login with the below given link</h5>
        <br/><br/>
        <a href='http://localhost/dashboard/MY%20PROJECT/login/verify-email.php?token=$verify_token'> Click Me </a>
    ";
    
    $mail->Body=$email_template;
    $mail->send();
   /*  echo 'Message has been sent'; */

}

if(isset($_POST['register_btn']))
{
    $name=&$_POST['name'];
    $phone=&$_POST['phone'];
    $email=&$_POST['email'];
    $password=&$_POST['password'];
    $verify_token=md5(rand());

    sendemail_verify("$name","$email","$verify_token");
    echo"Sent or not";

    //Email Exists or not
    /* $check_email_query="SELECT email From users WHERE email='$email' LIMIT 1";
    $check_email_query_run=mysqli_query($con,$check_email_query);

    if(mysqli+num_rows($check_email_query_run)>0)
    {
        $_SESSION['status']="Email Id already Exits";
        header("Location:register.php");
    }
    else
    {
        
        $query="INSERT INTO users(name,phone,	email	,password	,verify_token) VALUES ('$name','$phone','$email','$password','$verify_token')";
        $query_run=mysqli_query($con,$query);

        if($query_run)
        {
            sendemail_verify("$name","$email","$verify_token");
            $_SESSION['status']="Registration Successful.! Please Verify Your Email Address.";
            header("Location:register.php");
        }
        else
        {
            $_SESSION['status']="Registration Failed";
            header("Location:register.php");
        }
    } */
}
?>