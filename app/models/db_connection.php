<?php

class db_connection
{
	private $servername=NULL;
	private $username=NULL;
	private $password=NULL;
	function __construct()
	{
		$this->servername = "localhost";
		$this->username = "root";
		$this->password = "";
	 	
	}
function db_Conn()
{
	try {
		$conn=new PDO("mysql:host=$this->servername;dbname=portal",$this->username,$this->password);
		echo "connection sucessfull ";
		
		return $conn;
	}
	catch (PDOException $e)
	{
		$e->getMessage();
	}
	

}
}
?>