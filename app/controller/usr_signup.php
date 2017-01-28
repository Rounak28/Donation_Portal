<?php
include '/../models/setters_getters/usr_signup_sng.php';
class usr_signup
{
	public $usr_bean=NULL;
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
	$this->usrbean->setName($name);
	echo $this->usrbean->getName();
	
	}
	
	
}