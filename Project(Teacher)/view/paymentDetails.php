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
	<title>Payment Details </title>
</head>
<body>
	<table width="800px" border="1" align="center">
		 <?php include 'header.php';?>
	<td>
	<center>
	<table border="1" cellspacing="0">
			<tr>
				<th>Date</th>
				<th>Amount Received</th>
			</tr>
			<tr>
				<td>11-02-20</td>
				<td>22,000/=</td>
			</tr>
			<tr>
				<td>21-04-20</td>
				<td>22,000/=</td>
			</tr>
			<tr>
				<td>05-05-20</td>
				<td>22,000/=</td>
			</tr>
			<tr>
				<td>05-06-20</td>
				<td>22,000/=</td>
			</tr>
			<tr>
				<td>07-07-20</td>
				<td>22,000/=</td>
			</tr>
			<tr>
				<td>05-08-20</td>
				<td>22,000/=</td>
			</tr>
			<tr>
				<td>06-09-20</td>
				<td>25,000/=</td>
			</tr>
	</table>
</center>
</td>
</table>
</body>
</html>