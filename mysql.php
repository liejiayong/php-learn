<?php
//���дһ�����������Խ���һ��������Ȼ��ѱ��ͷ�ͼ�¼��Ϣ��ʾ����ҳ

function show_tab_info($table_name){
	
	$conn = mysql_connect("localhost","root","root");
	
	if(!$conn){
		die(mysql_error();
	}
	
	mysql_select_db("test",$conn);
	mysql_query("set names utf8");
	$sql = "select * from $table_name";
	
	$res = mysql_query($sql,$conn);
	
	//��Ҫ֪�����ж����У��Ͷ�����
	$field_info = mysql_fetch_field($res);
	
	var_dump($res);
	
	
	
}

	show_tab_info(user1);
?>