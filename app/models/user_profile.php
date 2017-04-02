<?php
include '../controller/loginControl.php';
//include 'db_connection.php';
$conn=new db_connection();
$conn=$conn->db_Conn();
$id=$_SESSION['email_user'];
$result=$conn->query("SELECT Name,Mobile_no,Email_id,Address,City FROM `civilian` WHERE Email_id='$id'");
if($result)
{
while($row=$result->fetch(PDO::FETCH_ASSOC))
{
	
	echo 'Name:         '.$row["Name"];
	?>
	<br>
	<?php 
	echo 'Mobile_no:	'.$row["Mobile_no"];
	?>
	<br>
	<?php
	echo 'Email_id:		 '.$row["Email_id"];
	?>
	<br>
	<?php 
	echo 'Address:       '.$row["Address"];
	?>
	<br>
	<?php 
	echo 'City:         '.$row["City"];
	?>
	<p>
	<a href="">Edit</a>
	<br>
	
	
	
	
<?php
}
}
?>
<table>
</table>
