<?php

require_once "sqlTool.class.php";
header("Content-type:text/html;charset=utf-8");

//����type


if(isset($type)){
	$type = $_POST['type'];
}else{
	
	echo "����Ϊ��";
	echo "<a href='sqlView.php'>fanhui</a>";
}

if(type=="search1"){
	//����Ӣ��

if(isset($_POST['enword'])){
	
$en_word = $_POST['enword'];	
}else{
	
	echo "����Ϊ��";
	echo "<a href='sqlView.php'>fanhui</a>";
}
//��ѯ
$sql = "select chword from words where name = enword limit 0,1";

$sqlTool = new sqlTool();

$res = $sqlTool->execute_dql($sql);

if($row = mysql_fetch_assoc($res)){
	echo $en_word."duiying de zhongwen yisi ".$row['chword'];
}else{
	echo "meiyou zhege citiao";
	echo "<a href='sqlView.php'>fanhui</a>";
}

mysql_free_result($res);
	
}else if(type=="search2"){
	
	if(isset($_POST['chword'])){
	
$ch_word = $_POST['chword'];	
}else{
	
	echo "����Ϊ��";
	echo "<a href='sqlView.php'>fanhui</a>";
}
	
	//ģ����ѯ
$sql = "select enword from words where chword like '%".$ch_word."'";

$sqlTool = new sqlTool();

$res = $sqlTool->execute_dql($sql);

if(mysql_affected_rows($res)!=0){
while($row = mysql_fetch_assoc($res)){
	echo $en_word."duiying de yingwen yisi ".$row['chword'];
}else{
	echo "meiyou zhege citiao";
	}
}
	echo " <br/>.<a href='sqlView.php'>fanhui</a>";
	
mysql_free_result($res);
	
	
}


?>