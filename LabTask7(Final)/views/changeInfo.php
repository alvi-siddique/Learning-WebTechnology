<html>
    <head>
        <link rel="stylesheet" href="../CSS/style.css" />
        <title>Update Info</title>
    </head>
    <body>
        <div class="bg">
            <div class="o">
            <h2>Update Information</h2>
            <form action="../controllers/updateUser.php" method="POST">
            <label for="name">name:</label>
            <input type="text" id="name" name="name"><br>
            
            <label for="contactNo">contact no:</label>
            <input type="number" id="contactNo" name="contactNo"><br>

            <label>Username:</label>
            <input type="text" name="username" id="name" ><br><br>

            <label>Password:</label>
            <input type="password" name="password"><br><br>

            <input type="submit" value="Update">
        </form>
            </div>
        </div>
    </body>
</html>
