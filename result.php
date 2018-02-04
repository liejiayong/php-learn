<?php
	$oper1=$_REQUEST['oper1'];
	$oper2=$_REQUEST['oper2'];
	$oper=$_REQUEST['oper'];
	
	$dengyu=0;
	switch($oper){
		case "+":
			$dengyu=$oper1+$oper2;
			break;
		case "-":
			$dengyu=$oper1-$oper2;
			break;
		case "*":
			$dengyu=$oper1*$oper2;
			break;
		case "/":
			$dengyu=$oper1/$oper2;
			break;
		defual;
	}
	
	echo "$oper1 +$oper2 =".$dengyu;





?>

