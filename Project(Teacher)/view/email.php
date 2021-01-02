<?php
	//session starts
include('../php/emailCheck.php');
session_start();
if(isset($_SESSION['id']))
{
	$id = $_SESSION['id'];
}else {
	header("location:index.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	
	<title>Email</title>
	<link rel="stylesheet" href="../assets/css/teacherdesign.css" />
	
</head>
<body>
	<table class="teacherhome_design" width="100%" border="1" align="center">
		 <?php include 'header.php';?>
	<td>
	<center>
	<center>
	<h2 align="center">Email</h2>
	<select id="dropdown">
		<option value="Class-A">Class-A</option>
		<option value="Class-B">Class-B</option>
	</select>
	<table border="1" cellspacing="0">
		<tr>
		    <td>
				<form method ="post">
					<fieldset>
						<legend><h2><b>Email</b></h2></legend>
						From:<input type="text" name="from" ></br>
						<hr>
						To:<input type="text" name="to" ></br>
						<hr>
						Subject:<input type="text" name="subject"></br>
						<hr>
					</br>
						Body:</br>
						<textarea name="message" rows="10" cols="50" id="text_area"></textarea></br><hr>
						<input type="submit" name="submit" value="Send">
					</fieldset>
				</form>
			</td>
		</tr>
		
			
	</table>
	</center> 
   </center>
   </td>
    <tr>
					<td class="footer_design" colspan="2" align="center" height="30px;"><h3>“Give me an educated mother, I shall promise you the birth of a civilized, educated nation.”<br>
— Napoleon</h3></td>
					
			</tr>
  </table>
</body>
</html>