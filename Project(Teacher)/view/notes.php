<?php
	//session starts
	session_start();
	if(isset($_SESSION['id']))
	{
		$id = $_SESSION['id'];
	}else {
		header("location:index.php");
	}
	
  $db = mysqli_connect("localhost", "root", "", "webtech");

  
  $msg = "";

  if (isset($_POST['upload'])) {

  	$image = $_FILES['image']['name'];
  	$image_text = mysqli_real_escape_string($db, $_POST['image_text']);

  
  	$target = "../files/".basename($image);

  	$sql = "INSERT INTO notes (notes, notes_text) VALUES ('$image', '$image_text')";
  	
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
		echo $msg;
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  

?>
<!DOCTYPE html>
<html>
<head>
	
	<title>Class Page</title>
	<link rel="stylesheet" href="../assets/css/teacherdesign.css" />
</head>
<body>
 <table class="teacherhome_design" width="100%" border="1" align="center">
 	<?php include 'header.php';?>
 	<td>
 	<center>
	<h2>Notes For Students</h2>
	    <form method="POST" action="notes.php" enctype="multipart/form-data">
		<table>
			<tr>
				<td>
					<fieldset>
						<legend><b>File</b></legend>
						<input type="hidden" name="size" value="1000000">
			            
					<textarea 
						id="text" 
						cols="45" 
						rows="10" 
						name="image_text" 
						placeholder="Say something about this image...">
					</textarea>
					<input type="file" name="image">
			            <center><button id="buttonpost" type="submit" name="upload">POST</button></center>

		            </fieldset>
				</td>
			</tr>
	
	   
			
	
	    </table>
		 </form>
	   </center>
	 </td>
	 <tr>
					<td class="footer_design" colspan="2" align="center" height="30px;"><h3>“Give me an educated mother, I shall promise you the birth of a civilized, educated nation.”<br>
— Napoleon</h3></td>
					
		</tr>
   </table>
</body>
</html>