<?php
//connection
$con=mysqli_connect("localhost","root","","squat");

//check connection
if(!$con)
{
    header("Location: ../errors/db.php");
    die();
}
/* else
{
    echo"Database Connected..!";
} */





?>