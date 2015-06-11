<?php
include_once("../model/accountsModel.php");
class ListController {
	public $model;

	public function __construct() 
	{
		$this->model = new Model();
	}

	public function show()
	{
		$list = $this->model->getList();
		include '../view/listView.php';
	}
}
?>