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

<!DOCTYPE html>
<html>
<head>
<title>Teacher Page</title>
<link rel="stylesheet" href="../assets/css/teacherdesign.css" />
</head>
<body>
	<center>
		<table class="teacherhome_design" border="1" cellspacing="0" width="100%">
			<tr>
					<td id="header" colspan="2" align="center" height="20px;"><h1>
					Welcome <?php 
						echo $_COOKIE['userName']; 
					?><br>
					<?php echo "Dipto123"; ?>!
					</h1></td>
			</tr>	
			<tr>	
				<td width="100px" class="left_content">

					<ul>
						<li>	
							<a href="search.php">Search</a>
							<br>
						 </li>
						<li>
							<a href="profile.php">Profile</a>
							<br/>
						</li>
						<li>
							<a href="grade.php">Grade</a>
							<br/>
						</li>
						<li>	
							<a href="notes.php">Notes</a>
							<br/>
						 </li>
						 <li>
							<a href="notice.php">Notice</a>
							<br>
						</li>
						<li>	
							<a href="class.php">Student Details</a>
							<br>
						 </li>
						 <li>	
							<a href="classSchedule.php">Class Schedule</a>
							<br>
						 </li>
						 <li>	
							<a href="updateGrade.php">Update/Change Grade </a>
							<br>
						 </li>
						 <li>	
							<a href="attendance.php">Student Attendance</a>
							<br>
						 </li>
						 <li>	
							<a href="email.php">Email</a>
							<br>
						 </li>
						 <li>	
							<a href="conparent.php">Contact with Parent</a>
							<br>
						 </li>
						 </li>
						 <li>	
							<a href="salaryhistory.php">Salary</a>
							<br>
						 </li>
						 <li>	
							<a href="adminNotice.php">Admin Notice </a>
							<br>
						 </li>
						  <li>	
							<a href="paymentDetails.php">Payment Details</a>
							<br>
						 </li>
							
						 
						 <li>
							<a href="../php/logout.php">logout</a>
							<br>
						 </li>

					</ul>
					
					
			    </td>
			    <td class="body_design" width ="600px" height="400px">
				<center>
				<form method="post">
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
				</td>
            </tr> 
			<tr>
					<td class="footer_design" colspan="2" align="center" height="30px;"><h3>“Give me an educated mother, I shall promise you the birth of a civilized, educated nation.”<br>
— Napoleon</h3></td>
					
			</tr>			
         </table>	
</center>
</body>
</html>







	
