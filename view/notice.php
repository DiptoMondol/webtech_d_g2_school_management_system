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
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Notice</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<center>
		<h1>Notice For Students</h1>
		<form method="" align = "center">
			<select>
				<option value="Class-A">Class-A</option>
				<option value="Class-B">Class-B</option>
				<option value="Class-C">Class-C</option>
				<option value="Class-D">Class-D</option>
			</select><br>
			<textarea name="notice" id="" cols="30" rows="10" placeholder="notice"></textarea><br>
			<input type="submit" name="notice" value="Notice">
		</form>
	</center>
</body>
</html>