<?php
include_once "connection.php";
$id = $_GET["bookid"];
$deleteQuery="DELETE FROM `books` WHERE bookid='$id'";
if(mysqli_query($con,$deleteQuery))
{

    header("location:viewbook.php");
}
?>