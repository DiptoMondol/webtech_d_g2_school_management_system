<?php
include('../model/db.php');
 
		 
$error="";
global $res;

if (isset($_POST['submit'])) {
		
  if (empty($_POST['notice'])){
	    
$error = "empty field";
echo $error;
 
}
 
else
{
		$notice = $_POST["notice"];
		echo $notice;
		echo $_POST["class"];
	   
		$connection = new db();
		$conobj=$connection->OpenCon();

		if($_POST["class"]== "Class-A"){
		$qry =  db::insertNoticea($conobj,$notice);
		$res =$conobj->query($qry);
		if($res)
			
			{
				echo "notes Uploades Successfully";
			}
		else{
			echo "notice not uploaded in class A";
		}
		}
		else if($_POST["class"]== "Class-B")
		{
		$qry =  db::insertNoticeb($conobj,$notice);
		$res =$conobj->query($qry);
		if($res)
			
			{
				echo "notes Uploades Successfully";
			}
		else{
			echo "notice not uploaded in class B";
		}
		}
		
		else{
			echo "error happened";
		}
		
		$connection->CloseCon($conobj);
}	
 }

		?>
	