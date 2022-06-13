<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Book Land | Home</title>

    <?php
    include "headerfiles.php";
    ?>
</head>
<body>
<?php
include "publicheader.php";

include_once "connection.php";
if (isset($_REQUEST['search'])) {
    $search = $_REQUEST['search'];
    $select = "select * from `books` where title like '%" . $search . "%' order by `bookid` desc limit 3";
    ?>
    <script>
        $(document).ready(function () {
            $('html, body').animate({
                scrollTop: $("#test").offset().top
            }, 2000);
        });
    </script>
    <?php
} else {
    $select = "select * from `books`order by `bookid` desc limit 3";
}

?>
<!-- banner -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators-->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
        <li data-target="#myCarousel" data-slide-to="3" class=""></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <div class="container">
                <div class="carousel-caption">
                    <h3>Big
                        <span>Save</span>
                    </h3>
                    <p>Get flat
                        <span>50%</span> off</p>
                    <!--                    <a class="button2" href="product.html">Shop Now </a>-->
                </div>
            </div>
        </div>
        <div class="item item2">
            <div class="container">
                <div class="carousel-caption">
                    <h3>Great
                        <span>Savings</span>
                    </h3>
                    <p>Get Upto
                        <span>30%</span> Off</p>
                    <!--                    <a class="button2" href="product.html">Shop Now </a>-->
                </div>
            </div>
        </div>
        <div class="item item3">
            <div class="container">
                <div class="carousel-caption">
                    <h3>Big
                        <span>Deal</span>
                    </h3>
                    <p>Get Best Offer Upto
                        <span>75%</span>
                    </p>
                    <!--                    <a class="button2" href="product.html">Shop Now </a>-->
                </div>
            </div>
        </div>
        <div class="item item4">
            <div class="container">
                <div class="carousel-caption">
                    <h3>Today
                        <span>Discount</span>
                    </h3>
                    <p>Get Now
                        <span>40%</span> Discount</p>
                    <!--                    <a class="button2" href="product.html">Shop Now </a>-->
                </div>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- //banner -->

