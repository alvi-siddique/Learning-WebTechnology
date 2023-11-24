<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../CSS/style.css" />
	<title>Document</title>
</head>
<body>
	<div class="bg">
		<div class="o">
		<?php
// Connect to the database
session_start();
require_once('../models/userModel.php');


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $username = $_POST['username'];
    $email = $_POST['email'];

    // Validate
    if (empty($username) || empty($email)) {
        echo '<p>All fields are required.</p>';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo '<p>Invalid email address.</p>';
    } else{
        $abc = retrieve_password($username, $email);
        echo " $abc <br>";
		echo "<p><a href='../views/login.php'> Go to login </a></p>";
    }
}

// Check if the form has been submitted
// if (isset($_POST['username']) && isset($_POST['email'])) {
// 	// Retrieve the username and email from the form
// 	$username = $_POST['username'];
// 	$email = $_POST['email'];

//     $abc = retrieve_password($username, $email);
//     echo " $abc";




	// Query the database to retrieve the password for the specified user
	// $sql = "SELECT password FROM users WHERE username = '$username' AND email = '$email'";
	// $result = mysqli_query($conn, $sql);

	// // Check if a password was found
	// if (mysqli_num_rows($result) > 0) {
	// 	// Retrieve the password and display it
	// 	$row = mysqli_fetch_assoc($result);
	// 	$password = $row['password'];
	// 	echo "Your password is: $password";
	// } else {
	// 	// Display an error message
	// 	echo "Invalid username or email";
	// }
// }
?>

		</div>
	</div>
</body>
</html>