<?php
 session_start();
 if($_SESSION["password"]!=1)
  header("Location: index.php");
?>

<html>
	<head>
	</head>
	<body>
		<p><marquee>Page is Under Construction</marquee></p>
	</body>
</html>
