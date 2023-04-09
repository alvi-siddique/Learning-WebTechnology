<!DOCTYPE html>
<html>
<head>
	<title>Notification</title>
</head>
<body>
	<h1>Notification</h1>
	<table width='100%'>
		
			<tr>
				<td><h4>Notification</h4></td>
				<td><h4>Time</h4></td>
			</tr>
		
			<?php

//DB Read user===================================

			$con = mysqli_connect('127.0.0.1', 'root', '', 'webtech');

			$sql = "select * from notification";
			$result=mysqli_query($con, $sql);
			
			if (mysqli_num_rows($result) > 0) {
				while($row = mysqli_fetch_assoc($result)) {
					echo "<tr><td>" . $row["notice"]. "</td><td>" . $row["time"]. "</td></tr>";
				}
			} else {
				echo "0 results";
			}
			
			


			
			?>
		
	</table>
</body>
</html>
