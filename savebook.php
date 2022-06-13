<?php
@session_start();
include "connection.php";
$title = mysqli_real_escape_string($con,$_POST["tbtitle"]);
$description = mysqli_real_escape_string($con,$_POST["tbdescription"]);
$edition = $_POST["tbedition"];
$price = $_POST["tbprice"];
$genre = $_POST["tbgenre"];
$discount = $_POST["tbdiscount"];
$category = $_POST["tbcategory"];
$authorid = $_SESSION["author_id"];

/*book photo uploading start*/
$actualname = $_FILES["tbphoto"]["name"];
$temppath = $_FILES["tbphoto"]["tmp_name"];
$path = "bookcover/$actualname";
$size = round($_FILES["tbphoto"]["size"] / 1024, 2);
$ext = pathinfo($actualname, PATHINFO_EXTENSION);
$ext = strtolower($ext);
/*book photo uploading end*/

/*book pdf start*/
$actualnamepdf = $_FILES["tbe"]["name"];
$temppathpdf = $_FILES["tbe"]["tmp_name"];
$pathpdf = "bookpdf/$actualnamepdf";


$sizepdf = round($_FILES["tbe"]["size"] / 1024, 2);
$extpdf = pathinfo($actualnamepdf, PATHINFO_EXTENSION);
$extpdf = strtolower($extpdf);
/*book pdf end*/

if ($ext != "jpg" and $ext!="jpeg"and $ext != "png") {

    header("location:authorbook.php?msg=2");
} else if ($size > 500) {
    header("location:authorbook.php?msg=3");
} else if ($extpdf != "pdf") {
    header("location:authorbook.php?msg=5");
} else if ($sizepdf > 5120) {
    header("location:authorbook.php?msg=6");
} else {


    $add = "INSERT INTO `books`(`title`,`description`,`edition`,`price`,`e_edition`,`genre`,`coverphoto`,`discount`,`category`,`authorid`)
VALUES ('$title','$description',$edition,$price,'$pathpdf','$genre','$path',$discount,'$category',$authorid)";
    if (mysqli_query($con, $add)) {




        move_uploaded_file($temppath, $path);
        move_uploaded_file($temppathpdf, $pathpdf);

        $selectquery="SELECT * FROM `author` where authorid=$authorid";
        $resultauthor=mysqli_query($con,$selectquery);
        $rowauthor=mysqli_fetch_array($resultauthor);

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

        $mail->Subject    = "Reply From Bookland";

        $mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
        $body="Dear Author ,<br> a new book titled $title has been added by you";
        $mail->MsgHTML($body);

        $address = $rowauthor["email"];
        $mail->AddAddress($address, "");

        /*$mail->AddAttachment("images/phpmailer.gif");      // attachment
        $mail->AddAttachment("images/phpmailer_mini.gif"); */// attachment

        if(!$mail->Send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;

        }
        header("location:authorbook.php?msg=1");
    } else {
        echo $authorid;
        echo $add;

       // header("location:authorbook.php?msg=0");
    }

}
?>