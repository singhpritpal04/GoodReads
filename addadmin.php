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
        echo "<div class='alert alert-warning'><strong>Admin added successfully</strong></div>";
    } else if ($_REQUEST["msg"] == 2) {
        echo "<div class='alert alert-warning'><strong>Email already exist</strong></div>";
    } else {
        echo "<div class='alert alert-warning'><strong>Request Failed</strong></div>";
    }
}
?>
<?php
include_once "adminnavbar.php";
?>
<div class="container">
    <div class="row">
        <h3 class="tittle-w3l">Add Admin
            <span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
        </h3>
        <div class="col-md-6 col-md-offset-3">
            <form class="form-horizontal myval" action="saveadmin.php" method="post">
                <div class="form-group">
                    <label class="col-md-4">E-mail</label>
                    <div class="col-md-8">
                        <input type="email" data-rule-required="true" data-msg-required="This field is required"
                               id="tbemail"
                               name="tbemail" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4">Password</label>
                    <div class="col-md-8">
                        <input type="password" class="form-control" data-rule-required="true"
                               data-msg-required="This field is required" id="tbpassword" name="tbpassword">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4">Confirm Password</label>
                    <div class="col-md-8">
                        <input type="password" id="tbconpass" name="tbconpass" data-rule-equalto="#tbpassword"
                               data-msg-equalto="Password and Confirm Password do not match" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4">Name</label>
                    <div class="col-md-8">
                        <input type="text" id="tbname" name="tbname" data-rule-required="true" class="form-control"
                               data-msg-required="This field is required">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4">Contact Number</label>
                    <div class="col-md-8">
                        <input type="text" data-rule-required="true" data-msg-required="This field is required"
                               id="tbcontact"
                               name="tbcontact" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4">User Type</label>
                    <div class="col-md-8">
                        <select id="tbtype" name="tbtype" class="form-control" data-rule-required="true"
                                data-msg-required="This field is required">
                            <option value="">Select Type</option>
                            <option value="Admin">Admin</option>
                            <option value="Sub Admin">Sub Admin</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-4">
                    <button type="submit" class="btn btn-default"> SUBMIT</button>
                </div>
            </form>
        </div>

    </div>
</div>
<?php include_once "footer.php" ?>
</body>
</html>