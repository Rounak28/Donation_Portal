<?php
//session_start();
require '..\..\app\models\loginModel.php';

//use loginModel;
class loginControl
{
	public $email;
	public $pass;
	function __construct(){
		$this->email=$_POST["email"];
		$this->pass=$_POST["pass"];
	}
  function RequestAndResponse()
  {
  	$email=$this->email;
  	$pass=$this->pass;
  	
  	
  	$login=new loginModel();
    
    if($login->login($email, $pass)==FALSE)
    {
    	
    	echo'<p>Invalid Email Password</p>';
    }
    
    else if($login->login($email, $pass)=='org')
    {
    	$_SESSION['email']=$this->email;
    	$_SESSION['pass']=$this->pass;
 
    	echo'<p>Welcome ',$email;
     header('location:/../app/view/Home_Org.html');   	
    }
    else if($login->login($email, $pass)=='usr')
    {
    	$_SESSION['email']=$this->email;
    	$_SESSION['pass']=$this->pass;
    	echo'<p>Welcome ',$email;
    	header('location:/../app/view/Home_User.html');
    }
  }
}
?>