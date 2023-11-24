<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css" />
    <title>Give Marks</title>
</head>
<body>  
    <div class="bg">
        <div class="o">
        <h1>Give Marks</h1>
        <form method="post" action="../controllers/adminMarkCheck.php">
            <label for="username">Username:</label>
            <input type="text" name="username"><br> <br>
            <label for="marks">Marks:</label>
            <input type="number" name="marks"><br> <br>
            <label for="course">Course:</label>
            <input type="text" name="course"><br> <br>
            <input type="submit" value="Submit">
        </form>
        <br> <br>
            <a href="admin.php">Home</a>
        </div>
    </div>


</body>
</html>