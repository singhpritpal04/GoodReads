<?php
include_once "connection.php";

$email = $_POST["tbemail"];
$name = $_POST["tbname"];
$gender = $_POST["tbgender"];
$contact = $_POST["tbcontact"];
$address = $_POST["tbaddress"];

$updateQuery = "UPDATE `user` SET `Name`='$name',`mobile`='$contact',`shipping_address`='$address'WHERE user_email='$email'";

if(mysqli_query($con,$updateQuery))
{

    header("location:userprofile.php?msg=1");
}
else
    {
        header("location:userprofile.php?msg=0");
    }
?>