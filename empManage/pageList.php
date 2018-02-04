		<html>
		<h1>Welcome to empManage System</h1>
		
		<?php
		require_once 'empProcess.class.php';
		
		$pageSize = 3;
		$rowCount = 0;
		$pageNow = 1;
		if(!empty($_GET['pageNow'])){
			$pageNow = $_GET['pageNow'];
		}
		$empProcess = new empProcess();
		$pageCount = $empProcess->getPageCount($pageSize);
		$res = $empProcess->getPageList($pageSize, $pageNow);
		echo "<table border='1'>";
		echo"<tr><th>用户id</th><th>用户名</th><th>邮件</th><th>级别</th><th>修改用户</th><th>删除用户</th></tr>";
		for($i=0;$i<count($res);$i++){
			$row = $res[$i];
			echo "<tr><td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['email']}</td><td>{$row['grade']}</td><td><a href=''>修改用户</a></td><td><a href=''>删除用户</a></td></tr>";
				
		}
		echo "<h1>雇员信息列表</h1>";
		echo"</table>";
		if($pageNow != 1){
			echo "<a href='pageList.php?pageNow=1'>首页</a>";
		}
		if($pageNow>10){
			$pre_10=$pageNow-10;
			echo "<a href='pageList.php?pageNow=$pre_10'><<</a>";
		}
		if($pageNow>1){
			$pre=$pageNow-1;
			echo "<a href='pageList.php?pageNow=$pre'>上一页</a>";
		}
		
		$start=floor(($pageNow-1)/10)*10+1;
		$index = $start;
		for(;$start<$index+10;$start++){
			echo "<a href='pageList.php?pageNow=$start'>$start</a>";
				}
			
			if($pageNow<$pageCount){
				$next = $pageNow+1;
				echo "<a href='pageList.php?pageNow=$next'> 下一页 </a>";
			}
			if($pageNow<$pageCount-10){
			echo "<a href='pageList.php?pageNow=$start'> >> </a>";
			}
			if($pageNow != $pageCount){
				echo "<a href='pageList.php?pageNow=$pageCount'>末页</a>";
			}
		?>
		<form action="pageList.php">
		跳转到：<input type="text" name="pageNow"/>
		<input type="submit" value="GO"/>
		</form>
		<?php 
		echo "<br/>当前页{$pageNow}/共{$pageCount}页";

		
		
		?>
		</html>
