<?php
include '/../models/setters_getters/usr_signup_sng.php';
include '/../models/signup.php';
class usr_signup
{
	private $usrbean=NULL;
	private $signup=NULL;
	
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
	
	$this->signup=new signup($this->usrbean);
	$this->signup->store_usr_date();
	
	}
	
	
}