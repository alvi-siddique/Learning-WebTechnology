<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../CSS/style.css" />
    <title>Login Form</title>
</head>
<body>
    <div class="bg">
        <div class="o">
        <h1 style= "color: white">Login Form</h1>
    <?php require_once("../Asset/loginCheckJS.php"); ?>
    <form method="post" action="../controllers/loginCheck.php">
        <label for="username">username:</label>
        <input type="text" id="username" name="username" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>"><br> <br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br>

        <input type="submit" value="Login" onclick="validateLogin()">
    </form>
        </div>
    </div>
</body>
</html>
