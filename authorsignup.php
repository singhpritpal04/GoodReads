<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Author Signup</title>
    <?php
    include_once "headerfiles.php"
    ?>
    <style>
        label
        {
        font-family:"Arial";
        font-size:15px;
        }
        span
        {
          color:#a4282c;
        }
    </style>
</head>

<body>
<?php
if(isset($_REQUEST["msg"]))
{
    if($_REQUEST["msg"]==1)
    {
        echo "<div class='alert alert-success container text-center'><strong> Signup successful</strong></div>";
    }
    else if($_REQUEST["msg"]==2)
    {
        echo "<div class='alert alert-warning container text-center'><strong>Email already exist</strong></div>";
    }

    else if($_REQUEST["msg"]==0)
    {
        echo "<span>Request Failed</strong></span>";
    }
}
?>
<?php
include_once "publicheader.php";
?>
<div class="container">
    <div class="row">
        <h3 class="tittle-w3l">Author Signup
            <span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
        </h3>

<div class="col-md-6 col-md-offset-3">
    <form class="form-horizontal myval" action="signupaction.php" method="post" form enctype="multipart/form-data">
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
        <div class="form-group">
            <label class="col-md-4">Confirm Password</label>
            <div class="col-md-8">
                <input type="password" id="tbconpass" name="tbconpass" data-rule-equalto="#tbpassword"
                       data-msg-equalto="Password and Confirm Password do not match" class="form-control">
            </div>
        </div>


        <div class="form-group">
            <label class="col-md-4">Full Name</label>
            <div class="col-md-8">
                <input type="text" id="tbname" name="tbname" data-rule-required="true" class="form-control"
                       data-msg-required="This field is required">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4">Mobile Number</label>
            <div class="col-md-8">
                <input type="text" data-rule-required="true" data-msg-required="This field is required" id="tbcontact"
                       data-rule-number="true" minlength="10" maxlength="10" name="tbcontact" class="form-control">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4">Address</label>
            <div class="col-md-8">
                <textarea id="tbaddress" name="tbaddress" data-rule-required="true"
                        class="form-control"  data-msg-required="This field is required"></textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4">Photo</label>
            <div class="col-md-8">
                <input type="file" id="tbphoto" name="tbphoto" data-rule-required="true"
                       data-msg-required="This field is required">
            </div>
        </div>


            <div class="col-md-8 col-md-offset-4">
            <span>
                <?php
                if(isset($_REQUEST["msg"]))
                {
                    if($_REQUEST["msg"]==3)
                    {
                        echo "please select jpg or png file";
                    }
                    else if($_REQUEST["msg"]==4)
                    {
                      echo  "file size must be less than 500kB";
                    }

                }
                ?>
            </span>



        </div>
        <div class="form-group">
            <label class="col-md-4">Description</label>
            <div class="col-md-8">
                <textarea id="tbdescription" name="tbdescription" data-rule-required="true"
                          class="form-control" data-msg-required="This field is required"></textarea>
                <span>&nbsp;

                </span>
            </div>
        </div>




            <div class="form-group">
                <label class="col-md-4">Published Works</label>
                <div class="col-md-8">
                <textarea id="tbpublish" name="tbpublish" data-rule-required="true"
                          class="form-control" data-msg-required="This field is required"></textarea>
                    <span>&nbsp;

                </span>
                </div>
<!--        <div class="form-group">-->
<!--            <label class="col-md-4">D.O.B</label>-->
<!--            <div class="col-md-8">-->
<!--                <input type="text" id="tbdob" name="tbdob" data-rule-required="true"-->
<!--                data-msg-required="true" class="form-control dtp">-->
<!--            </div>-->
<!--        </div>-->


        <div class="col-md-4 col-md-offset-4">
            <button type="submit" class="btn btn-default"> SUBMIT </button>
        </div>
    </form>
</div>
    </div>
</div>
<?php include_once "footer.php";?>
</body>
</html>