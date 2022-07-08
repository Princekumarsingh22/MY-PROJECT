<?php
/*  START PHP CODING OF CONTACT US SECTION  */
if(isset($_POST["contact_btn"]))
{
    $name=$_POST["name"];
    $email=$_POST["email"];
	$message=$_POST["message"];
    
    echo"<center><table border='2px'>";
    echo"<tr><td>Name</td><td>".$name."</td></tr>";
    echo"<tr><td>Email</td><td>".$email."</td></tr>";
    echo"<tr><td>Message</td><td>".$message."</td></tr>";
    echo"</center></table>"; 

    /* include("includes/connection.php");
    $sql="insert into contact(c_name,c_email,c_message)values('".$name."','".$email."','".$message."')";
    mysqli_query($con,$sql);
     echo"<script>alert('SUCCCESSFULLY SEND YOUR MESSAGE')</script>";
    mysqli_close($con);
    echo"<script>window.location='index.php'</script>"; */

}
/*  END PHP CODING OF CONTACT US SECTION  */


/*  START PHP CODING OF SIGNUP SECTION  */
if(isset($_POST["signup_btn"]))
{
 include("includes/connection.php");
$uname=$_POST["unm"];
$mobile=$_POST["mobile"];     //$pname=base64_encode($_POST["pnm"]);
$email=$_POST["email"];
$pname=$_POST["pnm"];
/* $pname=md5($_POST["pnm"]); *///it is also for password incripected form
$repname=$_POST["repnm"];

echo"<center><table border='2px'>";
    echo"<tr><td>Name</td><td>".$uname."</td></tr>";
    echo"<tr><td>Mobile No.</td><td>".$mobile."</td></tr>";
    echo"<tr><td>Email</td><td>".$email."</td></tr>";
    echo"<tr><td>Message</td><td>".$pname."</td></tr>";
    echo"<tr><td>Message</td><td>".$repname."</td></tr>";
echo"</center></table>"; 

/* $sql="insert into user_profile(username,usermobile,useremail,userpassword,userrepassword)values('$uname','$mobile','$email','$pname','$repname')";
mysqli_query($con,$sql);
echo"<script>alert('Signup successfully')</script>";
mysqli_close($con); 
echo"<script>window.location='login.php'</script>"; */
}
?>