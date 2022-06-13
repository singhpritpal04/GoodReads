<!doctype html>
<html lang="en">
<head>
    <?php
    include_once "headerfiles.php";

    ?>
    <title>View Users</title>

</head>
<body>
<?php include_once "adminnavbar.php"; ?>

<div class="container">

    <div class="row">
        <h3 class="tittle-w3l">View User
            <span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
        </h3>
        <div class="col-md-12">
            <div class="table-responsive">

                <table class="table table-bordered table-hover">
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Shipping Address</th>
                    <th>Status</th>
                    <th>Control</th>

                    <?php

                    include_once "connection.php";
                    $selectQuery = "SELECT * FROM `user`";
                    $result = mysqli_query($con, $selectQuery);
                    while ($row = mysqli_fetch_array($result)) {
                        ?>
                        <tr>
                            <td> <?php echo "$row[2]"; ?> </td>
                            <td> <?php echo "$row[0]"; ?> </td>
                            <td> <?php echo "$row[3]"; ?> </td>
                            <td> <?php echo "$row[4]"; ?> </td>
                            <td> <?php echo "$row[5]"; ?> </td>


                            <td><a href="updateuserstatus.php?email=<?php echo $row[0]; ?>">Update Status</a></td>

                        </tr>


                        <?php
                    }
                    ?>
                </table>
            </div>

        </div>
    </div>
</div>
<?php include_once "footer.php"?>
</body>
</html>
