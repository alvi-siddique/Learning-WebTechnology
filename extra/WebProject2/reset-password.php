<?php
if (isset($_POST['submit'])) {
	$key = $_POST['key'];
	$password = $_POST['password'];

	// read all users from external file
	$users = file('users.txt');

	// update user with new password
	$data = explode(',', $users[$key]);
	$data[1] = password_hash($password, PASSWORD_DEFAULT); // hash password
	$users[$key] = implode(',', $data);

	// save updated users to external file
	file_put_contents('users.txt', implode('', $users));

	// redirect to login page with success message
	session_start();
	$_SESSION['success_message'] = "Password updated successfully!";
	header('Location: login.php');
	exit;
}
?>
