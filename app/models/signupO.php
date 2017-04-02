<?php
include 'db_connection.php';

class signupO
{
private $orgbean=NULL;
private $name=NULL;
private $email=NULL;
private $pass=NULL;
private $phone=NULL;
private $address=NULL;
private $city=NULL;
function __construct($orgbean)
{
	 $this->orgbean=$orgbean;
	 $this->name=$orgbean->getName();
	 $this->email=$orgbean->getEmail();
	 $this->pass=$orgbean->getPass();
	 $this->phone=$orgbean->getPhone();
	 $this->address=$orgbean->getAdd();
	 $this->city=$orgbean->getCity();
}
function store_org_data()
{
	$conn=new db_connection();
	$conn=$conn->db_Conn();
	
	$stmt=$conn->prepare("INSERT INTO `organisation` (`Name`, `Password`, `Emailid`, `Mobile_no`, `Address`, `Dropoff`, `City`, `State`) 
			VALUES (?,?,?,?,?,'drop', ?, 'Gujarat')");
	
	$stmt->bindParam(1,$this->name,PDO::PARAM_STR);
	$stmt->bindParam(2,$this->pass,PDO::PARAM_STR);
	$stmt->bindParam(3,$this->email,PDO::PARAM_STR);
	$stmt->bindParam(4,$this->phone);
	$stmt->bindParam(5,$this->address,PDO::PARAM_STR);
	$stmt->bindParam(6,$this->city,PDO::PARAM_STR);
	$result=$stmt->execute();
	if($result)
	{
		return $result;
	}
	return $result;
		
}
}
?>