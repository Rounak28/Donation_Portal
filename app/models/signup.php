<?php
include '\db_connection.php';
class signup
{
	private $usrbean;
	private $name=NULL;
	private $phone=NULL;
	private $pass=NULL;
	private $email=NULL;
	function __construct($usrbean)
	{
		$this->usrbean=$usrbean;
		$this->name=$usrbean->getName();
		$this->email=$usrbean->getEmail();
		$this->phone=$usrbean->getPhone();
		$this->pass=$usrbean->getpass();
		
	}
	
	function store_usr_date()
	{
		
		$sql="INSERT INTO USER VALUES('$this->name','$this->email',$this->phone,'$this->email')";
		$conn=new db_connection();
		$conn->db_Conn($sql);
		echo 'success';
		
	}
}

?>