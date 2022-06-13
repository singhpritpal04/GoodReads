<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Signup</title>
    <?php
    include_once "headerfiles.php"
    ?>
</head>
<body>
<?php
if (isset($_REQUEST["msg"])) {
    if ($_REQUEST["msg"] == 1) {
        echo "<div class='alert alert-success container text-center'><strong> Signup successful</strong></div>";
    } else if ($_REQUEST["msg"] == 2) {
        echo "<div class='alert alert-warning container text-center'><strong>Email already exist</strong></div>";
    } else {
        echo "<div class='alert alert-warning container text-center'><strong>Request Failed</strong></div>";
    }
}
?>
<?php
include_once "publicheader.php";
?>
<div class="container">
    <div class="row">
        <h3 class="tittle-w3l">User Signup
            <span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
        </h3>
        <div class="col-md-6 col-md-offset-3">
            <form class="form-horizontal myval" action="saveuser.php" method="post">
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
                        <input type="text" data-rule-required="true" data-msg-required="This field is required"
                               id="tbname"
                               name="tbname" class="form-control">
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-md-4">Mobile Number</label>
                    <div class="col-md-8">
                        <input type="text" data-rule-required="true" data-msg-required="This field is required"
                               id="tbcontact"
                               data-rule-number="true" minlength="10" maxlength="10" name="tbcontact"
                               class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4">Address</label>
                    <div class="col-md-8">
                <textarea id="tbaddress" name="tbaddress" data-rule-required="true"
                          class="form-control" data-msg-required="This field is required"></textarea>
                    </div>
                </div>
                <div class="form-group">


                    <!--        <div class="form-group">-->
                    <!--            <label class="col-md-4">D.O.B</label>-->
                    <!--            <div class="col-md-8">-->
                    <!--                <input type="text" id="tbdob" name="tbdob" data-rule-required="true"-->
                    <!--                data-msg-required="true" class="form-control dtp">-->
                    <!--            </div>-->
                    <!--        </div>-->


                    <div class="col-md-4 col-md-offset-4">
                        <button type="submit" class="btn btn-default"> SIGNUP</button>
                    </div>
            </form>
        </div>
    </div>
</div>
<?php
include "footer.php";
?>
</body>
</html>