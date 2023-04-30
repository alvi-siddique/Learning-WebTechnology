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
    

    // if(isset($_POST['username']) || isset($_POST['password']) || isset($_POST['contactNo'])) {
    //     $user = array(
    //         'username' => $_POST['username'],
    //         'password' => $_POST['password'],
    //         'contactNo' => $_POST['contactNo']
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
    $name = $_POST['name'];
    $username = $_POST['username'];
    $contactNo = $_POST['contactNo'];
    $password = $_POST['password'];

    // Validate
    if (empty($name) || empty($username) || empty($contactNo) || empty($password)) {
        echo '<p>All fields are required.</p>';
    } elseif (strlen($password) < 8) {
        echo '<p>Password must be at least 8 characters long.</p>'; 
    }else{
        $user = array(
            'name' => $_POST['name'],
            'contactNo' => $_POST['contactNo'],
            'username' => $_POST['username'],
            'password' => $_POST['password']
        );
        $status = updateUser($user);
        if($status) {
            echo "<p>User information updated successfully <br></p>";
            echo "<p><a href='../views/admin.php'>Go to home</a></p>";
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