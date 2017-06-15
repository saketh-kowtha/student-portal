<?php
 session_start();
 if($_SESSION["password"]!=1)
  header("Location: index.php");
?>

<html>
	<head>
		<title>
			TimeTable
		</title>
	</head>
	<body>
		<center>
			<h2>TIME TABLE III CSE-A</h2>
			<table border="1" align="center" cellpadding="15" bordercolor="black">
				<tr>
					<th>IIIA</th>
					<th>9:20<br>to<br>10:10</th>
					<th>10:10<br>to<br>11:00</th>
					<th>11:00<br>to<br>11:10</th>
					<th>11:20<br>to<br>12:00</th>
					<th>12:00<br>to<br>12:50</th>
					<th>12:50<br>to<br>1:40</th>
					<th>1:40<br>to<br>2:30</th>
					<th>2:30<br>to<br>2:40</th>
					<th>2:40<br>to<br>3:30</th>
					<th>3:30<br>to<br>4:20</th>
				</tr>
				<tr>
					<th>MON</th>
					<td align="center">SE</td>
					<td align="center">CPT</td>
					<td align="center"><font face="Arial" size="4"><b>B</b></font></td>
					<td align="center">WT</td>
					<td rowspan="6" align="center"><font face="Arial" size="4"><b>L<br>U<br>N<br>C<br>H</b></font></td>
					<td align="center">DWDM</td>
					<td colspan="4" align="center" ><b><font face="Arial" size="4">CN LAB</font></b></td>
				</tr>
				<tr>
					<th>TUE</th>
					<td colspan="4" align="center"><b><font face="Arial" size="4">WT LAB</font></b></td>
					<td align="center">SE</td>
					<td align="center">DA</td>
					<td rowspan="2" align="center"><font face="Arial" size="4"><b>B<br>R<br>E</b></font></td>
					<td align="center">IPR</td>
					<td align="center">CN</td>
				</tr>
				<tr>
					<th>WED</th>
					<td colspan="2">CPT</td>
					<td align="center" rowspan="4"><font face="Arial" size="4"><b>R<br>E<br>A<br>K</b></font></td>
					<td align="center">WT</td>
					<td align="center">CN</td>
					<td align="center">DA</td>
					<td align="center">SE</td>
					<td align="center">DWDM</td>
				</tr>
				<tr>
					<th>THU</th>
					<td align="center">CN</td>
					<td align="center">CPT</td>
					<td align="center">DAA</td>
					<td align="center">WT</td>
					<td colspan="4" align="center"><b><font face="Arial" size="4">SE LAB</font></b></td>
				</tr>
				<tr>
					<th>FRI</th>
					<td align="center">WT</td>
					<td align="center">SE</td>
					<td align="center">CN</td>
					<td align="center">IPR</td>
					<td align="center">DWDM</td>
					<td align="center" rowspan="2"><font face="Arial" size="4"><b>A<br>K</b></font></td>
					<td align="center">DAA</td>
					<td align="center">GAMES</td>
				</tr>
				<tr>
					<th>SAT</th>
					<td align="center">SE</td>
					<td align="center">DWDM</td>
					<td align="center">CN</td>
					<td align="center">DAA</td>
					<td align="center">WT</td>
					<td align="center">CN</td>
					<td align="center">DWDM</td>

				</tr>
			</table>
			<br>
			<h2>Faculty Names</h2>
			<table border="1" cellpadding="12" bordercolor="black">
				<tr>
					<th colspan="3">THEORY</th>
				</tr>	
				<tr>
					<th>SNO</th>
					<th>SUBJECT</th>
					<th>NAME OF FACULTY</th>
				</tr>
				<tr>
					<td align="center">1</td>
					<td>COMPUTER NETWORKS</td>
					<td>L.Kavitha</td>
				</tr>	
				<tr>
					<td align="center">2</td>
					<td>DATA WAREHOUSE AND DATAMINING</td>
					<td>Y.Kalyani</td>
				</tr>	
				<tr>
					<td align="center">3</td>
					<td>DESIGN AND ANALYSIS OF ALGORITHM</td>
					<td>B.Mouleswarao</td>
				</tr>	
				<tr>
					<td align="center">4</td>
					<td>SOFTWARE ENGINEERING</td>
					<td>B.B.K.Prasad</td>
				</tr>	
				<tr>
					<td align="center">5</td>
					<td>WEB TECHNOLOGIES</td>
					<td>E.Karunakar</td>
				</tr>
				<tr>
					<td align="center">6</td>
					<td>IPR & PATENTS</td>
					<td>B.Satish</td>
				</tr>
				
				<tr>
					<th colspan="3" align="center"><font color="black">PRACTICAL</font></th>
				</tr> 		
				<tr>
					<td rowspan="2" align="center">7</td>
					<td rowspan="2">CN LAB</td>
					<td>L.Kavitha</td>
				</tr>
				<tr>
					<td>K.N.V.K.Durga Devi</td>
				</tr>
				<tr>
					<td rowspan="2" align="center">8</td>
					<td rowspan="2">SE Lab</td>
					<td>B.B.K.Prasad</td>
				</tr>
				<tr>
					<td>Y.Kalyani</td>
				</tr>
				<tr>
					<td rowspan="2" align="center">9</td>
					<td rowspan="2">WT LAB</td>
					<td>E.Karunakar</td>
				</tr>
				<tr>
					<td>L.Kavitha</td>
				</tr>
				<tr>
					<th colspan="3" align="center">Class Teacher B.B.K.Prasad Sir:&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;9493172524</th>

				</tr>
			</table>					
			
		</center>
	</body>
