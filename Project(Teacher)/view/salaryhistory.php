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

<html>
<head>
</head>
<title>Salary</title>
<body>
<table width="700px" border="1" align="center">
		 <?php include 'header.php';?>
<td>
<center>
<form >
	<table cellspacing="0" width="40%"  border="1">
		<tr>
			<td colspan="3" align="center"><h2>Salary History</h2></td>
		</tr>
		<tr >
			<th>Year</th>
			<th>Month</th>
			<th>Salary</th>
		</tr> 
		<tr >
			<th>2020</th>
			<th>June</th>
			<th >22000</th>
		</tr>
		<tr >
			<th>2020</th>
			<th>July</th>
			<th >22000</th>
		</tr>
		<tr >
			<th>2020</th>
			<th>Auguest</th>
			<th >25000</th>
		</tr>
		<tr >
			<th>2020</th>
			<th>September</th>
			<th >25000</th>
		</tr>
	</table>
</form>
</center>
</td>
</table>
</body>
</html>