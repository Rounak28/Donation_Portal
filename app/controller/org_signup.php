<?php
class org_signup
{
	private $orgbean;
	
	function requestAndBean()
	{
		$name=$_POST["name"];
		$email=$_POST["email"];
		$pass=$_POST["pass"];
		$phone=$_POST["phone"];
	
		$this->usrbean->setName($name);       //initializing bean class with values...for encapsulation
		$this->usrbean->setemail($email);
		$this->usrbean->setPass($pass);
		$this->usrbean->setPhone($phone);
	
		$this->signup=new signup($this->usrbean);
		$this->signup->store_usr_date();
	}
}
?>