<?php
include '../controller/loginControl.php';
if(isset($_SESSION["email_user"]))
{
	//header('location:../view/donate_if_login.html');
	
	$id=$_SESSION['email_user'];
	$item=$_POST["item"];
	$disc=$_POST["disc"];
	$conn=new db_connection();
	$conn=$conn->db_Conn();
	
	$result=$conn->query("SELECT Name,Mobile_no,Email_id,Address,City FROM `civilian` WHERE Email_id='$id'");
	if($result)
	{
		while($row=$result->fetch(PDO::FETCH_ASSOC))
		{
		
		$name=$row["Name"];
		$phone=$row["Mobile_no"];
		$email=$row["Email_id"]; 
		$address=$row["Address"];
		$city=$row["City"];
		
		
	}
	$stmt=$conn->prepare("INSERT INTO `donor` (`Item`, `Name`, `Email`, `Mobile`, `Address`, `City`, `Description`)
		VALUES (?, ?,?, ?, ?, ?,?)");
	$stmt->bindParam(1,$item);
	$stmt->bindParam(2,$name);
	$stmt->bindParam(3,$email);
	$stmt->bindParam(4,$phone);
	$stmt->bindParam(5,$address);
	$stmt->bindParam(6,$city);
	$stmt->bindParam(7,$disc);
	$result=$stmt->execute();
	if($result)
	{
		echo'Succesful';
		header('location:../view/Home_User.php');
	}
	else {echo'still some problem';}
	}
}
else {
$name=$_POST["name"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$addess=$_POST["address"];
$city=$_POST["city"];
$item=$_POST["item"];
$disc=$_POST["disc"];

$conn=new db_connection();
$conn=$conn->db_Conn();
$stmt=$conn->prepare("INSERT INTO `donor` (`Item`, `Name`, `Email`, `Mobile`, `Address`, `City`, `Description`) 
		VALUES (?, ?,?, ?, ?, ?,?)");
$stmt->bindParam(1,$item);
$stmt->bindParam(2,$name);
$stmt->bindParam(3,$email);
$stmt->bindParam(4,$phone);
$stmt->bindParam(5,$addess);
$stmt->bindParam(6,$city);
$stmt->bindParam(7,$disc);

$result=$stmt->execute();
if($result)
{
	echo 'Success';
	header('location:../view/Index.php');
}
else {echo 'problem';}
}
?>