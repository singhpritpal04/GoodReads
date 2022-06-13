<?php
include "connection.php";
$email = $_POST["tbemail"];
$password = $_POST["tbpassword"];
$name = $_POST["tbname"];
$mobile = $_POST["tbcontact"];
$address = mysqli_real_escape_string($con,$_POST["tbaddress"]);
$description = mysqli_real_escape_string($con,$_POST["tbdescription"]);
$publish = mysqli_real_escape_string($con,$_POST["tbpublish"]);
$actualname = $_FILES["tbphoto"]["name"];
$temppath = $_FILES["tbphoto"]["tmp_name"];
$path = "userphoto/$actualname";

$size = round($_FILES["tbphoto"]["size"] / 1024, 2);
$ext = pathinfo($actualname, PATHINFO_EXTENSION);
$ext = strtolower($ext);
$select = "SELECT * FROM `author` WHERE email='$email'";
$result = mysqli_query($con, $select);
if (mysqli_fetch_array($result)) {
    header("location:authorsignup.php?msg=2");
} else {
    if ($ext != "jpg" and $ext != "png") {
        header("location:authorsignup.php?msg=3") ;
    } else if ($size > 500) {
        header("location:authorsignup.php?msg=4");
    } else {



        $add = "INSERT INTO `author`(`fullname`, `email`, `mobile`, `address`, `photo`, `description`, `password`, `publishwork`, `status`)  
VALUES ('$name','$email','$mobile','$address','$path','$description','$password','$publish','pending')";
        if (mysqli_query($con, $add)) {
            move_uploaded_file($temppath, $path);
            header("location:authorsignup.php?msg=1");
        } else {

            header("location:authorsignup.php?msg=0");
        };
    }
}
?>