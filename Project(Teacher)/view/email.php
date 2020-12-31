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
	
</head>
<body>
	<table width="800px" border="1" align="center">
		 <?php include 'header.php';?>
	<td>
	<center>
	<center>
	<select>
		<option value="Class-A">Class-A</option>
		<option value="Class-B">Class-B</option>
	</select>
	<table border="1" cellspacing="0">
		<tr>
		    <td>
				<form method ="post">
					<fieldset>
						<legend><h2><b>Email</b></h2></legend>
						From:<input type="text" name="from" value="<?php echo "hasibul12@gmail.com";?>"></br>
						<hr>
						To:<input type="text" name="to" value="<?php echo "student@gmail.com";?>"></br>
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
   </center>
   </td>
  </table>
</body>
</html>