<?php
 
if (isset($_POST['submit'])) {
	  		
		$name = $_POST['name'];
		$email = $_POST['email'];
		$id = $_POST['id'];
		$password = $_POST['password'];
		$phone = $_POST['phone'];

		$sql = db::updateOwnProfile($conobj,$name,$email,$id,$password, $_POST['gender'],$phone);
		
		if ($sql === TRUE) {
		header('Location:../view/profile.php');
		} else {
		echo "Error updating record: " ;
		}

	} 
   



  
  

	

?>