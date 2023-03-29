<!DOCTYPE html>
<html>
<head>
	<title>Protected Page</title>
</head>
<body>
	<h1>Welcome to my protected page</h1>
	<p>Please enter the password to proceed</p>
	<form action="checkpassword.php" method="post">
		<label for="password">Password:</label>
		<input type="password" id="password" name="password">
		<input type="submit" value="Submit">
	</form>
</body>
</html>
 
