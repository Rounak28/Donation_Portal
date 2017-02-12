<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
$conn=new PDO("mysql:host=$servername,dbname=web_portal",$username,$password);
}
catch (PDOException $e)
{
	echo $e->getmessage();
}
?>