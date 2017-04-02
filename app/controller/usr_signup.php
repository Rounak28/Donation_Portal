<?php
include '../../app/models/setters_getters/usr_signup_sng.php';
include '../../app/models/signupU.php';
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
	$email=$_POST["emailid"];
	$pass=$_POST["pass"];
	$phone=$_POST["phone"];
	$address=$_POST["add"];
	$city=$_POST["city"];
	
	
	$this->usrbean->setName($name);       //initializing bean class with values...for encapsulation
	$this->usrbean->setemail($email);
	$this->usrbean->setPass($pass);
	$this->usrbean->setPhone($phone);
	$this->usrbean->setAdd($address);
	$this->usrbean->setCity($city);
	
	$this->usr_model=new signupU($this->usrbean);
	if($this->usr_model->store_usr_data())
	{
		header('location:../../app/view/LoginForm.html');
	}
	else {header('location:../../app/view/user_reg.html');}
	
	}	
}