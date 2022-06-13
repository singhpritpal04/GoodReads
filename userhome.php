<!doctype html>
<html lang="en">
<head>

    <title>User Home</title>
    <?php
    include "headerfiles.php";
    ?>
</head>

<body>
<?php
include_once "usernavbar.php";
?>
<div class="container">
    <div class="row">
        <h3 class="tittle-w3l">User Home
            <span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
        </h3>
        <div class="col-md-12">
            <div style="margin-top: 50px;margin-bottom: 50px" class="jumbotron">
                <marquee><h3 class="text-center">WELCOME <?php @session_start();
                        echo $_SESSION["user_name"]; ?>TO USER HOME</h3></marquee>
            </div>
        </div>
    </div>
</div>
<?php
include "footer.php";
?>
</body>
</html>
