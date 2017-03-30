
<?php
require '../../app/controller/loginControl.php';
echo 'login under process';
$login = new loginControl();
	$login->RequestAndResponse();

	?>