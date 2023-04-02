<?php
session_start();

// check if user is logged in
if (!isset($_SESSION['username'])) {
	header('Location: login.php');
	exit;
}

// read all users from external file
$users = file('users.txt');

// find the logged-in user's data
foreach ($users as $user) {
	$data = explode(',', $user);
	if ($data[0] == $_SESSION['username']) {
		$user_data = $data;
		break;
	}
}

// display the user's results
echo "<h2>Welcome " . $user_data[0] . "</h2>";
echo "<h3>Your Results:</h3>";
if (isset($user_data[4])) {
	foreach ($user_data[4] as $course => $marks) {
		echo "<p>$course: $marks</p>";
	}
} else {
	echo "<p>No results found!</p>";
}
?>
