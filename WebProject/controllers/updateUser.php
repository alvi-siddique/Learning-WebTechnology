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
    // require_once('../models/userModel.php');
    

    // if(isset($_POST['username']) || isset($_POST['password']) || isset($_POST['email'])) {
    //     $user = array(
    //         'username' => $_POST['username'],
    //         'password' => $_POST['password'],
    //         'email' => $_POST['email']
    //     );
    //     $status = updateUser($user);
    //     if($status) {
    //         echo "User information updated successfully";
    //     } else {
    //         echo "User information update failed";
    //     }
    // } else {
    //     echo "Please fill in all the required fields";
    // }






    
?>


<?php
session_start();
require_once('../models/userModel.php');

// form submitted kina
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    // $confirm_password = $_POST['confirm_password'];

    // Validate
    if (empty($username) || empty($email) || empty($password)) {
        echo '<p>All fields are required.</p>';
    } elseif (strlen($password) < 8) {
        echo '<p>Password must be at least 8 characters long.</p>'; 
    }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo '<p>Invalid email address.</p>';
    } else{
        $user = array(
            'username' => $_POST['username'],
            'password' => $_POST['password'],
            'email' => $_POST['email']
        );
        $status = updateUser($user);
        if($status) {
            echo "<p>User information updated successfully <br></p>";
            echo "<p><a href='../views/home.php'>Go to home</a></p>";
        } else {
            echo "<p>User information update failed</p>";
        }
    }
}
?>
        </div>
    </div>
</body>
</html>