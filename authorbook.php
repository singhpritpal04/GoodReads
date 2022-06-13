<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Book</title>
    <?php
    include_once "headerfiles.php"
    ?>

</head>
<body>

<?php
include_once "authornavbar.php";
?>
<?php
if (isset($_REQUEST["msg"])) {
    if ($_REQUEST["msg"] == 1) {
        echo "<div class='alert alert-success'><strong> Book Added successfully</strong></div>";
    } else if ($_REQUEST["msg"] == 0) {
        echo "<div class='alert alert-warning'><strong>Request Failed</strong></div>";
    }
}
?>
<div class="container">
    <div class="row">
        <h3 class="tittle-w3l">Add Book
            <span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
        </h3>
<div class="col-md-6 col-md-offset-3">
    <form class="form-horizontal myval" action="savebook.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label class="col-md-4">Title</label>
            <div class="col-md-8">
                <input type="text" data-rule-required="true" data-msg-required="This field is required" id="tbtitle"
                       name="tbtitle" class="form-control">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4">Description</label>
            <div class="col-md-8">
                <textarea id="tbdescription" name="tbdescription" data-rule-required="true"
                          class="form-control" data-msg-required="This field is required"></textarea>
            </div>
        </div>


        <div class="form-group">
            <label class="col-md-4">Price</label>
            <div class="col-md-8">
                <input type="text" data-rule-required="true" data-msg-required="This field is required" id="tbprice"
                       name="tbprice" class="form-control" data-rule-number="true">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4">Edition</label>
            <div class="col-md-8">
                <input type="text" data-rule-required="true" data-msg-required="This field is required" id="tbedition"
                       name="tbedition" class="form-control" >
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4">e-edition</label>
            <div class="col-md-8">
                <input type="file" data-rule-required="true" data-rule-extension="pdf" data-msg-required="This field is required" id="tbe"
                       name="tbe">
            </div>
        </div>
        <?php
        if (isset($_REQUEST["msg"])) {
            if ($_REQUEST["msg"] == 5) {
                echo "please select pdf file";
            } else if ($_REQUEST["msg"] == 6) {
                echo "file size must be less than 1 MB";
            }

        }
        ?>

        <div class="form-group">
            <label class="col-md-4">Genre</label>
            <div class="col-md-8">
                <input type="text" data-rule-required="true" data-msg-required="This field is required" id="tbgenre"
                       name="tbgenre" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4">Cover Photo</label>
            <div class="col-md-8">
                <input type="file" id="tbphoto" name="tbphoto" data-rule-required="true"
                       data-msg-required="This field is required" data-rule-extension="jpg|png|gif|jpeg">
            </div>
        </div>


        <div class="col-md-8 col-md-offset-4">
            <span>
                <?php
                if (isset($_REQUEST["msg"])) {
                    if ($_REQUEST["msg"] == 2) {
                        echo "please select jpg or png file";
                    } else if ($_REQUEST["msg"] == 3) {
                        echo "file size must be less than 500kB";
                    }

                }
                ?>
            </span>


        </div>

        <div class="form-group">
            <label class="col-md-4">discount</label>
            <div class="col-md-8">
                <input type="text" data-rule-required="true" data-msg-required="This field is required" id="tbdiscount"
                       name="tbdiscount" class="form-control" data-rule-number="true">
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
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<option value='$row[0]'>$row[0]</option>";
                    }
                    ?>
                </select>
            </div>
        </div>


        <div class="col-md-4 col-md-offset-4">
            <button type="submit" class="form-control btn btn-default"> Add</button>
        </div>

    </form>
</div>
    </div>
</div>
<?php include_once "footer.php"?>
</body>
</html>