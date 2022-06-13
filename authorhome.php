<!doctype html>
<html lang="en">
<head>

    <title>Author Home</title>
    <?php include_once "headerfiles.php";?>

</head>

<body>

<?php
include_once 'connection.php';
include_once "authornavbar.php";
?>
<div class="container">
    <div class="row">
        <h3 class="tittle-w3l">Author Home
            <span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
        </h3>
        <div class="col-md-12">
            <div style="margin-top: 50px;margin-bottom: 50px" class="jumbotron">
                <marquee><h3 class="text-center">WELCOME TO AUTHOR HOME</h3></marquee>
<!--                <marquee><h3 class="text-center">WELCOME --><?php //@session_start();
//                        echo $_SESSION["author_name"]; ?><!-- TO AUTHOR HOME</h3></marquee>-->
            </div>
        </div>
    </div>
</div>
<?php include_once "footer.php"?>
</body>
</html>