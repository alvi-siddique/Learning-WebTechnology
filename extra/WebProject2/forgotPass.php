<?php
// check if form is submitted
if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];

	// check if user exists with matching username and email
	$users = file('users.txt');
	foreach ($users as $key => $user) {
		$data = explode(',', $user);
		if ($data[0] == $username && $data[3] == $email) {
			// display reset password form
			echo "<h2>Reset Password Form</h2>";
			echo "<form action='reset-password.php' method='post'>";
			echo "<label>New Password:</label>";
			echo "<input type='password' name='password' required><br><br>";
			echo "<input type='hidden' name='key' value='$key'>";
			echo "<input type='submit' name='submit' value='Reset Password'>";
			echo "</form>";
			exit;
		}
	}

	// if user not found, display error message
	$error_message = "Invalid username or email!";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Forget Password Form</title>
</head>
<body>
	<h2>Forget Password Form</h2>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
		<label>Username:</label>
		<input type="text" name="username" required><br><br>
		<label>Email:</label>
		<input type="email" name="email" required><br><br>
		<input type="submit" name="submit" value="Submit">
	</form>
	<?php
	// display error message if username or email is invalid
	if (isset($error_message)) {
		echo "<p>$error_message</p>";
	}
	?>
</body>
</html>
