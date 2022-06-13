<!doctype html>
<html lang="en">
<head>
    <?php include_once "headerfiles.php"; ?>
    <title>order</title>
</head>
<body>
<?php
@session_start();
include_once "adminnavbar.php" ;

?>
<div class="container">
    <div class="row">
        <h3 class="tittle-w3l">All Orders
            <span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
        </h3>

        <div class="col-md-12">
<div class="table-responsive">

            <table class="table table-responsive table-bordered table-hover">

             <thead>
                <th>Sr.no</th>
                <th>Date</th>
                <th>Total</th>
                <th>Payment Mode</th>
                <th>Bill Details</th>
             </thead>
                <tbody>
                <?php


                include_once "connection.php";
                $j = 0;
                $selectQuery = "SELECT * FROM `bill`";
                $result = mysqli_query($con, $selectQuery);
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>

                        <td> <?php echo $j; ?> </td>
                        <td> <?php echo "$row[1]"; ?> </td>
                        <td> <?php echo "$row[3]"; ?> </td>
                        <td> <?php echo "$row[4]"; ?> </td>
                        <td><a href="orderdetail.php?billid=<?php echo $row[0]; ?>">Details</a></td>


                    </tr>
                    <?php
                    $j++;
                }
                ?>
                </tbody>
            </table>
</div>

        </div>
    </div>

</div>
<?php include_once "footer.php" ?>
</body>
</html>