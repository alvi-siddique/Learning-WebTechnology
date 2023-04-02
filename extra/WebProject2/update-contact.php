<?php
session_start();

// check if admin is logged in
if (!isset($_SESSION['admin_username']) || $_SESSION['admin_username'] !== 'admin') {
    header('Location: admin-login.php');
    exit;
}

// handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $address = $_POST['address'] ?? '';
    $telephone = $_POST['telephone'] ?? '';
    $email = $_POST['email'] ?? '';

    // write contact information to external file
    $file = fopen('contact.txt', 'w');
    fwrite($file, "Address: $address\n");
    fwrite($file, "Telephone No.: $telephone\n");
    fwrite($file, "Email: $email\n");
    fclose($file);

    // redirect to success page
    header('Location: contact-success.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Contact Information</title>
</head>
<body>
    <h2>Contact Information</h2>
    <form method="POST">
        <label>Address:</label><br>
        <input type="text" name="address"><br>
        <label>Telephone No.:</label><br>
        <input type="text" name="telephone"><br>
        <label>Email:</label><br>
        <input type="email" name="email"><br>
        <br>
        <input type="submit" value="Submit">
    </form>
    <a href="admin-dashboard.php">Back to Dashboard</a>
</body>
</html>
