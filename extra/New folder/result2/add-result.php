<!DOCTYPE html>
<html>
<head>
	<title>Enter Results</title>
</head>
<body>
	<h2>Enter Results</h2>
	<form action="enter-results.php" method="post">
		<label>Username:</label>
		<input type="text" name="username" required><br><br>
		<label>Course:</label>
		<input type="text" name="course" required><br><br>
		<label>Marks:</label>
		<input type="number" name="marks" min="0" max="100" required><br><br>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>
