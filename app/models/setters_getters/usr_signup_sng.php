<?php

class usr_signup_sng{
	
	private $name;
	private $email;
	private $pass;
	private $phone;
	private $address;
	private $city;
	
	
	function setCity($city)
	{
		$this->city=$city;
	}
	function setAdd($address)
	{
		$this->address=$address;
	}
	function setName($name)
	{
		$this->name=$name;
	}
	function setemail($email)
	{
		$this->email=$email;
	}
	function setPass($pass)
	{
		$this->pass=$pass;
	}
	function setPhone($phone)
	{
		$this->phone=$phone;
	}
	
	//getters
	
	function getName()
	{
		return $this->name;
	}
	function getEmail()
	{
		return $this->email;
	}
	function getPass()
	{
		 return $this->pass;
	}
	function getPhone()
	{
		return $this->phone;
	}
	function getAdd()
	{
		return $this->address;
	}
	function getCity()
	{
		return $this->city;
	}
}