<?php
include '/../models/setters_getters/usr_signup_sng.php';
include '/../models/signupU.php';
class usr_signup
{
	private $usrbean=NULL;
	private $usr_model=NULL;
	
	function __construct()
	{
	  $this->usrbean=new usr_signup_sng();	
	}
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
	
	$this->usr_model=new signupU($this->usrbean);
	$this->usr_model->store_usr_data();
	
	}
	
	
}