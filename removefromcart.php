<?php
include_once "cart.php";
@session_start();
include_once "connection.php";
$bookid = $_GET["bookid"];
$oldarray = $_SESSION["cartarray"];
$newarray = array();
for ($i = 0; $i < count($oldarray); $i++) {
    if ($bookid != $oldarray[$i]->bookid) {
        array_push($newarray, $oldarray[$i]);
    }
}
$_SESSION["cartarray"] = $newarray;
header("location:viewcart.php")

//echo "<pre>";
//echo print_r($newarray);
//echo "</pre>";
?>