
<?php
session_start();
require '../../app/controller/loginControl.php';
	$login = new loginControl();
	$login->RequestAndResponse();
	
	?>