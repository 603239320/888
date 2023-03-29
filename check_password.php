<!DOCTYPE html>
<html>
<head>
	<title>Protected Page</title>
</head>
<body>
	<?php
		$password = "mypassword"; // 设置密码
		if(isset($_POST['password'])) {
			if($_POST['password'] == $password) {
				header('Location: protected.html'); // 密码正确，跳转到受保护的页面
			} else {
				echo "<p>Incorrect password. Please try again.</p>"; // 密码错误，显示错误信息
			}
		}
	?>
	<h1>Welcome to the Protected Page</h1>
	<p>Please enter the password to access this page:</p>
	<form action="" method="post">
		<input type="password" name="password">
		<input type="submit" value="Submit">
	</form>
</body>
</html>
