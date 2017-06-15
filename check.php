<?php
include 'database.php';
 session_start();
 $_SESSION["password"]=0;
$a=connect();
$studentcon=$_SESSION["connection_student"];
$sql = "SELECT * FROM student where rollnumber ='".$_POST['rollnumber']."'"." and password = '".$_POST['password']."'";
$result = $studentcon->query($sql);


if ($result->num_rows == 1) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    $_SESSION["name"]=$row["name"];
    $_SESSION["rollnumber"]=$row["rollnumber"];
    $_SESSION["password"]=$row["password"];
    $_SESSION["dob"]=$row["dob"];
    $_SESSION["mail"]=$row["mail"];
    $_SESSION["workedwith"]=$row["workedwith"];
    $_SESSION["monthlypoints"]=$row["monthlypoints"];
    $_SESSION["interestedin"]=$row["interestedin"];
    $_SESSION["points"]=$row["points"];
    $_SESSION["gender"]=$row["gender"];
    $_SESSION["password"]=1;
    header('Location: profile.php');
   }
} else {
  header('Location: index.php');
}
$studentcon->close();
?>
