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

/* START LOGIN FORM */

/* END LOGIN FORM */

/* START SELLFORM DETAILS  */
if(isset($_POST["btnsellform"]))
{
 include("includes/connection.php");
    $name=$_POST["name"];
    $email=$_POST["email"];    
    $phone=$_POST["phone"];
    $projectname=$_POST["projectname"];
    $bedrooms=$_POST["bedrooms"];
    $furnishing=$_POST["furnishing"];
    $constr_status=$_POST["constr_status"];
    $listedby=$_POST["listedby"];
    $maintenance=$_POST["maintenance"];
    $totalfloors=$_POST["totalfloors"];
    $address=&$_POST['address'];
    $uploadimage=$_POST['upload'];

echo"<center><table border='2px'>";
    echo"<tr><td>Name</td><td>".$name."</td></tr>";
    echo"<tr><td>email.</td><td>".$email."</td></tr>";
    echo"<tr><td>phone</td><td>".$phone."</td></tr>";
    echo"<tr><td>projectname</td><td>".$projectname."</td></tr>";
    echo"<tr><td>bedrooms</td><td>".$bedrooms."</td></tr>";
    echo"<tr><td>furnishing</td><td>".$furnishing."</td></tr>";
    echo"<tr><td>constr_status.</td><td>".$constr_status."</td></tr>";
    echo"<tr><td>listedby</td><td>".$listedby."</td></tr>";
    echo"<tr><td>maintenance</td><td>".$maintenance."</td></tr>";
    echo"<tr><td>totalfloors</td><td>".$totalfloors."</td></tr>";
    echo"<tr><td>address</td><td>".$address."</td></tr>";
    echo"<tr><td>uploadimage</td><td>".$uploadimage."</td></tr>";
echo"</center></table>"; 




}
/* END SELLFORM DETAILS  */

/* START EMAIL AGENT IN SELL SECTION */
if(isset($_POST['emailagent_btn']))
{
    include("includes/connection.php");
    $name=$_POST["name"];
    $email=$_POST["email"]; 
    $password=$_POST["password"]; 
    $message=$_POST["message"];
    
    /* echo"<center><table border='2px'>";
    echo"<tr><td>Name</td><td>".$name."</td></tr>";
    echo"<tr><td>email.</td><td>".$email."</td></tr>";
    echo"<tr><td>phone</td><td>".$password."</td></tr>";
    echo"<tr><td>projectname</td><td>".$message."</td></tr>";
    echo"</center></table>"; */
    
    $sql="INSERT INTO email_agent(name,email,password,message)VALUES('$name','$email','$password','$message')";
        mysqli_query($con,$sql);
        echo"<script>alert('Send Successfully')</script>";
        mysqli_close($con); 
        echo"<script>window.location='index.php'</script>";
}
/* END EMAIL AGENT IN SELL SECTION */
?>