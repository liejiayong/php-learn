<?php
$n=2;

$shape="a";

function printShape($n, $shape){
	
	switch($shape){
		
		case "a":
		for($i=1;$i<=$n;$i++){
			
			for($j=1;$j<=$n;$j++){
				
				echo "*"." ";
				
				
			}
			echo '<br/>';
			
		}
		
		case "b":
			for($i=1;$i<=$n;$i++){
			
			for($j=1;$j<=$i-1;$j++){
				
				echo "*"." ";
				
				
			}
			echo '<br/>';
			
		}
		
	}
	
}
?>