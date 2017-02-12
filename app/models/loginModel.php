<?php
include '\db_connection.php';
class loginModel
{
	//private $email=NULL;
	//private $pass=NULL;
	function login($email,$pass)
	{
		$sql="select name from user where email='$email' && pass='$pass'";
		$conn=new db_connection();
		$conn->db_Conn($sql);
	}
}
?>