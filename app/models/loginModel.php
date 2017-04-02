<?php
//namespace \loginModel::class;
include 'db_connection.php';
class loginModel
{
	//private $email=NULL;
	//private $pass=NULL;
	
	function login($email,$pass)
	{
		$conn=new db_connection();
		$conn=$conn->db_Conn();
		$stmt=$conn->prepare("SELECT * FROM `civilian`  where Email_id=? && Password=?");
		$stmt->bindParam(1, $email);
		$stmt->bindParam(2, $pass);
		$stmt->execute();
		$result=$stmt->rowCount();
		if($result==0)
		{
			 $stmt=$conn->prepare("SELECT * FROM `organisation` where Emailid=? && Password=? ");
			 $stmt->bindParam(1,$email);
			 $stmt->bindParam(2,$pass);
			 $stmt->execute();
			 $result=$stmt->rowCount();
			 	if($result)
			 	{
			 		return 'org';
			 	}
			 	else if(!$result){
			 		return FALSE;
			 	}
			 	else{echo 'Some Problem';
			 	return;}
		}
		else if($result)
		{		
			return 'usr';
		}
		else {echo 'SOME PROBLEM.';
		return;}
	}
		
}
?>