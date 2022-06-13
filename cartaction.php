<?php
include_once "cart.php";
@session_start();
$cartArray = array();

include_once "connection.php";
$slectQuery = "Select * from books where bookid=" . $_GET["bookid"];
$result = mysqli_query($con, $slectQuery);
$row = mysqli_fetch_array($result);

if (isset($_SESSION["cartarray"])) {
    $cartArray = $_SESSION["cartarray"];

}
$flag = 0;
for ($i = 0; $i < count($cartArray); $i++) {

    $cartobj = $cartArray[$i];
    if ($cartobj->getbookid() == $row[0]) {
        $flag = 1;
        break;
    }

}
if ($flag == 0) {

    $obj = new cart($row[0], $row[1], $row[4], 1, $row[7], $row[8], $row[4]);
    array_push($cartArray, $obj);

    $_SESSION["cartarray"] = $cartArray;
    echo count($_SESSION['cartarray']);

} else {
//    echo "bookid exist";
    echo "be";
}
