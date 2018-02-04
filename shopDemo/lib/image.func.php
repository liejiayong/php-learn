<?php
require 'string.func.php';

/**
 * 驗證碼
 * @param number $type
 * @param number $length
 * @param number $line_num
 */
function verifyImage($type = 1, $length = 4, $pixe=50,$line_num = 3,$sess_name = "verify") {
	
	// 画布
	$width = 80;
	$height = 20;
	$image = imagecreatetruecolor ( $width, $height );
	$white = imagecolorallocate ( $image, 255, 255, 255 );
	$black = imagecolorallocate ( $image, 0, 0, 0 );
	// 填充画布
	imagefilledrectangle ( $image, 1, 1, $width - 2, $height - 2, $white );
	// 生成随机数
	$chars = buildRandomString ( $type, $length );
	$sess_name = 'verify';
	$_SESSION [$sess_name] = $chars;
	
	$fontfiles = array (
			"SIMYOU.TTF",
			"MSYH.TTC",
			"MSYHBD.TTC",
			"MSYHL.TTC" 
	);
	for($i = 0; $i < $length; $i ++) {
		$size = mt_rand ( 14, 18 );
		$fontangle = mt_rand ( - 15, 15 );
		$x = $i * $size + 5;
		$y = mt_rand ( 18, 19 );
		$fontfile = "../font/" . $fontfiles [mt_rand ( 0, count ( $fontfiles ) - 1 )];
		$color = imagecolorallocate ( $image, mt_rand ( 50, 90 ), mt_rand ( 80, 200 ), mt_rand ( 90, 180 ) );
		$text = substr ( $chars, $i, 1 );
		imagettftext ( $image, $size, $fontangle, $x, $y, $color, $fontfile, $text );
	}
	
	for($i = 0; $i < $pixe; $i ++) {
		$x = mt_rand ( 0, 80 );
		$y = mt_rand ( 0, 20 );
		imagesetpixel ( $image, $x, $y, $black );
	}
	
	for($i = 0; $i < $line_num; $i ++) {
		$x1 = mt_rand ( 0, 60 );
		$x2 = mt_rand ( 20, 80 );
		$y1 = mt_rand ( 0, 16 );
		$y2 = mt_rand ( 5, 20 );
		$color = imagecolorallocate ( $image, mt_rand ( 50, 90 ), mt_rand ( 80, 200 ), mt_rand ( 90, 180 ) );
		imageline ( $image, $x1, $y1, $x2, $y2, $color );
	}
	
	header ( "content-type:image/png" );
	imagepng ( $image );
	imagedestroy ( $image );
}

/**
 * @author liejy
 * 略縮圖
 * 
 */
function thumb($filename){
	
}
?>