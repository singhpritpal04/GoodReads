<!doctype html>
<html lang="en">
<head>
    <?php
    include_once "headerfiles.php";

    ?>
    <title>View Admin</title>

</head>
<body>
<?php include_once "adminnavbar.php"; ?>
<div class="container">
    <div class="row">
        <h3 class="tittle-w3l">View Admin
            <span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
        </h3>
        <div class="col-md-12">


<table class="table table-bordered table-hover">
    <th>E-mail</th>
    <th>Name</th>
    <th>Contact Number</th>
    <th>User Type</th>
    <th colspan="2">Controls</th>
  <?php

  include_once "connection.php";
  $selectQuery="SELECT * FROM `admin`";
  $result=mysqli_query($con,$selectQuery);
  while($row=mysqli_fetch_array($result)) {
      ?>
      <tr>
          <td> <?php echo "$row[0]"; ?> </td>
          <td> <?php echo "$row[2]"; ?> </td>
          <td> <?php echo "$row[3]"; ?> </td>
          <td> <?php echo "$row[4]"; ?> </td>
          <td><a href="editadmin.php?email=<?php echo $row[0];?>">Edit</a></td>
          <td><a onclick="return confirm('Are you sure to delete?')" href="deleteadmin.php?email=<?php echo $row[0];?>">Delete</a></td>

      </tr>


      <?php
  }
  ?>
</table>
        </div>
    </div>
</div>
<?php include_once "footer.php"?>
</body>
</html>
