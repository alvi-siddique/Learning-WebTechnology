<?php
// check if form is submitted
if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$tuition = $_POST['tuition'];
	$labs = $_POST['labs'];
	$miscellaneous = $_POST['miscellaneous'];
	$activities = $_POST['activities'];

	// read all users from external file
	$users = file('users.txt');

	// find the user with matching username and update their fees
	foreach ($users as $key => $user) {
		$data = explode(',', $user);
		if ($data[0] == $username) {
			$total = $tuition + $labs + $miscellaneous + $activities;
			$data[1] = "Partial Fee: " . $total * 0.6 . ", Total Fee: " . $total; // update fees for the user
			$data[2] = "Tuition: " . $tuition . ", Labs: " . $labs . ", Miscellaneous: " . $miscellaneous . ", Activities: " . $activities . ", Total: " . $total; // update payment details for the user
			$users[$key] = implode(',', $data); // save updated user data to external file
			break;
		}
	}

	// save updated users to external file
	file_put_contents('users.txt', implode('', $users));

	// redirect back to enter fees form with success message
	header('Location: enter-fees-form.php?success=1');
	exit;
}
?>

