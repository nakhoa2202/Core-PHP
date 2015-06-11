<?php

if(isset($_GET['showlist']))
{
	include("../controller/listController.php");
	$chacontroller = new ListController;
	$chacontroller->show();
}

elseif(isset($_GET['changepass']))
{
	include("../controller/changepassController.php");
	$logcontroller = new ChangeController;
	$logcontroller->change();
}
elseif(isset($_GET['logout']))
{
	session_start();
	if (isset($_SESSION['username']))
	{
		unset($_SESSION['username']);
	}
	header('Location:../index.php');
}
?>