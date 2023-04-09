<!DOCTYPE html>
<html>
<head>
	<title>Forgot Password</title>
</head>
<body>
	<h1>Forgot Password</h1>
	<form method="post" action="../controllers/retrieve_password.php">
		<label for="username">Username:</label>
		<input type="text" name="username" id="username"><br><br>
		<label for="email">Email:</label>
		<input type="text" name="email" id="email"><br><br>
		<input type="submit" value="Submit">
	</form>
</body>
</html>
