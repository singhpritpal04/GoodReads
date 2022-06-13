<style>
    .s-icons {
        padding: 0 5px
    }
</style>

<!-- footer -->
<footer>
    <div class="container">
        <div class="footer-info w3-agileits-info">
            <!-- categories -->
            <div class="col-sm-5 address-right">
                <div class="col-xs-6 footer-grids">
                    <h3>Categories</h3>
                    <ul>
                        <?php
                        $select1 = "select * from category order by categoryname limit 6";
                        $res1 = mysqli_query($con, $select1);
                        while ($row1 = mysqli_fetch_array($res1)) {
                            $category1 = urlencode($row1["categoryname"]);
                            ?>
                            <li>
                                <a href="books.php?catname=<?php echo $category1; ?>">
                                    <?php echo $row1[0]; ?></a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>

                <div class="col-xs-6 footer-grids">
                    <h3>Books</h3>
                    <ul>
                        <?php
                        $select2 = "select * from books order by edition limit 6";
                        $res2 = mysqli_query($con, $select2);

                        while ($row2 = mysqli_fetch_array($res2)) {

                            ?>

                            <li>
                                <a href="single.php?bookid=<?php echo $row2[0]; ?>">
                                    <?php echo substr($row2[1], 0, 18); ?></a>
                            </li>
                        <?php } ?>

                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- //categories -->

            <!-- social icons -->
            <div class="col-sm-2 footer-grids  w3l-socialmk">
                <div class="agileits_app-devices">
                    <i class="fab fa-facebook-f fa-2x s-icons"></i>
                    <i class="fab fa-instagram fa-2x s-icons"></i>
                    <i class="fab fa-skype fa-2x s-icons"></i>
                    <i class="fab fa-whatsapp fa-2x s-icons"></i>
                </div>
            </div>
            <!-- //social icons -->

            <!-- quick links -->
            <div class="col-sm-5 address-right">
                <div class="col-xs-12 footer-grids">
                    <h3>Get in Touch</h3>
                    <ul>
                        <li>
                            <i class="fa fa-mobile"></i> 7901779442
                        </li>
                        <li>
                            <i class="fa fa-envelope-o"></i>
                            <a href="javacript:void(0);">bookland@email.com</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- //quick links -->
            <div class="clearfix"></div>
        </div>
        <!-- //footer third section -->

        <!-- footer fourth section (text) -->
        <div class="agile-sometext">
            <div class="sub-some">
                <h5>Online Book Shopping</h5>
                <p>Order online. All your favourite books from the low price online bookstore forhome library
                    delivery in Delhi,
                    Gurgaon, Bengaluru, Mumbai and other cities in India. Lowest prices guaranteed on books .</p>
            </div>
            <div class="sub-some">
                <h5>Shop online with the best deals & offers</h5>
                <p>Now Get Upto 50% Off On Everyday Book Shown On Latest Books Section. The categories includes
                    Biographies, Language&Literature,Business,Classics,Mystery,Fiction&Sci-Fi</p>
            </div>
            <!-- brands -->
            <div class="sub-some">

                <h5>Popular Books</h5>
                <ul>
                    <?php
                    $s1 = "select * from books limit 10";
                    $r1 = mysqli_query($con, $s1);
                    while ($row3 = mysqli_fetch_array($r1)) {

                        ?>
                        <li>
                            <a><?php echo $row3["title"]; ?></a>
                        </li>
                    <?php } ?>

                </ul>
            </div>
            <!-- //brands -->
            <!-- payment -->
            <div class="sub-some child-momu">
                <h5>Payment Method</h5>
                <ul>
                    <li>
                        <img src="images/pay2.png" alt="">
                    </li>

                </ul>
            </div>
            <!-- //payment -->
        </div>
        <!-- //footer fourth section (text) -->
    </div>
</footer>
<!-- //footer -->
<!-- copyright -->
<div class="copy-right" style="background-color: black;">
    <div class="container">
        <p>© 2020 Book Land. All rights reserved |
        </p>
    </div>
</div>
<!-- //copyright -->

<!-- js-files -->
<!-- jquery -->

<!-- //jquery -->

<!-- popup modal (for signin & signup)-->
<script src="js/jquery.magnific-popup.js"></script>
<script>
    $(document).ready(function () {
        $('.popup-with-zoom-anim').magnificPopup({
            type: 'inline',
            fixedContentPos: false,
            fixedBgPos: true,
            overflowY: 'auto',
            closeBtnInside: true,
            preloader: false,
            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
        });

    });
</script>
<!-- Large modal -->


<!-- price range (top products) -->
<script src="js/jquery-ui.js"></script>
<script>
    //<![CDATA[
    $(window).load(function () {
        $("#slider-range").slider({
            range: true,
            min: 0,
            max: 2000,
            values: [50, 2000],
            slide: function (event, ui) {
                $("#amount").val("" + ui.values[0] + " - " + ui.values[1]);


                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {

                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("showbookshere").innerHTML = this.responseText;
                        // console.log(this.responseText);
                    }

                };
                xhttp.open("GET", "bookbyprice.php?min=" + ui.values[0] + "&max=" + ui.values[1], true);
                xhttp.send();

                // console.log("i am min " + ui.values[0] + " i am max " + ui.values[1]);

            }
        });
        $("#amount").val("Rs" + $("#slider-range").slider("values", 0) + " - Rs" + $("#slider-range").slider("values", 1));

    }); //]]>
