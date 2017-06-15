<?php
$con = new mysqli("mysql.hostinger.in", "u114823770_nri", "Csea@123",'u114823770_nri');

// Check connection
if ($con ->connect_error) {
    die("Connection failed: " . $con->connect_error);
    return 1;

$sql = "SELECT * FROM fest where event_code Like '".$_POST['123']."'";
echo $sql;
$result = $con->query($sql);


if ($result->num_rows == 1) {
    // output data of each row
    while($row = $result->fetch_assoc()) {


    $heading=$row['event_name'];
    $desc=$row['desc'];
    $rules=$row['rules'];
    $cna=$row['coordinator_name'];
    $cnu=$row['coordinator_phone'];
    $img=$row['image_path'];

   }
} 
else {
  echo "sorry";
}
$con->close();

?>
<!DOCTYPE HTML>

<html>
	<head>
		<title><?php echo $heading;?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<style>red{color: orange}orange{color:orange;font-size:60px;}</style>
		<script type="text/javascript" src="../assets/register.js"></script>
	</head>
	<body>
		<div id="page-wrapper">

			<!-- Header -->
			<header id="header">

				<h1 id="logo"><a href="index.html">SU<red>NRI</red>SE</a></h1>
				<nav id="nav">
					<ul>
						<!-- CSE start -->
						<li><a href="../index.html#cse-events-section" class="scrolly">CSE</a></li>
						<!-- CSE end -->

						<!-- ECE start -->
						<li><a href="../index.html#ece-events-section" class="scrolly">ECE</a></li>
						<!-- ECE end -->

						<!--IT MCA start  -->
						<li><a href="../index.html#it-mca-events-section" class="scrolly">IT &amp; MCA</a></li>
						<!--IT MCA end  -->

						<!-- EEE start -->
						<li><a href="../index.html#eee-events-section" class="scrolly">EEE</a></li>
						<!-- EEE end -->

						<!-- MECH start -->
						<li><a href="../index.html#mech-events-section" class="scrolly">MECHANICAL</a></li>
						<!-- MECH end -->

						<!-- CIVIL start -->
						<li><a href="../index.html#civil-events-section" class="scrolly">CIVIL</a></li>
						<!-- CIVIL end -->

						<!-- CULTURAL start -->
						<li><a href="../index.html#cultural-events-section" class="scrolly">CULTURAL</a></li>
						<!-- CULTURAL end -->

						<li><a href="../register.html" class="button special">Register</a></li>
					</ul>
				</nav>
			</header>
			<!-- Header End -->

			<!-- Main -->
				<div id="main" class="wrapper style1">
					<div class="container">
						<header class="major">
							<h2>Build Your Theme</h2>
						</header>
						<div class="row 150%">
							<div class="8u 12u$(medium)">

								<!-- Content -->
									<section id="content">
										<a href="#" class="image fit"><img src="images/Theme.jpg" alt="" /></a>

										<h3>Build your Theme - Concept</h3>
										<p>Udated soon</p>
										<h3>Rules and Regulations</h3>
										<p>Updating Soon</p>
										
									</section>

							</div>
							<div class="4u$ 12u$(medium)">

								<!-- Sidebar -->
									<section id="sidebar">
										<section>
											<h3>Student Coordinators</h3>
											<p><b>S.Siva Ram &nbsp;8885373286<br>Email&nbsp;sunrise2k17.civil@gmail.com</b></p>
											<footer>
											<form method="post" action="#" onsubmit="return registerForEvent(this);return false;">
												<input type="hidden" name="event_id" value="CSECODE">
												<div class="row uniform 50%">
													<!-- For Regd. Num -->
													<div class="11u$">
														<input type="text" name="reg_num" id="reg_num" value="" placeholder="College Roll Number" />
													</div>

													<!-- For Name -->
													<div class="11u$">
														<input type="submit" value="Register for *EVENT* " class="special" />
													</div>
												</di		<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
		 by: <a href="http://saikalyan.com">The Web Team</a></li>
				</ul>
			</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
		