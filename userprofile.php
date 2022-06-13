
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit User</title>
    <?php
    include_once "headerfiles.php"
    ?>
</head>
<body>

<?php
include_once "usernavbar.php";
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
$user_email=$_SESSION["user_email"];
$s="SELECT * FROM `user` WHERE user_email='$user_email'";
$result=mysqli_query($con,$s);
$row=mysqli_fetch_array($result);
?>
<div class="container">
    <div class="row">
        <h3 class="tittle-w3l">My Profile
            <span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
        </h3>


<div class="col-md-6 col-md-offset-3">
    <form class="form-horizontal" action="updateuserprofile.php" method="post">
        <div class="form-group">
            <label class="col-md-4">E-mail</label>
            <div class="col-md-8">
                <input type="email" readonly value="<?php echo $row[0];?>" id="tbemail"
                       name="tbemail" class="form-control">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4">Name</label>
            <div class="col-md-8">
                <input type="text" id="tbname" name="tbname" value="<?php echo $row[2];?>" class="form-control">
            </div>
        </div>
<!--        <div class="form-group">-->
<!--            <label class="col-md-4">Gender</label>-->
<!--            <div >-->
<!--                <input type="radio" id="tbmale" name="tbgender" value="male"--><?php //if($row[3]=='male'){echo "checked";}?><!-->
<!--                <input type="radio" id="tbfemale" name="tbgender" value="female"--><?php //if($row[3]=='female'){echo "checked";}?><!-->
<!--            </div>-->
<!--        </div>-->


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
                <textarea id="tbaddress" class="form-control" name="tbaddress" data-rule-required="true"
                          data-msg-required="This field is required"><?php echo $row[4];?></textarea>
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