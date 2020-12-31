<?php
class db{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "webtech";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 function checkUser($conn,$table, $id, $password)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE id='". $id."' AND password='". $password."'");
 return $result;
 
 }
 function UserInfoTable($conn,$name,$email,$userId,$password,$user,$gender,$phone)
 
 {
	 $qry = "INSERT INTO teacherinfo (name, email,id,password,usertype, gender,phone) 
      VALUES('$name','$email','$userId','$password', '$user','$gender','$phone')";
	  
	  return $qry;
 }
 function UserProfile($conn,$id)
 {
	 $query = "SELECT * FROM `teacherinfo` WHERE `id` = '$id'";
	 return $query;
 }
  function SendEmail($conn,$from,$to,$subject,$message)
 
 {   
	 $qry = "INSERT INTO emaila (frm, sendto,subject,body) 
      VALUES('$from','$to','$subject','$message')";
	  
	  return $qry;
 }
 function GetUserByID($conn,$table, $id)
 {
$result = $conn->query("SELECT * FROM  $table WHERE id='$id'");
 return $result;
 }
 
 function checkOwnProfile($conn,$id)
 
 {
	 $result = $conn->query("SELECT * from teacherinfo WHERE id='" . $id."'");
	 return $result;
 }
  function updateOwnProfile($conn,$name,$email,$id,$password,$gender,$phone)
 
 {
	$sql = $conn->query( "UPDATE teacherinfo set name='". $name."', email='". $email."',password='". $password."',gender='". $gender."', phone='". $phone."' WHERE id='". $id ."'"); 
	return $sql;
 }

 function CloseCon($conn)
 {
 $conn -> close();
 }

 }
?>

