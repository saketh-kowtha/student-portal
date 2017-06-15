
<?php
include 'database.php';
session_start();
if($_SESSION['resetpg']==1)
{
$otpg=$_SESSION['otp'];
$otpc=$_POST['code'];
$_SESSION['resetpg']=0;
}
if($otpc==$otpg)
{
echo ('<body id="body"><center><form method="post"><input type="text" placeholder="Password" name="pass"><br><input type="text" placeholder="Re-password" name="repass"><br><button name="reset">Reset</button></form></center>');
}
else
{
header("Location: reset.php");
}


if(isset($_POST["reset"]))
{
   if(strlen($_POST[pass])<8)
      echo "Password length should be more than 8 characters";
   else if($_POST['pass']==$_POST['repass'] && strlen($_POST['pass'])>8)
   {
      $conn=new mysqli("host", "server", "password",'db_name');
      $sql = "UPDATE student SET password='".$_POST['pass']."' WHERE rollnumber='".$_SESSION['rollnumber']."'";
      if (mysqli_query($conn, $sql)) {
          echo "<script>document.getElementById('body').innerHTML='';</script>";
          echo "<p style='color:green;'>Password Updated successfully</p>"; 
          mysqli_close($conn);
           // destroy the session
session_destroy(); 
      } 
      else {
           echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
    }
    else
        echo "check password and repassword";

}

?>
<style>
body{text-align:center;color:red;}
</style>