<?php
session_start();
include_once "connection.php";
if(isset($_SESSION["user_email"])){
    header("location:userdetail.php");
}
else{
    header("location:userlogin.php");
}