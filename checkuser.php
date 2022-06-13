<?php
include_once "connection.php";
@session_start();
$email = $_POST["tbemail"];
$password = $_POST["tbpassword"];
$selectQuery="SELECT * FROM `user` WHERE user_email='$email'and password='$password'and `status`='active'";
$result=mysqli_query($con,$selectQuery);
$row=mysqli_fetch_array($result);
if(mysqli_num_rows($result)>0)
{
   $_SESSION["user_email"]=$email;
   $_SESSION["user_name"]=$row[2];
   $_SESSION["user_address"]=$row[4];
   $_SESSION["user_contact"]=$row[3];
   if(isset($_SESSION["cartarray"]))
   {header("location:userdetail.php");}
   else{
       header("location:userhome.php");
   }
}
else
    {
        header("location:userlogin.php?msg=Incorrect Username or Password");
    }
?>