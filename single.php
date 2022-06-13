<!doctype html>
<html lang="en">
<head>
    <?php
    @session_start();
    include_once "headerfiles.php";
    include_once "connection.php";
    $bookid = $_GET["bookid"];
    ?>
    <title>Single</title>
</head>
<body>
<?php
if (isset($_SESSION["user_email"])) {
    include_once "usernavbar.php";
} else {
    include_once "publicheader.php";
}
//include_once "headerfiles.php";
$select = "select * from `books` where `bookid`=$bookid";
$result = mysqli_query($con, $select);
$row = mysqli_fetch_array($result);
$ourprice = $row["price"] - $row["price"] * $row["discount"] / 100;
?>
<div class="container" style="margin-top: 50px;">
    <div class="row">
        <h3 class="tittle-w3l">Book Details
            <span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
        </h3>

        <div class="col-md-12">
            <div class="col-md-5 col-lg-offset-2" style="align-content: center">
                <img src="<?php echo $row["coverphoto"] ?>" style="height:500px;width: 500px">
            </div>
            <div class="col-md-3" style="align-content: center;margin-left: 50px">
                <iframe src="<?php echo $row["5"] ?>" style="height: 500px" frameborder="0"></iframe>
            </div>
            
            <div class="col-md-12" style="margin-top: 30px">
                <label class="col-md-2 "> Title </label>
                <p class="col-md-8" style="color: black"> <?php echo $row["title"] ?> </p>

            </div>
            <div class="col-md-12">
                <label class="col-md-2 y"> Description </label>
                <p class="col-md-8 text-justify" style="color: black"> <?php echo $row["description"] ?> </p>

            </div>
            <div class="col-md-12">
                <label class="col-md-2 "> Edition </label>
                <p class="col-md-8" style="color: black"> <?php echo $row["edition"] ?> </p>

            </div>

            <div class="col-md-12">
                <label class="col-md-2 "> Category </label>
                <p class="col-md-8" style="color: black"> <?php echo $row["category"] ?> </p>

            </div>
            <div class="col-md-12">
                <label class="col-md-2 "> Genre </label>
                <p class="col-md-8" style="color: black"> <?php echo $row["genre"] ?> </p>

            </div>
            <div class="col-md-12">
                <label class="col-md-2 ">Original Price </label>
                <p class="col-md-8" style="color: black">&#8377; <?php echo $row["price"] ?> </p>

            </div>
            <div class="col-md-12">
                <label class="col-md-2"> Discount </label>
                <p class="col-md-8" style="color: black"> <?php echo $row["discount"] ?>% </p>

            </div>
            <div class="col-md-12">
                <label class="col-md-2">Our Price </label>
                <p class="col-md-8" style="color: black">&#8377;<?php echo $ourprice; ?></p>

            </div>
            <div class="col-md-12">
                <label class="col-md-2 " style="margin-top: 30px;">Rating </label>
                <div class="col-md-8 ">

                    <?php
                    if (isset($_SESSION["user_email"])) {
                        ?>


                        <script>
                            function setrating(bookid, rating) {
                                var rate_value = rating.value;
                                var rate_id = rating.value;
                                /*ajax start*/

                                var xhttp = new XMLHttpRequest();
                                xhttp.onreadystatechange = function () {

                                    if (this.readyState == 4 && this.status == 200) {

                                        console.log(this.responseText);
                                    }

                                };
                                xhttp.open("GET", "rating.php?bookid= " + bookid + "&rating= " + rate_value, true);
                                xhttp.send();
                                /*ajax end*/
                            }
                        </script>style="margin-top: 30px;"
                        <div class="rating1" style="margin-top: 30px">
					<span class="starRating">
						<input id="rating5" type="radio" name="rating" value="5"
                               onclick="setrating(<?php echo $row[0]; ?>,this)" readonly>
						<label for="rating5">5</label>
						<input id="rating4" type="radio" name="rating" value="4"
                               onclick="setrating('<?php echo $row[0]; ?>',this)">
						<label for="rating4">4</label>
						<input id="rating3" type="radio" name="rating" value="3" readonly
                               onclick="setrating(<?php echo $row[0]; ?>,this)">
						<label for="rating3">3</label>
						<input id="rating2" type="radio" name="rating" value="2" readonly
                               onclick="setrating(<?php echo $row[0]; ?>,this)">
						<label for="rating2">2</label>
						<input id="rating1" type="radio" name="rating" value="1" readonly
                               onclick="setrating(<?php echo $row[0]; ?>,this)">
						<label for="rating1">1</label>
					</span>
                        </div>


                    <?php
                    }
                    else{
                    $select1 = "select * from rating where bookid=$bookid";
                    $res1 = mysqli_query($con, $select1);
                    if (mysqli_num_rows($res1) > 0){
                    $avg = "select AVG(rating) as rate from `rating` where bookid=$bookid";

                    //                    echo $avg;

                    $res = mysqli_query($con, $avg);
                    $r = mysqli_fetch_array($res);
                    $rating = round($r['rate'], 1);
                    //                    echo "Rating:" . $rating . "************************";
                    $ratestring = (string)$rating;
                    //echo $ratestring;

                    $rate_ar = explode('.', $ratestring);

                    //                    var_dump($rate_ar);

                    for ($i = 0;
                    $i < $rate_ar[0];
                    $i++)
                    {
                    ?>
                        <i class="fa fa-star" style="margin-top: 30px" aria-hidden="true"></i>
                        <?php

                    }
                    if (count($rate_ar) == 2) {

                    if ($rate_ar[1] < 5) {
                        ?>
                        <i class="fa fa-star-o" style="margin-top: 30px" aria-hidden="true"></i> <!--unfilled-->
                        <?php
                    }
                    else {
                        ?>
                        <i class="fa fa-star-half-o" style="margin-top: 30px" aria-hidden="true"></i><!--half star-->
                        <?php
                    }

                    }
                    else {
                        ?>
                        <i class="fa fa-star-o" style="margin-top: 30px" aria-hidden="true"></i><!--half star-->
                        <?php
                    }
                    for ($i = 0;
                         $i < 4 - $rate_ar[0];
                         $i++) {
                        ?>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <?php
                    }

                    }
                    else {
                        ?>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <?php
                    }
                    }
                    ?>

                </div>


                <div class="col-md-12" style="margin-top: 50px">
                    <div class="col-md-3 col-lg-offset-4">
                        <input type="button" value="ADD TO CART" onclick="addtocart(<?php echo $row[0]; ?>)"
                               class="btn btn-lg btn-success">
                    </div>
<!--                    <div class="col-md-3">-->
<!--                        <a class="btn btn-danger" href="--><?php //echo "$row[5]"; ?><!--" target="_blank"><i-->
<!--                                    class="fa fa-2x fa-eye"></i>Watch Preview</a>-->
<!--                    </div>-->
                </div>
            </div>
        </div>
    </div>
    <?php
    include_once "footer.php";
    ?>
</body>
</html>