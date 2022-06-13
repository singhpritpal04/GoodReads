<?php
@session_start();
unset($_SESSION['author_email']);
header("location:authorlogin.php");
?>