<?php
require '\db_connection.php';
class loginModel
{
	//private $email=NULL;
	//private $pass=NULL;
	
	function login($email,$pass)
	{
		
		$_SESSION["email"]=$email;
		$_SESSION["pass"]=$pass;
		$sql="select name from user where email='$email' && pass='$pass'";
		$conn=new db_connection();
		$conn=$conn->db_Conn();
		$conn=$conn->query($sql);
		if($conn->rowCount()==0)
		{
			 $sql="select name from ORG where email='$email' && pass='$pass'";
			 $conn=new db_connection();
			 $conn=$conn->db_Conn();
			 $conn=$conn->query($sql);
			 	if($conn->rowCount()>0)
			 	{
			 		return 'org';
			 	}
			 	else if($conn->rowCount()==0){
			 		return FALSE;
			 	}
			 	else{echo 'Some Problem';}
		}
		else if($conn->rowCount()>0)
		{		
			return 'usr';
		}
		else {echo 'SOME PROBLEM.';}
	}
		
}
?>