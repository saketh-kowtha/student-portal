<?php
include 'database.php';
 session_start();
 if($_SESSION["password"]!=1)
  header("Location: index.php");


?>
<?php
$url = $_SERVER['similar.php'];
$parts = explode('?=', $url);
$similar = $parts[1];
$url = $_SERVER['similarp.php'];
$parts = explode('?=', $url);
$similarp = $parts[1];
?>
<!DOCTYPE html>
	<html lang="en">
		<head>
  			<title>Dashboard</title>
                        		<meta charset="utf-8">
  					<meta name="viewport" content="width=device-width, initial-scale=1">
  				        <script src="src/jquery.min.js"></script>
  					<script src="src/jquery-1.9.1.js"></script>
  					<script src="src/jquery-ui.js"></script>
  					<script src="src/bootstrap.min.js"></script>
  					<script src="src/script.js"></script>
					<link rel="stylesheet" href="src/jquery-ui.css" />
					<link rel="stylesheet" href="src/font.css">
 					<link rel="stylesheet" href="src/style.css">
                                        <link rel="stylesheet" href="src/bootstrap.min.css">
                                         <style>
                                               body{zoom:120%;font-family: Ubuntu, sans-serif;}
                                               .noth{background-color:white;color:black;text-align:center;}
                                               .notd{color:white;text-align:center;}
                                               .notr{color:red;text-align:center;}

                                         </style>
                                  

		</head>
		<body id="body">
			<nav id="nav" class="navbar navbar-inverse navbar-fixed-top">
 	 			<div class="container-fluid">
    					<div class="navbar-header">
      						<a class="navbar-brand navfont" href="#" ><b>Nriportal</b></a>
    					</div>
    					<ul class="nav navbar-nav" >
      						<li><a href="home.php" target="mainbody" name="home">Home</a></li>
      						<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#Academics">Academics<span class="caret"></span></a>
								<ul class="dropdown-menu">
								  <li><a href="timetable.php" target="mainbody" name="timetable">Timetable</a></li>
								  <li><a href="using.pdf" target="mainbody" name="syllabus">Syllabus</a></li>
								  <li><a href="attendence.php" target="mainbody" name="attendence">Attendence</a></li>
       							  <li><a href="material.php" target="mainbody" name="materials">Materials</a></li>
	  						  <li><a href="marks.php" target="mainbody" name="marks">Marks</a></li>
       							  <li><a href="quiz.php" target="mainbody" name="quiz">Quiz</a></li>
								  <li><a href="leave.php" target="mainbody" name="Leave">Leave</a></li>
     							</ul>
							</li>
							 <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">NonAcademics<span class="caret"></span></a>
								<ul class="dropdown-menu">
 									<li class="dropdown"><a href="certfications.php" target="mainbody"  name="certifications">Certifications</a> </li>
	  								<li><a href="codingchallenge.php"  target="mainbody" name="codingchallenge">Coding Challenges</a></li>
                                                                        <li><a href="onlinetutorial.php" target="mainbody"  name="onlinetuttorial">Online Tutorials</a></li>
	  								<li><a href="codingpractice.php" target="mainbody" name="codingpractice">Coding Practice</a></li>
	  								<li ><a href="#"  data-toggle="modal" data-target="#similarpeople" name="similar">Similar People</a></li>
						    	</ul>
							</li>
							<li><a href="#" onclick="openNav()" name="events"><span>Notifications</span></a></li>
							<li><a href="#" name="feed" data-toggle="modal" data-target="#feed">Feedback</a></li>
    					</ul>
    					<ul class="nav navbar-nav navbar-right">
	    					 <li ><a data-toggle="modal" data-target="#profile" href="#"><img  src="user.png" class="img-circle" style="font-size:19px;padding-bottom:1px;" alt="Cinque Terre" width="25" height="25"></a></li>


							 <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span><img src="http://www.freeiconspng.com/uploads/settings-icon-10.png" width="22px" height="22px"></span><span class="caret"></span></a>
          					 <ul class="dropdown-menu">
	  								 		<li><a data-toggle="modal" data-target="#themes" href="#" id="a" name="themes"><span class="glyphicon glyphicon-adjust"></span>&nbsp;&nbsp;Themes</a></li>
          							<li><a href="#" id="a" name="settings"><span class="glyphicon glyphicon-cog"></span>&nbsp;&nbsp;Settings</a></li>
          							<li><a href="logout.php" name="logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;&nbsp;Logout</a></li>
        						</ul>
     		 				</li>
					</ul>
  				</div>
			</nav>
                     
                          <section>
 				<iframe src="home.php" name="mainbody"  frameborder="0" style="overflow:hidden;height:100%;width:100%;position: absolute; height: 94%;" height="100%" width="100%"></iframe>
                        </section>


<section class="modal fade" id="similarpeople" role="dialog">
  <div>
    <div class="modal-dialog" style="width:80%;">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">SIMILAR PEOPLE</h4>
        </div>
        <div class="modal-body">
<center><img  src="user.png" width="180" height="180" style="padding-left:10px;"></center>  <br>
        <form action="feed.php" method="post">
	
	<?php
connect();
  $studentcon=$_SESSION["connection_student"];
