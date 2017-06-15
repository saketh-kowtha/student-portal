
<?php

include 'database.php';
 session_start();

$a=connect();
$studentcon=$_SESSION["connection_student"];
$sql = "SELECT mail FROM student where rollnumber ='".$_POST['sendotp']."'";
$result = $studentcon->query($sql);


if ($result->num_rows == 1) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    $_SESSION["mail"]=$row["mail"];

} 
}
else {
exit("no records found with the number ".$_POST['sendotp']);

}
$studentcon->close();







$_SESSION['rollnumber']=$_POST['sendotp'];

include 'mail.php';







$mic=microtime(true);
$otpg[] = substr($mic, -2);
$otpgf=(int)$otpg[0];
$otpgf=$otpgf*111;
$end[] = substr($_POST['sendotp'], -2);
$asc= dechex(ord($end[0]));
$otp= $otpgf.$asc;

  sendmail($_SESSION['mail'],"OTP","This is OTP to Reset Your Password ".$otp);
       
?>
<html>
<head>
<title>Reset password</title>
<style>body{text-align:center;color:red;}p{color:black;}</style>
</head>
<body>

<center><p>password is sent to </p><?php echo $_SESSION['mail']; ?>
<form action="resetpassword.php" method="post"><input type="text" placeholder="Enter your OTP" name="code">

<?php session_start(); $_SESSION['otp']=$otp; $_SESSION['resetpg']=1; ?>

<input type="submit"  value="Reset"></form></center>
</body>
</html>
