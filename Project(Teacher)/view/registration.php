<?php
	include('../php/registrationCheck.php');
	include('../php/registerinsert.php');

	if(isset($_SESSION['name']))
	{
	header('Location: formSuccessfull.php');
	//echo "your are successfully registered";
	}
?>

<html>

<head></head>
<body>
<center>
<form method ="post" action="">
	<table border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td width="600px">
				<fieldset>
					<legend><h3>REGISTRATION</h3></legend>
					Name<br/><input type="text" name ="name"><?php echo $nameError;?><?php echo $nameValid ;?><br/>
					<hr>
					Email<br/><input type="text" name ="email"><?php echo $emailErr;?><br/>
					<hr>
					Id<br/><input type="text" name="id"><?php echo $userIdError;?><br/>
					<hr>
					Password<br/><input type="password" name ="password"><?php echo $passError;?><br/>
                    <hr>																				 
					Confirm Password<br/><input type ="password" name ="cpassword"><?php echo $cPassError;?><br/>
					<hr>
					User Type
					<input type="radio" name="user" value="Admin"/ >Admin
					<input type="radio" name="user" value="Teacher"/ >Teacher
					<input type="radio" name="user" value="Student"/>Student
					<input type="radio" name ="user" value="Parent"/>Parent<?php echo $userError;?><br/>
					<hr/>
					Gender<br/><input type="radio" name="gender" value="Male" >male
					           <input type="radio" name="gender" value ="Female">female
					           <input type="radio" name="gender" value ="Others"> others<?php echo $genderError;?><br/>
					<hr/>
					phone<br/><input type="text" name="phone"><?php echo $noError;?><br/>
					<input type="submit" name="submit" value="Sign Up">
					<a href="index.php">Sign In</a>
					<hr>
					<?php  echo $error; ?>
				</fieldset>
			</td>
		</tr>                                
	</table>
</form>
</center>
</body>
</html>		






		