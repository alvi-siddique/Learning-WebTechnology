<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css" />
    <title>Admin Portal</title>
</head>
<body>
    <div class="bg">
        <div class="o">
        <h1>Welcome Home Admin</h1> <br> <br>
        
    <a href="reg.php">Register New Employee</a><br>
    <a href="changeInfo.php">Update Employee Information</a><br>
    <a href="deleteInfo.php">delete Employee Information</a><br>

    <form id="searchForm">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username">
    <input type="button" value="Search" onclick="searchUser()">
  </form>
  <div id="searchResults"></div> <br> <br>

    <a href="../controllers/logout.php">Log Out</a>

  
</div>
</div>


<script src="../Asset/searchJS.js"></script>

</body>
</html>