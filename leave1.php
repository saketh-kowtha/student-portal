<?php
session_start();
include 'mail.php';
$_SESSION["class_teachet_mail"]="@@@@@@@@@@@";
$body="sir\\madam <br><center>i would not attend to college from ".$_POST["from"]." to ".$_POST["to"]." because of ".$_POST["body"]." so please grant me leave<br>ThankingYou<br>".$_SESSION['name']."<br>".$_SESSION["rollnumber"];
$a=sendmail($_SESSION["class_teachet_mail"],"Leave Letter",$body,true);
if(a==0)
echo $body."<br><br><br>message sent to ".$_SESSION["class_teachet_mail"];
?>