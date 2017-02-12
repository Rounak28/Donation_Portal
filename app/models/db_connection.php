<?php

class db_connection
{
	
function db_Conn($sql)
{
	
	$servername = "localhost";
	$username = "root";
	$password = "";
try {
$conn=new PDO("mysql:host=$servername;dbname=portal",$username,$password);
echo "connection sucessfull";
$conn->exec($sql);

}
catch (PDOException $e)
{
	$e->getMessage();
}
}
}
?>