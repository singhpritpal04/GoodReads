<!doctype html>
<html lang="en">
<head>
    <?php
    include_once "headerfiles.php";

    ?>
    <title>View category</title>

</head>
<body>
<?php include_once "adminnavbar.php"; ?>
<div class="container">

    <div class="row">
        <h3 class="tittle-w3l">View Category
            <span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
        </h3>
        <div class="col-md-12">
            <div class="table-responsive">

                <table class="table table-bordered table-hover">
                <th>Category</th>
                <th>Description</th>
                <th colspan="2">Controls</th>

                <?php

                include_once "connection.php";
                $selectQuery = "SELECT * FROM `category`";
                $result = mysqli_query($con, $selectQuery);
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td> <?php echo "$row[0]"; ?> </td>
                        <td> <?php echo "$row[1]"; ?> </td>

                        <td><a href="editcategory.php?category=<?php echo $row[0]; ?>">Edit</a></td>
                        <td><a onclick="return confirm('Are you sure to delete?')"
                               href="deletecategory.php?category=<?php echo $row[0]; ?>">Delete</a></td>

                    </tr>


                    <?php
                }
                ?>
            </table>
            </div>
        </div>
    </div>
</div>
<?php include_once "footer.php"; ?>
</body>
</html>
