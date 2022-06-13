<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Admin</title>
    <?php
    include_once "headerfiles.php"
    ?>
</head>
<body>
<?php
include_once "connection.php";
$email=$_GET["email"];
$s="SELECT * FROM `admin` WHERE email='$email'";
$result=mysqli_query($con,$s);
$row=mysqli_fetch_array($result);
?>
<?php
include_once "adminnavbar.php";
?>
<div class="container">
    <div class="row">
        <h3 class="tittle-w3l">Edit Admin
            <span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
        </h3>

<div class="col-md-6 col-md-offset-3">
    <form class="form-horizontal myval" action="updateadmin.php" method="post">
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
        <div class="form-group">
            <label class="col-md-4">Contact Number</label>
            <div class="col-md-8">
                <input type="text" value="<?php echo $row[3];?>" id="tbcontact"
                       name="tbcontact" class="form-control">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4">User Type</label>
            <div class="col-md-8">
                <select id="tbtype" name="tbtype" class="form-control">
                    <option value="">Select Type</option>
                    <option value="Admin"  <?php if($row[4]=='Admin'){echo "selected";};?> >Admin</option>
                    <option value="Sub Admin"  <?php if($row[4]=='Sub Admin'){echo "selected";};?> >Sub Admin</option>
                </select>
            </div>
        </div>


        <div class="col-md-4 col-md-offset-4">
            <button type="submit" class="btn btn-default"> UPDATE </button>
        </div>
    </form>
</div>
    </div>
</div>
<?php include_once "footer.php"?>
</body>
</html>