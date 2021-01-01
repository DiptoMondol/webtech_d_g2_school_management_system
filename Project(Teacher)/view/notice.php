<?php
	//session starts
session_start();
if(isset($_SESSION['id']))
{
	$id = $_SESSION['id'];
}else {
	header("location:index.php");
}
include('../php/noticeCheck.php');
?>
<!DOCTYPE html>
<html>
<head>
	
	<title>Notice</title>
	
</head>
<body>
	<table width="1000px" border="1" align="center">
		 <?php include 'header.php';?>
	<td>
		<h1 align="center">Notice For Students</h1>
		<form method="post" align = "center">
			<select name="class">
				<option value="Class-A" >Class-A</option>
				<option value="Class-B">Class-B</option>
			</select><br>
			<textarea name="notice" id="" cols="30" rows="10" placeholder="notice"></textarea><br>
			<input type="submit" name="submit" value="Send">
		</form>
	</td>
  </table>
</body>
</html>