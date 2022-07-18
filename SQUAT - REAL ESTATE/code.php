<?php
session_start();
/* include('authentication.php'); */
include("includes/connection.php");

if(isset($_POST['logout_btn']))
{
   /*  session_destroy(); */
    unset($_SESSION['auth']);
    unset($_SESSION['auth_user']);

    $_SESSION['status']="Logged Out successfully";
    header('location: login/login-user.php');
    exit(0);

}

/*  START PHP CODING OF CONTACT US SECTION  */
if(isset($_POST["contact_btn"]))
{
    $name=$_POST["name"];
    $email=$_POST["email"];
	$subject=$_POST["subject"];
    $website=$_POST["website"];
    $message=$_POST["message"];

    echo"<center><table border='2px'>";
    echo"<tr><td>Name</td><td>".$name."</td></tr>";
    echo"<tr><td>Email</td><td>".$email."</td></tr>";
    echo"<tr><td>Subject</td><td>".$subject."</td></tr>";
    echo"<tr><td>Website</td><td>".$website."</td></tr>";
    echo"<tr><td>Message</td><td>".$message."</td></tr>";
    echo"</center></table>"; 

    include("includes/connection.php");
    $sql="insert into contact(name,email,subject,website,message)values('".$name."','".$email."','".$subject."','".$website."','".$message."')";
    mysqli_query($con,$sql);
     echo"<script>alert('SUCCCESSFULLY SEND YOUR MESSAGE')</script>";
    mysqli_close($con);
    echo"<script>window.location='index.php'</script>";

}
/*  END PHP CODING OF CONTACT US SECTION  */


/*  START SIGNUP FORM  */
if(isset($_POST["signup_btn"]))
{
 
$uname=$_POST["unm"];
$mobile=$_POST["mobile"];     //$pname=base64_encode($_POST["pnm"]);
$email=$_POST["email"];
$pname=$_POST["pnm"];
/* $pname=md5($_POST["pnm"]); *///it is also for password incripected form
$repname=$_POST["repnm"];

/* echo"<center><table border='2px'>";
    echo"<tr><td>Name</td><td>".$uname."</td></tr>";
    echo"<tr><td>Mobile No.</td><td>".$mobile."</td></tr>";
    echo"<tr><td>Email</td><td>".$email."</td></tr>";
    echo"<tr><td>password</td><td>".$pname."</td></tr>";
    echo"<tr><td>re-password</td><td>".$repname."</td></tr>";
echo"</center></table>";  */

$sql="insert into user_profile(username,usermobile,useremail,userpassword,userrepassword)values('$uname','$mobile','$email','$pname','$repname')";
mysqli_query($con,$sql);
echo"<script>alert('Signup successfully')</script>";
mysqli_close($con); 
echo"<script>window.location='login.php'</script>";
}
/* END  SIGNUP FORM  */

// /* START LOGIN FORM */
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
// /* END LOGIN FORM */

/* START FORGET PASSWORD */
/* include("includes/connection.php");
if(isset($_POST["forget_password"]))
{
$email=$_POST["email"];
$sql="select * from user_profile where email= '".$email."'";
$rs=mysqli_query($con,$sql);
 if($row=mysqli_fetch_array($rs))
 {
 	if($row["password"]==$password)
 	{
        echo"<p>Your Password :-".$row['password']."</p>";
	   
	}
	else
		echo"<script>alert('Invalid Emailid')</script>";
 }
 else
echo"<script>alert('Invalid User Name')</script>";	 
mysqli_close($con);		
}		 */
/* END FORGET PASSWORD */