<!-- top Products -->
<div class="ads-grid" id="test">
    <div class="container">
        <!-- tittle heading -->
        <h3 class="tittle-w3l">Our Top Products
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
                <form action="#" method="post">
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

        </div>
        <!-- //product left -->
        <!-- product right -->
        <div class="agileinfo-ads-display col-md-9" id="showbookshere">
            <div class="wrapper">
                <!-- first section (nuts) -->
                <div class="product-sec1">
                    <h3 class="heading-tittle">Latest Books</h3>
                    <?php
                    $res = mysqli_query($con, $select);
                    while ($row = mysqli_fetch_array($res)) {
                        ?>
                        <div>
                            <div class="col-md-4 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="<?php echo $row['coverphoto']; ?>" style="height:160px;width: 160px  "
                                             alt="">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="single.php?bookid=<?php echo $row[0] ?>"
                                                   class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>
                                    </div>
                                    <div class="item-info-product ">
                                        <div style="height:30px">
                                            <h4>
                                                <a href="single.php?q=<?php echo $r2[0] ?>"><?php echo $row['title']; ?></a>
                                            </h4>
                                        </div>
                                        <div class="info-product-price">
                                            <span class="item_price">&#8377;<?php echo $row['price'] - $row["price"] * $row["discount"] / 100; ?></span>
                                            <del>&#8377;<?php echo $row["price"] ?></del>
                                        </div>
                                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                            <form action="#" method="post">
                                                <fieldset>
                                                    <input type="hidden" name="cmd" value="_cart"/>
                                                    <input type="hidden" name="add" value="1"/>
                                                    <input type="hidden" name="business" value=" "/>
                                                    <input type="hidden" name="item_name" value="Almonds, 100g"/>
                                                    <input type="hidden" name="amount" value="149.00"/>
                                                    <input type="hidden" name="discount_amount" value="1.00"/>
                                                    <input type="hidden" name="currency_code" value="USD"/>
                                                    <input type="hidden" name="return" value=" "/>
                                                    <input type="hidden" name="cancel_return" value=" "/>
                                                    <input type="button" name="submit"
                                                           onclick="addtocart(<?php echo $row[0]; ?>);"
                                                           value="Add to cart" class="button"/>
                                                </fieldset>
                                            </form>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    } ?>
                    <div class="clearfix"></div>
                </div>
                <!-- //first section (nuts) -->
                <!-- second section (nuts special) -->
                <div class="product-sec1 product-sec2">
                    <div class="col-xs-7 effect-bg">
                        <h3 class="">Famous Books</h3>
                        <h6>Fun Reading Experience</h6>
                        <p></p>
                    </div>
                    <h3 class="w3l-nut-middle">Classics & New</h3>
                    <div class="col-xs-5 bg-right-nut">
                        <img src="images/nut1.png" alt="">
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!-- //second section (nuts special) -->
                <!-- third section (oils) -
                <div class="product-sec1">
                    <h3 class="heading-tittle">Classics</h3>
                    <?php
                $s = "select * from `books` where category='Language&Literature' limit 3";
                $result = mysqli_query($con, $s);
                while ($row = mysqli_fetch_array($result)) {

                    ?>
                    <div class="col-md-4 product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img src="<?php echo $row["coverphoto"] ?>"style="height: 160px;width: 160px" alt="">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="single.php?bookid=<?php echo $row[0] ?>"
                                           class="link-product-add-cart">Quick View</a>
                                    </div>
                                </div>
                                <span class="product-new-top">New</span>
                            </div>
                            <div class="item-info-product ">
                                <div style="height: 30px"><h4>
                                    <a  href="single.php?q=<?php echo $r2[0] ?>"><?php echo $row["title"] ?></a>
                                    </h4></div>
                                <div class="info-product-price">
                                    <span class="item_price">&#8377;<?php echo $row["price"] - $row["price"] * $row["discount"] / 100; ?></span>
                                    <del>&#8377;<?php echo $row["price"] ?></del>
                                </div>
                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                    <form action="#" method="post">
                                        <fieldset>
                                            <input type="hidden" name="cmd" value="_cart"/>
                                            <input type="hidden" name="add" value="1"/>
                                            <input type="hidden" name="business" value=" "/>
                                            <input type="hidden" name="item_name" value="Freedom Sunflower Oil, 1L"/>
                                            <input type="hidden" name="amount" value="78.00"/>
                                            <input type="hidden" name="discount_amount" value="1.00"/>
                                            <input type="hidden" name="currency_code" value="USD"/>
                                            <input type="hidden" name="return" value=" "/>
                                            <input type="hidden" name="cancel_return" value=" "/>
                                            <input type="button" onclick="addtocart(<?php echo $row[0]; ?>)" name="submit" value="Add to cart" class="button"/>
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

                <div class="product-sec1">
                    <h3 class="heading-tittle">Top Rated</h3>
                    <?php
                $s1 = "select * from books ORDER BY RAND() limit 3";
                $res1 = mysqli_query($con, $s1);
                while ($r1 = mysqli_fetch_array($res1)) {
                    ?>
                        <div class="col-md-4 product-men">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="<?php echo $r1["coverphoto"] ?>"style="width: 160px; height: 160px;" alt="">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="single.php?bookid=<?php echo $r1[0] ?>" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-info-product ">
                                    <div style="height: 30px;"><h4>
                                        <a href="single.php?q=<?php echo $r2[0] ?>"><?php echo $r1["title"] ?></a>
                                        </h4></div>
                                    <div class="info-product-price">
                                        <span class="item_price">&#8377;<?php echo $r1["price"] - $r1["price"] * $r1["discount"] / 100; ?></span>
                                        <del>&#8377;<?php echo $r1["price"] ?></del>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart"/>
                                                <input type="hidden" name="add" value="1"/>
                                                <input type="hidden" name="business" value=" "/>
                                                <input type="hidden" name="item_name" value="YiPPee Noodles, 65g"/>
                                                <input type="hidden" name="amount" value="15.00"/>
                                                <input type="hidden" name="discount_amount" value="1.00"/>
                                                <input type="hidden" name="currency_code" value="USD"/>
                                                <input type="hidden" name="return" value=" "/>
                                                <input type="hidden" name="cancel_return" value=" "/>
                                                <input type="button" onclick="addtocart(<?php echo $r1[0]; ?>)" name="submit" value="Add to cart" class="button"/>
                                            </fieldset>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <?php
                } ?>

                    <div class="clearfix"></div>
                </div>
                <!-- //fourth section (noodles) -->
            </div>
        </div>
        <!-- //product right -->
    </div>
</div>
<!-- //top products -->
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
                $s2 = "select * from books ORDER BY discount desc limit 8";
                $res2 = mysqli_query($con, $s2);
                while ($r2 = mysqli_fetch_array($res2)) {
                    ?>

                    <li>
                        <div class="w3l-specilamk">
                            <div class="speioffer-agile">
                                <a href="single.php?q=<?php echo $r2[0] ?>">
                                    <img src="<?php echo $r2["coverphoto"] ?>" style="height: 160px; width: 160px"
                                         alt="">
                                </a>
                            </div>
                            <div class="product-name-w3l">
                                <div style="height: 50px;"><h4>
                                        <a href="single.php?q=<?php echo $r2[0] ?>"><?php echo $r2["title"] ?></a>
                                    </h4></div>
                                <div class="w3l-pricehkj">
                                    <h6>&#8377;<?php echo $r2["price"] - $r2["price"] * $r2["discount"] / 100; ?></h6>
                                    <p>
                                        Save:&#8377;<?php echo $r2["price"] - ($r2["price"] - $r2["price"] * $r2["discount"] / 100); ?>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Discount:<?php echo $r2["discount"] ?>
                                        %</p>
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
                                            <input type="button" onclick="addtocart(<?php echo $r2[0]; ?>)"
                                                   name="submit" value="Add to cart" class="button"/>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </li>
                    <?php
                } ?>
            </ul>
        </div>
    </div>
</div>
<!-- //special offers -->
<!-- newsletter -->
<div class="footer-top">
    <div class="container-fluid">
        <div class="col-xs-8 agile-leftmk">

            <form action="#" method="post">
                <input type="email" placeholder="E-mail" name="email" required="">
                <input type="submit" value="Subscribe">
            </form>
            <div class="newsform-w3l">
                <span class="fa fa-envelope-o" aria-hidden="true"></span>
            </div>
        </div>
        <div class="col-xs-4 w3l-rightmk">
            <img src="images/tab3.png" alt=" ">
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- //newsletter -->

<?php
include "footer.php";
?>
</body>

</html>
