<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../CSS/style.css" />
	<title>Forgot Password</title>
</head>
<body>
	<div class="bg">
		<div class="o">
		<h1>Forgot Password</h1>
	<form method="post" action="../controllers/retrieve_password.php">
		<label for="username">Username:</label>
		<input type="text" name="username" id="username"><br><br>
		<label for="email">Email:</label>
		<input type="text" name="email" id="email"><br><br>
		<input type="submit" value="Submit">
	</form>
		</div>
	</div>
</body>
</html>
