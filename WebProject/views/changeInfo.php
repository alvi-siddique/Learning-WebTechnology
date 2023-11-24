<html>
    <head>
        <link rel="stylesheet" href="../CSS/style.css" />
        <title>Update Info</title>
    </head>
    <body>
        <div class="bg">
            <div class="o">
            <h2>Update Information</h2>
        <?php session_start();
            $username = $_SESSION['username']; ?>
        <form action="../controllers/updateUser.php" method="POST">
            <label>Username:</label>
            <input type="text" name="username" value="<?=$_SESSION['username']?>" readonly><br><br>
            <label>Password:</label>
            <input type="password" name="password"><br><br>
            <label>Email:</label>
            <input type="text" name="email"><br><br>
            <input type="submit" value="Update">
        </form>
            </div>
        </div>
    </body>
</html>
