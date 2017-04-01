<?php

include '../controller/loginControl.php';
$conn=new db_connection();
$conn=$conn->db_Conn();

$login=loginControl()::class;
$email=$login->email;

$sql="SELECT * FROM `civilian where Email=id=$email";
$result=$conn->query($sql);
while($row=$result->fetch(PDO::FETCH_ASSOC))
{
	echo "<b>Name:".$row["Name"];
	?>
	<br>
<?php
}
?>
<table>
</table>