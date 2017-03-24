<?php
require '../../app/models/setters_getters/org_signup_sng.php';
require '../../app/models/signupO.php';
class org_signup
{
	private $orgbean;
	private $org_model;
	
	function __construct()
	{
		$this->orgbean=new org_signup_sng();
	}
	function requestAndBean()
	{
		$name=$_POST["name"];
		$email=$_POST["email"];
		$pass=$_POST["pass"];
		$phone=$_POST["phone"];
	
		$this->orgbean->setName($name);       //initializing bean class with values...for encapsulation
		$this->orgbean->setEmail($email);
		$this->orgbean->setPass($pass);
		$this->orgbean->setPhone($phone);
	   
		$this->org_model=new signupO($this->orgbean);
		$this->org_model->store_org_data();
	}
}
?>