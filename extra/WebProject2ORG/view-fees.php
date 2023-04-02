<?php
session_start();

// check if user is logged in
if (!isset($_SESSION['username'])) {
	header('Location: login-form.php');
	exit;
}

$username = $_SESSION['username'];

// read all users from external file
$users = file('users.txt');

// find the user with matching username and get their fees and payment details
foreach ($users as $user) {
	$data = explode(',', $user);
	if ($data[0] == $username) {
		$fees = $data[5];
		$payment_details = $data[6];
		break;
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<body>
	<h2>Welcome, <?php echo $username; ?></h2>
	<h3>Fees</h3>
	<p><?php echo $fees; ?></p>
	<h3>Payment Details</h3>
	<p><?php echo $payment_details; ?></p>
	<a href="logout.php">Logout</a>
</body>
</html>
