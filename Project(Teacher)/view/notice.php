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
	<link rel="stylesheet" href="../assets/css/teacherdesign.css" />
	
</head>
<body>
	<table class="teacherhome_design" width="100%" border="1" align="center">
		 <?php include 'header.php';?>
	<td>
			<h2 align="center">Notice For Students</h2>
		<form method="post" align = "center">
			<select name="class" id="dropdown">
				<option value="Class-A" >Class-A</option>
				<option value="Class-B">Class-B</option>
			</select><br>
			<textarea name="notice" id="" cols="60" rows="10" placeholder="notice"></textarea><br>
			<input type="submit" name="submit" value="Send">
		</form>
		
	</td>
	<tr>
					<td class="footer_design" colspan="2" align="center" height="30px;"><h3>“Give me an educated mother, I shall promise you the birth of a civilized, educated nation.”<br>
— Napoleon</h3></td>
					
		</tr>
	
	
  </table>
</body>
</html>