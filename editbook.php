<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Book</title>
    <?php
    include_once "headerfiles.php"
    ?>
</head>
<body>
<?php
include_once "connection.php";
$bookid = $_GET["bookid"];
@session_start();
$s = "SELECT * FROM `books` WHERE bookid=$bookid";
$result = mysqli_query($con, $s);
$row = mysqli_fetch_array($result);
?>
<?php
include_once "authornavbar.php";
?>
<?php
if (isset($_REQUEST["msg"])) {
    if ($_REQUEST["msg"] == 1) {
        header("location:viewbook.php");
    } else {
        echo "<div class='alert alert-warning'><strong>Request Failed</strong></div>";
    }
}
?>
<div>
    <div>
        <h3 class="tittle-w3l">Edit Book
            <span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
        </h3>

<div class="col-md-6 col-md-offset-3">
    <form class="form-horizontal myval" action="updatebook.php" method="post" enctype="multipart/form-data">

        <div class="form-group">
            <label class="col-md-4">Book ID</label>
            <div class="col-md-8">
                <input type="text" readonly value="<?php echo $row[0]; ?>" id="tbid"
                       name="tbid" class="form-control">
            </div>
        </div>


        <div class="form-group">
            <label class="col-md-4">Title</label>
            <div class="col-md-8">
                <input type="text" value="<?php echo $row[1]; ?>" id="tbtitle"
                       name="tbtitle" class="form-control">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4">Description</label>
            <div class="col-md-8">
                <textarea id="tbdescription" name="tbdescription" class="form-control"><?php echo $row[2]; ?></textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4">Edition </label>
            <div class="col-md-8">
                <input type="text" value="<?php echo $row[3]; ?>" id="tbedition"
                       name="tbedition" class="form-control">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4">Price </label>
            <div class="col-md-8">
                <input type="text" value="<?php echo $row[4]; ?>" id="tbprice"
                       name="tbprice" class="form-control">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4">E-Edition </label>
            <div class="col-md-8">
                <input type="file" value="<?php echo $row[5]; ?>" id="tbe"
                       name="tbe">
            </div>
        </div>
        <div class="col-md-8 col-md-offset-4">
            <span>
                <?php
                if (isset($_REQUEST["msg"])) {
                    if ($_REQUEST["msg"] == 5) {
                        echo "please select pdf file";
                    } else if ($_REQUEST["msg"] == 6) {
                        echo "file size must be less than 1 MB";
                    }

                }
                ?>
            </span>
        </div>

        <div class="form-group">
            <label class="col-md-4">Genre </label>
            <div class="col-md-8">
                <input type="text" value="<?php echo $row[6]; ?>" id="tbgenre"
                       name="tbgenre" class="form-control">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4">Cover Photo</label>
            <div class="col-md-8">
                <input type="file" id="tbphoto" name="tbphoto">
            </div>
        </div>
        <div class="form-group">
            <img src="<?php echo $row[7]; ?>" alt="" style="margin:  0 auto; display: block;width: 200px" class="img-responsive">
        </div>

        <div class="col-md-8 col-md-offset-4">
            <span>
                <?php
                if (isset($_REQUEST["msg"])) {
                    if ($_REQUEST["msg"] == 3) {
                        echo "please select jpg or png file";
                    } else if ($_REQUEST["msg"] == 4) {
                        echo "file size must be less than 500kB";
                    }

                }
                ?>
            </span>
        </div>


        <div class="form-group">
            <label class="col-md-4">discount </label>
            <div class="col-md-8">
                <input type="text" value="<?php echo $row[8]; ?>" id="tbdiscount"
                       name="tbdiscount" class="form-control">
            </div>
        </div>


        <div class="form-group">
            <label class="col-md-4">Category</label>
            <div class="col-md-8">
                <select id="tbcategory" name="tbcategory" class="form-control" data-rule-required="true"
                        data-msg-required="This field is required">
                    <option value="">Select Category</option>
                    <?php
                    include_once "connection.php";
                    $select = "select * from category";
                    $result = mysqli_query($con, $select);
                    while ($row_cat = mysqli_fetch_array($result)) {
                        ?>
                        <option <?php if ($row[9]==$row_cat[0]){ echo "selected"; } ?>  value="<?php echo $row_cat[0]; ?>"><?php echo $row_cat[0]; ?></option>
                    <?php
                    }
                    ?>
                    <span id="sp1"></span>
                </select>
            </div>
        </div>


        <div class="col-md-4 col-md-offset-4">
            <button type="submit" class="btn btn-default"> UPDATE</button>
        </div>

    </form>
</div>
    </div>
</div>
<?php include_once "footer.php";?>
</body>
</html>