<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Category</title>
    <?php
    include_once "headerfiles.php"
    ?>
</head>
<body>
<?php
include_once "connection.php";
$category=$_GET["category"];
$s="SELECT * FROM `category` WHERE categoryname='$category'";
$result=mysqli_query($con,$s);
$row=mysqli_fetch_array($result);
?>
<?php
include_once "adminnavbar.php";
?>
<div class="container">
    <div class="row">
        <h3 class="tittle-w3l">Edit Category
            <span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
        </h3>


        <div class="col-md-6 col-md-offset-3">
    <form class="form-horizontal myval" action="updatecategory.php" method="post">
        <div class="form-group">
            <label class="col-md-4">Category</label>
            <div class="col-md-8">
                <input type="text" readonly value="<?php echo $row[0];?>" id="tbcategory"
                       name="tbcategory" class="form-control">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4">Description</label>
            <div class="col-md-8">
                <textarea id="tbdescription" name="tbdescription" class="form-control"><?php echo $row[1];?></textarea>
            </div>
        </div>



        <div class="col-md-4 col-md-offset-4">
            <button type="submit" class="btn btn-default"> UPDATE </button>
        </div>
    </form>
</div>

    </div>
</div>
<?php include_once "footer.php"?>
</body>
</html>