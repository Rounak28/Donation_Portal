<?php
include '../controller/loginControl.php';
session_destroy();
header('location:../view/Index.php');
?>