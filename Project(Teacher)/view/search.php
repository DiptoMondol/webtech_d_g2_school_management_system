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
<link rel="stylesheet" href="../assets/css/teacherdesign.css" />
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
		<table class="teacherhome_design" width="100%" border="1" cellspacing="0"  >
		
			<?php include 'header.php';?>
			<td>
			<center>
			<table class="search_ajax">
				<tr>
			<td>	
			    <td width ="600px" height="400px">
				<center><h2>Search Student Details by Id</h2><center>
				<input type="text" name ="id" id="id"/>
				
				<button class="button1" onclick="showmyuser()">Search</button>
				<p id="mytext"></p>
				</td>
				</tr>
				</table>
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
