<?php
	require_once 'sqlHelper.php';
	$regUser = $_POST['user'];
	$regPwd = $_POST['password'];
	
	$conn = new sqlHelper();
	
	//resigter
	$reg_sql = "insert into user(user,password) value('$regUser','$regPwd')";
	$res = $conn->create_admin($reg_sql);
	if($res){
		header("Refresh:1;url=login.php");
	}
	
	
	?>
	
