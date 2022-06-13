<?php
//include "cart.php";
//@session_start();
//echo "<pre>";
//print_r($_SESSION["cartarray"]);
//echo "</pre>";
//
////unset($_SESSION['cartarray']);
//
//echo "<br>";
//echo "<br>";
//echo "<br>";
//echo "<br>";
//echo "<br>";
//echo "<br>";
//echo "<h1>Date in PHP</h1>";
//
//
//date_default_timezone_set("Asia/Kolkata");
//echo date("Y-m-d");
//
//
//
//echo "<br>";
//
//$array = $_SESSION["cartarray"];
//$total = 0;
//for ($i = 0; $i < count($array); $i++) {
//    $total += $array[$i]->totalprice;
//}
//echo $total;
echo round(4.0000,1);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php
    include "headerfiles.php";
    ?>
</head>
<body>
<?php
include "publicheader.php";
?>
<script>
    function setrating(bookid, rating) {
        var rate_value = rating.value;
        var rate_id = rating.value;
        console.log(rate_value);


        /*ajax start*/

        /*ajax end*/
    }
</script>
<div class="rating1">
					<span class="starRating">
						<input id="rating5" type="radio" name="rating" value="5"
                               onclick="setrating(<?php echo $row[0]; ?>,this)">
						<label for="rating5">5</label>
						<input id="rating4" type="radio" name="rating" value="4" onclick="setrating(this)">
						<label for="rating4">4</label>
						<input id="rating3" type="radio" name="rating" value="3" onclick="setrating(this)">
						<label for="rating3">3</label>
						<input id="rating2" type="radio" name="rating" value="2" onclick="setrating(this)">
						<label for="rating2">2</label>
						<input id="rating1" type="radio" name="rating" value="1" onclick="setrating(this)">
						<label for="rating1">1</label>
					</span>

</div>

<div class="customer-rev left-side">
    <ul>
        <li>
            <a>

                <?php
                $rate = 3.6;
                $rate_Ar = explode('.',$rate);

                $rate_Ar[0]; /*full start   <i class="fa fa-star" aria-hidden="true"></i>*/


                ?>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
                <span>3.5</span>
            </a>
        </li>
    </ul>
</div>

<?php
include "footer.php";
?>
</body>
</html>
