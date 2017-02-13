<?php
include '/../Models/loginModel.php';
class loginControl
{
	private $login=NULL;
	function __construct(){
  	$this->login=new loginModel();
	}
  function RequestAndResponse()
  {
  	$email=$_POST["email"];
    $pass=$_POST["pass"];
    $this->login->login($email,$pass);
  }
}
?>