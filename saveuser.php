<?php
include_once "connection.php";

$email = $_POST["tbemail"];
$password = $_POST["tbpassword"];
$name = $_POST["tbname"];
$contact = $_POST["tbcontact"];
$address = $_POST["tbaddress"];

$select = "SELECT * FROM `user` WHERE email='$email'";
$result = mysqli_query($con, $select);
if (mysqli_fetch_array($result)) {
    header("location:usersignup.php?msg=2");
}
else
    {
    $add = "INSERT INTO `user`(`user_email`, `password`, `Name`, `mobile`, `shipping_address`, `status`) 
 VALUES ('$email','$password','$name',$contact,'$address','active')";
    if (mysqli_query($con, $add))
    {
        header("location:usersignup.php?msg=1");
    }
    else
        {
        header("location:usersignup.php?msg=0");
    }

}
?>