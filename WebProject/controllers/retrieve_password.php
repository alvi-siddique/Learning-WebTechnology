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
        echo 'All fields are required.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 'Invalid email address.';
    } else{
        $abc = retrieve_password($username, $email);
        echo " $abc <br>";
		echo "<a href='../views/login.php'> Go to login </a>";
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
