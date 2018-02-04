<html>
<head>

<meta http-equiv="content-type" content="text/html;charset=utf-8"/>

</head>

<body>
<?php
error_reporting(E_ALL ^ E_NOTICE);
$grade = $_REQUEST['grade'];
$grade_one = explode(" ",$grade);
$allGrades=0;
foreach($grade_one as $key=> $val){
	$allGrades+=$val;

}

?>
<form action="myCal.php" method="post">
<table>
<tr>
<td><input type="text" name="grade" value="<?php echo $grade;?>"/></td>
<td><input type="submit" value="submit"/></td>
</tr>
<tr>
<td>
<p><?php echo "平均时间是=".$allGrades/count($grade_one);?></p>
</td>
</tr>

<table>
</form>

</body>

</html>