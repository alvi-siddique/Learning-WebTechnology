<?php
session_start();
if(!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}
$username = $_SESSION["username"];
?>
<!DOCTYPE html>
<html>
<head>
    <title>User Dashboard</title>
</head>
<body>
    <h1>Welcome, <?php echo $username; ?>!</h1>
    <p>This is your user dashboard.</p>
    <ul>
        <li><a href="view-fees.php">View Fees</a></li>
        <li><a href="view-contact.php">contact us</a></li>
        <li><a href="view-results.php">View Results</a></li>
        <li><a href="update-info.php">Update Personal Information</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</body>
</html>
