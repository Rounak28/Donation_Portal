<?php
include '/../../db_connection.php';
class signup
{
	private $name=NULL;
	private $phone=NULL;
	private $pass=NULL;
	private $email=NULL;
	function __construct()
	{
		$usrbean=new usr_signup_sng();	
	}
	function getvalues($usrbean)
	{
	   
	}
	
	function store_usr_date()
	{
			
	}
}

?>