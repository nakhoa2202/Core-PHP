<?php
include_once("../model/accountsModel.php");
include_once("../view/personalView.php");

class ChangeController {
	
	public $model;

	public function __construct()
	{
		$this->model = new Model();
	}

	public function change()
	{
		include("../view/changepassView.php");
		if(isset($_POST['change']))
		{
			if(empty($_POST['oldpass']))
			{
				echo "Please type your current pass!";
			}
			else
			{
				if($_POST['oldpass'] != $_SESSION['password'])
				{
					echo "It is not same with your password!";
				}
				else
				{
					if(empty($_POST['newpass1']))
					{
						echo "Please type a new password!";
					}
					else
					{
						if(empty($_POST['newpass2']))
						{
							echo "Please retype that new password!";
						}
						else
						{
							if($_POST['newpass1'] != $_POST['newpass2'])
							{
								echo "2 new password are not the same!";
							}
							else
							{
								$a = $_SESSION['username'];
								$b = $_SESSION['password'];
								$c = $_POST['newpass1'];
								$update = mysql_query("UPDATE accounts SET password ='$c' WHERE username ='$a'");
								if(!$update)
								{
									echo "Can not change your password";
								}	
								else
								{
									$_SESSION['password'] = $c;
									header('Location:../view/otherView.php');
									// echo "Succes to update password!";
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