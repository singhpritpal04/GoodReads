<?php
include_once "connection.php";

$category= $_POST["tbcategory"];
$description = $_POST["tbdescription"];

$updateQuery="UPDATE `category` SET `description`='$description' WHERE categoryname='$category'";
if(mysqli_query($con,$updateQuery))
{

    header("location:viewcategory.php");
}
else
{
    echo "error";
}
?>