<?php

require_once "operService.class.php";



if(!isset($num1)){
	$num1 = $_REQUEST['num1'];
	
}
if(!isset($num2)){
	$num2 = $_REQUEST['num2'];
}
if(!isset($oper)){
	$oper = $_REQUEST['oper'];
}

$operSer = new operService();

echo $operSer->getResult($num1,$num2,$oper);

?>