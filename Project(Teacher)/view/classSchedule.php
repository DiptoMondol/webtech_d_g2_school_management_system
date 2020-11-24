<?php
	//session starts
session_start();
if(isset($_SESSION['id']))
{
	$id = $_SESSION['id'];
}else {
	header("location:index.php");
}
	//session ends
?>
<!DOCTYPE html>
<html>
<head>
	<title>Class Schedule</title>
</head>
<body>
	<table width="800px" border="1" align="center">
		 <?php include 'header.php';?>
	<td>
	<table border="1" cellspacing="0" align="center">
		<tr>
			<th>Course</th>
			<th>Day</th>
			<th>Time</th>
			<th>Section</th>
			
		</tr>
		<tr>
			<td>Bangla</td>
			<td>Sunday-Tuesday</td>
			<td>9-11</td>
			<td>A</td>
			
			</td>
		</tr>
		<tr>
			<td>Bangla</td>
			<td>Monday-Wednessday</td>
			<td>11-2</td>
			<td>B</td>
			
			</td>
		</tr>
		<tr>
			<td>Bangla</td>
			<td>Monday-Wednessday</td>
			<td>2-4</td>
			<td>B</td>
			
			</td>
		</tr>
		<tr>
			<td>Bangla</td>
			<td>Sunday-Tuesday</td>
			<td>11-2</td>
			<td>B</td>
			
			</td>
		</tr>
		<tr>
			<td>Bangla</td>
			<td>Sunday-Tuesday</td>
			<td>2-4</td>
			<td>E</td>
			
			</td>
		</tr>
		<tr>
			<td>Bangla</td>
			<td>Sunday-Tuesday</td>
			<td>9-11</td>
			<td>C</td>
			
			</td>
		</tr>
		<tr>
			<td>Bangla</td>
			<td>Sunday-Tuesday</td>
			<td>11-2</td>
			<td>D</td>
			
			</td>
		</tr>
		
		

			
	</table>
  </td>
 </table>
</body>
</html>

