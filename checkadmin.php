<?php
include_once "connection.php";
@session_start();
$email = $_POST["tbemail"];
$password = $_POST["tbpassword"];
$selectQuery="SELECT * FROM `admin` WHERE email='$email'and password='$password'";
$result=mysqli_query($con,$selectQuery);
$row=mysqli_fetch_array($result);
if(mysqli_num_rows($result)>0)
{
   $_SESSION["email"]=$email;
   $_SESSION["name"]=$row[2];
    header("location:adminhome.php");
}
else
    {
        header("location:adminlogin.php?msg=Incorrect Username or Password");
    }
?>