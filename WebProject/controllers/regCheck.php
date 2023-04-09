<?php
session_start();
require_once('../models/userModel.php');

// form submitted kina
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Validate
    if (empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
        echo 'All fields are required.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 'Invalid email address.';
    } elseif (strlen($password) < 8) {
        echo 'Password must be at least 8 characters long.'; 
    }
    elseif ($password != $confirm_password) {
        echo 'Password does not match.';
    }else{
            $user = ['username'=>$username, 'password'=> $password, 'email'=> $email];
        $status = addUser($user);
            
        if($status){
            header('location: ../views/login.php');
        }else{
            echo "DB error, please try again";
        }
    }
}else{
        
    header('location: ../views/login.php');
}
?>