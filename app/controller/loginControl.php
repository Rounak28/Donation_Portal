<?php
//session_start();
require '..\..\app\models\loginModel.php';
session_start();
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
    	header('location:/../app/view/LoginForm.php');
    }
    else if($login->login($email, $pass)=='org')
    {
    $_SESSION["email_org"]=$this->email;
    	//echo'<p>Welcome ',$_SESSION["email"];
     header('location:../../app/view/Home_Org.php'); 
     echo 'Invalid EmailId Or Password';
     //localhost/app/view/Home_User.html
    }
    else if($login->login($email, $pass)=='usr')
    {
    $_SESSION['email_user']=$this->email;	
    	
    	header('location:../../app/view/Home_User.php');
    	//echo'<p>Welcome ',$_SESSION["email"];
    }
  }
}
?>