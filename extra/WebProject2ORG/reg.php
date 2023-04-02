<!DOCTYPE html>
<html>
<head>
	<title>User Registration</title>
</head>
<body>
	<h2>User Registration Form</h2>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
		<label>Username:</label>
		<input type="text" name="username" required><br><br>
		<label>Password:</label>
		<input type="password" name="password" required><br><br>
		<label>Confirm Password:</label>
		<input type="password" name="confirmpassword" required><br><br>
		<label>Email:</label>
		<input type="email" name="email" required><br><br>
		<input type="submit" name="submit" value="Register">
	</form>
	<?php
	// check if form is submitted
	if (isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$confirmpassword = $_POST['confirmpassword'];
		$email = $_POST['email'];

		// check if passwords match and length is at least 8 characters
		if ($password != $confirmpassword) {
			echo "<p>Passwords do not match!</p>";
		} elseif (strlen($password) < 8) {
			echo "<p>Password must be at least 8 characters!</p>";
		} else {
			// check if email is already registered
			$users = file('users.txt');
			foreach ($users as $user) {
				$data = explode(',', $user);
				if ($data[2] == $email) {
					echo "<p>Email already registered!</p>";
					exit;
				}
			}

			// store user data in file
			$userdata = $username . ',' . $password . ',' . $email . "\n";
			file_put_contents('users.txt', $userdata, FILE_APPEND);

			echo "<p>Registration successful!</p>";
		}
	}
	?>
</body>
</html>
