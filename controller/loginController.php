<?php
include_once("/model/accountsModel.php");
include_once("/view/loginView.php");
class LoginController {
	public $model;

	public function __construct()
	{
		$this->model = new Model();
	}

	public function login() 
	{
		
		if(isset($_POST['login']))
		{
			if(empty($_POST['username']))
			{
				echo "Please enter your username!!!!</br>";
			}
			else
			{			
				$uname = $_POST['username'];
				
				if(empty($_POST['password']))
				{
					echo "Hi ".$uname." Please enter your password!!!!</br>";
				}
				else
				{
					$upassword = $_POST['password'];
					echo "Ok ".$uname."! Welcome you!!!</br>";
					$select = mysql_query("SELECT * FROM accounts where username ='$uname' and password = '$upassword'");
					if(mysql_num_rows($select) == 0)
					{	
						echo "But sorry you are not in our team!!!</br> Error to connect!!!!";
					}
					else
					{
						session_start();
						$_SESSION['username'] = $uname;
						$_SESSION['password'] = $upassword;
						header('Location:view/personalView.php');
					}
				}
			}
		}

	}
}
?>