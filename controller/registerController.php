<?php
include_once("/model/accountsModel.php");
include_once("/view/registerView.php");
include_once("/lib/class.php");

class RegisterController {
	public $model;

	public $check;

	public function __construct()
	{
		$this->model = new Model();
	}

	public function register()
	{
		$this->check = new Validate();
		if(isset($_POST['register']))
		{
			$checkname = $this->check->checkName($_POST['regname']);
			if($checkname)
			{
				$tname = $_POST['regname'];
				$select = mysql_query("SELECT * FROM accounts where username ='$tname'");
				if(!mysql_num_rows($select) == 0)
				{
					echo "This username was registered!";
				}
				elseif(empty($_POST['regpass1'])|| empty($_POST['regpass2']) )
				{
					echo "Please enter your password!";
				}

				else
				{
					$checkpass = $this->check->checkPass($_POST['regpass1'],$_POST['regpass2']);
					if($checkpass)
					{
						if(empty($_POST['regemail']))
						{
							echo "Please enter your email!";
						}
						else
						{
							$checkemail = $this->check->checkEmail($_POST['regemail']);
							if($checkemail)
							{
								if(empty($_POST['regphone']))
								{
									echo "Please enter your phone!";
								}
								else
								{
									$checkphone = $this->check->checkPhone($_POST['regphone']);
									if($checkphone)
									{ 	
										//insert account into database
										$temp = $this->model->insertAcc();
										session_start();
										$_SESSION['username'] = $_POST['regname'];
										$_SESSION['password'] = $_POST['regpass1'];
										$_SESSION['email'] = $_POST['regemail'];
										$_SESSION['phone'] = $_POST['regphone'];
										header('Location:view/personalView.php');
									}
								}
							}
						}
					}
				}	
			}
		}
	}
}

?>