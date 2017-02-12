<?php

class org_signup_sng{

	private $name;
	private $email;
	private $pass;
	private $phone;

	public function setName($name)
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
}