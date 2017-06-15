<?php
 session_start();
 if($_SESSION["password"]!=1)
  header("Location: index.php");
?>
  
                                      <script src="src/jquery.min.js"></script>
  					<script src="src/jquery-1.9.1.js"></script>
  					<script src="src/bootstrap.min.js"></script>
  					<script src="src/script.js"></script>
					<link rel="stylesheet" href="src/font.css">
 					<link rel="stylesheet" href="src/style.css">
                                        <link rel="stylesheet" href="src/bootstrap.min.css">
<link rel="stylesheet" href="src/font.css">
 					<link rel="stylesheet" href="src/style.css">


<?php
include 'database.php';
connect();
$res="";
  $studentcon=$_SESSION["connection_student"];

$sql = "SELECT * FROM student where name like '".$_POST["usearch"]."' or rollnumber like '".$_POST["usearch"]."'";
$result = $studentcon->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
 echo "<table class='table table-hover' align='center'><tr class='active'><thead><th>Name</th><th>Rollnumber</th><th>Points</th><th>Intersted In</th><th>Worked With</th></thead></tr>";
    while($row = $result->fetch_assoc()) 
   {
     echo "<tr class='active'><tbody><td>".$row["name"]."</td><td>".$row["rollnumber"]."</td><td>".$row["points"]."</td><td>".$row["interestedin"]."</td><td>".$row["workedwith"]."</td></tbody></tr>";
    }
   echo "</table>";
}
else "no results";
?>
<style>