</script>
<!-- //price range (top products) -->

<!-- flexisel (for special offers) -->
<script src="js/jquery.flexisel.js"></script>
<script>
    $(window).load(function () {
        $("#flexiselDemo1").flexisel({
            visibleItems: 3,
            animationSpeed: 1000,
            autoPlay: true,
            autoPlaySpeed: 3000,
            pauseOnHover: true,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: {
                portrait: {
                    changePoint: 480,
                    visibleItems: 1
                },
                landscape: {
                    changePoint: 640,
                    visibleItems: 2
                },
                tablet: {
                    changePoint: 768,
                    visibleItems: 2
                }
            }
        });

    });
</script>
<!-- //flexisel (for special offers) -->

<!-- password-script -->
<script>
    window.onload = function () {
        document.getElementById("password1").onchange = validatePassword;
        document.getElementById("password2").onchange = validatePassword;
    }

    function validatePassword() {
        var pass2 = document.getElementById("password2").value;
        var pass1 = document.getElementById("password1").value;
        if (pass1 != pass2)
            document.getElementById("password2").setCustomValidity("Passwords Don't Match");
        else
            document.getElementById("password2").setCustomValidity('');
        //empty string means no validation error
    }
</script>
<!-- //password-script -->

<!-- smoothscroll -->
<script src="js/SmoothScroll.min.js"></script>
<!-- //smoothscroll -->

<!-- start-smooth-scrolling -->
<script src="js/move-top.js"></script>
<script src="js/easing.js"></script>
<script>
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();

            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
        });
    });
</script>
<!-- //end-smooth-scrolling -->

<!-- smooth-scrolling-of-move-up -->
<script>
    $(document).ready(function () {
        /*
        var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
        };
        */
        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>
<!-- //smooth-scrolling-of-move-up -->

<!-- for bootstrap working -->
<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- //js-files -->


<script src="dist/jquery.validate.js"></script>
<script src="dist/additional-methods.js"></script>


<style>
    .dtp {
    }
</style>

<script>
    $(document).ready(function () {
        $(".myval").validate();
        $("dtp").datepicker
        (
            {
                changeYear: true, changeMonth: true, dateFormat: "yy-m-d"
            }
        );
    })
</script>

<script>
    function addtocart(bookid) {
        /*ajax  start*/
        var httprequest = new XMLHttpRequest();
        httprequest.onreadystatechange = function () {
            if (this.status == 200 && this.readyState == 4) {
                if (this.responseText == "be") {
                    alert("Book Already Exist");
                } else {
                    alert("1 item added successfully to the Cart");
                    document.getElementById("showcarthere").innerHTML = this.responseText;
                }
            }
        };
        httprequest.open("GET", "cartaction.php?bookid=" + bookid, true);
        httprequest.send();
        /*ajax  end*/
    }

    var dis_in_ar = [];

    function filterbydiscount(discount) {

        var dis_val = discount.value;
        var ischecked = discount.checked;

        if (ischecked == true) {
            dis_in_ar.push(dis_val);
        }
        if (ischecked == false) {
            if (dis_in_ar.indexOf(dis_val) >= 0) {
                var removeme = dis_in_ar.indexOf(dis_val);
                dis_in_ar.splice(removeme, 1);
            }
        }

        var httprequest = new XMLHttpRequest();
        httprequest.onreadystatechange = function () {
            if (this.status == 200 && this.readyState == 4) {
                //console.log(this.responseText);
                document.getElementById("showbookshere").innerHTML = this.responseText;
            }
        };
        httprequest.open("GET", "bookbydiscount.php?discount=" + JSON.stringify(dis_in_ar), true);
        httprequest.send();
    }

</script>


