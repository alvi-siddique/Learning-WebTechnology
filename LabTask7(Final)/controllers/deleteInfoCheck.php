<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css" />
    <title>Document</title>
</head>
<body>
    <div class="bg">
        <div class="o">

<?php
session_start();
require_once('../models/userModel.php');

// form submitted kina
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $username = $_POST['username'];

    // Validate
    if (empty($username)) {
        echo '<p>Username can not be empty</p>';
    } else{
        $user = array(
            'username' => $_POST['username'],
        );
        $status = deleteUser($user);
        if($status) {
            echo "<p>User information deleted successfully <br></p>";
            echo "<p><a href='../views/admin.php'>Go to home</a></p>";
        } else {
            echo "<p>User information delete failed</p>";
        }
    }
}
?>
        </div>
    </div>
</body>
</html>