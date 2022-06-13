<?php
include_once "connection.php";
$email=$_GET["email"];

$s="SELECT * FROM `user` WHERE user_email='$email'";
$result=mysqli_query($con,$s);
$row=mysqli_fetch_array($result);

if($row[5]=='pending') {
    $updateQuery = "UPDATE `user` SET status='active' WHERE `user_email`='$email'";
    if (mysqli_query($con, $updateQuery)) {

       header("location:viewuser.php");
    }
}
else
    {
        $updateQuery = "UPDATE `user` SET status='pending' WHERE `user_email`='$email'";
        if (mysqli_query($con, $updateQuery)) {

            header("location:viewuser.php");
        }

}
?>