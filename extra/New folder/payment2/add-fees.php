<!DOCTYPE html>
<html>
<head>
	<title>Enter Fees</title>
</head>
<body>
	<h2>Enter Fees</h2>
	<form action="enter-fees.php" method="post">
		<label>Username:</label>
		<input type="text" name="username" required><br><br>
		<label>Tuition:</label>
		<input type="number" name="tuition" min="0" required><br><br>
		<label>Labs:</label>
		<input type="number" name="labs" min="0" required><br><br>
		<label>Miscellaneous:</label>
		<input type="number" name="miscellaneous" min="0" required><br><br>
		<label>Activities:</label>
		<input type="number" name="activities" min="0" required><br><br>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>
