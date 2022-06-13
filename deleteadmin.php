<?php
include_once "connection.php";
$email = $_GET["email"];
$deleteQuery="DELETE FROM `admin` WHERE email='$email'";
if(mysqli_query($con,$deleteQuery))
{

    header("location:viewadmin.php");
}
?>