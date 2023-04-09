<?php


// $marks_file = "../models/marks.txt";


// if (!file_exists($marks_file)) {
//     die("Marks file does not exist.");
// }

// // read
// $handle = fopen($marks_file, "r");


// echo "<table>";
// echo "<thead><tr><th>Username</th><th>Marks</th><th>Course</th></tr></thead>";


// while (($line = fgets($handle)) !== false) {
    
//     $values = explode("||", $line);

    
//     $username = $values[0];
//     $marks = $values[1];
//     $course = $values[2];

//     //table e info display
//     echo "<tr><td>$username</td><td>$marks</td><td>$course</td></tr>";
// }

// echo "</table>";

// fclose($handle);

?>


<!DOCTYPE html>
<html>
<head>
	<title>Display Grades</title>
</head>
<body>
	<?php
	// Include the function from the other PHP file
	include '../models/userMarks.php';

	// Call the function to retrieve the user information
	$info = readMark();
	?>

	<h1>Display Grades</h1>
	<table width="30%" >
		<tr>
			<td><h3>Username</h3></td>
			<td><h3>Marks</h3></td>
			<td><h3>Course</h3></td>
		</tr>
		<?php
		// Loop through each user and display their information in a table row
		if ($info->num_rows > 0) {
			while($row = $info->fetch_assoc()) {
				echo "<tr>";
				echo "<td>" . $row["username"] . "</td>";
				echo "<td>" . $row["marks"] . "</td>";
				echo "<td>" . $row["course"] . "</td>";
				echo "</tr>";
			}
		} else {
			echo "0 results";
		}
		?>
	</table>
</body>
</html>