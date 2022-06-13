<?php
include "connection.php";

$minprice = $_GET['min'];
$maxprice = $_GET['max'];

//echo $minprice . "-" . $maxprice;


?>
    <div class="wrapper">
<?php


$select_Cat = "SELECT * FROM `books` WHERE price BETWEEN '$minprice' AND '$maxprice'";

$result_Cat = mysqli_query($con, $select_Cat);
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
                            <a href="single.php?bookid=<?php echo $row_books[0] ?>"
                               class="link-product-add-cart">Quick View</a>
                        </div>
                    </div>
                    <span class="product-new-top">New</span>
                </div>
                <div class="item-info-product ">
                    <div style="height: 30px;"><h4>
                            <a href="single.php?q=<?php echo $r2[0] ?>"><?php echo $row_books[1]; ?></a>
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
        } elseif ($count == mysqli_num_rows($result_Cat)) {
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
        $count=mysqli_fetch_array($result_Cat);
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
                                <a href="single.php?bookid=<?php echo $row_books[0] ?>"
                                   class="link-product-add-cart">Quick View</a>
                            </div>
                        </div>
                        <span class="product-new-top">New</span>
                    </div>
                    <div class="item-info-product ">
                        <h4>
                            <a href="single.php?q=<?php echo $r2[0] ?>"><?php echo $row_books[1]; ?></a>
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