<?php
// check if form is submitted
if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$course = $_POST['course'];
	$marks = $_POST['marks'];

	// read all users from external file
	$users = file('users.txt');

	// find the user with matching username and update their marks for the given course
	foreach ($users as $key => $user) {
		$data = explode(',', $user);
		if ($data[0] == $username) {
			$data[4][$course] = $marks; // update marks for given course
			$users[$key] = implode(',', $data); // save updated user data to external file
			break;
		}
	}

	// save updated users to external file
	file_put_contents('users.txt', implode('', $users));

	// redirect back to enter results form with success message
	header('Location: enter-results-form.php?success=1');
	exit;
}
?>

