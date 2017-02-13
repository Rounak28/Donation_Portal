<?php
require '\db_connection.php';
class loginModel
{
	//private $email=NULL;
	//private $pass=NULL;
	function login($email,$pass)
	{
		
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
			 		header('Location: https://www.google.com');
			 	}
			 	else if($conn->rowCount()==0){echo'Invalid emailid or password';}
			 	else{echo 'Some Problem';}
		}
		else if($conn->rowCount()>0)
		{
			echo 'WELCOME USER';
		}
		else {echo 'SOME PROBLEM.';}
	}
}
?>