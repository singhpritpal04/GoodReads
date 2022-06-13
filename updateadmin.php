<?php
include_once "connection.php";

$email = $_POST["tbemail"];
$name = $_POST["tbname"];
$contact = $_POST["tbcontact"];
$type = $_POST["tbtype"];
$updateQuery="UPDATE `admin` SET `name`='$name',`contact`=$contact,`usertype`='$type' WHERE `email`='$email'";
if(mysqli_query($con,$updateQuery))
{
    header("location:viewadmin.php");
}
?>