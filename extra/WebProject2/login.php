<?php
// start session
session_start();

// check if user is already logged in
if (isset($_SESSION['username'])) {
	header("Location: dashboard.php");
	exit;
}

// check if form is submitted
if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	// check if admin login
	if ($username == 'admin' && $password == 'admin') {
		// set admin session and cookie
		$_SESSION['username'] = $username;
		setcookie('username', $username, time() + (3600), "/"); // set cookie for 30 days
		header("Location: admin-dashboard.php");
		exit;
	}

	// check if user login
	$users = file('users.txt');
	foreach ($users as $user) {
		$data = explode(',', $user);
		if ($data[0] == $username && $data[1] == $password) {
			// set user session and cookie
			$_SESSION['username'] = $username;
			setcookie('username', $username, time() + (3600), "/"); // set cookie for 30 days
			header("Location: dashboard.php");
			exit;
		}
	}

	// if login fails, display error message
	$error_message = "Invalid username or password!";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
</head>
<body>
	<h2>Login Form</h2>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
		<label>Username:</label>
		<input type="text" name="username" required><br><br>
		<label>Password:</label>
		<input type="password" name="password" required><br><br>
		<input type="submit" name="submit" value="Login">
	</form>
	<p>Don't have an account? <a href="reg.php">Sign up!</a></p>
	<a href="forgotPass.php">Forgot password? </a>
	<?php
	// display error message if login fails
	if (isset($error_message)) {
		echo "<p>$error_message</p>";
	}
	?>
</body>
</html>
