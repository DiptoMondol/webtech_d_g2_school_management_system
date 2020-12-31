<?php
include('../model/db.php');
session_start();
$radio1="";
$radio2="";
$radio3="";
if(!isset($_SESSION['id']))

{
	header('Location:login.php');
}



$id = $_SESSION["id"];
$error="";


$connection = new db();
$conobj=$connection->OpenCon();

$sql = db::checkOwnProfile($conobj,$id);

$row = mysqli_fetch_array($sql);
include '../php/ownProfileValidattion.php';
include('../php/editProfileCheck.php');
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
					Name<br/><input type="text" name ="name" value="<?php echo $row['name']; ?>"><?php echo $nameError;?><?php echo $nameValid ;?><br/>
					<hr>
					Email<br/><input type="text" name ="email" value="<?php echo $row['email']; ?>"><?php echo $emailErr;?><br/>
					<hr>
					Id<br/><input type="text" name="id" value="<?php echo $row['id']; ?>"><?php echo $userIdError;?><br/>
					<hr>
					Password<br/><input type="password" name ="password" value="<?php echo $row['password']; ?>"><?php echo $passError;?><br/>
                    <hr>																				 
					Gender<br/>
					<?php 

								      if($row["gender"]=="Male")
										  {
											  $radio1="checked";
										  }
										else  if($row["gender"]=="Female")
										  {
											  $radio2="checked";
										  }
										  else{
											  $radio3="checked";
										  }
										
										
									echo 	"<input type='radio' value='Male' name='gender' $radio1/>Male
											<input type='radio' value='Female' name='gender' $radio2 />Female
											<input type='radio' value='Others' name='gender' $radio3 />Others";
										
									 echo $genderError;
									?>
					<hr/>
					phone<br/><input type="text" name="phone" value="<?php echo $row['phone']; ?>"><?php echo $noError;?><br/>
					<input type="submit" name="submit" value="update">
					
					<hr>
					
				</fieldset>
			</td>
		</tr>                                
	</table>
</form>
</center>
</body>
</html>		
