<?php

/*function selectSort(&$arr){
	$temp = 0;
	for($i=0;$i<count($arr)-1;$i++){
		$select = $arr[$i];
		$selectIndex = $i;
		
		for($j=$i+1;$j<count($arr);$j++){
			if($select > $arr[$j]){
				$select = $arr[$j];
				$selectIndex = $j;
				
			}
			
			
			
		}
		$temp = $arr[$i];
			$arr[$i] = $arr[$selectIndex];
			$arr[$selectIndex] = $temp;
			
		
		
		
	}
	

	
	
}
*/

function insertSort(&$arr){
	for($i=1;$i<count($arr);$i++){
		$insert = $arr[$i];
		$insertIndex = $i-1;
		while($insertIndex>=0&&$insert<$arr[$insertIndex]){
			$arr[$insertIndex+1] = $arr[$insertIndex];
			$insertIndex--;
			
		}
		if($insertIndex+1!=$i){
		$arr[$insertIndex+1] = $insert;
		}
	}
	
	
}

	$arr = array(2,-1,4,7,9,0,-234,-10);
	//selectSort($arr);
	insertSort($arr);
	print_r($arr);






?>