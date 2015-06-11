<?php
// include_once("/model/accountsModel.php");
include_once("/view/home.php");
class Controller {

	// public $model;

	// public function __construct()
	// {
	// 	$this->model = new Model();
	// }

	public function invoke() 
	{
		session_start();
		if(!isset($_SESSION['username']))
		{
			if(isset($_GET['log']))
			{	
				include("/controller/loginController.php");
				$logcontroller = new LoginController;
				$logcontroller->login();
			}

			elseif(isset($_GET['reg']))
			{
				include("/controller/registerController.php");
				$regcontroller = new RegisterController;
				$regcontroller->register();
			}
		}
		else
		{
			header('Location:view/personalView.php');
		}
	}

}
?>

