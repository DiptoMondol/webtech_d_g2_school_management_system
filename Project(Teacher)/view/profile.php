<?php
	global $id;
   session_start();
	if(isset($_SESSION['id']))
	{
		
		$id = $_SESSION['id'];
	}else {
		header("location:index.php");
	}
	include('../php/profileCheck.php');
       
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Teacher Profile</title>
	</head>
	<body>
		
			<table width="1000px" border="1" align="center">	
				<?php include 'header.php';?>
						<td width ="800px" height ="500px">	
									<table align="center">
										<tr>
		
											<td>User Id:</td>
											<td><?php echo $id;?></td>
											<td></td>
											<td></td>
										</tr>
										<tr>
											<td colspan="3"><hr></td>
										</tr>
										<tr>
											<td>Name:</td>
											<td><?php  echo $name;?></td>
											<td></td>
											<td></td>
										</tr>
										<tr>
											<td colspan="3"><hr></td>
										</tr>
										<tr>
											<td>Email:</td>
											<td><?php echo $email;?></td>
											<td></td>
											<td></td>
										</tr>
										<tr>
											<td colspan="3"><hr></td>
										</tr>
										<tr>
											<td>User Type:</td>
											<td><?php echo $usertype; ?></td>
											<td></td>
											<td></td>
										</tr>
										<tr>
											<td colspan="3"><hr></td>
										</tr>
										<tr>
											<td>Gender:</td>
											<td><?php echo $gender; ?></td>
											<td></td>
											<td></td>
										</tr>
										<tr>
											<td colspan="3"><hr></td>
										</tr>
										<tr>
											<td>Phone:</td>
											<td><?php echo $phone; ?></td>
											<td></td>
											<td></td>
										</tr>
										<tr>
											<td colspan="3"><hr></td>
										</tr>
										<tr>
											<td><a href="editProfile.php">Edit Profile</a></td>
											<td></td>
											<td></td>
											<td></td>
										</tr>											
									</table>	
							
						</td>
					</tr>
					
			</table>
					
			
	</body>
</html>