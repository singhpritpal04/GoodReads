<!doctype html>
<html lang="en">
<head>
    <title>Admin Home | Book Land</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <?php
    include "headerfiles.php";
    ?>
</head>
<body>

<?php
include_once "adminnavbar.php";
?>

<div class="container">
    <div class="row">
        <div class="col-sm-9">
            <h3 class="tittle-w3l">Admin Home
                <span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
            </h3>
        </div>

        <div class="col-sm-3">
            <div class="cleanslate w24tz-current-time w24tz-middle"
                 style="display: inline-block !important; visibility: hidden !important; min-width:300px !important; min-height:145px !important;">
                <p><a href="//24timezones.com/current_local/india_time.php" style="text-decoration: none"
                      class="clock24"
                      id="tz24-1555927310-cc13072-eyJob3VydHlwZSI6IjEyIiwic2hvd2RhdGUiOiIxIiwic2hvd3NlY29uZHMiOiIwIiwiY29udGFpbmVyX2lkIjoiY2xvY2tfYmxvY2tfY2I1Y2JkOTEwZTU0NDBkIiwidHlwZSI6ImRiIiwibGFuZyI6ImVuIn0="
                      title="time in India" target="_blank" rel="nofollow"></a></p>
                <div id="clock_block_cb5cbd910e5440d"></div>
            </div>
            <script type="text/javascript" src="//w.24timezones.com/l.js" async></script>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div style="margin: 50px 0;" class="jumbotron">
                <marquee scrollamount="20"><h3 class="text-center">WELCOME TO ADMIN HOME</h3></marquee>
            </div>
        </div>
    </div>
</div>

<?php
include_once "footer.php";
?>

</body>
</html>
