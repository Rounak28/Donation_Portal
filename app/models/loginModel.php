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
			echo 'No user exist';
		}
		else if($conn->rowCount()>0)
		{
			echo 'User exist';
		}
		else {echo 'some problem it is in Else';}
	}
}
?>