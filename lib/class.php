<?php
class Validate {
	
	public function checkName($name)
	// public static function checkName($pass1,$pass2)
	{
		if(strlen($name) < 6 )
		{
			echo "Username must be at least 6 characters!";
		}
		elseif(!preg_match("/^[a-zA-Z]*$/",$name))
		{
			echo "Only letters are allowed!";
		}
		else return "true";
	}

	public function checkPass($pass1,$pass2)
	{
		if((strlen($pass1) < 6) || (strlen($pass2) < 6))
		{
			echo "Password must be at least 6 chacracter!";
		}
		elseif($_POST['regpass1'] != $_POST['regpass2'])
		{
			echo "Password and Repassword are not the same!";
		}
		else return true;
	}

	public function checkEmail($email)
	{
		if (!filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			echo "Invalid email format";
			return false;
		}
		return true;
	}


	public function checkphone($phone)
	{
		if(strlen($phone) < 10 )
		{
			echo "Number phone must be at least 10 digits!";
		}
		elseif(!preg_match("/^[0-9]*$/",$phone))
		{
			echo "Only numbers are allowed!";
		}
		else return true;
	}
}
?>