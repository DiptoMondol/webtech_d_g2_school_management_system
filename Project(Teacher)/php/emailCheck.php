<?php
include('../model/db.php');

if (isset($_POST['submit'])) {
		  
  if (empty($_POST['from']) || empty($_POST['to'])|| empty( $_POST['subject']) || empty($_POST['message'])){
$error = "Empty field";
echo $error;

 
}

  
  else
{
		 $from = $_POST["from"];
		 $to = $_POST["to"];
		 $subject = $_POST["subject"];
		 $message = $_POST["message"];

		
		
		$connection = new db();
		$conobj=$connection->OpenCon();


		$qry =  db::SendEmail($conobj,$from,$to,$subject,$message);
		
		
		$res =$conobj->query($qry);

		if($res)
			
			{
				echo "Email Sent";
			}
			else{
				echo"something error";
			}
			$connection->CloseCon($conobj);
	
}
		}
		?>
	