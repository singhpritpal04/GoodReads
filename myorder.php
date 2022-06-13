<!doctype html>
<html lang="en">

<head>
    <?php include_once "headerfiles.php"; ?>
    <title>My order</title>
</head>
<body>
<?php
@session_start();
include_once "usernavbar.php" ;

?>
<div class="container">
    <div class="row">
        <h3 class="tittle-w3l">My Orders
            <span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
        </h3>

        <div class="col-md-12">


            <table class="table table-responsive table-bordered table-hover">
                <caption class="text-center"><h1>Orders</h1></caption>
<thead>
                <th>Sr.no</th>
                <th>Date</th>
                <th>Total</th>
                <th>Payment Mode</th>
                <th>Bill Details</th>
</thead>
                <tbody>
                <?php

                $useremail = $_SESSION["user_email"];
                include_once "connection.php";
                $j = 0;
                $selectQuery = "SELECT * FROM `bill` where useremail='$useremail'";
                $result = mysqli_query($con, $selectQuery);
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>

                        <td> <?php echo $j; ?> </td>
                        <td> <?php echo "$row[1]"; ?> </td>
                        <td> <?php echo "$row[3]"; ?> </td>
                        <td> <?php echo "$row[4]"; ?> </td>
                        <td><a href="myorderdetail.php?billid=<?php echo $row[0]; ?>">Details</a></td>


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
<?php include_once "footer.php" ?>
</body>
</html>