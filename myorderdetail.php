<?php
include_once "cart.php";
@session_start();
include_once "connection.php";
if (!isset($_GET["billid"])) {
    header("location:myorder.php");

}
$billid = $_GET["billid"];
?>

<!doctype html>
<html lang="en">
<head>
    <?php include_once "headerfiles.php" ?>
    <title>order detail</title>
</head>
<body>
<?php include_once
"usernavbar.php";

?>
<div class="container">
    <div class="row">
        <h3 class="tittle-w3l">Order Details
            <span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
        </h3>

        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-responsive table-hover table-bordered">
                    <caption><h2 class="text-center">Order Detail</h2></caption>
                    <thead>
                    <tr>
                        <th>Sr No.</th>
                        <th>Book Name</th>
                        <th>E Book</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Discount</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $selectQuery = "SELECT * FROM `billdetail` inner join `books` on
                 books.bookid=billdetail.bookid where billdetail.billid='$billid'";
                    $result = mysqli_query($con, $selectQuery);
                   $j=0;
                   $total=0;
                    while ($row = mysqli_fetch_array($result)) {
                        $total+=$row["price"];
                        ?>
                        <tr>

                            <td> <?php echo $j ?> </td>
                            <td> <?php echo $row["title"]; ?> </td>
                            <td><a href="<?php echo $row["e_edition"]; ?>" target="_blank">Download Book</a></td>
                            <td> <?php echo $row["quantity"]; ?> </td>
                            <td> <?php echo $row ["price"]; ?> </td>
                            <td> <?php echo $row["discount"]; ?>%</td>


                        </tr>

                    <?php
                    $j++;} ?>
                    <tr>
                        <td colspan="4"class="text-right">Total Price</td>
                        <td colspan="2"><?php echo $total;?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include_once "footer.php" ?>
</body>
</html>
