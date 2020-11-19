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
	
	<title>Email</title>
	
</head>
<body>
	<h1 align="center">Email for Student</h1>
	<center>
	<select>
		<option value="Class-A">Class-A</option>
		<option value="Class-B">Class-B</option>
		<option value="Class-C">Class-C</option>
		<option value="Class-D">Class-D</option>
	</select>
	<table border="1" cellspacing="0">
		<tr>
		    <td>
				<form>
					<fieldset>
						<legend><h2><b>Email</b></h2></legend>
						From:<input type="text" name="from"></br>
						<hr>
						To:<input type="text" name="to"></br>
						<hr>
						Subject:<input type="text" name="subject"></br>
						<hr>
					</br>
						Body:</br>
						<textarea name="message" rows="10" cols="50"></textarea></br><hr>
						<input type="submit" name="submit" value="Send">
					</fieldset>
				</form>
			</td>
		</tr>
		
			
	</table>
	</center> 
</body>
</html>