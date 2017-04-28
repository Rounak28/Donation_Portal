<?php
include '../controller/loginControl.php';
//include 'db_connection.php';
$conn=new db_connection();
$conn=$conn->db_Conn();

if(isset($_SESSION["email_user"]))
{
$id=$_SESSION['email_user'];
$result=$conn->query("SELECT Name,Mobile_no,Email_id,Address,City FROM `civilian` WHERE Email_id='$id'");
if($result)
{
while($row=$result->fetch(PDO::FETCH_ASSOC))
{
	?>
	<h2>Profile</h2>
	<table style="width:25%">
	 <tr>
	 <th>Name:</th>
	 <td>
	<?php
	echo $row["Name"];
	?>
	</td>
	</tr>
	<tr>
	 <th>Mobile:</th>
	 <td>
	<?php 
	echo $row["Mobile_no"];
	?>
	</td>
	</tr>
	<tr>
	
	<tr>
	 <th>Email_Id:</th>
	 <td>
	
	<?php
	echo $row["Email_id"];
	?>
	</td>
	<tr>
	 <th>Address:</th>
	 <td>
	
	<?php 
	echo $row["Address"];
	?>
	</td>
	</tr>
	
	<tr>
	 <th>City:</th>
	 <td>
	
	<?php 
	echo $row["City"];
	?>
	</td>
	</tr>
	 </table>
	<a href="">Edit</a>
	<br>
	
<?php
}
}
}
if(isset($_SESSION["email_org"]))
{
	$id=$_SESSION['email_org'];
	echo $id;
	$result=$conn->query("SELECT Name,Mobile_no,Emailid,Address,City FROM `organisation` WHERE Emailid='$id'");
	if($result)
	{
		while($row=$result->fetch(PDO::FETCH_ASSOC))
		{
			?>
			<h2>Profile</h2>
			<table style="width:25%">
			<tr>
			<th>Name:</th>
			<td>
			<?php
			echo $row["Name"];
			?>
				</td>
				</tr>
				<tr>
				 <th>Mobile:</th>
				 <td>
				<?php 
				echo $row["Mobile_no"];
				?>
				</td>
				</tr>
				<tr>
				
				<tr>
				 <th>Email_Id:</th>
				 <td>
				
				<?php
				echo $row["Emailid"];
				?>
				</td>
				<tr>
				 <th>Address:</th>
				 <td>
				
				<?php 
				echo $row["Address"];
				?>
				</td>
				</tr>
				
				<tr>
				 <th>City:</th>
				 <td>
				
				<?php 
				echo $row["City"];
				?>
				</td>
				</tr>
				 </table>
				<a href="">Edit</a>
				<br>
	<?php
		}
	}
}
?>