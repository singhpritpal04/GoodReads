<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Admin</title>
    <?php
    include_once "headerfiles.php"
    ?>
</head>
<body>
<?php
if (isset($_REQUEST["msg"])) {
    if ($_REQUEST["msg"] == 1) {
        echo "<div class='alert alert-warning text-center container'><strong>Category added successfully</strong></div>";
    } else if ($_REQUEST["msg"] == 2) {
        echo "<div class='alert alert-warning container text-center'><strong>Category already exist</strong></div>";
    } else {
        echo "<div class='alert alert-warning container text-center'><strong>Request Failed</strong></div>";
    }
}
?>

<?php
include_once "adminnavbar.php";
?>

<div class="container">
    <div class="row">
        <h3 class="tittle-w3l">Add Category
            <span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
        </h3>

        <div class="col-md-6 col-md-offset-3">
            <form class="form-horizontal myval" action="addcategoryaction.php" method="post">
                <div class="form-group">
                    <label class="col-md-4">Category Name</label>
                    <div class="col-md-8">
                        <input type="text" data-rule-required="true" data-msg-required="This field is required"
                               id="tbcategory"
                               name="tbcategory" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4">Description</label>
                    <div class="col-md-8">
                <textarea class="form-control" data-rule-required="true"
                          data-msg-required="This field is required" id="tbdescription" name="tbdescription"></textarea>
                    </div>
                </div>


                <div class="col-md-4 col-md-offset-4">
                    <button type="submit" class="btn btn-default"> SUBMIT</button>
                </div>
            </form>
        </div>

    </div>
</div>
<?php include_once "footer.php"; ?>
</body>
</html>
