<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>
    <h1>Registration Form</h1>

    <form method="post" action="../controllers/regCheck.php">
        <label for="username">username:</label>
        <input type="text" id="username" name="username"><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email"><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br>

        <label for="confirm_password">Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password"><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
