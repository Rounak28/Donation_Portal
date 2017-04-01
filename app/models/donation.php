<?php
include 'db_connection.php';
$name=$_POST["name"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$addess=$_POST["address"];
$city=$_POST["city"];
$item=$_POST["item"];
$disc=$_POST["disc"];

$conn=new db_connection();
$stmt=$conn->prepare("INSERT INTO `donor` (`Item`, `Cid`, `Name`, `Email`, `Mobile`, `Address`, `City`, `Description`) 
		VALUES (?, '', ?,?, ?, ?, ?,?)");
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
}
else {echo 'problem';}
?>