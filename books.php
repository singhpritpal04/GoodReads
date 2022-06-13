<?php
@session_start();
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>BookLand</title>
    <!--/tags -->
    <?php
    include "headerfiles.php";
    ?>
</head>

<body>
<?php
if (!isset($_SESSION['user_email'])) {
    include "publicheader.php";
}
else
{
    include 'usernavbar.php';
}
?>

<script>
    $(document).ready(function () {
        $('html, body').animate({
            scrollTop: $("#test").offset().top
        }, 2000);
    });
</script>
<!-- banner-2 -->
<div class="page-head_agile_info_w3l" id="test">

</div>
<!-- //banner-2 -->
<!-- page -->
<div class="services-breadcrumb">
    <div class="agile_inner_breadcrumb">
        <div class="container">
            <ul class="w3_short">
                <li>
                    <a href="index.php">Home</a>
                    <i>|</i>
                </li>
                <li>Books</li>
            </ul>
        </div>
    </div>
</div>
<!-- //page -->
<!-- top Products -->
<div class="ads-grid">
    <div class="container">
        <!-- tittle heading -->
        <h3 class="tittle-w3l">Books
            <span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
        </h3>
        <!-- //tittle heading -->

        <!-- product left -->
        <div class="side-bar col-md-3">
            <div class="search-hotel">
                <h3 class="agileits-sear-head">Search Here..</h3>
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
                    <input type="search" placeholder="Product name..." name="search" required="">
                    <input type="submit" value=" ">
                </form>
            </div>
            <!-- price range -->
            <div class="range">
                <h3 class="agileits-sear-head">Price range</h3>
                <ul class="dropdown-menu6">
                    <li>

                        <div id="slider-range"></div>
                        <input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;"/>
                    </li>
                </ul>
            </div>
            <!-- //price range -->
            <!-- food preference -->

            <!-- //food preference -->
            <!-- discounts -->
            <div class="left-side">
                <h3 class="agileits-sear-head">Discount</h3>
                <ul>
                    <li>
                        <input type="checkbox" class="checked" value="5" onclick="filterbydiscount(this)">
                        <span class="span">5%</span>
                    </li>
                    <li>
                        <input type="checkbox" class="checked" value="10" onclick="filterbydiscount(this)">
                        <span class="span">10%</span>
                    </li>
                    <li>
                        <input type="checkbox" class="checked" value="20" onclick="filterbydiscount(this)">
                        <span class="span">20%</span>
                    </li>
                    <li>
                        <input type="checkbox" class="checked" value="30" onclick="filterbydiscount(this)">
                        <span class="span">30%</span>
                    </li>
                    <li>
                        <input type="checkbox" class="checked" value="50" onclick="filterbydiscount(this)">
                        <span class="span">50%</span>
                    </li>
                    <li>
                        <input type="checkbox" class="checked" value="60" onclick="filterbydiscount(this)">
                        <span class="span">60%</span>
                    </li>
                </ul>
            </div>
            <!-- //discounts -->
            <!-- reviews -->
            <div class="customer-rev left-side">
                <h3 class="agileits-sear-head">Customer Review</h3>
                <ul>
                    <li>
                        <a href="#">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <span>5.0</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                            <span>4.0</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                            <span>3.5</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                            <span>3.0</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                            <span>2.5</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- //reviews -->
            <!-- cuisine -->

            <!-- //cuisine -->

        </div>
        <!-- //product left -->
        <!-- product right -->
        <div class="agileinfo-ads-display col-md-9 w3l-rightpro" id="showbookshere">
            <div class="wrapper">
                <?php

                if(isset($_GET["search"]))
                {
                    $title=$_GET["search"];
                    $select_Cat = "select * from books where title like '%$title%'";
                }elseif (isset($_GET['catname'])) {

                    $catname = urldecode($_GET['catname']);
                    $select_Cat = "select * from books where category='$catname'";
                }

                else {
                    $select_Cat = "select * from books";
                }
                $result_Cat = mysqli_query($con, $select_Cat);
                if (mysqli_num_rows($result_Cat) ==0)
                {
                    echo "<h2>No book found</h2>";
                }
                if (mysqli_num_rows($result_Cat) > 3) {
                /*when number of rows greater than 3*/
                $count = 0;
                while ($row_books = mysqli_fetch_array($result_Cat)) {
                if ($count % 3 == 0) {
                ?>
                <div class="product-sec1">
                    <?php
                    }
                    /*show product here start*/
                    ?>
                    <div class="col-xs-4 product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img src="<?php echo $row_books[7]; ?>" alt="" style="width: 160px;height: 160px ">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="single.php?bookid=<?php echo $row_books[0]?>"
                                        class="link-product-add-cart">Quick View</a>
                                    </div>
                                </div>
                                <span class="product-new-top">New</span>
                            </div>
                            <div class="item-info-product ">
                               <div style="height: 30px;"> <h4>
                                    <a href="single.php?bookid=<?php echo $row_books[0] ?>"><?php echo $row_books[1]; ?></a>
                                </h4></div>
                                <div class="info-product-price">
                                    <span class="item_price">&#8377;<?php echo $row_books[4]; ?></span>
                                    <del>
                                        &#8377;<?php echo round($row_books[4] - $row_books[8] / 100 * $row_books[4], 2); ?></del>
                                </div>
                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                    <form action="#" method="post">
                                        <fieldset>
                                            <input type="hidden" name="cmd" value="_cart"/>
                                            <input type="hidden" name="add" value="1"/>
                                            <input type="hidden" name="business" value=" "/>
                                            <input type="hidden" name="item_name"
                                                   value="Zeeba Basmati Rice - 5 KG"/>
                                            <input type="hidden" name="amount" value="950.00"/>
                                            <input type="hidden" name="discount_amount" value="1.00"/>
                                            <input type="hidden" name="currency_code" value="USD"/>
                                            <input type="hidden" name="return" value=" "/>
                                            <input type="hidden" name="cancel_return" value=" "/>
                                            <input type="button" name="submit" value="Add to cart" class="button"
                                                   onclick="addtocart('<?php echo $row_books[0]; ?>')"/>
                                        </fieldset>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    <?php
                    /*show product here end*/
                    $count++;
                    if ($count % 3 == 0 && $count != 0) {
                    ?>
                    <div class="clearfix"></div>
                </div>
                <?php
                }
                elseif ($count == mysqli_num_rows($result_Cat)) {
                ?>
                <div class="clearfix"></div>
            </div>
            <?php
            }

            }
            ?>
            <!-- first section -->
            <!-- //first section -->
            <?php

            } else {
                /*when number of rows less than three*/
                ?>
                <!-- first section -->
                <div class="product-sec1">
                    <?php
                    $count=mysqli_num_rows($result_Cat);
                     if($count==0)
                                    {?>
                    <h1 class="text-center">NO BOOKS FOUND</h1>
                    <?php
                    }
                    while ($row_books = mysqli_fetch_array($result_Cat)) {
                        ?>
                        <div class="col-xs-4 product-men">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">

                                    <img src="<?php echo $row_books[7]; ?>" alt="" style="width: 160px;height: 160px ">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="single.php?bookid=<?php echo $row_books[0]?>"
                                               class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    <span class="product-new-top">New</span>
                                </div>
                                <div class="item-info-product ">
                                    <h4>
                                        <a href="single.php?bookid=<?php echo $row_books[0]?>"><?php echo $row_books[1]; ?></a>
                                    </h4>
                                    <div class="info-product-price">
                                        <span class="item_price">&#8377;<?php echo $row_books[4]; ?></span>
                                        <del>
                                            &#8377;<?php echo round($row_books[4] - $row_books[8] / 100 * $row_books[4], 2); ?></del>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart"/>
                                                <input type="hidden" name="add" value="1"/>
                                                <input type="hidden" name="business" value=" "/>
                                                <input type="hidden" name="item_name"
                                                       value="Zeeba Basmati Rice - 5 KG"/>
                                                <input type="hidden" name="amount" value="950.00"/>
                                                <input type="hidden" name="discount_amount" value="1.00"/>
                                                <input type="hidden" name="currency_code" value="USD"/>
                                                <input type="hidden" name="return" value=" "/>
                                                <input type="hidden" name="cancel_return" value=" "/>
                                                <input type="button" name="submit" value="Add to cart"
                                                       onclick="addtocart('<?php echo $row_books[0]; ?>')"
                                                       class="button"/>
                                            </fieldset>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="clearfix"></div>
                </div>
                <!-- //first section -->
                <?php
            }
            ?>
        </div>
    </div>
    <!-- //product right -->
</div>
</div>
<!-- //top products -->
<!-- special offers -->
<!-- special offers -->
<div class="featured-section" id="projects">
    <div class="container">
        <!-- tittle heading -->
        <h3 class="tittle-w3l">Heavy Discount
            <span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
        </h3>
        <!-- //tittle heading -->
        <div class="content-bottom-in">
            <ul id="flexiselDemo1">
                <?php
                $s2="select * from books ORDER BY discount desc limit 8";
                $res2=mysqli_query($con,$s2);
                while($r2=mysqli_fetch_array($res2)) {
                    ?>

                    <li>
                        <div class="w3l-specilamk" >
                            <div class="speioffer-agile">
                                <a href="single.php?bookid=<?php echo $r2[0] ?>">
                                    <img src="<?php echo $r2["coverphoto"]?>" style="height: 160px; width: 160px" alt="">
                                </a>
                            </div>
                            <div class="product-name-w3l">
                                <div style="height: 50px;"> <h4>
                                        <a href="single.php?bookid=<?php echo $r2[0] ?>"><?php echo $r2["title"]?></a>
                                    </h4></div>
                                <div class="w3l-pricehkj" >
                                    <h6>&#8377;<?php echo $r2["price"]-$r2["price"]*$r2["discount"]/100;?></h6>
                                    <p >Save:&#8377;<?php echo $r2["price"]-($r2["price"]-$r2["price"]*$r2["discount"]/100);?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Discount:<?php echo $r2["discount"]?>%</p>
                                </div>
                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                    <form action="#" method="post">
                                        <fieldset>
                                            <input type="hidden" name="cmd" value="_cart"/>
                                            <input type="hidden" name="add" value="1"/>
                                            <input type="hidden" name="business" value=" "/>
                                            <input type="hidden" name="item_name" value="Aashirvaad, 5g"/>
                                            <input type="hidden" name="amount" value="220.00"/>
                                            <input type="hidden" name="discount_amount" value="1.00"/>
                                            <input type="hidden" name="currency_code" value="USD"/>
                                            <input type="hidden" name="return" value=" "/>
                                            <input type="hidden" name="cancel_return" value=" "/>
                                            <input type="submit" name="submit" value="Add to cart" class="button"/>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </li>
                    <?php
                }?>
            </ul>
        </div>
    </div>
</div>
<!-- //special offers -->
<!-- //newsletter -->
<?php
include "footer.php";
?>

</body>

</html>