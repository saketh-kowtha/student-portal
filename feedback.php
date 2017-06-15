<?php
 session_start();
 if($_SESSION["password"]!=1)
  header("Location: index.php");
?>

<html>
<center>
	<select name="feedback">
	<option selected>Choose To Address</option>
	<OPTION>To Administration Office</option>
	<OPTION>To Department for academic problems</option>
	<OPTION>For suggestions</option>
	</select><p>a<p>a<p>a<p>a<p>a
</center>
