
<html>
<head>
<script>

</script>
</head>
<body>
<form name="event_form" method="POST" action="upload_event.php">
<input type="text" id="eventname" name="eventname" placeholder="Event Name">
<p>
<input type="text" placeholder="Address" id="add">

<p>
<input type="submit">
<p>
</form>
<?php
include '\..\models\db_connection.php';
class upload_event
{
	function __construct()
	{
		$event=NULL;
		$address=NULL;
	}
	
	
function create()
{
$event_name=$_POST["eventname"];
$address=$_POST["add"];
$sql="insert into event values('$event_name','$address')";
$conn=new db_connection();
$conn->db_Conn();
}
}
?>
</body>
</html>