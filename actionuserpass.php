<?php
include_once "connection.php";
$email=$_POST["tbemail"];
$oldpassword=$_POST["tboldpassword"];
$newpassword=$_POST["tbnewpassword"];
$selectQuery="SELECT * FROM `user` WHERE user_email='$email'and password='$oldpassword'";
$result=mysqli_query($con,$selectQuery);
$row=mysqli_fetch_array($result);
if(mysqli_num_rows($result)>0)
{
    $updateQuery="UPDATE `user` SET `password`='$newpassword'WHERE user_email='$email'";
    if(mysqli_query($con,$updateQuery))
    {
        header("location:changeuserpassword.php?msg=1");
    }
}
else
{
    header("location:changeuserpassword.php?msg=0");
}
?>