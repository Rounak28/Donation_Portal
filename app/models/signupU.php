<?php
include '\db_connection.php';
class signupU
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
	
	function store_usr_data()
	{
		
		$sql="INSERT INTO USER VALUES('$this->name','$this->email',$this->phone,'$this->pass')";
		$conn=new db_connection();
		$conn=$conn->db_Conn();
		$conn->exec($sql);
		echo 'success';
		
	}
}

?>