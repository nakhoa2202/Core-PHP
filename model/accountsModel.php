<?php
class Accounts {
	public $username;
	public $password;
	public $email;
	public $phone;

	public function __construct($username,$password,$email,$phone)
	{
		$this->username = $username;
		$this->password = $password;
		$this->email = $email;
		$this->phone = $phone;
	}
}


class Model {

	public function __construct() 
	{
		$conn = mysql_connect("localhost","root","") or die ("Can not connect!");
		mysql_select_db("project",$conn);
	}

	public function insertAcc()
	{
		$regname = $_POST['regname'];
		$regpass = $_POST['regpass1'];
		$regemail = $_POST['regemail'];
		$regphone = $_POST['regphone'];
		$updateAcc = mysql_query("INSERT INTO accounts(username,password,email,phone) VALUES('$regname','$regpass','$regemail','$regphone')");
	}

	public function getList()
	{
		$list = array();
		$allusers = mysql_query("SELECT * FROM accounts");
		while($temp2 = mysql_fetch_assoc($allusers))
		{
			$account = new Accounts($temp2['username'],$temp2['password'],$temp2['email'],$temp2['phone']);
			array_push($list,$account);	
		}
		return $list;
	}
}
?>