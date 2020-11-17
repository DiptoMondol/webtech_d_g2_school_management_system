<?php
session_start();
?>

<html>
<head></head>

<body>

<center>
<form method="post" action="../php/loginCheck.php">
	<table border="0" cellspacing="0" cellpadding="0" width="30%" >
		<tr >
			<td >
				<fieldset >
					<legend><h3>LOGIN</h3></legend>
					User Id<br/>
					<input type="text" name="id"><br/>                               
					Password<br/>
					<input type="password" name="password">
					<br /><hr/>
					<input type="submit" value="Login" name="submit">
					<a href="registration.php">Register</a>
				</fieldset>
			</td>
		</tr>                                
	</table>
</form>
</center>
</body>
</html>