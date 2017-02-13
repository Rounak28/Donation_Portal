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
	 $this->pass=$orgbean->getPhone();
	 $this->phone=$orgbean->getPhone();
	 
}

function store_org_data()
{
	echo $this->name;
	$sql="INSERT INTO ORG VALUES('$this->name','$this->email',$this->phone,'$this->pass')";
	$conn=$conn->db_Conn();
	$conn->exec($sql);
}
}
?>