<?php
	require_once 'sqlHelper.php';

	$logUser = $_POST['user'];
	$logPwd = $_POST['password'];
	
	$conn = new sqlHelper();
	
	//login
	$log_sql = "select password from admin where user = $logUser";
	$log_res = $conn->execute_dql($log_sql);
	if ($row = mysqli_fetch_assoc($log_res)){
		if( $regPwd == $row['password']){
			header("Location:success.php");
		}
	}

	
	
	?>
	
