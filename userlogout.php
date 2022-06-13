<?php
@session_start();
$_SESSION['user_email'] = null;
unset($_SESSION['user_email']);
header("location:userlogin.php");
?>