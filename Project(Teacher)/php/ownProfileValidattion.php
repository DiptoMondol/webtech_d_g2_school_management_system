<?php
	
		$name =  $email = $id = $pass = $cpass = $user =  $gender = $phone = "";
		 $emailPut="";
		 $phonePut="";
		  $nameError ="";
		  $userIdError ="";
		  $emailErr ="";
		  $passError ="";
		  $cPassError ="";
		  $validPass ="";
		  $genderError ="";
		  $noError ="";
		  $userError ="";
		  $numberrError ="";
		  $nameValid="";
		  $count ="";
		  
		  
		if (isset($_POST['submit']))
		{
		  
		  $name = $_POST["name"];
		  $userId = $_POST["id"];
		  $email = $_POST["email"];
		  //$user = $_POST["user"];
		  $pass = $_POST["password"];
		  $phone = $_POST["phone"];
		 
		  $len = strlen($name);
		  if($name == NULL || $len<3)
		   {
			$nameValid = "empty name field or short length of name";
		   }
		   

		   elseif($len >= 3 && $name[0]>='A' && $name[0]<='Z' || $name[0]>='a'&& $name[0]<='z')
		   {
				for($i = 1; $i<$len; $i++)
			   {
					 if($name>='A'&& $name<='Z' || $name>='a'&& $name<='z' || $name=='.' || $name=='-' )
					 {
						  $nameValid;
					 }

					 else {
						 $nameValid = "name is invalid";
					 }
			   }

		   }
		     else {
                   $nameValid ="invalid name";
                  }
		
		   $pos =strpos($email, '@');
		   $pos2 = strpos($email,'gmail');
		   $pos1 = strpos($email, ".com");

		   if($email == NULL)
		   {
			$emailErr =  "empty email field!";
		   }

		   elseif ($pos!=False && $pos1!=False && $pos1 > $pos && $pos1 > $pos2 && $pos2>$pos) {
				  
					 $email;
		   }
		   else {
			   $emailErr = "Invalid Email!";
		   }
		
		if (empty($userId))
		{
			$userIdError = "fill up the field";
		}
		if(isset($userId)){
			$leng = strlen($userId);
		if ($leng[0]>='A'&& $leng[0]<='Z' || $leng[0]>='a'&& $leng[0]<='z')
		{
			$userIdError = "Invalid Id format";
		}
		}
		
		if (empty($pass))
		{
			$passError = "Set the Password";
		}
		elseif(strlen($pass)<6){
            $passError="Password must be 6 characters long.";
        }
        elseif(strcmp(strtoupper($pass),$pass)==0 && strcmp(strtolower($pass),$pass)==0){
            $passError="Password must contain 1 Upper and Lowercase letter.";
        }
		
		
		
		if (empty($_POST["user"]))
		{
			$userError = "Select the User";
		}
		
		if (empty($_POST["gender"]))
		{
			$genderError = "Select the Gender";
		}
		
	    if(isset($phone))
			
			{
			$count = strlen($phone);
			
			if($count=="11")
			{
				$phone;
			}
			else{
				 $noError ="invalid";
			}
			}
		
		if (empty($phone))
		{
			$noError = "Mobile Number is required";
		}
		else if (!is_numeric($phone))
		{
			$number = "";
			$numberrError = "Please Enter Valid Number";
		}
		else{
			$numberrError ="";
		}
		
		}	
		?>