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
        echo 'All fields are required.';
    } elseif (strlen($password) < 8) {
        echo 'Password must be at least 8 characters long.'; 
    }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 'Invalid email address.';
    } else{
        $user = array(
            'username' => $_POST['username'],
            'password' => $_POST['password'],
            'email' => $_POST['email']
        );
        $status = updateUser($user);
        if($status) {
            echo "User information updated successfully <br>";
            echo "<a href='../views/home.php'>Go to home</a>";
        } else {
            echo "User information update failed";
        }
    }
}
?>