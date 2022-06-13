<?php
include_once "cart.php";
@session_start();
//echo "<pre>";
//var_dump($_SESSION["cartarray"]);
//echo "</pre>";

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
    include_once "headerfiles.php";
    ?>
</head>
<body>
<?php
include_once "publicheader.php";
if(!isset($_SESSION["cartarray"])||count($_SESSION["cartarray"])==0)
{
?>
    <div class="container">
        <div class="row">
            <h3 class="tittle-w3l">View Cart
                <span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
            </h3>
            <div class="col-md-12">

                <h1 class="jumbotron text-center" > Cart is Empty </h1>
            </div>
        </div>
    </div>
<?php
}
else {
    ?>


    <?php


//echo "<pre>";
//echo print_r($_SESSION['cartarray']);
//echo "</pre>";
//
    ?>
    <div class="container">
        <form action="checkusersession.php">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>Srno</th>
                                <th>Book Name</th>
                                <th>Price</th>
                                <th>Qty</th>
                                <th colspan="2">Photo</th>
                                <th>Discount</th>
                                <th colspan="2">Selling Price</th>
                                <th>Remove</th>
                            </tr>

                            <?php
                            $totalprice = 0;
                            $array = $_SESSION["cartarray"];
                            $j = 1;
                            for ($i = 0; $i < count($array); $i++) {

                                $cartobj = $array[$i];
                                $totalprice += $cartobj->totalprice;
                                ?>
                                <tr>
                                    <td><?php echo $j ?></td>
                                    <td><?php echo "$cartobj->bookname"; ?></td>
                                    <td>&#8377;<?php echo "$cartobj->price"; ?></td>
                                    <td><?php echo "$cartobj->qty"; ?></td>
                                    <td colspan="2"><img src="<?php echo "$cartobj->photo"; ?>" width="50"></td>
                                    <td><?php echo "$cartobj->discount"; ?>%</td>
                                    <td colspan="2">&#8377;<?php echo "$cartobj->totalprice"; ?></td>
                                    <td><a href="removefromcart.php?bookid=<?php echo $cartobj->bookid; ?>"><span
                                                    class="glyphicon glyphicon-remove"></span></a></td>
                                </tr>

                                <?php
                                $j++;
                            } ?>
                            <tr>
                                <td colspan="7" class="text-right">Total Price</td>
                                <td colspan="2">&#8377;<?php echo "$totalprice" ?></td>
                                <td>
                                    <button type="submit" class="btn btn-success">Checkout</button>
                                </td>
                            </tr>
                        </table>
                    </div>

                </div>
            </div>
        </form>
    </div>


    <?php
    include "footer.php";
    ?>
    <?php
}?>
</body>
</html>