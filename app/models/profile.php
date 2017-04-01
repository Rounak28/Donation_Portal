<?php
include '../controller/loginControl.php';
//include 'db_connection.php';
$conn=new db_connection();
$conn=$conn->db_Conn();
$id=$_SESSION['email'];
echo $id;
/*$sql="SELECT * FROM `civilian` where Email=id=$s_email";
$result=$conn->query($sql);
while($row=$result->fetch(PDO::FETCH_ASSOC))
{
	echo $row;
	?>
	<br>
<?php
}
?>
<table>
</table>*/
?>