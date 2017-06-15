<?php
 session_start();
 if($_SESSION["password"]!=1)
  header("Location: index.php");
?>
      
<link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
         rel = "stylesheet">
      <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
      <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script> 
 					<link rel="stylesheet" href="src/style.css">
  					
 					<link rel="stylesheet" href="src/style.css">

					<link rel="stylesheet" href="src/font.css">


                                               <style>body{zoom:120%;font-family: Ubuntu, sans-serif;}</style>    
 <script>
         $(function() {
            $( "#to" ).datepicker();
            $( "#to" ).datepicker("show");
         });

         $(function() {
            $( "#from" ).datepicker();
            $( "#from" ).datepicker("show");
         });
      </script>


  					<script src="src/bootstrap.min.js"></script>

<section id="Leave">
				<div class="row">
					<center>
   					<h4>Please Fill These Boxes</h4>
   					<table align="center">
		 					<form name="leaveletter" method="post" action="leave1.php" target="_blank">
	<tr>
		<th>From</th>
    		<td><input type="text" id="from" name="from"/></td>

	</tr>
	<tr>
		<th>To</th>
    		<td><input type="text" id="to" name="to"/></td>

	</tr>
	<tr>
		<th>Reason</th>
    		<td><textarea style="width:100%;" name="body"></textarea></td/+>

	</tr>
	<tr><td rowspan="2" align="center"><input type="submit" value="Go!" id="leavepdf" class="submit_3"></td></tr>
</form>
						</table>
					</center>
				</div>
			</section>
