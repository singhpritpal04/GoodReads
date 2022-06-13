<?php
include_once "cart.php";
@session_start();
include_once "connection.php";
$useremail = $_SESSION["user_email"];
date_default_timezone_set("Asia/Kolkata");
$date = date("Y-m-d");
$mode = $_GET["paymentmode"];
//calculate total
$array = $_SESSION["cartarray"];
$total = 0;
for ($i = 0; $i < count($array); $i++) {
    $total += $array[$i]->totalprice;
}
//calculate total end
$insertbill = "INSERT INTO `bill`(`date`, `useremail`, `grandtotal`, `paymentmode`)
 VALUES ('$date','$useremail','$total','$mode')";

$msg = 'Thank you for Ordering with us. Your Order Details are as follows:<table class="table table-striped">
                        <tr>
                            <th>Sr No.</th>
                            <th>Book Name</th>
                            <th>Price</th>
                            <th>Qty</th>
                            <th>SubTotal</th>
                        </tr>
                    ';
$grandtotal=0;
if (mysqli_query($con, $insertbill)) {
    $k = 0;
    $max_billid = mysqli_insert_id($con);
    for ($i = 0; $i < count($array); $i++) {
        $k++;
        echo "in bill detail";
        $bookid = $array[$i]->bookid;
        $qty = $array[$i]->qty;
        $price = $array[$i]->totalprice;
        $discount = $array[$i]->discount;
        $subtotal = $qty * $price;
        $grandtotal += $subtotal;
        $insertdetail = "INSERT INTO `billdetail`(`billid`, `bookid`, `quantity`, `price`, `discount`) 
       VALUES ($max_billid,'$bookid','$qty','$price','$discount')";

        if (!mysqli_query($con, $insertdetail)) {
            header("location:viewcart.php");
        }
        $msg .= '<tr>
                                <td>' . $k++ . '</td>
                                <td>' . $array[$i]->bookname . '</td>
                                <td>&#8377;' . $array[$i]->price . '</td>
                                <td>' . $array[$i]->qty . '</td>
                                <td>&#8377;' . $subtotal . '</td>
                            </tr>';
    }
    $msg .= '
                        <tr>
                            <th colspan="4">Grand Total</th>
                            <td colspan="2">&#8377;' . $grandtotal . '</td>
                        </tr>
                    </table>';
    unset($_SESSION['cartarray']);

    error_reporting(E_STRICT);

    date_default_timezone_set('Asia/Kolkata');

    require_once('class.phpmailer.php');
//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

    $mail = new PHPMailer();

    /*$body             = file_get_contents('contents.html');
    $body             = preg_replace('/[\]/','',$body);*/

    $mail->IsSMTP(); // telling the class to use SMTP
    $mail->Host = "mail.yourdomain.com"; // SMTP server
    $mail->SMTPDebug = 2;                     // enables SMTP debug information (for testing)
    // 1 = errors and messages
    // 2 = messages only
    $mail->SMTPAuth = true;                  // enable SMTP authentication
    $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
    $mail->Host = "smtp.gmail.com";      // sets GMAIL as the SMTP server
    $mail->Port = 465;                   // set the SMTP port for the GMAIL server
    $mail->Username   = "vmmstudents2020@gmail.com";  // GMAIL username
    $mail->Password   = "Temp@1234";            // GMAIL password

    $mail->SetFrom('vmmstudents2020@gmail.com', 'Good Reads');

    $mail->AddReplyTo("vmmstudents2020@gmail.com", "Good Reads");

    $mail->Subject = "Order Confirmation From Good Reads";

    $mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
    $body = $msg;
    $mail->MsgHTML($body);

    $address = $useremail;
    $mail->AddAddress($address, "");

    /*$mail->AddAttachment("images/phpmailer.gif");      // attachment
    $mail->AddAttachment("images/phpmailer_mini.gif"); */// attachment

    if (!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;

    }

//    header("location:thankyou.php?bid=$max_billid");

} else {
    echo "insert bill failed";
}