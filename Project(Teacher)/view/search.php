<?php
	//session starts
	session_start();
	if(isset($_SESSION['id']))
	{
		$id = $_SESSION['id'];
	}else {
		header("location:login.php");
	}
	
?>
<!DOCTYPE html>
<html>
<head>
<title>Search Page</title>
<script>
function showmyuser() {
  var id=  document.getElementById("id").value;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {

    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("mytext").innerHTML = this.responseText;
    }
	else
	{
		 document.getElementById("mytext").innerHTML = this.status;
	}
  };
  xhttp.open("POST", "/dipto/php/getuser.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("id="+id);


}
</script>
</head>
<body>
	<center>
		<table border="1" cellspacing="0" width="50%" >
			<tr>
					<td colspan="2" align="center"><h1>
					Welcome <?php echo $_COOKIE['userName']; ?><br>
					<?php echo $id; ?>!
					</h1></td>
			</tr>	
			<tr>	
				<td width="200px">

					<ul>
						
						<li>
							<a href="profile.php">Profile</a>
							<br/>
						</li>
						<li>	
							<a href="search.php">Search</a>
							<br>
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
			    <td width ="600px" height="400px">
				<h2>Search Student Details by Id</h2>
				<input type="text" name ="id" id="id"/>
				
				<button onclick="showmyuser()">Search</button>
				<p id="mytext"></p>
				</td>
            </tr>   
         </table>	
</center>
</body>
</html>
