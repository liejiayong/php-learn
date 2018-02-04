<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<title>login</title>
</head>
<h1>manager login system</h1>

<form action="loginProcess.php" method="post">
<table>
<tr><td>用户名：</td><td><input type="text" name="id"/></td></tr>
<tr><td>密 &nbsp;码</td><td><input type="password" name="password" max="25"/></td></tr>
<tr><td>验证码</td><td><input type="type" name="code"/></td></tr>
<tr><td><input type="submit" value="登录"/></td></tr>
<tr><td><img src="verify.php" title="verify"/></td><td><a href="login.php?r="<?php echo rand()?>"php">忘记密码？</a></a></td></tr>
</table>
</form>


<?php 

if(!empty($_GET['error'])){
	$login_error = $_GET['error'];
	if($login_error == 404){
		echo"<font color='red'>你输入的账号密码错误</font>";
	}
}
?>
</html>