<?php
include_once "connection.php";

$email = $_POST["tbemail"];
$password = $_POST["tbpassword"];
$name = $_POST["tbname"];
$contact = $_POST["tbcontact"];
$type = $_POST["tbtype"];
$select = "SELECT * FROM `admin` WHERE email='$email'";
$result = mysqli_query($con, $select);
if (mysqli_fetch_array($result)) {
    header("location:addadmin.php?msg=2");
}
else
    {
    $add = "INSERT INTO `admin`(`email`, `password`, `name`, `contact`, `usertype`)
 VALUES ('$email','$password','$name',$contact,'$type')";
    if (mysqli_query($con, $add))
    {
        header("location:addadmin.php?msg=1");
    }
    else
        {
        header("location:addadmin.php?msg=0");
    }

}
?>