
<!DOCTYPE html>
<html>
<head>
    <title>Enter Fees</title>
    <link rel="stylesheet" href="../CSS/style.css" />
</head>
<body>
    <div class="bg">
        <div class="o">
        <h1>Enter Fees</h1>
    <form action="../controllers/enter-fees.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username">
        <br>
        <label for="tuition">Tuition:</label>
        <input type="number" name="tuition" min="0">
        <br>
        <label for="labs">Labs:</label>
        <input type="number" name="labs" min="0">
        <br>
        <label for="miscellaneous">Miscellaneous:</label>
        <input type="number" name="miscellaneous" min="0">
        <br>
        <label for="activities">Activities:</label>
        <input type="number" name="activities" min="0">
        <br>
        <input type="submit" value="Submit">
    </form>
    <br> <br>
	<a href="admin.php">Home</a>
        </div>
    </div>
</body>
</html>
