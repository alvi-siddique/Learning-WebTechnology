<?php


// $marks_file = "../models/userPass.txt";


// if (!file_exists($marks_file)) {
//     die("Marks file does not exist.");
// }

// // read
// $handle = fopen($marks_file, "r");


// echo "<table>";
// echo "<thead><tr><th>Username</th><th>email</th></tr></thead>";


// while (($line = fgets($handle)) !== false) {
    
//     $values = explode("||", $line);

    
//     $username = $values[0];
//     $email = $values[2];

//     //table e info display
//     echo "<tr><td>$username</td><td>$email</td></tr>";
// }

// echo "</table>";

// fclose($handle);

?>


<!DOCTYPE html>
<html>
<head>
	<title>Display Users</title>
</head>
<body>
	<?php
	// Include the function from the other PHP file
	include '../models/userModel.php';

	// Call the function to retrieve the user information
	$info = readUser();
	?>

	<h1>All Students' Information</h1>
	<table>
		<tr>
			<th>Username</th>
			<th>Email</th>
		</tr>
		<?php
		// Loop through each user and display their information in a table row
		if ($info->num_rows > 0) {
			while($row = $info->fetch_assoc()) {
				echo "<tr>";
				echo "<td>" . $row["username"] . "</td>";
				echo "<td>" . $row["email"] . "</td>";
				echo "</tr>";
			}
		} else {
			echo "0 results";
		}
		?>
	</table>
</body>
</html>


