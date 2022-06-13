<?php
include_once "connection.php";
@session_start();
$email = $_POST["tbemail"];
$password = $_POST["tbpassword"];
$selectQuery="SELECT * FROM `author` WHERE email='$email'and password='$password' and status='active'";
$result=mysqli_query($con,$selectQuery);
$row=mysqli_fetch_array($result);
if(mysqli_num_rows($result)>0)
{
   $_SESSION["author_email"]=$email;
   $_SESSION["author_name"]=$row[1];
   $_SESSION["author_id"]=$row[0];
    header("location:authorhome.php");

}
else
    {
        header("location:authorlogin.php?msg=Incorrect Username or Password");
    }
?>