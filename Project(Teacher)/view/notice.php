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
	
	<title>Notice</title>
	
</head>
<body>
	<table width="1000px" border="1" align="center">
		 <?php include 'header.php';?>
	<td>
		<h1 align="center">Notice For Students</h1>
		<form method="" align = "center">
			<select>
				<option value="Class-A">Class-A</option>
				<option value="Class-B">Class-B</option>
				<option value="Class-C">Class-C</option>
				<option value="Class-D">Class-D</option>
			</select><br>
			<textarea name="notice" id="" cols="30" rows="10" placeholder="notice"></textarea><br>
			<input type="submit" name="notice" value="Send">
		</form>
	</td>
  </table>
</body>
</html>