/* START SELLFORM DETAILS  */
if(isset($_POST["btnsellform"]))
{
 include("includes/connection.php");    
    $phone=$_POST["phone"];
    $projectname=$_POST["projectname"];
    $maintenance=$_POST["maintenance"];
    $totalfloors=$_POST["totalfloors"];
    $address=&$_POST['address'];
    $type=&$_POST['type'];
    $bedrooms=$_POST["bedrooms"];
    $furnishing=$_POST["furnishing"];
    $const_status=$_POST["const_status"];
    $listedby=$_POST["listedby"];
    
    $location="upload/";
    $img1=$_FILES["exteriorimg"]["name"];
    $img_tmp1=$_FILES["exteriorimg"]["tmp_name"];
    $img2=$_FILES["livingroomimg"]["name"];
    $img_tmp2=$_FILES["livingroomimg"]["tmp_name"];
    $img3=$_FILES["kitchenimg"]["name"];
    $img_tmp3=$_FILES["kitchenimg"]["tmp_name"];
    $data=[];
    $data=[$img1,$img2,$img3];
    $image=implode(' ',$data);
    $sql="INSERT INTO sellform(mobile,project,maintenance,total_floor,address,type,bedrooms,furnishing,	const_status,listed_by,exterior,livingroom,kitchen)VALUES('$phone','$projectname','$maintenance','$totalfloors','$address','$type','$bedrooms','$furnishing','$const_status','$listedby','$img1','$img2','$img3')";
    $fire=mysqli_query($con,$sql);
    if($fire){
        move_uploaded_file($img_tmp1,$location.$img1);
        move_uploaded_file($img_tmp2,$location.$img2);
        move_uploaded_file($img_tmp3,$location.$img3);
        echo"<script>alert('Send data Successfully')</script>";
        echo"<script>window.location='index.php'</script>";
    }else{
        echo"<script>alert('Failed data Successfully')</script>";
    }
    
/* echo"<center><table border='2px'>";
    echo"<tr><td>Name</td><td>".$name."</td></tr>";
    echo"<tr><td>email.</td><td>".$email."</td></tr>";
    echo"<tr><td>phone</td><td>".$phone."</td></tr>";
    echo"<tr><td>projectname</td><td>".$projectname."</td></tr>";
    echo"<tr><td>maintenance</td><td>".$maintenance."</td></tr>";
    echo"<tr><td>totalfloors</td><td>".$totalfloors."</td></tr>";
    echo"<tr><td>address</td><td>".$address."</td></tr>";
    echo"<tr><td>type</td><td>".$type."</td></tr>";
    echo"<tr><td>bedrooms</td><td>".$bedrooms."</td></tr>";
    echo"<tr><td>furnishing</td><td>".$furnishing."</td></tr>";
    echo"<tr><td>const_status.</td><td>".$const_status."</td></tr>";
    echo"<tr><td>listedby</td><td>".$listedby."</td></tr>";    
    echo"<tr><td>exteriorimg</td><td>".$exteriorimg."</td></tr>";
    echo"<tr><td>livingroomimg</td><td>".$livingroomimg."</td></tr>";
    echo"<tr><td>kitchenimg</td><td>".$kitchenimg."</td></tr>";
echo"</center></table>";  */

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

/* START INQUERY FORM */
if(isset($_POST['btn_inquery']))
{
    $name=$_POST["name"];
    $email=$_POST["email"];
    $property_types=$_POST['property_types'];
    $bedrooms=$_POST["bedrooms"];
    $bathrooms=$_POST["bathrooms"];
    $minprice=$_POST["minprice"];
    $maxprice=$_POST["maxprice"];
    $message=$_POST["message"];
    
    /* echo"<center><table border='2px'>";
    echo"<tr><td>Name</td><td>".$name."</td></tr>";
    echo"<tr><td>email.</td><td>".$email."</td></tr>";
    echo"<tr><td>property_types</td><td>".$property_types."</td></tr>";
    echo"<tr><td>bedrooms</td><td>".$bedrooms."</td></tr>";
    echo"<tr><td>bathrooms</td><td>".$bathrooms."</td></tr>";
    echo"<tr><td>minprice</td><td>".$minprice."</td></tr>";
    echo"<tr><td>maxprice</td><td>".$maxprice."</td></tr>";
    echo"<tr><td>message</td><td>".$message."</td></tr>";
    echo"</center></table>"; */

    $sql="INSERT INTO user_inquery(name,email,property_types,bedrooms,bathrooms,minprice,maxprice,message)VALUES('$name','$email','$property_types','$bedrooms','$bathrooms','$minprice','$maxprice','$message')";
        mysqli_query($con,$sql);
        echo"<script>alert('Send Inquery Successfully')</script>";
        mysqli_close($con); 
        echo"<script>window.location='index.php'</script>";
    
}
/* END INQUERY FORM */


/* START OTP SECTION */
// if(isset($_POST['sendotp']))
// {
//     $phone1=$_POST["phone"];
//     $sql="select usermobile from user_profile where usermobile='".$phone1."'";
//            $rs=mysqli_query($con,$sql);
//            if($row=mysqli_fetch_array($rs))
//            {
//                 $otp = rand(1000,9999);
//                 $phone = "+919304574542"; // target number; includes ISD
//                 $api_key = '2ef633e8-05b5-11ed-9c12-0200cd936042'; // API Key
//                 $req = "https://2factor.in/API/V1/".$api_key."/SMS/".$phone."/".$otp;
            
//                 $sms = file_get_contents($req);
//                 $sms_status = json_decode($sms, true);
//                 if($sms_status['Status'] !== 'Success') {
//                     $err['error'] = 'Could not send OTP to '.$phone;
//                 }
//                 else{
//                     $sql2="UPDATE user_profile SET token='$otp', status='0' WHERE usermobile='$phone1' ";
//                     mysqli_query($con,$sql2);

//                     /* $sql="INSERT INTO user_profile(token,status)VALUES('$otp','0')";
//                     mysqli_query($con,$sql); */
//                     header("Location:otp_verify.php");
//                 }
//            }
//            else{
//             echo"<script>alert('Invalid Phone Number')</script>";
//            }
   		     
// 		   mysqli_close($con);
// }






?>

