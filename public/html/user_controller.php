<?php
require '../../app/controller/usr_signup.php';
//require '../../app/models/signupU.php';
$controller_usr = new usr_signup();
$controller_usr->requestAndBean();
?>