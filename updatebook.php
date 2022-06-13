<?php
@session_start();
include "connection.php";

$id = $_POST["tbid"];
$title = mysqli_real_escape_string($con,$_POST["tbtitle"]);
$description = mysqli_real_escape_string($con,$_POST["tbdescription"]);
$edition = $_POST["tbedition"];
$price = $_POST["tbprice"];
$genre = $_POST["tbgenre"];
$discount = $_POST["tbdiscount"];
$authorid = $_SESSION["author_id"];
$category = $_POST["tbcategory"];

/*pdf uploading start*/
$actualnamepdf = $_FILES["tbe"]["name"];
$temppathpdf = $_FILES["tbe"]["tmp_name"];
$pathpdf = "bookpdf/$actualnamepdf";
$sizepdf = round($_FILES["tbe"]["size"] / 1024, 2);
$extpdf = pathinfo($actualnamepdf, PATHINFO_EXTENSION);
$extpdf = strtolower($extpdf);
/*pdf uploading end*/

/*book photo start*/
$actualname = $_FILES["tbphoto"]["name"];
$temppath = $_FILES["tbphoto"]["tmp_name"];
$path = "userphoto/$actualname";
$size = round($_FILES["tbphoto"]["size"] / 1024, 2);
$ext = pathinfo($actualname, PATHINFO_EXTENSION);
$ext = strtolower($ext);
/*book photo end*/
if ($_FILES["tbphoto"]["tmp_name"] != "") {


//    echo $temppath;

    if ($ext != "jpg" && $ext != "png") {
        header("location:editbook.php?msg=3&bookid=$id");
    } else if ($size > 500) {
        header("location:editbook.php?msg=4&bookid=$id");
    } else {
        /*upload file to directory*/
        move_uploaded_file($temppath, $path);
        /*end*/
        if ($_FILES["tbe"]["tmp_name"] != "") {
            /*upload pdf file to directory*/
            move_uploaded_file($temppathpdf, $pathpdf);
            /*end*/
            $update = "UPDATE `books` SET `title`='$title',`description`='$description',`edition`=$edition,`price`=$price,`e_edition`='$pathpdf',`genre`='$genre',
`coverphoto`='$path',`discount`=$discount,`category`='$category',`authorid`=$authorid WHERE `bookid`=$id";
        } else {
            $update = "UPDATE `books` SET `title`='$title',`description`='$description',`edition`=$edition,`price`=$price,`genre`='$genre',
`coverphoto`='$path',`discount`=$discount,`category`='$category',`authorid`=$authorid WHERE `bookid`=$id";
        }
    }

} else {

    if ($_FILES["tbe"]["tmp_name"] != "") {
        move_uploaded_file($temppathpdf, $pathpdf);
        $update = "UPDATE `books` SET `title`='$title',`description`='$description',`edition`=$edition,`price`=$price,`e_edition`='$pathpdf',`genre`='$genre',
                 `discount`=$discount,`category`='$category',`authorid`=$authorid WHERE `bookid`=$id";
    } else {
        $update = "UPDATE `books` SET `title`='$title',`description`='$description',`edition`=$edition,`price`=$price,`genre`='$genre',
                   `discount`=$discount,`category`='$category',`authorid`=$authorid WHERE `bookid`=$id";
    }


}


if (mysqli_query($con, $update)) {
    echo "success";

    header("location:editbook.php?msg=1&bookid=$id");
} else {

    echo $update;
    //header("location:editbook.php?msg=0&bookid=$id");
}


?>