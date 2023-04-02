<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
</head>
<body>
    <h1>Welcome, Admin!</h1>
    <p>This is your admin dashboard.</p>
    <ul>
        <li><a href="view-users.php">View Users</a></li>
        <li><a href="view-result.php">View result</a></li>
        <li><a href="add-result.php">Add Result</a></li>
        <li><a href="add-fees.php">Add Fees</a></li>
        <li><a href="update-contact.php">Update Contact Information</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</body>
</html>
