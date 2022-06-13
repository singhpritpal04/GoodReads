<?php
include "connection.php";
$email = $_POST["tbemail"];
$password = $_POST["tbpassword"];
$name = $_POST["tbname"];

$mobile = $_POST["tbcontact"];
$address = $_POST["tbaddress"];

$add = "INSERT INTO `user`(`user_email`, `password`, `Name`, `mobile`, `shipping_address`, `status`)
 VALUES ('$email','$password','$name','$mobile','$address','active')";
        if (mysqli_query($con, $add)) {
            move_uploaded_file($temppath, $path);
            header("location:usersignup.php?msg=1");
        } else {

            header("location:usersignup.php?msg=0");

}
?>