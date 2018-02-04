<?php

	require_once 'sqlHelper.class.php';
	//一个函数可以获取共有多少页
	class empProcess{
	
	function getPageCount($pageSize){
		
		$sql = "select count(id) from emp";
		$sqlHelper = new sqlHelper();
		$res = $sqlHelper->execute_dql($sql);
		if($row = mysqli_fetch_row($res)){
			$pageCount = ceil($row[0]/$pageSize);
			
		} 
		$sqlHelper->close_connect();
		return $pageCount;
	}
	
	function getPageList($pageSize,$pageNow){
		$sql = "select * from emp limit ".($pageNow-1)*$pageSize.",$pageSize";
		$sqlHelper = new sqlHelper();
		$row = $sqlHelper->execute_dql_free($sql);
		$sqlHelper->close_connect();
		return $row;
	}
	}
?>