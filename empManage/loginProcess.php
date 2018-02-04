<?php
require_once 'AdminProcess.class.php';
session_start();
///get id and password from VIew
$id = $_POST['id'];
$password = $_POST['password'];
$code = $_POST['code'];
$authcode = $_SESSION['authCode'];
$adminProcess = new AdminProcess();

if($name = $adminProcess->checkAdmin($id, $password) && $code == $authcode){
	header("Location:login_in.php?name=$name");
	exit();
	}else{
		header("Location:login.php?error=404");
		exit();
	}
	



?>