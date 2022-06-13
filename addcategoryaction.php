<?php
include_once "connection.php";

$category = $_POST["tbcategory"];
$description = $_POST["tbdescription"];

$select = "SELECT * FROM `category` WHERE categoryname='$category' ";
$result = mysqli_query($con, $select);
if (mysqli_fetch_array($result)) {
    header("location:addcategory.php?msg=2");
}
else
{
    $add = "INSERT INTO `category`(`categoryname`, `description`) VALUES ('$category','$description')";
    if (mysqli_query($con, $add))
    {
        header("location:addcategory.php?msg=1");
    }
    else
    {
        header("location:addcategory.php?msg=0");
    }

}
?>