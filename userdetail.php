<?php
include "cart.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <?php
    include "headerfiles.php";
    ?>
</head>
<body>
<?php
include "usernavbar.php";
$user_email = $_SESSION['user_email'];
$selectQuery = "SELECT * FROM `user` where user_email='$user_email'";
$result = mysqli_query($con, $selectQuery);
$row = mysqli_fetch_array($result);
?>
<div class="container">
    <div class="row">
        <h3 class="tittle-w3l">Details
            <span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
        </h3>

        <div class="col-md-6 col-md-offset-3">
            <form class="form-horizontal">
                <div class="form-group">
                    <label class="col-md-4">E-mail</label>
                    <div class="col-md-8"><input type="text" readonly value="<?php echo $_SESSION["user_email"] ?>"
                                                 id="tbemail" name="tbemail" class="form-control"></div>
                </div>
                <div class="form-group">
                    <label class="col-md-4">Name</label>
                    <div class="col-md-8">
                        <input type="text" readonly value="<?php echo $_SESSION["user_name"] ?>"
                               id="tbname" name="tbname" class="form-control"></div>
                </div>
                <div class="form-group">
                    <label class="col-md-4">Contact</label>
                    <div class="col-md-8">
                        <input type="text" readonly value="<?php echo $_SESSION["user_contact"] ?>"
                               id="tbcontact" name="tbcontact" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4"> Shipping Address</label>
                    <div class="col-md-8">
                        <textarea readonly class="form-control" id="tbaddress"
                                  name="tbaddress"><?php echo $_SESSION["user_address"] ?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <?php
                    $array = $_SESSION["cartarray"];
                    $total = 0;
                    for ($i = 0; $i < count($array); $i++) {
                        $total += $array[$i]->totalprice;
                    }
                    ?>
                    <label class="col-md-4">Total Price</label>
                    <div class="col-md-8">
                        <input type="text" readonly value="<?php echo $total ?>"
                               id="grandtotal" name="grandtotal" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4">Payment Mode</label>
                    <div class="col-md-8">
                        <select name="tbpayment" id="tbpayment" class="form-control">
                            <option value="">Select Payment Mode</option>
                            <option value="cod">COD</option>
                            <option value="onlinepayment">Online Payment</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-4">
                    <button type="button" class="btn btn-default" id="rzp-button1"> Proceed</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
include "footer.php";
?>
<script>
    $(document).ready(function () {
        $("#rzp-button1").click(function () {
            // var invoiceid = $("input[name='fees']:checked").val();
            var amount = document.getElementById('grandtotal').value * 100;
            var invoice_type = document.getElementById('tbpayment').value;
            // alert(invoice_type);
            if (invoice_type == "") {
                alert("Please Select Payment Mode");
                return;
            }
            else if (invoice_type == "cod") {
                window.location.href = "insert_payment.php?status=success&paymentmode=" + invoice_type;
            }
            else {
                var options = {
                    "key": "rzp_test_dRWiKHS7zr2Gki",
                    "amount": amount,
                    "name": "Good Reads",
                    "description": "NIT Jalandhar",
                    "image": "images/logo2.png",
                    "handler": function (response) {
                        //alert(response.razorpay_payment_id);
                        if (response.razorpay_payment_id == "") {
                            //alert('Failed');
                            window.location.href = "add_payment_details.php?status=failed";
                        }
                        else {
                            //alert('Success');
                            window.location.href = "insert_payment.php?status=success&paymentmode=" + invoice_type;
                        }
                    },
                    "prefill": {
                        "name": "<?php echo $row['Name']; ?>",
                        "email": "<?php echo $row['user_email']; ?>"
                    },
                    "notes": {
                        "address": ""
                    },
                    "theme": {
                        "color": "#F37254"
                    }
                };
                var rzp1 = new Razorpay(options);
                rzp1.open();
            }
        });
    });
</script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
</body>
</html>
