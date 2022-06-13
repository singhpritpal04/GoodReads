<html>
<head>
<title></title>
</head>
<body>

<?php

//error_reporting(E_ALL);
error_reporting(E_STRICT);

date_default_timezone_set('Asia/Kolkata');

require_once('class.phpmailer.php');
//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

$mail             = new PHPMailer();

/*$body             = file_get_contents('contents.html');
$body             = preg_replace('/[\]/','',$body);*/

$mail->IsSMTP(); // telling the class to use SMTP
$mail->Host       = "mail.yourdomain.com"; // SMTP server
$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
                                           // 1 = errors and messages
                                           // 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
$mail->Port       = 465;                   // set the SMTP port for the GMAIL server
$mail->Username   = "bookland534@gmail.com";  // GMAIL username
$mail->Password   = "navreetbookland534";            // GMAIL password

$mail->SetFrom('bookland534@gmail.com', 'Bookland');

$mail->AddReplyTo("bookland534@gmail.com","Bookland");

$mail->Subject    = "Reply From Go Compare";

$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
$body="Dear ".$_REQUEST['hfname'] ."<br>".$_REQUEST['tbmsg'];
$mail->MsgHTML($body);

$address = $_REQUEST["tbemail"];
$mail->AddAddress($address, "");

/*$mail->AddAttachment("images/phpmailer.gif");      // attachment
$mail->AddAttachment("images/phpmailer_mini.gif"); */// attachment

if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;

} else {

    include_once "connection.php";
    $s="UPDATE `contactus` SET `status`='replied' WHERE `contactid`=".$_REQUEST["hfid"];
    mysqli_query($conn,$s);
echo $s;


  header("location: viewcontacts.php");
    echo "Message sent!";

}

?>

</body>
</html>
