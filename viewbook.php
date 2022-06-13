<!doctype html>
<html lang="en">
<head>
    <?php
    include_once "headerfiles.php";

    ?>
    <title>Edit Book</title>

</head>
<body>
<?php include_once "authornavbar.php"; ?>
<div class="container">

    <div class="row">
        <h3 class="tittle-w3l">View Books
            <span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
        </h3>
        <div class="col-md-12">
            <div class="table-responsive">

                <table class="table table-bordered table-hover">
                    <th>Title</th>
                    <th>Description</th>
                    <th>Edition</th>
                    <th>Price</th>
                    <th>E_Edition</th>
                    <th>Genre</th>
                    <th>Cover Photo</th>
                    <th>Discount </th>
                    <th>Category</th>
                    <th colspan="2">Controls</th>

                    <?php
                    @session_start();
                    $id=$_SESSION["author_id"];
                    include_once "connection.php";

                    $selectQuery = "SELECT * FROM `books` where authorid=$id";
                    $result = mysqli_query($con, $selectQuery);
                    while ($row = mysqli_fetch_array($result)) {
                        ?>
                        <tr>

                            <td> <?php echo "$row[1]"; ?> </td>
                            <td> <?php echo "$row[2]"; ?> </td>
                            <td> <?php echo "$row[3]"; ?> </td>
                            <td> <?php echo "$row[4]"; ?> </td>
                            <td><a href="<?php echo "$row[5]"; ?>" target="_blank">View PDF</a>  </td>
                            <td> <?php echo "$row[6]"; ?> </td>
                            <td> <img src="<?php echo "$row[7]";?>" width="100">  </td>
                            <td> <?php echo "$row[8]"; ?> </td>
                            <td> <?php echo "$row[9]"; ?> </td>
                            <td><a href="editbook.php?bookid=<?php echo $row[0]; ?>">Edit</a></td>
                            <td><a onclick="return confirm('Are your Sure  to delete')" href="deletebook.php?bookid=<?php echo $row[0]; ?>">Delete</a></td>

                        </tr>


                        <?php
                    }
                    ?>
                </table>
            </div>

        </div>
    </div>
</div>
<?php include_once "footer.php";?>
</body>
</html>
