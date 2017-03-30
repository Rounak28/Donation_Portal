<?php
//require '\db_connection.php';
include 'db_connection.php';
include_once '../../app/controller/usr_signup.php';
class signupU
{
	private $usrbean;
	private $name=NULL;
	private $phone=NULL;
	private $pass=NULL;
	private $email=NULL;
	//$name=$_POST["name"];
	
	//$phone=$_POST["phone"];
	function __construct($usrbean)
	{
		
		$this->usrbean=$usrbean;
		$this->name=$usrbean->getName();
		$this->email=$usrbean->getEmail();
		$this->phone=$usrbean->getPhone();
		$this->pass=$usrbean->getpass();
		
	}
	
	function store_usr_data()
	{
	
		$conn=new db_connection();
		$conn=$conn->db_Conn();
		
			$stmt=$conn->prepare("INSERT INTO `civilian` (`Cid`, `Name`, `Password`, `Mobile_no`, `Email_id`, `Aadhar_Card_Verification`, `Address`, `State`, `Country`) 
					VALUES ('C123', ?, ?, ?,?, '123', 'add1', 'state', 'India')");

			$stmt->bindParam(1,$this->name,PDO::PARAM_STR);
		    $stmt->bindParam(2,$this->pass,PDO::PARAM_STR);
		    $stmt->bindParam(3, $this->phone);
			$stmt->bindParam(4,$this->email,PDO::PARAM_STR);
			
			
			
		//	$stmt->bindParam(':phone',$this->phone);
			$result=$stmt->execute();
			if($result)
		    {
		    	echo 'Regustered as user.';
		    }
		    else {echo 'problem';}
		
	}
}
?>