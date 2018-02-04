<?php
require_once 'sqlHelper.class.php';

class AdminProcess{
function checkAdmin($id,$password){

$conn = new sqlHelper();
$sql_login = "select password,name from admin where id=$id";
$res = $conn->execute_dql($sql_login);
if($row = mysqli_fetch_assoc($res)){
	if($password == $row['password']){
		return $row['name'];
	}
}
mysqli_free_result($res);
$conn->close_connect();
		return false;
	}
	

}
?>