<?php
	
	session_start();
    if(isset($_REQUEST['submit'])){
        if(!empty($_REQUEST['name']) || !empty($_REQUEST['password']) || !empty($_REQUEST['cpass']) || !empty($_REQUEST['gender']) || !empty($_REQUEST['phone']) || !empty($_REQUEST['email'])  ||  !empty($_REQUEST['id']) ||  !empty($_REQUEST['user'])){
            
            $info = $_REQUEST['name']."|".$_REQUEST['password']. "|".$_REQUEST['cpass'] ."|".$_REQUEST['id'] ."|".$_REQUEST['user']."\n";
            $myfile = fopen("registrationfile.txt", "w");
            fwrite($myfile, $info);
            fclose($myfile);
            echo "Registration done!";
            
        }
        
        else{
            echo "Error!";
            
        }
    }
?>

<html>

<head></head>
<body>
<center>
<form method ="post" action="registration.php">
	<table border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td width="600px">
				<fieldset>
					<legend><h3>REGISTRATION</h3></legend>
					Name<br/><input type="text" name ="name"><br/>
					Email<br/><input type="text" name ="email"><br/>
					Id<br/><input type="text" name="id"><br/>
					Password<br/><input type="password" name ="password"><br/>
					Confirm Password<br/><input type ="password" name ="cpass"><br/>
					
					User Type<hr/>
					<input type="radio" name="user" value="Admin"/>Admin
					<input type="radio" name="user" value="Teacher"/>Teacher
					<input type="radio" name="user" value="Student"/>Student
					<input type="radio" name ="user" value="Parent"/>Parent
					<hr/>
					Gender<br/><input type="radio" name="gender" value="Male">male
					           <input type="radio" name="gender" value ="Female">female
					           <input type="radio" name="gender" value ="Others"> others
					<br/>
					phone<br/><input type="text" name="phone"><br/>
					<input type="submit" name="submit" value="Sign Up">
					<a href="login.html">Sign In</a>
				</fieldset>
			</td>
		</tr>                                
	</table>
</form>
</center>
</body>
</html>		






		