

<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
</head>
<body>
    <h1>Login Form</h1>

    <form method="post" action="../controllers/loginCheck.php">
        <label for="username">username:</label>
        <input type="text" id="username" name="username" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>"><br> <br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br>

        <input type="submit" value="Login">
        <p>Don't have an account? <a href="reg.php">create one </a> </p>
        <a href="forgotpass.php">Forgot password?</a>
    </form>
</body>
</html>
