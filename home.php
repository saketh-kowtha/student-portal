<?php session_start(); ?>
<script src="src/jquery.min.js"></script>
  					<script src="src/jquery-1.9.1.js"></script>

  					<script src="src/bootstrap.min.js"></script>
  					<script src="src/script.js"></script>
<link rel="stylesheet" href="src/font.css">
 					<link rel="stylesheet" href="src/style.css">

					<link rel="stylesheet" href="src/font.css">
 					<link rel="stylesheet" href="src/style.css">
                                        <link rel="stylesheet" href="src/bootstrap.min.css">
                                               <style>body{zoom:120%;font-family: Ubuntu, sans-serif;}</style>
<body>
<section id="home">
				<div>
					<div class="col-md-2" style="padding-top: 50px;">
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
							</table>
	    	</div>
				<div class="col-md-10" style="padding-top: 50px;">
					<h1 style="text-align:center;">Content Coming Soon</h1>
                                                        <form id="search-form_3" action="similar.php" method="post" target="mainbody">
							  <input type="text" style="font-size:20px;" name="usearch" placeholder="ROLL OR NAME" class="search_3"/>
							  <input type="submit" class="submit_3" value="Search">
                                                        </form>
  			</div>
			</section>

</body>