<?php
//require '\db_connection.php';
include 'db_connection.php';
include_once '../../app/controller/usr_signup.php';
class signupU
{
	private $usrbean;
	private $name;
	private $phone;
	private $pass;
	private $email;
	private $city;
	private $add;
	//$name=$_POST["name"];
	
	//$phone=$_POST["phone"];
	function __construct($usrbean)
	{
		
		$this->usrbean=$usrbean;
		$this->name=$usrbean->getName();
		$this->email=$usrbean->getEmail();
		$this->phone=$usrbean->getPhone();
		$this->pass=$usrbean->getpass();
		$this->city=$usrbean->getCity();
  		$this->add=$usrbean->getAdd();
	}
	
	function store_usr_data()
	{
	
		$conn=new db_connection();
		$conn=$conn->db_Conn();
		$cid_no=random_int(1,1000);
		$cid=$this->email+(string)$cid_no;
		
			$stmt=$conn->prepare("INSERT INTO `civilian` (`Cid`, `Name`, `Password`, `Mobile_no`, `Email_id`, `Aadhar_Card_Verification`, `Address`, `City`, `State`) 
					VALUES (?, ?, ?, ?,?, '123',?, ?, 'Gujarat')");

			$stmt->bindParam(1,$cid,PDO::PARAM_STR);
			$stmt->bindParam(2,$this->name,PDO::PARAM_STR);
		    $stmt->bindParam(3,$this->pass,PDO::PARAM_STR);
		    $stmt->bindParam(4,$this->phone);
			$stmt->bindParam(5,$this->email,PDO::PARAM_STR);			
			$stmt->bindParam(6,$this->add,PDO::PARAM_STR);
			$stmt->bindParam(7,$this->city,PDO::PARAM_STR);
			
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