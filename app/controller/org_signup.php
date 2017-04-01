<?php

require '../../app/models/setters_getters/org_signup_sng.php';
require '../../app/models/signupO.php';
class org_signup
{
	private $orgbean=NULL;
	private $org_model=NULL;
	
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
	    $address=$_POST["add"];
	    $city=$_POST["city"];
	    
		$this->orgbean->setName($name);    
		$this->orgbean->setEmail($email);
		$this->orgbean->setPass($pass);
		$this->orgbean->setPhone($phone);
	    $this->orgbean->setAdd($address);
	    $this->orgbean->setCity($city);
	    
		$this->org_model=new signupO($this->orgbean);
		$this->org_model->store_org_data();
	}
}