<?php
if (!isset($_GET['bid'])) {
    header("location:index.php");
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <?php
    include "headerfiles.php";
    ?>
</head>
<body>
<?php
include "usernavbar.php";
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron"><h2 class="text-center">Payment Done Successfully & Your Order ID
                    is <?php echo $_GET['bid']; ?></h2></div>
        </div>
    </div>
</div>
<?php
include "footer.php";
?>
</body>
</html>