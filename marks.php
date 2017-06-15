<?php
 session_start();
 if($_SESSION["password"]!=1)
  header("Location: index.php");
?>

<html>
	<head>
	</head>
	<body>
		<center>
			Select Year&nbsp;<select name="year">
			<option selected>Select year and Semister</option>
			<option>1<sup>st</sup>year 1<sup>st</sup>Semister</option>
			<option>1<sup>st</sup>year 2<sup>nd</sup>Semister</option>
			<option>2<sup>nd</sup>year 1<sup>st</sup>Semister</option>
			<option>2<sup>nd</sup>year 2<sup>nd</sup>Semister</option>
			<option>3<sup>rd</sup>year 1<sup>st</sup>Semister</option>
			<option>3<sup>rd</sup>year 2<sup>nd</sup>Semister</option>
			<option>4<sup>th</sup>year 1<sup>st</sup>Semister</option>
			<option>4<sup>th</sup>year 2<sup>nd</sup>Semister</option></select><br>
			<input type="submit" value="Go!">
		</center>
	</body>
</html>
