<!DOCTYPE html>
<html>
<head>
	<title>受保护的页面</title>
</head>
<body>
	<h1>欢迎来到我的受保护的页面</h1>
	<p>请输入密码以继续</p>
	<form action="checkpassword.php" method="post">
		<label for="password">密码：</label>
		<input type="password" id="password" name="password">
		<input type="submit" value="提交">
	</form>
</body>
</html>
