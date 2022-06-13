<?php
include_once "connection.php";
$email=$_GET["email"];

$s="SELECT * FROM `author` WHERE email='$email'";
$result=mysqli_query($con,$s);
$row=mysqli_fetch_array($result);
echo "$row[9]";
if($row[9]=='pending') {
    $updateQuery = "UPDATE `author` SET status='active' WHERE `email`='$email'";
    if (mysqli_query($con, $updateQuery)) {

       header("location:viewauthor.php");
    }
}
else
    {
        $updateQuery = "UPDATE `author` SET status='pending' WHERE `email`='$email'";
        if (mysqli_query($con, $updateQuery)) {

            header("location:viewauthor.php");
        }

}
?>