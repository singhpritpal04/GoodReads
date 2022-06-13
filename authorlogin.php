<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Author Login</title>
    <?php
    include_once "headerfiles.php"
    ?>
    <style>
        .sp1 {
            color: #a4282c;
            font-weight: bold;
        }
    </style>
</head>
<body>
<?php include_once "publicheader.php"?>
<div class="container">
    <div class="row">
        <h3 class="tittle-w3l">Author Login
            <span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
        </h3>

<div class="col-md-6 col-md-offset-3">
    <form class="form-horizontal myval" action="checkauthor.php" method="post">
        <div class="form-group">
            <label class="col-md-4">E-mail</label>
            <div class="col-md-8">
                <input type="email" data-rule-required="true" data-msg-required="This field is required" id="tbemail"
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
        <div class="col-md-4 col-md-offset-4">
            <button type="submit" class="form-control btn btn-default"> LOGIN </button>
        </div> <br><br>

    </form>
    <?php
    if(isset($_REQUEST["msg"]))
    {
    echo" <div class='col-md-offset-3 col-md-9'  ><span class='sp1'>",$_REQUEST["msg"]," OR signup request pending</span></div>";

    }
    ?>
    </div>

</div>
</div>
</div>
<?php include_once "footer.php"?>
</body>
</html>