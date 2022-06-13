
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Author</title>
    <?php
    include_once "headerfiles.php"
    ?>
</head>
<body>

<?php
include_once "authornavbar.php";
if(isset($_REQUEST["msg"]))
{
    if($_REQUEST["msg"]==1)
    {
        echo "<div class='alert alert-success container text-center'><strong> Profile Updated Successfully</strong></div>";
    }

    else
    {
        echo "<div class='alert alert-warning container text-center'><strong>Request Failed</strong></div>";
    }
}
?>
<?php
@session_start();

include_once "connection.php";
$author_email=$_SESSION["author_email"];
$s="SELECT * FROM `author` WHERE email='$author_email'";
$result=mysqli_query($con,$s);
$row=mysqli_fetch_array($result);
?>
<div class="container">
    <div class="row">
        <h3 class="tittle-w3l">Profile
            <span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
        </h3>

<div class="col-md-6 col-md-offset-3">
    <form class="form-horizontal" action="updateauthorprofile.php" method="post">
        <div class="form-group">
            <label class="col-md-4">E-mail</label>
            <div class="col-md-8">
                <input type="email" readonly value="<?php echo $row[2];?>" id="tbemail"
                       name="tbemail" class="form-control">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4">Name</label>
            <div class="col-md-8">
                <input type="text" id="tbname" name="tbname" value="<?php echo $row[1];?>" class="form-control">
            </div>
        </div>



        <div class="form-group">
            <label class="col-md-4">Contact Number</label>
            <div class="col-md-8">
                <input type="text" value="<?php echo $row[3];?>" id="tbcontact"
                       name="tbcontact" class="form-control">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4">Address</label>
            <div class="col-md-8">
                <textarea id="tbaddress" name="tbaddress" data-rule-required="true"
                          class="form-control" data-msg-required="This field is required"><?php echo $row[4];?></textarea>
                <span>&nbsp;

                </span>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4">Description</label>
            <div class="col-md-8">
                <textarea id="tbdescription" name="tbdescription" data-rule-required="true"
                          class="form-control" data-msg-required="This field is required"><?php echo $row[6];?></textarea>
                <span>&nbsp;

                </span>
            </div>
        </div>




        <div class="form-group">
            <label class="col-md-4">Published Works</label>
            <div class="col-md-8">
                <textarea id="tbpublish" name="tbpublish" data-rule-required="true"
                          class="form-control" data-msg-required="This field is required"><?php echo $row[8];?></textarea>
                <span>&nbsp;

                </span>
            </div>

            <div class="col-md-4 col-md-offset-4">
                <button type="submit" class="btn btn-default"> UPDATE </button>
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