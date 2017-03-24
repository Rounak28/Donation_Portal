<?php
include 'db_connection.php';
class signupO
{
private $orgbean=NULL;
private $name=NULL;
private $email=NULL;
private $pass=NULL;
private $phone=NULL;
function __construct($orgbean)
{
	 $this->orgbean=$orgbean;
	 $this->name=$orgbean->getName();
	 $this->email=$orgbean->getEmail();
	 $this->pass=$orgbean->getPass();
	 $this->phone=$orgbean->getPhone();
}

function store_org_data()
{
	$conn=new db_connection();
	$conn=$conn->db_Conn();
	
	$stmt=$conn->prepare("INSERT INTO `organisation` (`Oid`, `Name`, `Password`, `Email_id`, `Mobile no`, `Address`, `Dropoff`, `State`, `Country`) 
			VALUES ('o5',?,?,?,?, 'add', 'drop', 'state', 'country')");
	
	$stmt->bindParam(1,$this->name,PDO::PARAM_STR);
	$stmt->bindParam(2,$this->pass,PDO::PARAM_STR);
	$stmt->bindParam(3,$this->email,PDO::PARAM_STR);
	$stmt->bindParam(4,$this->phone);
	$result=$stmt->execute();
	if($result)
	{
		echo 'Regustered as org.';
	}
	else {echo 'problem';}
		
}
}
?>