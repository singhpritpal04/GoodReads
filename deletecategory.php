<?php
include_once "connection.php";
$category = $_GET["category"];
$deleteQuery="DELETE FROM `category` WHERE categoryname='$category'";
if(mysqli_query($con,$deleteQuery))
{

    header("location:viewcategory.php");
}
?>