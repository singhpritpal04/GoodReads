<?php
@session_start();
include_once "connection.php";
$email=$_SESSION["user_email"];
$bookid = $_GET["bookid"];
$rating = $_GET["rating"];

$select="select * from `rating` where bookid='$bookid' and useremail='$email'";
$res=mysqli_query($con,$select);
if(mysqli_num_rows($res)>0){

 $setrate = "UPDATE `rating` SET `rating`=$rating where bookid='$bookid' and useremail='$email'";
}
else{

$setrate = "INSERT INTO `rating`( `bookid`, `useremail`, `rating`)
            VALUES ($bookid,'$email',$rating)";
}
mysqli_query($con, $setrate);
