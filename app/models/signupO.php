<?php
include '\db_connection.php';
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
	$sql="select name from org where email='$this->email'";
	$conn=new db_connection();
	$conn=$conn->db_Conn();
	$conn=$conn->query($sql);
	if($conn->rowCount()>0)
	{
		echo 'EmailID aleady registered';
	}
	else if($conn->rowCount()==0){
	$sql="INSERT INTO ORG VALUES('$this->name','$this->email',$this->phone,'$this->pass')";
	$conn=new db_connection();
	$conn=$conn->db_Conn();
	$conn=$conn->query($sql);
	echo 'Registered as organization';
	}
}
}
?>