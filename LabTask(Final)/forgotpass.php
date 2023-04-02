<?php
if(isset($_POST['username'])) {
    $username = $_POST['username'];
    $password_file = "data/userPass.txt";
    $passwords = file($password_file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach($passwords as $line) {
        list($user, $pass) = explode('||', $line);
        if($username == $user) {
            echo "Your password is: $pass  <br>";
            echo "<a href=login.php>go to login</a>";
            exit;
        }
    }
    echo "Username not found.";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Forgot Password</title>
</head>
<body>
	<form action="forgotpass.php" method="post">
		<label>Enter your username:</label>
		<input type="text" name="username"><br><br>
		<input type="submit" value="Submit">
	</form>
</body>
</html>
