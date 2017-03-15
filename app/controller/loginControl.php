<?php
require '/../Models/loginModel.php';

class loginControl
{
	private $email;
	private $pass;
	function __construct(){
		
	}
  function RequestAndResponse()
  {
  	$this->email=$_POST["email"];
  	$this->pass=$_POST["pass"];
  	$email=$this->email;
  	$pass=$this->pass;
  	
  	$login=new loginModel();
    
    if($login->login($email, $pass)==FALSE)
    {
    	echo'<p>Invalid Email Password</p>';
    }
    else if($login->login($email, $pass)=='org')
    {
    	echo'<p>Welcome org</p>';
    }
    else if($login->login($email, $pass)=='usr')
    {
    	echo'<p>Welcome User</p>';
    }
  }
}
?>