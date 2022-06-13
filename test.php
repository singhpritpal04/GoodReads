<?php
//include_once "connection.php";
//$add = "INSERT INTO `admin`(`email`, `password`, `name`, `contact`, `usertype`) VALUES ('abc@gmail.com','123','s',7901779442,
//    'Admin')";
//if(mysqli_query($con,$add))
//{
//    echo "success";
//}
//else
//{
//   echo "fail";
//}
                   @session_start();
                    $array=$_SESSION["cartarray"];
                    $totalprice=0;
                    while(count($array))
                    {
                       $totalprice+=$_SESSION["cartarray"]->totalprice;
                    }
                    echo $totalprice;
                    ?>
