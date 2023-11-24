<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../CSS/style.css" />
	<title>Notifications</title>
</head>
<body>
	<div class="bg">
		<div class="o">
		<?php
	// Include the function from the other PHP file
	require_once('../models/notifdb.php') ;

	// Call the function to retrieve the user information
	$info = readNot();
	?>

	<h1>Notifications</h1>
	<table width="100%">
		<tr>
			<td><h3>Notice</h3></td>
			<td><h3>Time</h3></td>
			<!-- <th>Course</th> -->
		</tr>
		<?php
		// Loop through each user and display their information in a table row
		if ($info->num_rows > 0) {
			while($row = $info->fetch_assoc()) {
				echo "<tr>";
				echo "<td>" . $row["notice"] . "</td>";
				echo "<td>" . $row["time"] . "</td>";
				// echo "<td>" . $row["course"] . "</td>";
				echo "</tr>";
			}
		} else {
			echo "0 results";
		}
		?>
	</table>
		</div>
	</div>
</body>
</html>