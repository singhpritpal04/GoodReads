<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Login</title>
    <?php
    include_once "headerfiles.php"
    ?>

</head>
<body>
<?php
if (isset($_REQUEST["msg"])) {
    if ($_REQUEST["msg"] == 1) {
        echo "<div class='alert alert-success'><strong> Password Changed Successfully</strong></div>";
    } else {
        echo "<div class='alert alert-warning'><strong>Wrong Old Password</strong></div>";
    }
}
?>
<?php include_once "usernavbar.php" ?>
<div class="container">
    <div class="row">
        <h3 class="tittle-w3l">Change Password
            <span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
        </h3>

        <div class="col-md-6 col-md-offset-3">
            <form class="form-horizontal myval" action="actionuserpass.php" method="post">
                <div class="form-group">
                    <label class="col-md-4">E-mail</label>
                    <div class="col-md-8">
                        <input type="email" data-rule-required="true" data-msg-required="This field is required"
                               id="tbemail"
                               name="tbemail" class="form-control" readonly
                               value=<?php echo $_SESSION["user_email"]; ?>>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4">Old Password</label>
                    <div class="col-md-8">
                        <input type="password" class="form-control" data-rule-required="true"
                               data-msg-required="This field is required" id="tboldpassword" name="tboldpassword">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4">New Password</label>
                    <div class="col-md-8">
                        <input type="password" class="form-control" data-rule-required="true"
                               data-msg-required="This field is required" id="tbnewpassword" name="tbnewpassword">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4">Confirm Password</label>
                    <div class="col-md-8">
                        <input type="password" class="form-control" data-rule-required="true"
                               data-rule-equalto="#tbnewpassword"
                               data-msg-equalto="Password and Confirm Password do not match"
                               data-msg-required="This field is required" id="tbconpassword" name="tbconpassword">
                    </div>
                </div>

                <div class="col-md-4 col-md-offset-4">
                    <button type="submit" class="form-control btn btn-default"> Change</button>
                </div>
                <br><br>

            </form>
            <div class="col-md-6 col-md-offset-3">

            </div>
        </div>
    </div>
</div>
<?php include_once "footer.php"; ?>
</body>
</html>