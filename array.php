<?php
$c=10;
for($i=0;$i<6;$i++){
	for($j=0;$j<6;$j++){
		$arr[$i][$j]=$c;
		$c++;
	}
	
}

var_dump($arr[5][5]);
print_r($arr[5][5]);
echo'<br/>';

 for($i=0;$i<6;$i++){
	for($j=0;$j<6;$j++){
		
		echo $arr[$i][$j]." ";
		 
	}
	echo '<br/>';
}
echo '------------------------'.'<br/>';
function str(&$arr){
	for($i=0;$i<6;$i++){
	for($j=0;$j<6;$j++){
		
		$arr2[$i][$j] = $arr[$j][$i];


	echo $arr2[$i][$j]." ";
	}
	echo '<br/>';
}
	
}
str($arr);
?>