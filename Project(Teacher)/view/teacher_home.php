<?php	//session starts	session_start();	if(isset($_SESSION['id']))	{		$id = $_SESSION['id'];	}else {		header("location:index.php");	}	//session ends?><!DOCTYPE html><html><head><title>Teacher Page</title></head><body>	<center>		<table border="1" cellspacing="0" width="50%" >			<tr>					<td colspan="2" align="center"><h1>Welcome <?php echo $id; ?>!</h1></td>			</tr>				<tr>					<td width="200px">					<ul>						<li>							<a href="profile.php">Profile</a>							<br/>						</li>						<li>							<a href="grade.php">Grade</a>							<br/>						</li>						<li>								<a href="notes.php">Notes</a>							<br/>						 </li>						 <li>							<a href="notice.php">Notice</a>							<br>						</li>						<li>								<a href="class.php">Student Details</a>							<br>						 </li>						 <li>								<a href="classSchedule.php">Class Schedule</a>							<br>						 </li>						 <li>								<a href="updateGrade.php">Update/Change Grade </a>							<br>						 </li>						 <li>								<a href="attendance.php">Student Attendance</a>							<br>						 </li>						 <li>								<a href="email.php">Email</a>							<br>						 </li>						 <li>								<a href="conparent.php">Contact with Parent</a>							<br>						 </li>						 <li>								<a href="../php/logout.php">logout</a>							<br>						 </li>					</ul>													    </td>			    <td width ="600px" height="400px"></td>            </tr>            </table>	</center></body></html>