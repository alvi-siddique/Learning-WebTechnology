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
	<link rel="stylesheet" href="../CSS/style.css" />
</head>
<body>
	<div class="bg">
		<div class="o">

	<h1>All Students' Information</h1>
	<button onclick="loadUsers()">Load Data</button>
	<button onclick="removeData()">Remove Data</button>
	<table style="color:white">
		<thead>
		<tr>
			<th>Username</th>
			<th>Email</th>
		</tr>
		</thead>
		<tbody id="info-data">
		
		</tbody>
	</table>
		</div>
	</div>
	<script>
		// document.addEventListener('DOMContentLoaded', function() {
		// 	loadUsers();
		// });
	</script>
	<script src="../Asset/loadUserData.js"></script>
</body>
</html>


