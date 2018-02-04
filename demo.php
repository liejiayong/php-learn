<?php
echo "hello world";

$a=0;
if($a==false){
	
	echo '$a='.$a;
}

echo "////////////////////////<br/>";

$a=100;
$q = '120$a';
$w = "130$a";

echo '$q\'';
echo "$q\"";
echo "//////////////////////";
echo '$w';
echo "$w";

?>

<br/>
////////////华丽的分割线///////////

<?php
$a=3;
$b=++$a*3;
echo "<br/>".'$a='.$a."<br/>".'$b='.$b."<br/>";

?>


<br/>
////////////////////huali de fenge xian ////////////////
<br/>

<?php
$n=10;
for($a=1;$a<$n;$a++){
	for($b=1;$b<=$a;$b++){
		
		echo'*';
		
		
	}
	echo'<br/>';
}

?>


<br/>
////////////////////huali de fenge xian ////////////////
<br/>


<?php
$o=20;
for($a=1;$a<=$o;$a++){
	
	for($b=1;$b<=$o-$a;$b++){
		
		echo'&nbsp;';
	}
	
	for($c=1;$c<=($a-1)*2+1;$c++){
		
		echo'*';
	}
	
	echo"<br/>";
	
	
	
}



?>

<br/>
////////////////////huali de fenge xian ////////////////
<br/>

               o                 0
			  o o				0 0
			 o   o             00000 
			ooooooo

<br/>

<br/>
////////////////////huali de fenge xian ////////////////
<br/>

<?php
	$a=10;
	for($b=1;$b<=$a;$b++){
		for($c=1;$c<=$a-$b;$c++){
			echo"&nbsp;";
		}
		
		for($d=1;$d<=($b-1)*2+1;$d++){
			
			if($b==1||$b==$a){
			echo'*';
			}else{
			if($d==1||$d==($b-1)*2+1){
				echo"*";
			}else{
				echo"&nbsp;";
			}
		
	}
		}
		
		echo"<br/>";
		
	}
?>




<br/>
////////////////////huali de fenge xian ////////////////
<br/>


//lengxing<br/>

<?php
	$n=10;
	for($i=1;$i<=$n;$i++){
		
		for($k=1;$k<=$n-$i;$k++){
			echo"&nbsp;";
		}
		
		for($j=1;$j<=($i-1)*2+1;$j++){
			if($i==1||$i==$n){
				echo"0";
			}else{
				if($j==1||$j==($i-1)*2+1){
					echo"0";
				}else{
					echo"&nbsp;";
				}
				
			}
			
			
		}
		echo"<br/>";
		
	}

?>



<br/>
/////////////////计算器///huali de fenge xian ////////////////
<br/>

<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
</head>
<body>
<form action="result.php" method="post">
<table>
<tr><td>first number</td><td><input value="" type="text" name="oper1"/></td></tr>

<tr><td>Second number</td><td><input value="" type="text" name="oper2"/></td></tr>

<tr><td>算术符</td><td>
<select name="oper">
<option value="+">+</option>
<option value="-">-</option>
<option value="*">*</option>
<option value="/">/</option>
</select>
</td></tr>

<tr><td colspan="2"><input type="submit" value="sumbit"/></td></tr>
</table>
</form>
</body>
</html>


































