$sql = "SELECT * FROM student where workedwith like '".$_SESSION["workedwith"]."' or interestedin like '".$_SESSION["interestedin"]."'";
$result = $studentcon->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
   echo "<table align='center' class='table table-striped'><tr><thead><th>Name</th><th>Rollnumber</th><th>Points</th><th>Intersted In</th><th>Worked With</th></thead></tr>";
    while($row = $result->fetch_assoc()) 
   {
     echo "<tr><tbody><td>".$row["name"]."</td><td>".$row["rollnumber"]."</td><td>".$row["points"]."</td><td>".$row["interestedin"]."</td><td style='width:16%;'>".$row["workedwith"]."</td></tr>";
    }
   echo "</table>";
}
else 
echo "<p>no results</p>";
?> 
</center>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>
</section>



<section class="modal fade" id="search" role="dialog">
  <div>
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">SIMILAR PEOPLE</h4>
        </div>
        <div class="modal-body">
<center><img  src="user.png" width="180" height="180" style="padding-left:10px;"></center>  <br>
	
	<?php
connect();
  $studentcon=$_SESSION["connection_student"];
$sql = "SELECT * FROM student where name like '".$_POST["usearch"]."' or rollnumber like '".$_POST["usearch"]."'";
$result = $studentcon->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
   echo "<table border='1' align='center'><th>Name</th><th>Rollnumber</th><th>Points</th><th>Intersted In</th><th>Worked With</th>";
    while($row = $result->fetch_assoc()) 
   {
     echo "<tr><td>".$row["name"]."</td><td>".$row["rollnumber"]."</td><td>".$row["points"]."</td><td>".$row["interestedin"]."</td><td>".$row["workedwith"]."</td></tr>";
    }
   echo "</table>";
}
else "no results";
?>

</center>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>
</section>






<section class="modal fade" id="themes" role="dialog">
  <div>
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Color</h4>
        </div>
        <div class="modal-body">
<center>
	Background Color
 	<input type="radio" value="#f3f3f3" name="bg" onclick="bcolor(this.value);">#f3f3f3
	<input type="radio" value="#E9967A" name="bg" onclick="bcolor(this.value);">#E9967A
	<input type="radio" value="#F08080" name="bg" onclick="bcolor(this.value);">#F08080
	<input type="radio" value="#454545" name="bg" onclick="bcolor(this.value);">#454545
	<input type="radio" value="black" name="bg" onclick="bcolor(this.value);">Black

</center>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>
</section>



<section class="modal fade" id="profile" role="dialog">
  <div>
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Your Profile</h4>
        </div>
        <div class="modal-body">
<center><img  src="user.png" width="180" height="180" style="padding-left:10px;"></center>  <br>
	<table align="center" style="margin-top:5px;">
		<tr>
			<th>Name</th>
			<td>&nbsp;<?php echo $_SESSION["name"]; ?></td>
		</tr>
		<tr>
			<th>Registration</th>
			<td>&nbsp;<?php echo $_SESSION["rollnumber"]; ?></td>
		</tr>
		<tr>
			<th>Points</th>
			<td>&nbsp;<?php echo $_SESSION["points"]; ?></td>
		</tr>
		<tr>
			<th>Rank</th>
			<td>&nbsp;7<sup>th</sup></td>
		</tr>
                <tr>
			<th>Worked with</th>
			<td>&nbsp;<?php echo $_SESSION["workedwith"]; ?></td>
		</tr>
                <tr>
			<th>Interested Im</th>
			<td>&nbsp;<?php echo $_SESSION["interestedin"]; ?></td>
		</tr>


</table>
</center>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>
</section>









<section class="modal fade" id="feed" role="dialog">
  <div>
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Feedback</h4>
        </div>
        <div class="modal-body">
<center><img  src="user.png" width="180" height="180" style="padding-left:10px;"></center>  <br>
        <form action="feed.php" method="post">
	<table align="center" style="margin-top:5px;">
		<tr><td colspan="2">
                    <input type="checkbox" value="1">To Chairman
                    <input type="checkbox" value="2">To A.o
                    <input type="checkbox" value="3">To Principle<br>
                    <input type="checkbox" value="4">To Dean
                    <input type="checkbox" value="5">To Hod
                    <input type="checkbox" value="6">For Suggestions
		</td></tr>
<tr><th>Subject</th><td><input type="text" style="width:100%" name="feedbacksubject"></td> <tr>
<tr><th>Body</th><td>
<textarea rows="5" style="width:100%;"></textarea></td></tr>
<tr><td><input type="submit" value="Submit" class="submit_3"</td></tr>
</form>
</table>
</center>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>
</section>






<div id="notifications"  class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
<?php 
 $studentcon=$_SESSION["connection_student"];
$sql = "SELECT * FROM notice_event";
$result = $studentcon->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
   echo "<table style='width:80%' border='1' align='center'><th class='noth'>Sno</th><th class='noth'>Description</th><th class='noth'>Ref</th>";
    while($row = $result->fetch_assoc()) 
   {
     echo "<tr><td class='notd'>".$row["sno"]."</td><td class='notd'>".$row["Description"]."</td><td><a class='notr' href='".$row["link"]."' target='_blank'><img src='http://www.smart4profit.com/images/click.png'width='70px' height='35px'></a></td></tr>";
    }
   echo "</table>";
}
else 
echo "<p>no results<p>";
?>
</div>	