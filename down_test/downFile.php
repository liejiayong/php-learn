<?php

public function file_downLoad($filename,$filepath){
	
	$filename = iconv("utf-8","gb2312",$filename);
	
	if(!file_exists($filename)){
		echo "�ļ�������";
		return;
		
	}
	
	$fp = fopen($filename,"r");
	
	$file_size = filesize($file_name);
	
	header("Content-tpye:application/octet-stream");
	header("Accept-Ranges:bytes");
	header("Accept-Lenght: $file_size");
	header("Content-Disposition:attachment;filename=".$file_name"");
	
} 


?>