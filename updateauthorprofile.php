<?php
include_once "connection.php";

$email = $_POST["tbemail"];
$name = $_POST["tbname"];

$contact = $_POST["tbcontact"];
$address = $_POST["tbaddress"];
$description = $_POST["tbdescription"];
$publish = $_POST["tbpublish"];

$updateQuery = "UPDATE `author` SET `fullname`='$name',`mobile`='$contact',`description`='$description',
                  `publishwork`='$publish', `address`='$address' WHERE email='$email'";



if(mysqli_query($con,$updateQuery))
{

    header("location:authorprofile.php?msg=1");
}
else
    {
        header("location:authorprofile.php?msg=0");
    }
?>